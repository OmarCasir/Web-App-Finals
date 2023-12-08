<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@600&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@500;600&display=swap');
</style>
<body>
        <div class="d-flex justify-content-center align-items-center vh-100"> 
            <div>
                <h3>Hello, <?=$_SESSION['fname']?></h3>
                <a href="logout.php" style="text-decoration: none;" ><button class="btn">Log Out</button></a>
            </div>    
        </div>
    </body>
    </html>
<?php } else {
    header("Location: login.php");
    exit;
} ?>