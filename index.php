<!DOCTYPE html>
<html lang="fr">

<head>
    <title>CSNS</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/responsive.bootstrap.min.css">
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar">
    <div class="container-fluid" style="background-image: url(img/bg.jpg); background-repeat: no-repeat;background-size: auto;background-position: top center;">

        <!-- Barre navigation -->
        <div class="container-fluid" style="margin-bottom: 15%;">

            <nav class="navbar navbar-inverse navbar-fixed-top" style=" font-weight:bold; background-color:transparent;">
                <div class="container-fluid ">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myMenu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <p><h1 style="display: inline;">CSNS</h1><sup class="glyphicon glyphicon-education " id="globe" style="font-size: 2em;"></sup></p>
                </div>
                <div class=" collapse navbar-collapse  navbar navbar-right" id="myMenu" style="border:none;">
                    <ul class="nav navbar-nav" style="padding-top: 2%;">
                        <li> <a href="#">ACCUEIL</a> </li>
                        <!-- <li> <a href="#dg">MOT DU DIRECTEUR</a> </li> -->
                        <li> <a href="#contact">CONTACT</a> </li>
                        <li> <a href="asset/level.php">COURS/EXERCICES</a> </li>
                        <li> <a href="login/index.php">SE CONNECTER</a> </li>

                    </ul>
                </div>

                </div>

            </nav>


        </div><!-- Barre de navigation -->

       <div class="container"><!-- Carousel Wrapper-->
            <div id="samaCarousel" class="carousel slide" data-ride="carousel"><!-- Carousel -->
                <ol class="carousel-indicators">
                    <li data-target="#samaCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#SamaCarousel" data-slide-to="1"></li>
                    <li data-target="#SamaCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="carousel-page">
                            <img style="width: 100%;" src="img/maths.jpg" class="img-rounded img-responsive">
                        </div>
                        <div class="carousel-caption">
                            <h3 style="background-color: #232bbf; font-family: 'crete round'; padding: 1%; border-radius: 20px;box-shadow: 0 0 20px #0f18d0;"><em>"On ne résout pas un problème avec le même niveau de pensée que celui qui l'a créé"</em></h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-page">
                            <img style="width: 100%;"  src="img/Chimie.jpg" class="img-rounded img-responsive" >
                        </div>
                        <div class="carousel-caption">
                            <h3 style="background-color: #232bbf; font-family: 'crete round'; padding: 1%; border-radius: 20px;box-shadow: 0 0 20px #0f18d0;"><em>"Rien ne se perd, rien ne se crée, tout ce transforme"</em></h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-page">
                                <img style="width: 100%;"  src="img/english.jpg" class="img-rounded img-responsive" >
                        </div>
                        <div class="carousel-caption">
                            <h3 style="background-color: #232bbf; font-family: 'crete round'; padding: 1%; border-radius: 20px;box-shadow: 0 0 20px #0f18d0;"><em>"Yes, we can!"</em></h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-page">
                            <img style="width: 100%;" src="img/history.jpg"  class="img-rounded img-responsive">
                        </div>
                        <div class="carousel-caption">
                            <h3 style="background-color: #232bbf; font-family: 'crete round'; padding: 1%; border-radius: 20px;box-shadow: 0 0 20px #0f18d0;"><em>"Celui qui ne connaît pas l'histoire est condamné à la revivre."</em></h3>
                        </div>
                    </div>

                </div>

                <a href="#samaCarousel" class="left carousel-control" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a href="#samaCarousel" class="right carousel-control" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div><!-- Fin Carousel -->
      </div><!--Wrapper Carousel -->
    </div>

    <!-- Mot  du directeur -->
    <!-- <div class="container" style="margin-top: 5%;" id="dg">
        <div class="jumbotron" style="background-color: grey; text-align: justify;">

            <p>
                <img src="img/boss1.svg" class="img-circle" style="float: left">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet veniam quis dolorum accusamus tenetur asperiores?
                Autem odio sunt aut qui possimus, exercitationem modi a natus quos, recusandae eligendi, porro veniam.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet veniam quis dolorum accusamus tenetur asperiores?
                Autem odio sunt aut qui possimus, exercitationem modi a natus quos, recusandae eligendi, porro veniam.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet veniam quis dolorum accusamus tenetur asperiores?
                Autem odio sunt aut qui possimus, exercitationem modi a natus quos, recusandae eligendi, porro veniam.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet veniam quis dolorum accusamus tenetur asperiores?
                Autem odio sunt aut qui possimus, exercitationem modi a natus quos, recusandae eligendi, porro veniam.
            </p>
        </div>
    </div> -->
    <div id="last" ><!-- Last -->


        <div class="container" id="contact" style="margin-top: 5%;"><!-- Formulaire de contact  wrapper-->
              <div class="container-fluid">
                  <form>
                      <div class="row">
                          <div class=" col-md-offset-3 col-md-6 "><h3 id="cnt">CONTACTEZ-NOUS</h3></div>
                      </div>

                      <div class="form-group">
                          <label for="st_name" >Prénom</label>
                          <input type="text" id="st_name" class="form-control" style="outline: none; background: none; color: white; border-bottom: 2px solid #0f18d0;">
                      </div>
                      <div class="form-group">
                          <label for="last_name">Nom</label>
                          <input type="text" id="last_name" class="form-control" style="outline: none; background: none; color: white; border-bottom: 2px solid #0f18d0;">
                      </div>
                      <div class="form-group">
                          <label for="email">E-mail</label>
                          <input type="email" id="email" class="form-control" style="outline: none; background: none; color: white; border-bottom: 2px solid #0f18d0;">
                      </div>
                      <div class="form-group">
                          <label for="msg">Votre message</label>
                          <textarea class="form-control" id="msg" style="outline: none; background: none; color: white; border-bottom: 2px solid #0f18d0;"></textarea>
                      </div>
                      <button type="submit" class="btn btn-lg btn-success">Envoyer</button>

                  </form>
              </div>
        </div><!-- Fin Formulaire de contact  wrapper  -->
    </div><!-- #Last -->



    <!-- Footer -->
    <footer style="margin-top:100px;">

        <div  style="text-align:center; font-family:crete round ">
            <h2>CEM Samba Ndiémé SOW</h2>
            <h2>JienBA © 2020</h2>
        </div>

    </footer>



</body>

</html>
