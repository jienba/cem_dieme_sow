<?php
  session_start();
  if (isset($_SESSION['admin'])){
    ?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <title>ENREGISTREMENT</title>
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

        <h2>CEM Samba Ndiémé Sow <span class="glyphicon glyphicon-education" style="color: #ff007e; padding-bottom: 1%;"></span></h2>

        <div class="col-md-10 col-md-offset-1">

            <div class="row" style="padding-top: 5%; padding-bottom: 5%;">
              <div class="container-fluid" id="jienba" style="padding-bottom: 5%;">
                <ol class="breadcrumb container">
                  <li ><a href="admin.php"><span class="fa fa-home"></span></a></li>
                  <li  class="active">Enregistrement de cours</li>
                </ol>
              </div>
                <div class="col-md-6 col-md-offset-3" >

                    <!-- <h3 style="text-align: center; padding-bottom: 5%; text-shadow: 0 0 10px #0f18d0, 0 0 40px #0f18d0;"><em>Enregistrement de cours</em></h3> -->


                    <form action="operations.php" method="post" enctype="multipart/form-data">


                         <div class="input-group" style="padding-bottom: 7%; color: black;">
                          <label class="input-group-addon" for="basic-addon1"><span class="glyphicon glyphicon glyphicon-book"></span> Matières</label>
                           <select name="matiere" class="form-control" style="padding: 5px; width: 100%;">
                                        <option value="Français">Français</option>
                                        <option value="Mathematiques">Mathématiques</option>
                                        <option value="Anglais">Anglais</option>
                                        <option value="HG">HG</option>
                                        <option value="SVT">SVT</option>
                                        <option value="Sciences Physiques">Sciences Physiques</option>
                                    </select>
                        </div>
                        <div class="input-group" style="padding-bottom: 7%; color: black;">
                          <label class="input-group-addon" for="basic-addon1"><span class=" fa fa-level-up"></span> Niveau:</label>
                           <select name="niveau" class="form-control" style="padding: 5px; width: 100%;">
                                        <option value="Troisième">Troisième</option>
                                        <option value="Terminal">Terminal</option>
                                    </select>
                        </div>
                        <div class="input-group" style="padding-bottom: 7%;">
                          <label class="input-group-addon" for="basic-addon1"><span class="glyphicon glyphicon-book"></span></label>
                          <input type="text" name="chapitre" class="form-control" placeholder="Chapitre" aria-describedby="basic-addon1" id="basic-addon1" required>

                        </div>
                        <div class="input-group" style="padding-bottom: 7%;">
                          <label class="input-group-addon" for="basic-addon1"><span class="glyphicon glyphicon-film"></span></label>
                          <input type="text" name="lien" class="form-control" placeholder="https//www.youtube.com/aldjs8" aria-describedby="basic-addon1" id="basic-addon1" required>

                        </div>
                        <div class="input-group" style="padding-bottom: 7%;">
                          <label class="input-group-addon" for="basic-addon1"><span class="glyphicon glyphicon-envelope"></span>Description</label>
                          <textarea class="form-control" name="description"  value="No comment">

                          </textarea>

                        </div>

                        <div class="input-group" style="padding-bottom: 7%;">
                          <label class="input-group-addon" for="basic-addon1"><span class="glyphicon glyphicon-import"></span>Cours</label>
                          <input  type="file" name="myfile1" class="form-control" accept="application/pdf" style="width: 70%;"  aria-describedby="basic-addon1" id="basic-addon1" required>

                        </div>

                         <div class="input-group" style="padding-bottom: 5%;">
                          <label class="input-group-addon" for="basic-addon1"><span class="glyphicon glyphicon-import"></span>Exercice</label>
                          <input type="file" name="myfile2" placeholder="Exercice" accept="application/pdf" style="width: 70%;" class="form-control" style="width: 30%;"  aria-describedby="basic-addon1" id="basic-addon1">
                        </div>

                        <div class="col-md-offset-4" style="padding-bottom: 5%;" >
                            <input type="submit" value="Enregistrer" name="submit" class="btn  btn-lg btn-success">
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </body>

    </html>


    <?php
  } else {
    ?>
    <script type="text/javascript">
      location.href = '../login/index.php'
    </script>
    <?php
  }
?>
