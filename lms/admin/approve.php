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
        margin-top: 5px;
        width: 500px;
        border: 2px solid black;
    }

    .form-label {
        color: #fff;
        font-size: 20px;
        /* position: relative; 
  /* float: left;
  left: -1rem;
  top: 8px; */
    }

    .btn {
        margin-top: 1rem;
    }

    .addb {
        margin-bottom: 30px;
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
                <h2 class="addb">Approve Request</h2>
                <form name="book.php" action="" method="post">
                    <div class="modal-body mx-5">
                        <div class="mb-3 col-md-70 ">
                            <!-- col-md-5 for small -->
                            <label for="Approve" class="form-label"> Approve or Not:</label>
                            <!-- maxlength 11 input length 11 not allow more character input -->
                            <input type="text" name="approve" placeholder="Approve or Not" class="form-control"
                                id="name">

                        </div>
                        <div class="mb-3 col-md-70 ">
                            <!-- col-md-5 for small -->
                            <label for="issuedate" class="form-label">IssueDate: </label>
                            <!-- maxlength 11 input length 11 not allow more character input -->
                            <input type="date" name="issuedate" placeholder="Issue_date" class="form-control" id="idate"
                                aria-describedby="emailHelp">

                        </div>

                        <div class="mb-3 col-md-70 ">
                            <label for="returndate" class="form-label">ReturnDate:</label>
                            <input type="date" class="form-control" id="rdate" name="returndate"
                                placeholder="Return_date">

                        </div>
                        <!-- <div class="mb-3 col-md-70 ">
                <input type="text" class="form-control" name="tm" placeholder="Return date    Feb 20, 2024 15:00:00" required="">

            </div> -->

                        <button type="submit" class="btn btn-primary ml-50 w-20 rounded-4 p-1">Send</button>


                    </div>
            </div>
            </form>
        </div>
        <?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_SESSION['login_user']))
    {
      // mysqli_query($conn,"INSERT into timer VALUES ('$_SESSION[name]','$_SESSION[bookid]','$_POST[tm]');");
        mysqli_query($conn,"UPDATE `issue_book`SET approve= '$_POST[approve]',issue_date= '$_POST[issuedate]',return_date= '$_POST[returndate]'WHERE uname='$_SESSION[name]'and bookid='$_SESSION[bookid]';");
      mysqli_query($conn,"UPDATE books_data SET quantity=quantity-1 WHERE bookid='$_SESSION[bookid]';");
      mysqli_query($conn,"UPDATE books_data SET bcount=bcount+1 WHERE bookid='$_SESSION[bookid]';");
      $res= mysqli_query($conn,"SELECT quantity from books_data WHERE bookid=' $_SESSION[bookid]';");
      while($row=mysqli_fetch_assoc($res)){
        if($row['quantity']==0){
            mysqli_query($conn," UPDATE books_data SET status= 'Not Available'  WHERE bookid='$_SESSION[bookid]';");
        }
      }
?>
        <script>
        alert("Updated Successfully👍");
        window.location = "requestinfo.php";
        </script>
        <script>
        alert("Books added successfully👍");
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