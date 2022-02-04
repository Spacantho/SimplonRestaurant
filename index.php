<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplon Restaurant</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include("assets/includes/navbar.php") ?>
    <script src="assets/js/main.js"></script>

    <div class="banniere">
        <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">

                <div class="slide first">
                    <img src="assets/images/banburger.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="assets/images/banpizza1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="assets/images/banburger3.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="assets/images/banpate1.jpg" alt="">
                </div>

                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
            </div>

            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
        </div>
        <div class="con">
            <img src="assets/images/LogoSimplonResto.png" class="log">
        </div>
    </div>

    <script src="assets/js/slider.js"></script>

    <div class="desc">
        <div class="boxd">
            <div class="contenud">
                <h2 class="titreh">Description du restaurant :</h2>
                <p class="texth">À Charleville-Mézières, Simplon Restaurant vous propose des produits de type FastFood dans un cadre agréable et chaleureux, à deux pas des Simploniens et autres.</p>
                <p class="texth">Simplon Restaurant, créé en 2015 par le chef étoilé <i class="fas fa-heart"></i> Romain PETIT <i class="fas fa-heart"></i>, est un restaurant alliant rapidité des FastFood et qualités des plus grands restaurants étoilés.</p>
                <p class="texth"><span>Tous le monde est le bienvenue chez Simplon Restaurant !!</span></p>
            </div>
        </div>

        <div class="covid">
            <div class="warning">
                <i class="fas fa-exclamation-triangle"></i>
            </div>

            <div class="message">
                <p>ATTENTION !! Suite à la crise du Coronavirus et des restrictions sanitaires il vous sera demandé, à l'entrée du restaurant, votre Pass Sanitaire.</p>
                <p>Nous vous prions aussi de vous munir d'un masque et de le garder quand vous vous déplacez dans le restaurant.</p>
            </div>
        </div>

    </div>

    <div class="autre">
        <div class="horaire">
            <div class="heure">
                <h2 class="titrea"><i class="far fa-clock"></i>     Horaires</h2>
                <p class="texta">Lundi : 10h30-14h30 / 17h30-00h00</p>
                <p class="texta">Mardi : 10h30-14h30 / 17h30-00h00</p>
                <p class="texta">Mercredi : 10h30-14h30 / 17h30-00h00</p>
                <p class="texta">Jeudi : 10h30-14h30 / 17h30-00h00</p>
                <p class="texta">Vendredi : 10h30-14h30 / 17h30-02h00</p>
                <p class="texta">Samedi : 10h30-15h / 17h-02h00</p>
                <p class="texta">Dimanche : Fermé !</p>
            </div>
        </div>

        <div class="separatorh"></div>

        <div class="platdj">
            <div class="repasdj">
                <h2 class="titrea"><i class="fas fa-utensils"></i>      Plat du jour</h2>
                <h3 class="titres">Journée spéciale St-Valentin !!</h3>
                <p class="texta">Burger des amoureux</p>
                <p class="texta">Accompagnement : frites</p>
                <p class="texta">Fondant au chocolat</p>
                <p class="texta">Boisson au choix</p>
            </div>
        </div>
    </div>

    <?php include("assets/includes/footer.php") ?>

</body>
</html>