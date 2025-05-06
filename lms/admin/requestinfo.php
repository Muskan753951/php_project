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
    ul {
        text-decoration: none;
    }

    .nav-link {
        color: #858585;
        margin-right: 1rem;
    }

    .nav-item a:hover {
        color: #c7c1c1;
    }

    .table {
        border: 2px solid black;
    }

    .table th {
        background-color: rgb(255, 228, 196);
    }

    .table tr:hover {
        background-color: rgb(156, 199, 234);
        /* font-weight: bolder; */
    }


    .form-control {
        width: 200px;
        margin-right: 20px;
        margin-top: 15px;
    }

    .search-box {
        margin: 20px;
        justify-content: flex-end;
    }

    /* .btn {
      margin-top: 15px;

      background-color: bisque;

    } */
    .text-center {
        font-weight: bold;
    }

    body {
        font-family: "Lato", sans-serif;
    }

    .sidenav {
        margin-top: 62px;
        height: 100%;
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
    }

    .card {
        width: 400px;
        display: flex;
        justify-content: center;
    }

    .card-box {
        display: flex;
        justify-content: center;

    }

    .text-tit {
        margin-left: 10rem;
    }

    .form-control {
        width: 27rem;
    }

    .mainbtn {
        float: right;
        margin-bottom: 2rem;
        margin-right: 4rem;
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }
    </style>
</head>

<body>

    <?php
include 'components/_dbconnect.php';
include 'components/_stlogin.php';
?>
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
        <a href="profile.php">Profile</a>
        <a href="books.php">Books</a>
        <a href="requestinfo.php">Request Info</a>
        <a href="issueinfo.php">Issue Information</a>
        <a href="expired.php">Expired List</a>

    </div>

    <div id="main">

        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>


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
        <!------------- search bar----------->
        <!-- <div>
    <form class="d-flex search-box" method="post" action="">
      <input class="form-control" type="text" name="search" placeholder="Search books..." required=""
        aria-label="search">
      <button class="btn btn-outline-default" type="submit"><img srcset="SVG/search.svg"> </button>

    </form>
  </div> -->

        <h2 class="text-center"> Book Request Info </h2>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mainbtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Click for Approve
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="text-center text-tit">Approve Form</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card-box">
                            <div class="card">
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Username" name="uname">
                                            <label for="floatingInput">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Bookid" name="bookid">
                                            <label for="floatingInput">Bookid</label>
                                        </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary w-100">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $_SESSION['name']= $_POST['uname'];
  $_SESSION['bookid']= $_POST['bookid'];
  ?>
        <script>
        window.location = "approve.php";
        </script>
        <?php
}
?>
        <!-- </tbody>
  </table> -->
        <!-- <div class="container my-4">

    <table class="table table-bordered" id="myTable">
      <thead>
        <tr>
      </thead>
      <th scope="col">Username</th>
      <th scope="col">Books_id</th>
      <th scope="col">Books_name</th>
      <th scope="col">Authors_name</th>
      <th scope="col">Books_edition</th>
      <th scope="col">Department</th>
      <th scope="col">Approve</th>
      <th scope="col">Issue_date</th>
      <th scope="col">Return_date</th>
      </tr>
      <thead>
      <tbody> -->
        <?php
// if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_SESSION['login_user'])){ 
  $sql= "SELECT stu_register.uname,books_data.bookid, books_data.booksname,books_data.authorsname,books_data.edition,books_data.department FROM stu_register inner join issue_book ON stu_register.uname= issue_book.uname inner join books_data ON issue_book.bookid= books_data.bookid WHERE issue_book.approve='' ";
  $q=mysqli_query($conn,$sql);
  if(mysqli_num_rows($q)==0){
    echo  "<h2> <b>There is no pending Request. <b></h2>";
  }
  else{
    ?>
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
            </thead>
            <th scope="col">Username</th>
            <th scope="col">Books_id</th>
            <th scope="col">Books_name</th>
            <th scope="col">Authors_name</th>
            <th scope="col">Books_edition</th>
            <th scope="col">Department</th>
            <!-- <th scope="col">Approve</th>
      <th scope="col">Issue_date</th>
      <th scope="col">Return_date</th> -->
            </tr>
            <thead>
            <tbody>
                <?php
while($row = mysqli_fetch_assoc($q)){
echo "<tr>
<td>". $row['uname'] . "</td>
<td>". $row['bookid'] . "</td>
<td>". $row['booksname'] . "</td>
<td>". $row['authorsname'] . "</td>
<td>". $row['edition'] . "</td>
<td>". $row['department'] . "</td>
 
</tr>";
}

  }
}

else{
  echo "<div class='container'>
  <h2> Please login first to see the request information! </h2>
  </div> ";
 }
 ?>




            </tbody>
        </table>
    </div>

    <!-- footer section -->
    <?php
     include 'components/_footer.php';
     ?>
    </div>
</body>

</html>