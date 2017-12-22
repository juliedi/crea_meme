<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mème Générateur</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">

  </head>

  <body>
    <!--<php include("")?>-->
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Mème Générateur</a>
      </div>
    </nav>

    <div class="container">     
      <!--Les 6 derniers mèmes créés--> 
      <h1 class="my-4">Mèmes -
        <small>Les derniers créés</small>
      </h1>  
      <hr>
      <div class="row">
        <div class="col-md-7-5">
      <!--Ligne 1-->      
          <div class="drn_memes">
            <div id="carre1"></div>
            <div id="carre2"></div>
            <div id="carre3"></div>
          </div>  
      <!--Ligne 2-->
          <div class="drn_memes">
            <div id="carre4"></div>
            <div id="carre5"></div>
            <div id="carre6"></div>
          </div>
        </div>          
      </div> 

      <div class="col-md-7">
        <h2 class="my-4">Création de votre mème</h2>
      </div>
      <!--image du mème-->
      <div class="col-md-7">
        <div id="meme_crea">
          <img src="<?=($meme['nom_stockage'])?>" alt="">
        </div>
      </div>  
      <?php 
      include("afficher_miniature.php")
      ?>
      <div class="col-md-5-4">
        <!-- les 6 mèmes dispo-->
        <h3>Propositions d'images</h3>        
        <div class="petite_image">
          <div class="minipic" id="mini" onclick="afficherImage(this.id)"><?php afficher_miniature(1) ?></div> 
          <div class="minipic" id="mini" onclick="afficherImage(this.id)"><?php afficher_miniature(2) ?></div> 
          <div class="minipic" id="mini" onclick="afficherImage(this.id)"><?php afficher_miniature(3) ?></div>          
        </div>  

        <div class="petite_image">
          <div class="minipic" id="mini" onclick="afficherImage(this.id)"><?php afficher_miniature(4) ?></div> 
          <div class="minipic" id="mini" onclick="afficherImage(this.id)"><?php afficher_miniature(5) ?></div>    
          <div class="minipic" id="mini" onclick="afficherImage(this.id)"><?php afficher_miniature(6) ?></div>         
        </div> 

        <form action="upload.php" method="post" enctype="multipart/form-data">    
          <input type="file" name="fileToUpload" id="fileToUpload">
          <input type="hidden" name="MAX_FILE_SIZE" value="100000">
          <input type="submit" name="envoyer" value="Envoyer le fichier">
        </form>
        <hr>
        <form action="text_on_meme.php" method="post">
        <input type="hidden" name="cheminimage">
        <input type="text" name="top">
          <input type="text" name="bottom">
          <input type="submit" value="Voir le résultat">
        </form>
      </div>
    </div>
  </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Julie | Samia | Yoann | Eva</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="views/agrandissement.js"></script>

  </body>

</html>
