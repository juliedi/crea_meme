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

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Mème Générateur</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>        
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">     
      <!-- Page Heading -->
      <h1 class="my-4">Mèmes -
        <small>Les dernièrs créer</small>
      </h1>  
      <hr>
      <div class="row">
        <div class="col-md-7-5">
        <!--Les 6 derniers mèmes creer-->     
          <div class="drn_memes">
            <div id="carre1"></div>
            <div id="carre2"></div>
            <div id="carre3"></div>
          </div>  
          <div class="drn_memes">
            <div id="carre4"></div>
            <div id="carre5"></div>
            <div id="carre6"></div>
          </div>          
        </div> 
      <div class="col-md-7">
        <h2 class="my-4">Création de votre mème</h2>
      </div>
      <hr>     
      <div class="col-md-7">
        <div id="meme_crea"></div>
      </div> 
      <div class="col-md-5">
        <!-- les 6 mèmes dispo-->
        <h3>Blablabla</h3>
        <div class="drn_memes_2">
          <div id="carre1_1"></div>
          <div id="carre2_2"></div>
          <div id="carre3_3"></div>
        </div>  
        <div class="drn_memes_2">
          <div id="carre4_4"></div>
          <div id="carre5_5"></div>
          <div id="carre6_6"></div>
        </div>
        <form action="upload.php" method="post" enctype="multipart/form-data">    
          <input type="file" name="fileToUpload" id="fileToUpload">
          <input type="hidden" name="MAX_FILE_SIZE" value="100000">
          <input type="submit" name="envoyer" value="Envoyer le fichier">
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

  </body>

</html>