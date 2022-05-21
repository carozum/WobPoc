<div class="container-perso">
    <div class="hero">

        <!-- titre 1 -->
        <h2 class="display-6 text-center mb-4 mt-1">De quoi avez vous besoin pour votre projet? </h2>

        <!-- scrollable horizontal menu -->
        <?php include('simu-scrollable-horizontal-menu.php'); ?>

        <!-- product per service. Attente is the div that is shown before a choice is made.  -->
        <div id="attente" class="mt-2 text-center">
            <p class="text-small text-muted text-center">Vous pouvez faire défiler horizontalement le menu ci-dessus et parcourir les différentes options. Vous aurez la possibilité de tout visualiser et de revenir en arrière à tout moment. </p>
        </div>

        <?php include("service-siteWeb.php"); ?>
        <?php include("service-seo.php"); ?>
        <?php include("service-design.php"); ?>
        <?php include("service-projet.php"); ?>
        <?php include("service-rien.php"); ?>
    </div>
</div>

<script>
    // a compléter
</script>