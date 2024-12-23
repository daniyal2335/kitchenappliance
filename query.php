<?php
$adminPassword = "Jamal@12"; 
$hashedAdminPassword = password_hash($adminPassword, PASSWORD_DEFAULT);
session_start();
include('adminpanel/dbcon.php');



$query = $pdo->prepare("UPDATE users SET password = :hashedPassword WHERE email = 'jamal12@gmail.com'");
$query->bindParam(':hashedPassword', $hashedAdminPassword);
$query->execute();


//signup
if (isset($_POST['signUp'])) {
    $name = $_POST['sName'];
    $email = $_POST['sEmail'];
    $pass = $_POST['sPassword'];

    if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        echo "<script>alert('Name should not contain numbers or special characters!');</script>";
    } else {
        $checkEmailQuery = $pdo->prepare("SELECT * FROM users WHERE email = :sEmail");
        $checkEmailQuery->bindParam('sEmail', $email);
        $checkEmailQuery->execute();

        if ($checkEmailQuery->rowCount() > 0) {
            echo "<script>alert('Email is already registered!');</script>";
        } else {
            if (preg_match('/^[A-Z]/', $pass)) {
                $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

                $query = $pdo->prepare("INSERT INTO users(name, email, password) VALUES(:sName, :sEmail, :sPassword)");
                $query->bindParam('sName', $name);
                $query->bindParam('sEmail', $email);
                $query->bindParam('sPassword', $hashedPassword);
                $query->execute();

                echo "<script>alert('Registered successfully!'); location.assign('login.php');</script>";
            } else {
                echo "<script>alert('Password must start with a capital letter.');</script>";
            }
        }
    }
}



if (isset($_POST['login'])) {
    $userEmail = $_POST['uEmail'];
    $userPassword = $_POST['uPassword'];

    // Basic validation
    if (empty($userEmail) || empty($userPassword)) {
        echo "<script>alert('Email and password are required.');</script>";
    } else {
        // Check if email exists
        $query = $pdo->prepare("SELECT id, name, email, password, role_id FROM users WHERE email = :userEmail");
        $query->bindParam('userEmail', $userEmail);
        
        if ($query->execute()) {
            $user = $query->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                // Verify password with the hashed password in the database
                if (password_verify($userPassword, $user['password'])) {
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
                    echo "<script>alert('Invalid password. Please try again.');</script>";
                }
            } else {
                echo "<script>alert('No user found with this email.');</script>";
            }
        } else {
            echo "<script>alert('An error occurred while executing the query.');</script>";
        }
    }
}





?>
