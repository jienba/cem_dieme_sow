<?php
 $niveau = strip_tags($_GET['niveau']);
 ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?php echo $niveau ?></title>
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

    <div class="container">
        <ol class="breadcrumb">
            <li><a href="level.php"><span class="fa fa-home"></span></a></li>
            <li><a href="#"><?php echo $_GET['niveau']; ?></a></li>
        </ol>
    </div>

    <div id="box-bordered" class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-10 col-md-offset-1" style="padding-top: 5%;" >
                    <a href="course.php?niveau=<?php echo $niveau ?>&amp;matiere=Mathematiques" style="padding-right: 10%;">
                        <button class="btn btn-primary btn-lg" style="width: 25%; height: 150px;"> <span style="color:#fff; font-weight: bold">Maths</span></button>
                    </a>
                    <a href="course.php?niveau=<?php echo $niveau ?>&amp;matiere=Français" style="padding-right: 10%;">
                        <button class="btn btn-primary btn-lg" style="width: 25%; height: 150px;"> <span  style="color:#fff; font-weight: bold">Français</span></button>
                    </a>
                    <a href="course.php?niveau=<?php echo $niveau ?>&amp;matiere=HG" >
                        <button class="btn btn-primary btn-lg" style="width: 25%; height: 150px;"> <span  style="color:#fff; font-weight: bold;">HG</span></button>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1"  style="padding-top: 5%; padding-bottom: 5%;">
                    <a href="course.php?niveau=<?php echo $niveau ?>&amp;matiere=Anglais" style="padding-right: 10%;">
                        <button class="btn btn-primary btn-lg" style="width: 25%; height: 150px;"> <span  style="color:#fff; font-weight: bold">Anglais</span></button>
                    </a>
                    <a href="course.php?niveau=<?php echo $niveau ?>&amp;matiere=Sciences physiques" style="padding-right: 10%;">
                        <button class="btn btn-primary btn-lg" style="width: 25%; height: 150px;"> <span style="color:#fff; font-weight: bold">PC</span></button>
                    </a>
                    <a href="course.php?niveau=<?php echo $niveau ?>&amp;matiere=SVT" >
                        <button class="btn btn-primary btn-lg" style="width: 25%; height: 150px;"> <span style="color:#fff; font-weight: bold">SVT</span></button>
                    </a>
                </div>
            </div>

    </div>









</body>

</html>
