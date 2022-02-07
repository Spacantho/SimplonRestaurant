<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/eaf2c4b5d9.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<?php include("assets/includes/footer.php") ?>
    <div class="background-contact-tb"><h1>CONTACTEZ-NOUS</h1></div>

    <div id="section-2">
  
      <div class="adresse">
        <ul>
          <li><i class="fas fa-map-marker-alt"></i></li>
          <li><b>NOTRE RESTAURANT</b></li>
          <li>19 rue de Damouzy</li>
          <li>08000 Charleville-Mézières</li>
        </ul>
      </div>
      <div class="telephone">
        <ul>
          <li><i class="fas fa-phone-alt"></i></i></li>
          <li><b>NUMERO DE TELEPHONE</b></li>
          <li>03.24.32.55.23</li>
          <li>(numéro non surtaxé)</li>
        </ul>
      </div>
      <div class="email"><div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=19%20rue%20de%20damouzy%2008000%20Charleville&t=&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies</a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><a href="https://www.embedgooglemap.net">google map responsive</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div></div>
      <div class="info-supp">     
        <ul>
          <li><i class="fas fa-envelope"></i></li>
          <li><b>E-MAIL</b></li>
          <li>contact@restosimplon.fr</li>
        </ul>
      </div>
      <div class="background-formulaire"></div>


      <div class="formulaire-contact">
        <form action="/my-handling-form-page" method="post">
          <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="user_name" />
          </div>
          <div>
            <label for="name">Prénom :</label>
            <input type="text" id="firstname" name="first_name" />
          </div>
          <div>
            <label for="mail">E-mail :</label>
            <input type="email" id="mail" name="user_email" />
          </div>
          <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message"></textarea>
          </div>
          <div class="button">
            <button type="submit">Envoyer le message</button>
          </div>
        </form>
      </div>
    </div>
    
      
    <?php include("assets/includes/footer.php") ?>
<script src="assets/js/main.js"></script>





</body>

</html>