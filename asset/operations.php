<?php
	require 'db.php';
	// require 'achievement/success.php';

		// <---------------CONNEXION ADMIN--------------->
		$PSEUDO = "zero";
		$PASSWORD = "zero";
		if (isset($_POST['connexion'])) {
			if (isset($_POST['pseudo'])) {
				$req = $db->prepare('SELECT * FROM user WHERE pseudo = :pseudo');
				$req->execute(array(
					'pseudo' =>$_POST['pseudo']
				));
				$data = $req->fetch();
				$PSEUDO = $data['pseudo'];
				$PASSWORD = $data['password'];
				$req->closeCursor();

			}

		}
		session_start();
		if (isset($_SESSION['admin'])) {
			?>
			<script type="text/javascript">
				location.href = '../asset/admin.php';
			</script>
			<?php
		} else {
			if ($_POST['pseudo'] ==  $PSEUDO && $_POST['password'] == $PASSWORD) {
				$_SESSION['admin'] = $PSEUDO;
				?>
				<script type="text/javascript">
					location.href= 'operations.php';
				</script>
				<?php
			} else {
				?>
				<script type="text/javascript">
					alert('Login ou Mot de passe incorrect');
					location.href = '../login/index.php';
				</script>
				<?php
			}
		}
		// <---------------AJOUT DE COURS--------------->

		if (isset($_POST['submit'])) {
			$UPLOAD1 = $_FILES['myfile1'];
			$UPLOAD2 = $_FILES['myfile2'];
			// $PATHCOURSE = basename($UPLOAD1['name']);
			$PATHCOURSE = $UPLOAD1['name'];
			$PATHEXERCISE = basename($UPLOAD2['name']);
			$MATIERE = strip_tags($_POST['matiere']);
			$NIVEAU = strip_tags($_POST['niveau']);
			$CHAPITRE = strip_tags($_POST['chapitre']);
			$LIEN = strip_tags($_POST['lien']);
			$DESCRIPTION = strip_tags($_POST['description']);
			add($UPLOAD1);
			add($UPLOAD2);
			include 'achievement/success.php';

			$req = $db->prepare('INSERT INTO cours (matiere, niveau, chapitre, lien, description, coursePath, exercisePath)
										VALUES(:matiere, :niveau, :chapitre, :lien, :description, :coursePath, :exercisePath)
										');
			$req->execute(array(
				'matiere' => $MATIERE,
				'niveau' => $NIVEAU,
				'chapitre' => $CHAPITRE,
				'lien' => $LIEN,
				'description' => $DESCRIPTION,
				'coursePath' => $PATHCOURSE,
				'exercisePath' => $PATHEXERCISE
			));

		}

		function add($upload){
			$file = $upload;
			// Testons si le fichier a bien été envoyé et s'il n'y pas d'erreur
			if (isset($file) AND $file['error'] == 0) {
				$infosFichier = pathinfo($file['name']);
				$extension = $infosFichier['extension'];
				// $extensionAllow = ['pdf', 'docx', 'pptx'];
				$extensionAllow = ['pdf'];

				// Testons si le fichier n'est pas trop gros
				if ($file['size'] <= 50000000) {
					if (in_array($extension, $extensionAllow)) {

						// Acceptons le fichier dans notre repertoire upload
						move_uploaded_file($file['tmp_name'], 'uploads/'.$file['name']);

					}
					else {

						echo "Format de fichier incorrect, seul les formats .pdf, .docx, .pptx sont acceptés";

					}
				}
				else{
					echo "Le fichier est trop lourd";
				}

			}else if (!isset($file)) {
				return 0;
			}
			/*
			else {

				echo "Error lors de l'enregistrement";

			}
			*/

		}

		// <---------------SUPPRESSION  DE COURS--------------->

		if (isset($_POST['delete'])) {
			$deleteId = $_POST['deleteId'];
			$req = $db->prepare('DELETE FROM cours WHERE idCours= :deleteId');
			$req->execute(array('deleteId' => $deleteId ));
			header("Location: level.php");

		}
		// <---------------MODIFICATON  DE COURS--------------->
		if (isset($_POST['updateCours'])) {
			$id = $_POST['idCours'];
			$newNameChapter = $_POST['chapitre'];
			$newLinkCourse = $_POST['link'];
			$newComment = $_POST['comment'];
			$req = $db->prepare('UPDATE cours
															SET chapitre = :newNameChapter, lien = :newLinkCourse, description = :newComment WHERE idCours = :idCours');
			$req->execute(array(
													'idCours' => $id,
													'newNameChapter' => $newNameChapter,
													'newComment' => $newComment,
													'newLinkCourse' => $newLinkCourse
												));
		}
		?>

		<?php

 ?>
