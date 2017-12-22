<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mème Générateur</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Mème Generator</a>             
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">     
      <!-- Page Heading -->
      <h1 class="my-4">
        <small>Création de votre mème</small>
      </h1> 

      <?php include("afficher_miniature.php") ?>

      <div class="row">
        <div class="col-md-7">
          <div id="meme_crea">
          <?php 
            if (isset($lastID)) {
              echo '<img id="imagemodifiable" src="'.get_chemin($lastID).'">';
            } else {
              echo '<img id="imagemodifiable" src="'.get_chemin(1).'">';
            }
            ?>
          </div>
        </div> 

        <div class="col-md-5">
          <!-- les 6 mèmes dispo-->
          <h3>Choisissez une image</h3>        
          <div class="petite_image">
          <a href="javascript:switchImage('<?php afficher_chemin(1) ?>')"><div class="minipic" id="1"><?php afficher_miniature(1) ?></div></a> 
          <a href="javascript:switchImage('<?php afficher_chemin(2) ?>')"><div class="minipic" id="2"><?php afficher_miniature(2) ?></div></a>
          <a href="javascript:switchImage('<?php afficher_chemin(3) ?>')"><div class="minipic" id="3"><?php afficher_miniature(3) ?></div></a>                                     
        </div>  

        <div class="petite_image">
          <a href="javascript:switchImage('<?php afficher_chemin(4) ?>')"><div class="minipic" id="4"><?php afficher_miniature(4) ?></div></a> 
          <a href="javascript:switchImage('<?php afficher_chemin(5) ?>')"><div class="minipic" id="5"><?php afficher_miniature(5) ?></div></a>
          <a href="javascript:switchImage('<?php afficher_chemin(6) ?>')"><div class="minipic" id="6"><?php afficher_miniature(6) ?></div></a>                                    
        </div> 

        <script>
          function switchImage(chemin){
            var imagemodifiable = document.getElementById('imagemodifiable');
            imagemodifiable.src = chemin;
          }
        </script>

          <h3>Ou téléchargez votre propre fichier </h3>
          <form action="upload.php" method="post" enctype="multipart/form-data">    
            <input type="file" name="fileToUpload" id="fileToUpload"><br>
            <input type="text" name="description" id="description"><br>
            <input type="submit" value="Upload Image" name="submit">
          </form>

          <H3>Saisissez votre texte :</H3>
          <form action="text_on_meme.php" method="post">
            <input type="hidden" name="cheminimage">
            <input type="text" name="top" placeholder="Texte haut">
            <input type="text" name="bottom" placeholder="Texte bas">
            <input type="submit" value="Voir le résultat">
          </form>
        </div>
      </div>    
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div>
        <p class="m-0 text-center text-white">Julie | Samia | Yoann | Eva</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>

</html>
