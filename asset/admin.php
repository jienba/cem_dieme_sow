<?php
 session_start();
 if (isset($_SESSION['admin'])) {
   ?>
   <!DOCTYPE html>
   <html lang="fr">

   <head>
       <title>ADMINISTRATION</title>
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

       <div id="box-bordered" class="col-md-10 col-md-offset-1">
           <div class="row">
               <div class="col-md-10 col-md-offset-1" style="padding: 2%;" >
                   <a href="add.php" title="Ajout de cours" style="padding: 10%;">
                       <button class="btn btn-info btn-lg" style="width: 25%; height: 150px;">
                         <span class="fa fa-plus fa-4x" style="color:#fff;"></span>
                       </button>
                   </a>
                   <a href="level.php" title="Liste" style="padding: 10%;">
                       <button class="btn btn-warning btn-lg" style="width: 25%; height: 150px;">
                           <span class="fa fa-eye fa-4x" style="color:#fff;"></span>
                       </button>
                   </a>

               </div>
           </div>
           <div class="row">
               <div class="col-md-10 col-md-offset-1" style="padding: 2%;" >
                 <a href="../login/logout.php" title="Liste" style="padding: 10%;">
                   <button class="btn btn-danger btn-lg" style="width: 25%; height: 150px;">
                     <span class="fa fa-power-off fa-4x" style="color:#fff;"></span>
                   </button>
                 </a>


               </div>
           </div>
       </div>

   </body>

   </html>

   <?php
 }else {
   ?>
   <script type="text/javascript">
     location.href = '../login/index.php'
   </script>
   <?php
 }
 ?>
