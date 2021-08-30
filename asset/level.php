<?php
 session_start();
 ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Classe</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styleCours.css">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../css/responsive.bootstrap.min.css">
    <script src="../js/jquery-1.12.4.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
</head>

<body>

  <h2>CEM Samba Ndiémé Sow <span class="glyphicon glyphicon-education" style="color: #ff007e; padding-bottom: 5%;"></span></h2>

   <?php
    if (!isset($_SESSION['admin'])) {
      ?>
      <script>
      $(document).ready(function(){
            $('#jienba').hide();
          })
      </script>
      <?php
    }
    ?>

    <div class="container" id="jienba">
      <ol class="breadcrumb container">
        <li ><a href="admin.php"><span class="fa fa-home"></span></a></li>
        <li  class="active">Niveau</li>
      </ol>
    </div>

    <div id="box-bordered" class="col-xs-10 col-xs-offset-1">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1" style="padding: 5%;" >
                <a href="subject.php?niveau=Troisieme" style="padding: 10%;">
                    <button class="btn btn-primary btn-lg" style="width: 25%; height: 150px; font-weight: bold; font-size: 1.3em;">Troisième</button>
                </a>
                <a href="subject.php?niveau=Terminal" style="padding: 10%;">
                    <button class="btn btn-warning btn-lg" style="width: 25%; height: 150px; font-weight: bold; font-size: 1.3em;">Terminal</button>
                </a>


            </div>
        </div>
    </div>

</body>

</html>
