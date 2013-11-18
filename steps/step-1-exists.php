<!--
Si on a rentré un login déja existant
-->

<aside>
    <div role="icon"><span class="icon-key"></span></div>
</aside>
<article data-content="exists">
    <header>
        <div role="title">
            <h1 id="hello-name">Re-bonjour !</h1>
            <p>Il semblerait que tu sois déjà venu !</p>
            <p><a class="btn" id="re-send-mail">M'envoyer une nouvelle phrase <span class="icon-upload2"></span></a></p>
        </div>
    </header>
    <section>
        <form id="form-passphrase">
            <input type="text" placeholder="Passphrase" id="input-passphrase" name="passphrase">
            <input type="hidden" id="input-login" value="<?php echo $_POST['login']; ?>" name="login">
            <button type="submit"><span class='icon-chevron-sign-right'></span></button>
        </form>
    </section>

    <script>
        $(document).ready(function()
        {
            NProgress.start();
            $.ajax({
                type: "POST",
                data: {login: $("#input-login").val().toString(), action: "getLoginJson"},
                url: "modules/code.php",
                success: function(e)
                {
                    if (e.toString() != "0")
                    {
                        e = $.parseJSON(e);
                        $("#hello-name").html("Re-bonjour " + e.prenom + " !");
                    }
                }
            });

            $("#form-passphrase").submit(function(ev)
            {
                NProgress.start();
                $("#input-passphrase + input + button").html("<span class='icon-time'></span>");
                ev.preventDefault();
                $("#form-passphrase").parent().find("p[role='status']").html("Vérification en cours <span class='rotate'></span>");
                verifierCode($("#input-passphrase").val(), $("#input-login").val());
                return false;
            });
            $("#re-send-mail").click(function() {
                NProgress.start();
                renvoyerCode($("#input-login").val());
            });
        });
    </script>
</article>
