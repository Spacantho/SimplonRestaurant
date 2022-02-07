var content = document.querySelector('#hamburger-content');
var sidebarBody = document.querySelector('#hamburger-sidebar-body');
var button = document.querySelector('#hamburger-button');
var overlay = document.querySelector('#hamburger-overlay');
var activatedClass = 'hamburger-activated';

sidebarBody.innerHTML = content.innerHTML;

button.addEventListener('click', function(e) {
    e.preventDefault();

    this.parentNode.classList.add(activatedClass);
});

/*button.addEventListener('keydown', function(e) {
    if (this.parentNode.classList.contains(activatedClass))
    {
        if (e.repeat === false && e.wich === 27)
            this.parentNode.classList.remove(activatedClass);
    }
})*/

overlay.addEventListener('click', function(e) {
    e.preventDefault();

    this.parentNode.classList.remove(activatedClass);
})





//PLats

//Pizza
plat_margherita = {
    plat_name: "La Margherita",
    plat_description: "Tomate, Mozzarella, Olives.",
    plat_photos: "./assets/images/imagePlats/margheritaF.jpeg",
    plat_prix: "6€",
}

plat_cinqFromages = {
    plat_name: "La Cinq Fromages",
    plat_description: "Tomate, Mozzarella, Bleu, Chèvre, Raclette, Maroille.",
    plat_photos: "./assets/images/imagePlats/cinqFromagesF.jpeg",
    plat_prix: "7.50€",
}

plat_chorizo = {
    plat_name: "La Chorizo",
    plat_description: "Tomates, Mozarella, Chrorizo, Jambon blanc, Bleu, Oignons cuits.",
    plat_photos: "./assets/images/imagePlats/chorizoF.jpeg",
    plat_prix: "6.50€",
}

plat_cannibale = {
    plat_name: "La Cannibale",
    plat_description: "Fond de Viande, Champigons, Poulet, Jambon de Pays, Steack Haché, Saucisse, Mozzarella.",
    plat_photos: "./assets/images/imagePlats/cannibaleF.jpeg",
    plat_prix: "8€",
}

plat_vegetarienne = {
    plat_name: "La Végétarienne",
    plat_description: "Pommes de Terre, Poivron, Champignons, Mozarella, Olives, Maïs, Tomates fraiches.",
    plat_photos: "./assets/images/imagePlats/vegetarienneF.jpeg",
    plat_prix: "6.50€",
}

plat_chickenCesar = {
    plat_name: "La Chicken Cesar",
    plat_description: "Fond de Crème, Pommes de Terre, Aiguilette de Poulet Panée, Tomate.",
    plat_photos: "./assets/images/imagePlats/chickenCesarF.jpeg",
    plat_prix: "8.50€",
}


//Burgers

plat_burger = {
    plat_name: "Hamburger",
    plat_description: "Steak, Crudités, Sauce au choix.",
    plat_photos: "./assets/images/imagePlats/hamburgerF.jpeg",
    plat_prix: "4€",
}

plat_cheese = {
    plat_name: "Cheese",
    plat_description: "Steak, Fromage, Crudités, Sauce au choix.",
    plat_photos: "./assets/images/imagePlats/cheeseF.jpeg",
    plat_prix: "4.50€",
}

plat_bacon = {
    plat_name: "Bacon",
    plat_description: "Steak, Bacon, Crudités, Sauce au choix.",
    plat_photos: "./assets/images/imagePlats/baconF.jpeg",
    plat_prix: "4.50€",
}

plat_chicken = {
    plat_name: "Chicken",
    plat_description: "Poulet Frit, Crudités, Sauce au choix.",
    plat_photos: "./assets/images/imagePlats/chickenF.jpeg",
    plat_prix: "4.50€",
}

plat_veggie = {
    plat_name: "Veggie",
    plat_description: "Croquette de Pomme de Terre, Crudité, Sauce au choix.",
    plat_photos: "./assets/images/imagePlats/veggieF.jpeg",
    plat_prix: "4€",
}

//Pâtes :


plat_carbonara = {
    plat_name: "Carbonara",
    plat_description: "Pâtes, Crème Fraîche, Lardons, Oignon, Œufs.",
    plat_photos: "./assets/images/imagePlats/carbonaraF.jpeg",
    plat_prix: "3€",
}

plat_bolognaise = {
    plat_name: "Bolognaise",
    plat_description: "Pâtes, Boeuf Haché, Concentré de tomate.",
    plat_photos: "./assets/images/imagePlats/bolognaiseF.jpeg",
    plat_prix: "3.50€",
}

//Desserts

plat_fondant = {
    plat_name: "Fondant au Chocolat",
    plat_description: "Chocolat noir, Beurre, Œufs.",
    plat_photos: "./assets/images/imagePlats/fondantF.jpeg",
    plat_prix: "2€",
}

plat_ilesFlottantes = {
    plat_name: "Îles Flottantes",
    plat_description: "Lait, Vanille, Amande.",
    plat_photos: "./assets/images/imagePlats/ilesFlottantesF.jpeg",
    plat_prix: "2€",
}

plat_belleHelene = {
    plat_name: "Poire Belle-Hélène",
    plat_description: "Poires, Chocolat Noir, Amandes, Glace Vanille.",
    plat_photos: "./assets/images/imagePlats/belleHeleneF.jpeg",
    plat_prix: "2€",
}

//Plat du jour

plat_burgerAmoureux = {
    plat_name: "Burger des Amoureux",
    plat_description: "Pains Rose, Steak, Crudités, Oignons, Cheddar, Sauce au choix.",
    plat_photos: "./assets/images/imagePlats/burgerAmoureuxF.jpeg",
    plat_prix: "4€",
}

//Soft

plat_cocaCola = {
    plat_name: "Coca-Cola 33cl",
    plat_description: "Coca-cola, Zero, Light, Cherry 33cl.",
    plat_photos: "./assets/images/imagePlats/cocaColaF.jpeg",
    plat_prix: "1€",
}

plat_iceTea = {
    plat_name: "Lipton IceTea 33cl",
    plat_description: "Lipton IceTea, Pèche, Green, Lemon, Franboise 33cl.",
    plat_photos: "./assets/images/imagePlats/iceTeaF.jpeg",
    plat_prix: "1€",
}

plat_sevenUp = {
    plat_name: "7up 33cl",
    plat_description: "7up, Lemon, Cherry, Exotique 33cl.",
    plat_photos: "./assets/images/imagePlats/7upF.jpeg",
    plat_prix: "1€",
}

plat_oasis = {
    plat_name: "Oasis 33cl",
    plat_description: "Oasis, Tropical, Pomme Cassis Frambroise, Orange 33cl.",
    plat_photos: "./assets/images/imagePlats/oasisF.jpeg",
    plat_prix: "1€",
}

plat_redbull = {
    plat_name: "RedBull 25cl",
    plat_description: "Redbull, Tropical, White, Blue, Peach 25cl.",
    plat_photos: "./assets/images/imagePlats/redbullF.jpeg",
    plat_prix: "0.20€",
}

plat_monster = {
    plat_name: "Monster 50cl",
    plat_description: "Monster, Ultra Violet, Ultra Blue, Punch 50cl.",
    plat_photos: "./assets/images/imagePlats/monsterF.jpeg",
    plat_prix: "4€",
}

// Alcools

plat_heineken = {
    plat_name: "La Keken 33cl",
    plat_description: "La bière Heineken est la première marque d’alcool consommée en France. Buvez Heineken.",
    plat_photos: "./assets/images/imagePlats/heinekenF.jpeg",
    plat_prix: "Offerte",
}

plat_huitSix = {
    plat_name: "8.6 50cl",
    plat_description: "8.6 50cl.",
    plat_photos: "./assets/images/imagePlats/86F.jpeg",
    plat_prix: "0.50€",
}

plat_triple = {
    plat_name: "Triple Karmeliet 33cl",
    plat_description: "Triple Karmeliet 33cl.",
    plat_photos: "./assets/images/imagePlats/tripleF.jpeg",
    plat_prix: "1.50€",
}

plat_leffe = {
    plat_name: "Leffe 33cl",
    plat_description: "Leffe, Blond, Triple, Ruby 33cl.",
    plat_photos: "./assets/images/imagePlats/leffeF.jpeg",
    plat_prix: "1€",
}

plat_vinRouge = {
    plat_name: "Vin Rouge 75cl",
    plat_description: "Vin Rouge 75cl, sélection du moment.",
    plat_photos: "./assets/images/imagePlats/vinRougeF.jpeg",
    plat_prix: "15€",
}

plat_whisky = {
    plat_name: "Whisky 4cl",
    plat_description: "Shooter 4cl, Jack Daniel, J&B, Dalmore.",
    plat_photos: "./assets/images/imagePlats/whiskyF.jpeg",
    plat_prix: "1.20€",
}

plat_rhum = {
    plat_name: "Rhum 4cl",
    plat_description: "Don Papa, Diplomatico, Kraken 4cl.",
    plat_photos: "./assets/images/imagePlats/rhumF.jpeg",
    plat_prix: "1.20€",
}

plat_jager = {
    plat_name: "Jägermeister 50cl",
    plat_description: "Jägermeister 50cl.",
    plat_photos: "./assets/images/imagePlats/jagerF.jpeg",
    plat_prix: "5€",
}

//Healty

plat_saladeCesar = {
    plat_name: "Salade César",
    plat_description: "Laitue, Pain écrouté, Parmesan, Œufs, Moutard, Huile, Ail.",
    plat_photos: "./assets/images/imagePlats/saladeCesarF.jpeg",
    plat_prix: "4€",
}

plat_brocoli = {
    plat_name: "Galettes de Brocoli",
    plat_description: "Brocoli, Œufs, Farine, Parmesan, Huile d’olive.",
    plat_photos: "./assets/images/imagePlats/brocoliF.jpeg",
    plat_prix: "3€",
}

plat_croquetteSemoule = {
    plat_name: "Croquette de semoule",
    plat_description: "Semoule fine, Lait écrémé, Œufs, Persil.",
    plat_photos: "./assets/images/imagePlats/croquetteSemouleF.jpeg",
    plat_prix: "3€",
}

plat_courgette = {
    plat_name: "Tarte aux Courgettes",
    plat_description: "Pâte feuilletée, Courgette, Chèvre, Miel, Soja.",
    plat_photos: "./assets/images/imagePlats/courgetteF.jpeg",
    plat_prix: "4€",
}

//Plats spéciaux

plat_couscous = {
    plat_name: "Couscous",
    plat_description: "Semoule fine, Merguez, Poulet, Tomates, Carottes, Courgette.",
    plat_photos: "./assets/images/imagePlats/couscousF.jpeg",
    plat_prix: "4€",
}

plat_chili = {
    plat_name: "Chili Con Carne",
    plat_description: "Boeuf haché, Haricot rouge, Concentré de tomate, Oignons, Ail.",
    plat_photos: "./assets/images/imagePlats/chiliF.jpeg",
    plat_prix: "4€",
}

plat_fajitas = {
    plat_name: "Fajitas",
    plat_description: "Poulet ou Boeuf, Tortillas, Poivrons, Tomates, Crème fraiche, Avocat, Salade, Sauce.",
    plat_photos: "./assets/images/imagePlats/fajitasF.jpeg",
    plat_prix: "4€",
}

// Const
// Pizza
const margherita = document.getElementById("margherita");
const cinqFromages = document.getElementById("cinqFromages");
const chorizo = document.getElementById("chorizo");
const cannibale = document.getElementById("cannibale");
const vegetarienne = document.getElementById("vegetarienne");
const chickenCesar = document.getElementById("chickenCesar");

//Burgers

const burger = document.getElementById("burger");
const cheese = document.getElementById("cheese");
const bacon = document.getElementById("bacon");
const chicken = document.getElementById("chicken");
const veggie = document.getElementById("veggie");

//Pâtes

const carbonara = document.getElementById("carbonara");
const bolognaise = document.getElementById("bolognaise");

//Desserts

const fondant = document.getElementById("fondant");
const ilesFlottantes = document.getElementById("ilesFlottantes");
const belleHelene = document.getElementById("belleHelene");

//Spe

const burgerAmoureux = document.getElementById("burgerAmoureux");

//Soft

const cocaCola = document.getElementById("cocaCola");
const iceTea = document.getElementById("iceTea");
const sevenUp = document.getElementById("sevenUp");
const oasis = document.getElementById("oasis");
const redbull = document.getElementById("redbull");
const monster = document.getElementById("monster");

//alcool

const heineken = document.getElementById("heineken");
const huitSix = document.getElementById("huitSix");
const triple = document.getElementById("triple");
const leffe = document.getElementById("leffe");
const vinRouge = document.getElementById("vinRouge");
const whisky = document.getElementById("whisky");
const rhum = document.getElementById("rhum");
const jager = document.getElementById("jager");

// Healthy

const saladeCesar = document.getElementById("saladeCesar");
const brocoli = document.getElementById("brocoli");
const croquetteSemoule = document.getElementById("croquetteSemoule");
const courgette = document.getElementById("courgette");

//plats spe

const couscous = document.getElementById("couscous");
const chili = document.getElementById("chili");
const fajitas = document.getElementById("fajitas");

list_produits = [plat_margherita, plat_cinqFromages, plat_chorizo, plat_cannibale, plat_vegetarienne, plat_chickenCesar, plat_burger, plat_cheese, plat_bacon, plat_chicken, plat_veggie, plat_carbonara, plat_bolognaise, plat_fondant, plat_ilesFlottantes, plat_belleHelene, plat_burgerAmoureux, plat_cocaCola, plat_iceTea, plat_sevenUp, plat_oasis, plat_redbull, plat_monster, plat_heineken, plat_huitSix, plat_triple, plat_leffe, plat_vinRouge, plat_whisky, plat_rhum, plat_jager, plat_saladeCesar, plat_brocoli, plat_croquetteSemoule, plat_courgette, plat_couscous, plat_chili, plat_fajitas, null]
list_btn = [margherita, cinqFromages, chorizo, cannibale, vegetarienne, chickenCesar, burger, cheese, bacon, chicken, veggie, carbonara, bolognaise, fondant, ilesFlottantes, belleHelene, burgerAmoureux, cocaCola, iceTea, sevenUp, oasis, redbull, monster, heineken, huitSix, triple, leffe, vinRouge, whisky, rhum, jager, saladeCesar, brocoli, croquetteSemoule, courgette, couscous, chili, fajitas, null]

const popup_nom_plat = document.getElementById("popup_nom_plat")
const popup_description_plat = document.getElementById("popup_description_plat")
const popup_photo_plat = document.getElementById("popup_photo_plat")
const popup_prix_plat = document.getElementById("popup_prix_plat")


window.onload = function(){

    for (let i = 0; i < list_btn.length-1; i++) {
        list_btn[i].onclick = function(){

            popup_nom_plat.innerHTML = list_produits[i].plat_name
            popup_description_plat.innerHTML = list_produits[i].plat_description
            popup_photo_plat.src = list_produits[i].plat_photos
            popup_prix_plat.innerHTML = list_produits[i].plat_prix

            document.getElementById("modal").style.bottom = "0px";

        }
      }
}

//Modal


function closeModal() {
    document.getElementById("modal").style.bottom = "-450px"
}

window.addEventListener('click', function(e){

    var openpopup = false;

    for (let i = 0; i < list_btn.length-1; i++) {

          if (list_btn[i].contains(e.target)){
            openpopup = true
          }

      }

    if (!document.getElementById("modal").contains(e.target)){
     if (!openpopup){closeModal()}
  }

})