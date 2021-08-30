<?php
  require 'db.php';
  session_start();

  $niveau = strip_tags($_GET['niveau']);
  $matiere = strip_tags($_GET['matiere']);


 ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Matières</title>
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
    <style>
      button a{
        text-decoration: none;
        color: #fff;
      }
      button a:hover{
        text-decoration: none;
        color: #fff;
      }


    </style>

</head>

<body>

    <h2>CEM Samba Ndiémé Sow <span class="glyphicon glyphicon-education" style="color: #ff007e; padding-bottom: 5%;"></span></h2>
    <?php
     if (!isset($_SESSION['admin'])) {
       ?>
       <script>
            $(document).ready(function(){
              $('#edit').toggle();
              $('#delete').toggle();
            });
       </script>
       <?php
     }
     ?>


    <div class="container">
        <ol class="breadcrumb">
            <li><a href="level.php"><span class="fa fa-home"></span></a></li>
            <li><a href="subject.php?niveau=<?php echo $niveau ?>"><?php echo $niveau ?></a></li>
            <li class="active"><?php echo $matiere ?></li>
        </ol>
    </div>

    <div id="box-bordered" class="container">

        <h4 style="padding: 2%;"><em><?php echo $matiere ?>:</em></h4>
        <table class="table table-hover">
            <tbody>
              <?php
                $req = $db->prepare('SELECT * FROM cours WHERE  matiere = :matiere AND niveau = :niveau');
                $req->execute(array('matiere' => $matiere,
                                    'niveau' => $niveau
                                    ));
                while ($data = $req->fetch()) {
              ?>
                <tr>
                    <td style="padding: 2%; text-align: justify;">
                        <h3 style="padding-bottom: 15px;"><em>Chapitre: <?php echo $data['chapitre']; ?> </em></h3>
                        <div class="row">
                            <div class="col-md-4 " style="margin-right: 2%;">
                                <!-- Mettre le video ici -->
                                <!-- <video src="" controls poster="html.jpg" width="100%"></video> -->
                                <iframe width="300" height="150" src="<?php echo $data['lien'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                            </div>

                            <div class="col-md-7 " >
                                <h3><em> Description:</em></h3>
                                <p><?php echo $data['description'] ?></p>
                                <div class="row">
                                    <div class="col-md-12">
                                      <a class="btn btn-primary glyphicon glyphicon-download-alt" download = "<?php echo $data['coursePath'] ?>" href="uploads/<?php echo $data['coursePath'] ?>"> Cours PDF</a>
                                      <a class="btn btn-success glyphicon glyphicon-download-alt" download = "<?php echo $data['exercisePath'] ?>" href="uploads/<?php echo $data['exercisePath'] ?>"> Exercice PDF</a>
                                      <a class="btn btn-warning glyphicon glyphicon-edit" id="edit" data-target="#edit<?php echo $data['idCours'] ?>" href="#" data-toggle="modal"   >Modifier</a>
                                      <a class="btn btn-danger glyphicon glyphicon-trash"  id="delete" href="#" data-toggle="modal" data-target="#delete<?php echo $data['idCours'] ?>">Supprimer</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </td>

                    <!-- Modal Edit -->
                    <div style="color:black;" class="modal fade" id="edit<?php echo $data['idCours'] ?>">
                      <form  action="operations.php" method="post">

                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modifier un cours</h4>
                          </div>
                          <div class="modal-body">
                            <div class="form-group form-inline">
                              <label for="idCours">Matricule:</label>
                              <input readonly class="form-control" type="text" name="idCours" value="<?php echo $data['idCours']; ?>">
                              <label for="idCours" > Chapitre: </label>
                              <input class="form-control" type="text" name="chapitre" value="<?php echo $data['chapitre']; ?>">
                            </div>
                            <div class="form-group ">
                              <label for="link">Lien du cours: </label>
                              <input class="form-control" type="text" name="link" value="<?php echo $data['lien'] ?>">
                            </div>
                            <div class="form-group ">
                              <label for="comment">Description: </label>
                              <textarea class="form-control" name="comment" ><?php echo $data['description'] ?></textarea>
                            </div>

                            <div class="input-group ">
                              <label class="input-group-addon" for="basic-addon1" ><span class="glyphicon glyphicon-import"></span>Cours: </label>
                              <input class="form-control" type="file" name="myFile1" value="uploads/anglais.pdf">
                            </div>
                            <div class="input-group "style="padding-top: 5%;" >
                              <label class="input-group-addon" for="basic-addon1"><span class="glyphicon glyphicon-import"></span>Exercice: </label>
                              <input class="form-control" type="file" name="myFile1" value="uploads/anglais.pdf">
                            </div>

                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-warning"  name="updateCours"><span class="glyphicon glyphicon-edit"></span>Modifier</button>
                            <button class="btn btn-default"  data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span>Fermer</button>
                          </div>
                        </form>

                        </div>
                      </div>

                    </div>
                              <td> <a href="#" type="button" name="button" class="btn btn-primary" data-toggle="modal" data-target="#getInfo">Informations</a> </td>

                    


                    <!--Delete Modal-->
                    <div style="color:black;" class="modal fade" id="delete<?php echo $data['idCours']; ?>">
                      <div class="modal-dialog">
                        <form  action="operations.php" method="post">

                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" >&times;</button>
                            <h4 class="modal-title">Suprimmer un cours</h4>
                          </div>
                          <div class="modal-body">
                            <input type="hidden" name="deleteId" value="<?php echo $data['idCours'] ?>">
                            <p>  <em>Voulez-vous vraiment suprimmer ce <b>cours?</b></em>  </p>


                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-danger" name="delete"><span class="glyphicon glyphicon-trash"></span>Suprimmer</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span>Fermer</button>
                          </div>

                        </div>
                      </form>

                      </div>

                    </div>

                </tr>
              <?php
              }
              $req->closeCursor();
              ?>



            </tbody>

        </table>

    </div>

</body>

</html>
