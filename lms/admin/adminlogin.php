<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon"
        href="https://th.bing.com/th/id/R.e4a5dec2575eda345a05e0b0065fe8b9?rik=Ls6B4Xi6EMo54Q&riu=http%3a%2f%2f4.bp.blogspot.com%2f-Kwj5Bxoy1Oo%2fT2CzapImyoI%2fAAAAAAAABGI%2fT1y54VVtmWQ%2fs1600%2fGoogle%2bFavicon%2bWallpapers.jpg&ehk=bdoL6otI%2bJLBTpbXWAx3YdQJBua9e7AcWKEqQbwglY8%3d&risl=&pid=ImgRaw&r=0"
        type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <style>
    .stlogin-section {
        background: rgb(57, 55, 55);
        width: 100vw;
        height: 100vh;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        background-position: center;
        background-repeat: no-repeat;
    }

    loca .text-primary {
        font-weight: 700;
    }

    .main h5 {
        margin-top: 2rem;
    }

    .link-danger {
        font-weight: 700;
    }

    .bot {
        font-size: 1.5rem;
        margin-top: 2rem
    }

    /* ul {
        list-style: none;
    }

    .nav-link {
        color: #8b8d8f;
    }

    .nav-link:hover {
        color: #dedcdc;
    }

    img,
    svg {
        margin-right: 1rem;
    } */
    .fpass {
        text-decoration: none;
    }
    </style>
</head>

<body>
    <?php include 'components/_dbconnect.php'; ?>
    <?php require 'components/_stlogin.php';?>

    <!-- admin login section -->
    <div class="section stlogin-section" id="adminlogin.php">
        <div class="main">
            <form name="admin_login" action="" method="post">
                <div class="modal-body mx-5">
                    <div class="mb-3 col-md-70 ">
                        <!-- col-md-5 for small -->
                        <label for="username" class="form-label"></label>
                        <!-- maxlength 11 input length 11 not allow more character input -->
                        <input type="text" maxlength="30" name="uname" class="form-control" id="username"
                            placeholder="username or email address" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 col-md-70 ">
                        <label for="password" class="form-label"> </label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="pass">
                        <div id="emailHelp" class="text-primary m-2"><a class="fpass" href="upass.php"> Forgot your
                                Password? </a></div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 rounded-4 p-1">Login</button>
                    <h5 class="text">Don't have an Account?<a href="adminregister.php"
                            class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                            Signup
                            now</a></h5>
                </div>
                <div class="modal-footer m-4 ">
                    <div id="emailHelp" class="text-primary mx-auto bot">or Login Using
                        <a class="btn btn-light w-90 rounded-circle p-1" href="https://www.facebook.com"
                            role="button"><img src="images/fb.jpg" alt="Logo" width="30" height="30"
                                class="d-logo-block rounded-circle"></a>
                        <a class="btn btn-light w-90 rounded-circle p-1" href="https://www.google.com"
                            role="button"><img src="images/google.jpg" alt="Logo" width="25" height="25"
                                class="d-logo-block rounded-circle"></a>
                        <a class="btn btn-light w-90 rounded-circle p-1" href="https://www.microsoft.com"
                            role="button"><img src="images/ms.jpg" alt="Logo" width="25" height="25"
                                class="d-logo-block rounded-circle"></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $count=0;
        $sql="SELECT * FROM `admin_register` WHERE `uname`='$_POST[uname]' && `pass`='$_POST[pass]'";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($res);
        $count=mysqli_num_rows($res);

        if($count==0){
            ?>
    <script>
    alert("The username and password doesn't match")
    </script>
    <?php
        }
        else{
            $_SESSION['login_user'] = $_POST['uname'];
            $_SESSION['pic']=$row['pic'];
            ?>
    <script>
    window.location = "index.php";
    </script>
    <?php
        }
    }
    ?>
    <!-- footer section -->
    <?php require 'components/_footer.php'; ?>
</body>

</html>