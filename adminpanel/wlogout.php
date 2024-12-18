<?php
session_start();
unset($_SESSION['userId']);
unset($_SESSION['userEmail']);
unset($_SESSION['userName']);
session_destroy();
echo "<script>
location.assign('signin.php');
</script>";
?>