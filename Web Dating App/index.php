

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
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

<header>
    <h2 class="logo">CanTalk</h2>
    <nav class="nav">
        <a href="#">Home</a>
        <a href="#">Help</a>
        <button class="btnPopup"  id="signupButton">Sign Up</button>
    </nav>
</header>

<div class="signup-box">
        
        <div class="form-box register">
            <h2>Create an Account</h2>

            <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error']; ?> 
            </div>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_GET['success']; ?> 
            </div>
            <?php } ?>
            
            <form action="signup.php" method="post">
                <div class="input-box">
                    <span class="icon"><box-icon type='solid' name='user'></box-icon></span>
                    <input type="text"
                           name="fname"
                           value="<?php echo (isset($_GET['fname']))?$_GET['fname']:
                            "" ?>">
                    <label for="fullname">Fullname</label>
                </div>
                <div class="input-box">
                    <span class="icon"><box-icon type='solid' name='user'></box-icon></span>
                    <input type="text" 
                           name="uname"
                           value="<?php echo (isset($_GET['uname']))?$_GET['uname']:
                            "" ?>">
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><box-icon name='lock-alt' type='solid' ></box-icon></span>
                    <input type="password"
                           name="pass">
                    <label>Password</label>
                </div>
                <div class="remgot">
                    <label><input type="checkbox" required>I Agree with the terms.</label>
                </div>
                <button type="submit" class="btn">Sign In</button>
                <div class="login-link">
                    <p>Already have an account? <a href="login.php">Log In</a></p>
                </div>
            </form>
        </div>
    </div>
    
    <script src="script.js"></script>

</body>
</html> 