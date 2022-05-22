<div class="container py-4" style="height: 100vh;">
    <div class="row">
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

    <section class="row">
        <div class="col-12">
            <div class="row align-items-center">
                <div class="col-8">
                    <p class="fs-5">Prix total du panier</p>
                </div>
                <div class="col-4">
                    <p id="prixTotal" class="fs-5"></p>
                </div>
            </div>
        </div>
        <div class="col-12 d-none">
            <h2>Détail de votre panier</h2>
            <p id="listing"></p>
        </div>
    </section>

    <section class="row d-none">
        <div class="col-6">
            <form action="">
                <label for="email" class="form-label">Entrez votre email pour recevoir votre estimation</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Votre email">
                <a href="" id="recevoir" class="btn btn-danger my-2">Recevoir l'estimation</a>
            </form>
        </div>
        <div class="col-3 text-center">
            <p>Nous contacter</p>
            <button id="contact" class="btn btn-secondary">Nous contacter</button>
        </div>
        <div class="col-3 text-center">
            <p>Nouvelle estimation</p>
            <button id="vider" class="btn btn-secondary">Vider le panier</button>
        </div>

</div>


</section>
<script>
    // variables declaration
    let prestations = {
        "static": 2000,
        "wordpress": 3000,
        "specific": 4000,
        "audit": 3000,
        "logo": 800,
        "charte": 1500,
        "ui": 1500,
        "accessible": 1000,
    }
    let panier = {};

    let listing = document.querySelector("#listing");
    let prixTotal = document.querySelector("#prixTotal");
    let vider = document.querySelector("#vider");
    let enregistrer = document.querySelector("#enregistrer");


    // functions
    function afficherPanier(panier) {
        let listPresta = "";
        for (let presta in panier) {
            listPresta += presta + " " + panier[presta] + "<br>"
            listing.innerHTML = listPresta;
        }
    }

    function afficherPrixTotal(panier) {
        let prix = 0;
        for (let presta in panier) {
            prix += panier[presta];
            prixTotal.innerHTML = prix + ' euros';
        }
    }

    function viderPanier() {
        panier = {};
        listing.innerHTML = "";
        prixTotal.innerHTML = null;

        let checkboxes = document.querySelectorAll('.checkbox');
        for (let checkbox of checkboxes) {
            checkbox.checked = false;
        };
    };

    // eventListeners
    for (let prestation in prestations) {
        let inputName = prestation;
        let inputPrice = prestations[prestation];
        let input = document.querySelector("#" + inputName);

        input.addEventListener("click", function() {
            if (input.checked == true) {
                // on ajoute la prestation au panier
                panier[inputName] = inputPrice;
            } else {
                // on retire la prestation du panier
                delete panier[inputName];
                listing.innerHTML = "";
                prixTotal.innerHTML = null;
            }
            console.log(panier);
            // on affiche le panier détaillé
            afficherPanier(panier);

            // on affiche le prix total
            afficherPrixTotal(panier);

        })

    }

    // décocher une prestation


    // vider le panier
    vider.addEventListener("click", function() {
        viderPanier();
    })

    //recevoir la simulation par mail
    recevoir.addEventListener("click", function() {
        let email = document.querySelector("#email");
        //  A CODER AVEC PHP
    })
</script>