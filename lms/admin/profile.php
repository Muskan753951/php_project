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
    body {
        background-color: rgb(33, 97, 125);
    }

    .btn {
        float: right;
        width: 7rem;
        /* border: 2px solid red; */
        background: #fff;
    }

    .wrapper {
        /* background-color: rgba(53, 49, 49, 0.827); */
        width: 40vw;
        margin: 0 auto;
        height: 80vh;
        margin-top: 3rem;
        color: #fff;
        /* z-index: -1; */
        /* opacity: 0.8; */
    }

    .profile-text {
        text-align: center;
    }

    .prfl {
        text-align: center;
        /* height: 8px; */
        font-size: large;
        font-weight: bolder;
    }

    .table-bordered {
        color: #fff;
    }
    </style>
</head>

<body>
    <?php include 'components/_dbconnect.php'; ?>
    <?php require 'components/_stlogin.php';?>
    <div class="section">
        <form action="" method="post">
            <button class="btn btn-default m-5" name="submit1" type="submit">Edit</button>
        </form>

        <div class="wrapper">
            <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                ?>
            <script>
            window.location = "edit.php";
            </script>
            <?php
            }
                    $q=  mysqli_query($conn, "SELECT * FROM admin_register WHERE uname='$_SESSION[login_user]';");
                    ?>
            <h2 class="profile-text">My Profile</h2>
            <?php
                    $row = mysqli_fetch_assoc($q);
                    echo "<div style='text-align:center'>
                    <img class='rounded-circle profile_img' height=150 width=150 src='./images/".$_SESSION['pic']."'>
                    </div>";
                    ?>
            <div class="prfl">welcome
                <h4>
                    <?php
                        echo $_SESSION['login_user'];
                        ?>
                </h4>
            </div>
            <b>
                <table class="table table-bordered" id="myTable">
                    <?php
             echo "<tr>
             <td>Admin_id</td>
             <td>". $row['admin_id'] . "</td>
             </tr>
             <tr>
             <td>Username</td>
             <td>". $row['uname'] . "</td>
             </tr>
             <tr>
             <td>Email</td>
             <td>". $row['email'] . "</td>
             </tr>
             <tr>
             <td>Contact</td>
             <td>". $row['phone'] . "</td>
             </tr>
             <td>Password</td>
             <td>". $row['pass'] . "</td>
             </tr>"
             ;
            ?>
                </table>
            </b>
        </div>
    </div>
</body>

</html>