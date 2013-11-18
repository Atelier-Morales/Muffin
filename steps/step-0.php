<!--
Ce fichier va contenir la première étape du questionnaire, c'est à dire la prise
du login de l'étudiant, l'envoi d'un code à ce dernier et la vérification de ce
code.
-->

<article data-content="home">
    <header>
        <div role="home-title">
            <h3>Ce petit site a pour objectif de <span>recueillir</span> un maximum d'informations concernant les <span>compétences</span> de chacun,
                et de les mettre à disposition pour faciliter les <span>échanges</span>, le <span>partage</span> et les <span>petits boulots</span>.</h3>
        </div>
    </header>
</article>
<aside>
    <div role="icon">
        <span class="icon-info"></span>
    </div>
</aside>
<article data-content="login">
    <header class="tra">
        <div role="title">
            <h1>Tout d'abord, qui est-tu ?</h1>
            <p>Entre ton uid pour t'identifier</p>
        </div>
    </header>
    <section class="tra">
        <form id="form-login">
            <input type="text" placeholder="Uid" id="input-login" name="login">
            <button type="submit"><span class='icon-chevron-sign-right'></span></button>
        </form>
    </section>

    <script>
        $(document).ready(function()
        {
            $("#form-login").submit(function(ev)
            {
                $("#input-login + button").html("<span class='icon-time'></span>");
                ev.preventDefault();
                console.log("Submit !");
                envoyerCode($("#input-login").val());
                return false;
            });
        });
    </script>
</article>
