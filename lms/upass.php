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
        body{
            background-color: red;
            height: 650px;
            background-image: url("images/upass.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100vw 120vh;
        }

        .wrapper{
            width: 400px;
            height: 400px;
            margin: 6rem auto;
            background-color: rgba(0, 0, 0, 0.6);
            color: #fff;
        }
    </style>
</head>

<body>
    <?php include 'components/_dbconnect.php'; ?>
    <?php require 'components/_stlogin.php';?>
    <div class="wrapper">
        <h1 class="text-center p-3">Change Your Password</h1>
        <form action="" method="post">
            <!-- <input type="text" name="username" class="form-control" placeholder="Username" required="">
            <input type="text" name="email" class="form-control" placeholder="Email" required="">
            <input type="text" name="password" class="form-control" placeholder="New Password" required="">
            <button class="btn btn-light">Update</button> -->
            <div class="modal-body mx-5">
                <div class="mb-1 col-md-70 ">
                    <!-- col-md-5 for small -->
                    <label for="username" class="form-label"></label>
                    <!-- maxlength 11 input length 11 not allow more character input -->
                    <input type="text" maxlength="30" name="uname" class="form-control" id="username"
                        placeholder="Username" aria-describedby="emailHelp">
                </div>
                <div class="mb-2 col-md-70 ">
                    <label for="email" class="form-label"> </label>
                    <input type="text" class="form-control" id="email" placeholder="Email Address" name="email">
                </div>
                <div class="mb-4 col-md-70 ">
                    <label for="password" class="form-label"> </label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="pass">
                </div>
                <button type="submit" class="btn btn-primary w-50 rounded-4 p-1">Login</button>  
    </form>
    </div>  <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(mysqli_query($conn, "UPDATE stu_register SET pass='$_POST[pass]', cpass='$_POST[pass]' WHERE uname='$_POST[uname]' AND email='$_POST[email]';")){
            ?>
            <script>
                alert("The password updated successfully 👍");
        </script>
            <?php
        }
    }
    ?>

</body>

</html>