<!--
Si on a rentré un login non existant
-->
<?php 

include_once '../modules/functions.php'; 

// Les modales
include_once './step-2-modals.php'; 

// Header
include_once '../templates/header.php';

// Menu latéral
include_once '../templates/side-menu.php'; 

?>

<article data-role="grid">
    <section>
        <a href="#!"></a>
        <form id="form-competences">
            <div>
            </div>
            <input type="hidden" id="form-login" name="login" value="<?php echo $_GET['login']; ?>">
            <input type="hidden" id="form-code" name="code" value="<?php echo $_GET['code']; ?>">
        </form>
        <div id="form-result"></div>
    </section>

    <script>
<?php echo generateJsFormData (); ?>

        window.toCheck = [<?php echo getCheckedRadios ($_GET['login'], $_GET['code']); ?>];
    </script>
    <script>

        $(document).ready(function()
        {
            $(".footer-container").addClass("nofix");
            NProgress.start();
            createFormCompetences();

            $("[data-submit]").each(function() {
                $(this).click(function() {
                    $('#' + $(this).attr("data-submit")).trigger('submit');
                });
            });

            initalizeForm();
            initalizeAddForm();
            addCheckHandler(window.toCheck);
            NProgress.done();
            treatResize();

        });
    </script>
</article>
