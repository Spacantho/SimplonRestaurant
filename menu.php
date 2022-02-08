<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplon Restaurant - Menu</title>
    <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include('assets/includes/navbar.php'); ?>
    <div id="menu-corps">
        <img id="menu-left-side-img" src="assets/images/Menu-left-side-burger.jpg" alt="bannière verticale burger">
            <div id="menu">
                <div id="menu-titre"><p>Simplon Restaurant <br/> <span id="menu-sous-titre">Depuis 2015</span></p></div>
                    <div id="menu-separation">
                        <div id="menu-left">
                            <div id="menu-horizontal-separator"></div>
                                <div class="menu-categorie"><p>Pizza :</p></div>
                                    <div class="menu-liste-plats">
                                        <div class="menu-plats">
                                            <div class="onclick-popup" id="margherita">La Margherita</div>
                                            <div class="onclick-popup" id="cinqFromages">La Cinq Fromages</div>
                                            <div class="onclick-popup" id="chorizo">La Chorizo</div>
                                            <div class="onclick-popup" id="cannibale">La Cannibale</div>
                                            <div class="onclick-popup" id="vegetarienne">La Végétarienne</div>
                                            <div class="onclick-popup" id="chickenCesar">La Chicken Cesar</div>
                                        </div>
                                        <div class="menu-prix">
                                            <p> 
                                                6€</br>
                                                7.50€</br>
                                                6.50€</br>
                                                8€</br>
                                                6.50€</br>
                                                8.50€</br>
                                            </p>
                                        </div>
                                    </div>
                            <div id="menu-horizontal-separator"></div>
                                <div class="menu-categorie"><p>Burgers<span id=frites> + frites </span>:</p></div>
                                    <div class="menu-liste-plats">
                                        <div class="menu-plats">
                                            <div class="onclick-popup" id="burger">Hamburger</div>
                                            <div class="onclick-popup" id="cheese">Cheese</div>
                                            <div class="onclick-popup" id="bacon">Bacon</div>
                                            <div class="onclick-popup" id="chicken">Chicken</div>
                                            <div class="onclick-popup" id="veggie">Veggie</div>
                                        </div>
                                        <div class="menu-prix">
                                            <p> 
                                                4€</br>
                                                4.50€</br>
                                                4.50€</br>
                                                4.50€</br>
                                                4€</br>
                                            </p>
                                        </div>
                                    </div>
                            <div id="menu-horizontal-separator"></div>
                                <div class="menu-categorie"><p>Pâtes :</p></div>
                                    <div class="menu-liste-plats">
                                        <div class="menu-plats">
                                            <div class="onclick-popup" id="carbonara">Carbonara</div>
                                            <div class="onclick-popup" id="bolognaise">Bolognaise</div>
                                        </div>
                                        <div class="menu-prix">
                                            <p> 
                                                3€</br>
                                                3.50€</br>
                                            </p>
                                        </div>
                                    </div>  
                            <div id="menu-horizontal-separator"></div>
                                <div class="menu-categorie"><p>Desserts :</p></div>
                                    <div class="menu-liste-plats">
                                        <div class="menu-plats">
                                            <div class="onclick-popup" id="fondant">Fondant au chocolat</div>
                                            <div class="onclick-popup" id="ilesFlottantes">Îles flottantes</div>
                                            <div class="onclick-popup" id="belleHelene">Poire Belle-Hélène</div>
                                        </div>
                                        <div class="menu-prix">
                                            <p> 
                                                2€</br>
                                                2€</br>
                                                2€</br>
                                            </p>
                                        </div>
                                    </div>  
                            <div id="menu-horizontal-separator"></div>
                                <div class="menu-categorie"><p>Plat du jour :</p></div>
                                    <div class="menu-liste-plats">
                                        <div class="menu-plats">
                                            <div class="onclick-popup" id="burgerAmoureux"> 
                                                Burger des amoureux</br><span id="menu-event-plat-spe">Spécial Saint-Valentin</span>
                                            </div>
                                        </div>
                                        <div class="menu-prix">
                                            <p> 
                                                4€</br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                        <div id="menu-separator"></div>
                            <div id="menu-right">
                                <div id="menu-horizontal-separator"></div>
                                    <div class="menu-categorie"><p>Softs :</p></div>
                                        <div class="menu-liste-plats">
                                            <div class="menu-plats">
                                                <div class="onclick-popup" id="cocaCola">Coca Cola 33cl</div>
                                                <div class="onclick-popup" id="iceTea">Lipton IceTea 33cl</div>
                                                <div class="onclick-popup" id="sevenUp">7up 33cl</div>
                                                <div class="onclick-popup" id="oasis">Oasis 33cl</div>
                                                <div class="onclick-popup" id="redbull">Redbull 25cl</div>
                                                <div class="onclick-popup" id="monster">Monster 50cl</div>
                                            </div>
                                            <div class="menu-prix">
                                                <p> 
                                                    1€</br>
                                                    1€</br>
                                                    1€</br>
                                                    1€</br>
                                                    0.20€</br>
                                                    4€</br>
                                                </p>
                                            </div>
                                        </div>
                                <div id="menu-horizontal-separator"></div>
                                    <div class="menu-categorie"><p>Alcools :</p></div>
                                        <div class="menu-liste-plats">
                                            <div class="menu-plats">
                                                <div class="onclick-popup" id="heineken">Heineken 22cl</div>
                                                <div class="onclick-popup" id="huitSix">8.6 50cl</div>
                                                <div class="onclick-popup" id="triple">Triple Karmeliet 33cl</div>
                                                <div class="onclick-popup" id="leffe">Leffe 33cl</div>
                                                <div class="onclick-popup" id="vinRouge">Vin Rouge 75cl</div>
                                                <div class="onclick-popup" id="whisky">Whisky 4cl</div>
                                                <div class="onclick-popup" id="rhum">Rhum 4cl</div>
                                                <div class="onclick-popup" id="jager">Jagermeister 50cl</div>
                                            </div>
                                            <div class="menu-prix">
                                                <p> 
                                                    Offerte</br>
                                                    0.50€</br>
                                                    1.50€</br>
                                                    1€</br>
                                                    15€</br>
                                                    1.20€</br>
                                                    1.20€</br>
                                                    5€</br>
                                                </p>
                                            </div>
                                        </div>
                                <div id="menu-horizontal-separator"></div>
                                    <div class="menu-categorie"><p>Healthy :</p></div>
                                        <div class="menu-liste-plats">
                                            <div class="menu-plats">
                                                <div class="onclick-popup" id="saladeCesar">Salade César</div>
                                                <div class="onclick-popup" id="brocoli">Galettes de Brocoli</div>
                                                <div class="onclick-popup" id="croquetteSemoule">Croquettes de semoule</div>
                                                <div class="onclick-popup" id="courgette">Tarte aux courgettes</div>
                                            </div>
                                            <div class="menu-prix">
                                                <p> 
                                                    4€</br>
                                                    3€</br>
                                                    3€</br>
                                                    4€</br>
                                                </p>
                                            </div>
                                        </div>
                                        <div id="menu-horizontal-separator"></div>
                                <div class="menu-categorie"><p>Plâts spéciaux :</p></div>
                                    <div class="menu-liste-plats">
                                        <div class="menu-plats">
                                            <div class="onclick-popup" id="couscous">Couscous</div>
                                            <div class="onclick-popup" id="chili">Chilli Con Carne</div>
                                            <div class="onclick-popup" id="fajitas">Fajitas</div>
                                        </div>
                                        <div class="menu-prix">
                                            <p> 
                                                4€</br>
                                                4€</br>
                                                4€</br>
                                            </p>
                                        </div>
                                    </div>
                                

                        </div>
                    </div>
                </div>    
            </div>
            <div id="modal">
                <i class="fas fa-times-circle" id="close" onclick="closeModal()"></i>
                <div id="modal-separation">
                    <img id="popup_photo_plat" src="./assets/images/imagePlats/ilesFlottantes.jpeg" alt="#">
                    <div id="info-plat">
                        <div id="popup_nom_plat">Nom</div>
                        <div id="popup_description_plat">Description</div>
                        <div id="popup_prix_plat">Prix</div>
                    </div>
                </div>
            </div>  
        <?php include("assets/includes/backtotop.php") ?>
        <?php include('assets/includes/footer.php'); ?>
    <script src="assets/js/main.js"></script>
</body>
</html>
