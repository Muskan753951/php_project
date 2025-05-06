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
    .table th {
        background-color: rgb(248, 208, 159);
    }

    .search-box {
        margin-top: 20px;
        justify-content: flex-end;
    }

    .form-control {
        width: 200px;
    }

    .search-btn {
        background-color: rgb(248, 208, 159);
    }

    body {
        background-color: #723030;
        font-family: "Lato", sans-serif;
    }

    .sidenav {
        height: 100%;
        margin-top: 62px;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    #main {
        transition: margin-left .5s;
        padding: 16px;
        margin: 0px, auto;
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }

    .p:hover {
        background-color: rgb(248, 208, 159);
    }

    .addb {
        color: #fff;
        text-align: center;
        /* font-size: 50px;
    font-weight: bolder; */
    }

    .book-section {


        display: flex;
        justify-content: center;
        align-items: center;


    }

    .form-control {
        width: 500px;
        border: 2px solid black;
    }

    .btn {
        margin-top: 1rem;
    }
    </style>
</head>

<body>
    <?php include 'components/_dbconnect.php'; ?>
    <?php require 'components/_stlogin.php' ?>
    <!------sidenav bar------------------->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div style="color:white; margin-left:80px;">
            <?php
   echo "<div style='margin-left:-35px;'>
   <img class='rounded-circle profile_img' height=150 width=150 src='./images/".$_SESSION['pic']."'>";
   "</div>";
   echo "</br>";
   echo "</br>";
   echo " <h3>".$_SESSION['login_user'];" .</h3>";
   echo  "</div>";
   ?>
        </div>
        <div class="p"><a href="add.php">Add books</a></div>
        <div class="p"><a href="delete.php">Delete books</a></div>
        <div class="p"><a href="requestinfo.php">Book Request</a></div>
        <div class="p"><a href="issueinfo.php">Issue Information</a></div>
        <div class="p"><a href="expired.php">Expired List</a></div>
    </div>

    <div id="main">

        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
        <div class="section book-section" id="">
            <div class="main-add">
                <h2 class="addb">Delete Books</h2>
                <form name="book.php" action="" method="post">
                    <div class="modal-body mx-5">
                        <div class="mb-3 col-md-70 ">
                            <!-- col-md-5 for small -->
                            <label for="username" class="form-label"></label>
                            <!-- maxlength 11 input length 11 not allow more character input -->
                            <input type="text" maxlength="30" name="bookid" placeholder="Book id" class="form-control"
                                id="username" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3 col-md-70 ">
                            <!-- col-md-5 for small -->
                            <label for="username" class="form-label"></label>
                            <!-- maxlength 11 input length 11 not allow more character input -->
                            <input type="text
                " name="booksname" placeholder="Booksname" class="form-control" id="bname"
                                aria-describedby="emailHelp">

                        </div>


                        <div class="mb-3 col-md-70 ">
                            <label for="password" class="form-label"></label>
                            <input type="text" class="form-control" id="authorname" name="author"
                                placeholder="authors name">

                        </div>
                        <div class="mb-3 col-md-70 ">
                            <label for="edition" class="form-label"> </label>
                            <input type="text" class="form-control" id="Department" name="department"
                                placeholder="Department">
                        </div>
                        <button type="submit" class="btn btn-primary ml-50 w-20 rounded-4 p-1">Delete Books</button>


                    </div>
            </div>
            </form>
        </div>
        <?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_SESSION['login_user']))
    {
        mysqli_query($conn,"DELETE FROM `books_data` WHERE bookid='$_POST[bookid]' AND booksname='$_POST[booksname]'");
    
?>
        <script>
        alert("Books deleted successfully👍");
        </script>
        <?php
}
else{
    ?>
        <script>
        alert("You need to login first");
        </script>
        <?php
}
}


  


  ?>
    </div>

    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
    </script>
</body>