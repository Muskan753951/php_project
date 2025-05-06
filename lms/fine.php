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

    .table {
        border: 2px solid black;
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
    </style>
</head>

<body>
    <?php include 'components/_dbconnect.php'; ?>
    <?php require 'components/_stlogin.php' ?>
    <form class="d-flex search-box" method="post" action="">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search"
            required="">
        <button class="btn search-btn" type="submit"><img src="svg/search.svg" alt=""></button>
    </form>
    <h2 class="text-center mt-4">List of Students</h2>

    <div class="container my-4">

        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Bookid</th>
                    <th scope="col">Returned_Date</th>
                    <th scope="col">Days</th>
                    <th scope="col">Fine</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  
  $q=  mysqli_query($conn, "SELECT * FROM `stu_register` WHERE `uname` like '%$_POST[search]%'" );
  if(mysqli_num_rows($q)==0){
    echo  "<h2> Sorry! No Students found. Try Searching again.</h2>";
  }
  else{
while($row = mysqli_fetch_assoc($q)){
echo "<tr>
<td>". $row['uname'] . "</td>
<td>". $row['bid'] . "</td>
<td>". $row['returned'] . "</td>
<td>". $row['days'] . "</td>
<td>". $row['fine'] . "</td>
<td>". $row['status'] . "</td>
</tr>";
}

  }
}
else{
    
  
  $sql= "SELECT * FROM `fines`";
  $res= mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($res)){
echo "<tr>
<td>". $row['uname'] . "</td>
<td>". $row['bid'] . "</td>
<td>". $row['returned'] . "</td>
<td>". $row['days'] . "</td>
<td>". $row['fine'] . "</td>
<td>". $row['status'] . "</td>
</tr>";
}
}

?>


            </tbody>
        </table>
    </div>





    <?php
// $sql="SELECT * FROM `books_data`";
// $res=mysqli_query($conn,$sql);
// $bookid=0;
// while($row=mysqli_fetch_assoc($res)){
//     $bookid=$bookid+1;
// }
?>

    <?php require 'components/_footer.php'; ?>
</body>

</html>