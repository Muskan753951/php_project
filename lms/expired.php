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
    }body {
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
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.p:hover{
    background-color:rgb(248, 208, 159);
}
card{
  width: 400px;
  display:flex;
  justify-content: center;
}

.card-box{
  display: flex;
  justify-content: center;

}

.text-tit{
  margin-left: 10rem;
}
.form-control{
  width: 27rem;
}
.mainbtn{
  float: right;
  margin-bottom: 2rem;
  margin-right: 4rem;
}
.scroll{
        max-height: 190px;
        overflow: auto;
    }
    .fine{
      display:flex;
      justify-content: flex-end;

    }



    </style>
</head>

<body>
    <?php include 'components/_dbconnect.php'; ?>
    <?php require 'components/_stlogin.php' ?>
    <!------sidenav bar------------------->
    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="p"><a href="add.php">Add books</a></div>
  <div class="p"><a href="delete.php">Delete books</a></div>
  <div class="p"><a href="requestinfo.php"> Request Info</a></div>
  <div class="p"><a href="issueinfo.php">Issue Information</a></div>
  <div class="p"><a href="expired.php">Expired List</a></div>
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
  document.getElementById("main").style.marginLeft= "0";
}
</script>


<div class="container my-4 scroll">
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
      <th scope="col">Status</th>
      <th scope="col">Issue_date</th>
      <th scope="col">Return_date</th>
      </tr>
      <thead>
      <tbody>
       
<div class="fine">

  <?php
  $var=0;
$result= mysqli_query($conn, "SELECT * FROM fines where uname= '$_SESSION[login_user]' and status='not paid';");
while($r = mysqli_fetch_assoc($result)){
  $var=$var+$r['fine'];
}
$var2= $var+$_SESSION['fine'];
?>
  <h3>  YOUR FINE IS:
    <?php
   
    echo "$".$var2;
  
    ?>
  </h3>
</div>
        <?php
        if(isset($_SESSION['login_user'])){
        }
            ?>
    <h2 class="text-center">Date Expired List</h2>
    <?php
    
 
  if(isset($_SESSION['login_user'])){
    // $sql="SELECT stu_register.uname,books_data.bookid, books_data.booksname,books_data.authorsname,books_data.edition,books_data.department, issue_book.approve,issue_book.issue_date,issue_book.return_date FROM stu_register inner join issue_book ON stu_register.uname= issue_book.uname inner join books_data ON issue_book.bookid= books_data.bookid WHERE issue_book.approve !='' and issue_book.approve !='yes' ORDER BY issue_book.return_date DESC";
     
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $sql="SELECT stu_register.uname,books_data.bookid, books_data.booksname,books_data.authorsname,books_data.edition,books_data.department, issue_book.approve,issue_book.issue_date,issue_book.return_date FROM stu_register inner join issue_book ON stu_register.uname= issue_book.uname inner join books_data ON issue_book.bookid= books_data.bookid WHERE issue_book.approve ='RETURNED' and issue_book.uname = '$_SESSION[login_user]'' ORDER BY issue_book.return_date DESC";
      $q=mysqli_query($conn,$sql);
    }
    
    elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
      $sql="SELECT stu_register.uname,books_data.bookid, books_data.booksname,books_data.authorsname,books_data.edition,books_data.department, issue_book.approve,issue_book.issue_date,issue_book.return_date FROM stu_register inner join issue_book ON stu_register.uname= issue_book.uname inner join books_data ON issue_book.bookid= books_data.bookid WHERE issue_book.approve ='Expired'and issue_book.uname = '$_SESSION[login_user]  ORDER BY issue_book.return_date DESC";
      $q=mysqli_query($conn,$sql);
    }
    else{
      $sql="SELECT stu_register.uname,books_data.bookid, books_data.booksname,books_data.authorsname,books_data.edition,books_data.department, issue_book.approve,issue_book.issue_date,issue_book.return_date FROM stu_register inner join issue_book ON stu_register.uname= issue_book.uname inner join books_data ON issue_book.bookid= books_data.bookid WHERE issue_book.approve !='' and issue_book.approve !='yes'and issue_book.uname = '$_SESSION[login_user]' ORDER BY issue_book.return_date DESC";
      $q=mysqli_query($conn,$sql);
    }
  
    
//  $q=mysqli_query($conn,$sql);
 while($row = mysqli_fetch_assoc($q)){
//   $d= date("Y-m-d");
//   if($d> $row['return_date']){
//     $c=$c+1;
//     mysqli_query($conn,"UPDATE issue_book SET approve='Expired' where return_date='$row[return_date]' and  approve= 'yes'  limit $c;");
//     echo $d;
  
 
    echo "<tr>
    <td>". $row['uname'] . "</td>
    <td>". $row['bookid'] . "</td>
    <td>". $row['booksname'] . "</td>
    <td>". $row['authorsname'] . "</td>
    <td>". $row['edition'] . "</td>
    <td>". $row['department'] . "</td>
    <td>". $row['approve'] . "</td>
    <td>". $row['issue_date'] . "</td>
    <td>". $row['return_date'] . "</td>
     
    </tr>";
    }

  
  }


    else{
        ?>
        <h3>You need To Login First</h3>
        <?php
    }
   
  ?>

</div>
  </body>
  </html>