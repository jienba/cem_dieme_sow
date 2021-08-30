<?php
 session_start();
 if (isset($_SESSION['admin'])) {
   session_destroy();
   ?>
   <script type="text/javascript">
     location.href = 'index.php'
   </script>
   <?php
 }else {
   ?>
   <script type="text/javascript">
     location.href = 'index.php'
   </script>
   <?php
 }

 ?>
