<?php
session_start();
include('adminpanel/dbcon.php');
//signup
if(isset($_POST['signUp'])){
    $name=$_POST['sName'];
    $email=$_POST['sEmail'];
    $pass=$_POST['sPassword'];
   $query=$pdo->prepare("insert into users(name,email,password)values(:sName, :sEmail,:sPassword)");
            $query->bindParam('sName',$name);
            $query->bindParam('sEmail',$email);
            $query->bindParam('sPassword',$pass);
            $query->execute();
            $user=$query->fetch(PDO::FETCH_ASSOC);
            // print_r($user);
            echo "<script>alert('Register added successfully');
        location.assign('login.php');
        </script>";
        }
if (isset($_POST['login'])) {
    $userEmail = $_POST['uEmail'];
    $userPassword = $_POST['uPassword'];

    // Prepare and execute the query
    $query = $pdo->prepare("SELECT * FROM users WHERE email = :userEmail AND password = :userPassword");
    $query->bindParam('userEmail', $userEmail);
    $query->bindParam('userPassword', $userPassword);
    
    if ($query->execute()) {
        $user = $query->fetch(PDO::FETCH_ASSOC);
        
        // Check if the user was found
        if ($user) {
            // Check the user's role and set session variables accordingly
            if ($user['role_id'] == 1) {
                $_SESSION['adminName'] = $user['name'];
                $_SESSION['adminEmail'] = $user['email'];
                echo "<script>location.assign('adminpanel/index.php')</script>";
            } elseif ($user['role_id'] == 2) {
                $_SESSION['userId'] = $user['id'];
                $_SESSION['userName'] = $user['name'];
                $_SESSION['userEmail'] = $user['email'];
                echo "<script>location.assign('index.php')</script>";
            } else {
                echo "Role not recognized.";
            }
        } else {
            // Handle the case where no user was found
            echo "<script>alert('Invalid email or password. Please try again.');</script>";
        }
    } else {
        // Handle query execution error
        echo "<script>alert('An error occurred while executing the query.');</script>";
    }
}
?>
