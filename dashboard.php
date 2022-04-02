<?php
session_start();
if (isset($_SESSION["admin_id"])) {
 print_r($_SESSION['result']);
  echo "admin";
  echo '<a href="create.php">Create Quiz</a>';

  
} else {
    echo 'Bạn ko có quyền truy cập';
}
?>
<php 
