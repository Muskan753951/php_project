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

    .table th {
        background-color: rgb(255, 228, 196);
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

    .btn {
        margin-top: 15px;

        background-color: bisque;

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
    <?php
$b=mysqli_query($conn,"SELECT * FROM `books_data` ORDER BY `books_data`.`bcount` DESC limit 0,3;");
?>
    <div style="width:100%; height:50px;">
        <div style="background-color:#942828; padding:10px;width:15%; height:50px; float:left;">
            <h3 style="color:white;text-align:center;">Trending:</h3>
        </div>
        <div style="background-color:bisque; width:85%; height:50px;float:left; padding:10px;">
            <table>
                <?php
            while($b2=mysqli_fetch_assoc($b)){
                echo "<tr style='color:black; width:400px; float:left;font-size:20px;'>
                <td>". "[".$b2['bookid']."] &nbsp" . "</td>
                <td>". $b2['booksname'] . "</td>
                </tr>";
            }
            ?>
            </table>
        </div>
    </div>

    <!------sidenav bar------------------->
    <?php
     if(isset($_SESSION['login_user'])){
        ?>
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
        <a href="bookrequest.php">Book Request</a>
        <a href="requestinfo.php">Request Info</a>
        <a href="expired.php">Expired list</a>
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
        <?php
     }
     ?>
        <!------------- search bar----------->
        <div>
            <form class="d-flex search-box" method="post" action="">
                <input class="form-control" type="text" name="search" placeholder="Search books..." required=""
                    aria-label="search">
                <button class="btn btn-outline-default" type="submit"><img srcset="SVG/search.svg"> </button>

            </form>
        </div>
        <h2 class="text-center"> List Of Books </h2>

        </tbody>
        </table>
        <div class="container my-4">

            <table class="table" id="myTable">
                <thead>
                    <tr>
                </thead>
                <th scope="col">Book_id</th>
                <th scope="col">Books_name</th>
                <th scope="col">Books_code</th>
                <th scope="col">Authors_name</th>
                <th scope="col">Books_edition</th>
                <th scope="col">Status</th>
                <th scope="col">Quantity</th>
                <th scope="col">Department</th>
                </tr>
                <thead>
                <tbody>
                    <?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  
  $q=  mysqli_query($conn, "SELECT * FROM books_data WHERE booksname like '%$_POST[search]%'" );
  if(mysqli_num_rows($q)==0){
    echo  "<h2> Sorry! No books found. Try Searching again.</h2>";
  }
  else{
while($row = mysqli_fetch_assoc($q)){
echo "<tr>
<td>". $row['bookid'] . "</td>
<td>". $row['booksname'] . "</td>
<td>". $row['bookscode'] . "</td>
<td>". $row['authorsname'] . "</td>
<td>". $row['edition'] . "</td>
<td>". $row['status'] . "</td>
<td>". $row['quantity'] . "</td>
<td>". $row['department'] . "</td> 
</tr>";
}

  }
}
else{
  
  $sql= "SELECT * FROM books_data ORDER BY books_data.booksname ASC";
  $res= mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($res)){
echo "<tr>
<td>". $row['bookid'] . "</td>
<td>". $row['booksname'] . "</td>
<td>". $row['bookscode'] . "</td>
<td>". $row['authorsname'] . "</td>
<td>". $row['edition'] . "</td>
<td>". $row['status'] . "</td>
<td>". $row['quantity'] . "</td>
<td>". $row['department'] . "</td> 
</tr>";
}
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