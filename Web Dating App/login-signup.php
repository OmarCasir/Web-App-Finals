<?php
session_start(); // Start the session

if (isset($_POST['uname']) && isset($_POST['pass'])) {
    include "conn.php";

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "uname=" . $uname;

    if (empty($uname)) {
        $em = "Username is required";
        header("Location: login.php?error=$em&$data");
        exit;
    } else if (empty($pass)) {
        $em = "Password is required";
        header("Location: login.php?error=$em&$data");
        exit;
    } else {
        $sql = "SELECT * FROM user WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$uname]);

        if ($stmt->rowCount() == 1) {
            $user = $stmt->fetch();
            $username = $user['username'];
            $password = $user['password'];
            $fname = $user['fname'];
            $id = $user['id'];

            if ($username === $uname && password_verify($pass, $password)) {
                $_SESSION['id'] = $id;
                $_SESSION['fname'] = $fname;
                header("Location: home.php");
                exit;
            } else {
                $em = "Incorrect username or password";
                header("Location: login.php?error=$em&$data");
                exit;
            }
        } else {
            header("Location: login.php?error=error");
            exit;
        }
    }
}
?>
