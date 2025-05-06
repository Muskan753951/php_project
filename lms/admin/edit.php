<?php include 'components/_dbconnect.php'; 
//  include 'components/_navbar.php'
include 'components/_stlogin.php';
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
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <style>
        body {
            background-color: rgb(33, 97, 125);
            ;
        }

        .text-center {
            color: #fff;
            margin-top: 20px;
        }

        .prfl_info {
            text-align: center;
            font-size: large;
            font-weight: bolder;
            color: #fff;
        }

        .edit-section {
            display: flex;
            justify-content: center;
            align-items: center;
            /* margin-left: 15rem; */
        }

        .form-control {
            display:inline;
            width: 500px;
            border: 2px solid black;
        
        }
        .btn{
            
    margin-top: 1rem;
    margin-left:-29rem;
}
    </style>
</head>

<body>
    <h2 class="text-center">Edit Information </h2>

    <?php
    $sql= "SELECT * FROM admin_register WHERE uname= '$_SESSION[login_user]'";
    $res= mysqli_query($conn,$sql) or die (mysql_error());
    while($row=mysqli_fetch_assoc($res)) {
        // $pic=$row['pic'];
        $uname=$row['uname'];
        $email=$row['email'];
        $phone=$row['phone'];
        $pass=$row['pass'];
        $cpass=$row['cpass'];
        
    }
    ?>
    <div class="prfl_info">
        <h3>welcome</h3>
        <h4>
            <?php
                echo $_SESSION['login_user'];
                ?>
        </h4>
        <form name=""  action="" method="post">
            <div class = "section edit-section" id="prfl ">
                <div class="modal-body mx-5">
               
                <div class="mb-3 col-md-70 ">
                        <!-- col-md-5 for small -->
                        <label for="pic" class="form-label"></label>
                        <!-- maxlength 11 input length 11 not allow more character input -->
                        <input type="file" id="pic" name="pic" class= " form-control">
                        
                            </div>

                    <div class="mb-3 col-md-70 ">
                        <!-- col-md-5 for small -->
                        <label for="username" class="form-label"></label>
                        <!-- maxlength 11 input length 11 not allow more character input -->
                        <input type="text" maxlength="30" name="uname" placeholder="Username" class="form-control"
                            id="username" aria-describedby="emailHelp">
                            </div>

                        <div class="mb-3 col-md-70 ">
                            <!-- col-md-5 for small -->
                            <label for="email" class="form-label"></label>
                            <!-- maxlength 11 input length 11 not allow more character input -->
                            <input type="text" name="email" placeholder="Email" class="form-control" id="email" aria-describedby="emailHelp">

                        </div>


                        <div class="mb-3 col-md-70 ">
                            <label for="phone" class="form-label"></label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="phone no">

                        </div>
                        <div class="mb-3 col-md-70 ">
                            <label for="password" class="form-label"> </label>
                            <input type="pass" class="form-control" id="pass" name="pass" placeholder="Password">
                        </div>

                        <div class="mb-3 col-md-70 ">
                            <label for="confirm password" class="form-label"> </label>
                            <input type="pass" class="form-control" id="cpass" name="cpass"
                                placeholder="Confirm Password">
                        </div>
                        <button type="submit" class="btn btn-primary ml-50 w-20 rounded-4 p-1">Save Info</button>


                    </div>
                </div>
        </form>
    </div>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // move_uploaded_file($_FILES['file']['tmp_name'], "images/".$_FILES['file']['name']);
        
        $uname=$_POST['uname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $pass=$_POST['pass'];
        $cpass=$_POST['cpass'];
        
        $sql1= "UPDATE admin_register SET uname= '$uname', email='$email', phone= '$phone',pass= '$pass', cpass= '$cpass' WHERE uname='" .$_SESSION['login_user']."' ; ";
        if(mysqli_query($conn,$sql1))
        {
            ?>
            <script>
                alert("Saved Successfully");
            </script>
            <?php
        }
    }
?>
</body>

</html>