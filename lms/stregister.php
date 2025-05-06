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
    .stregister-section {
        background-color: rgb(57, 55, 55);
        width: 100vw;
        height: 100vh;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        background-position: center;
        background-repeat: no-repeat;
    }

    .main2 {
        width: 500px;
        height: 700px;
        text-align: center;
        border-radius: 3rem;
        color: #fff;
    }

    /* ul{
      list-style: none;
    }
    .nav-link{
      color: #8b8d8f;
    }

    .nav-link:hover{
      color: #dedcdc;
    }

    img, svg{
      margin-right: 1rem;
    } */
    </style>
</head>

<body>
    <?php include 'components/_dbconnect.php'; ?>
    <?php require 'components/_stlogin.php'; ?>
    <!-- student register section -->
    <div class="section stregister-section">
        <div class="main2">
            <h1>User Registration form</h1>
            <form name="stu_register" action="" method="post">
                <div class="modal-body mx-5">
                    <div class="mb-3 col-md-70 ">
                        <!-- col-md-5 for small -->
                        <label for="username" class="form-label">Username</label>
                        <!-- maxlength 11 input length 11 not allow more character input -->
                        <input type="text" maxlength="30" name="uname" class="form-control" id="username"
                            aria-describedby="emailHelp">
                        <div class="alert alert-danger mt-2" role="alert">
                            Please enter a name that does not resemble an email address
                        </div>
                        <!-- <p class="text-start">This is the name that will be shown with your messages You may use name which you wish.</p> -->
                    </div>
                    <div class="mb-3 col-md-70 ">
                        <!-- col-md-5 for small -->
                        <label for="username" class="form-label">Email address</label>
                        <!-- maxlength 11 input length 11 not allow more character input -->
                        <input type="email
                        " maxlength="30" name="email" class="form-control" id="username" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3 col-md-70 ">
                        <label for="phoneno" class="form-label">Phone no. </label>
                        <input type="
                        tel" class="form-control" id="phoneno" name="phone">

                    </div>
                    <div class="mb-3 col-md-70 ">
                        <label for="password" class="form-label">Password </label>
                        <input type="password" class="form-control" id="password" name="pass">

                    </div>
                    <div class="mb-3 col-md-70 ">
                        <label for="cpassword" class="form-label"> Confirm Password </label>
                        <input type="password" class="form-control" id="cpassword" name="cpass">
                        <div id="emailHelp" class="text-danger">Make Sure to type same Password.</div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 rounded-4 p-1">Signup</button>
                    <p class="text-success-emphasis">Don't have an Account?<a href="stlogin.php"
                            class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Login
                            now</a></p>
                </div>
                <div class="modal-footer">
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

    $uname=$_POST["uname"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $pass=$_POST["pass"];
    $cpass=$_POST["cpass"];
    
    $count=0;
    $sqli= "SELECT `uname` from `stu_register`";
    $res= mysqli_query($conn,$sqli);

    while($row=mysqli_fetch_assoc($res)){
       if($row['uname']==$_POST["uname"]){
        $count=$count+1;
       }
    }

    if($count==0){
        $sql= "INSERT INTO `stu_register` (`uname`,`email`,`phone`,`pass`,`cpass`,`pic`) VALUES ('$uname','$email','$phone','$pass','$cpass','p.jpg')";
        $result = mysqli_query($conn,$sql);
    
    // if($result){
    //     echo "successful";
    // }
    // else{
    //     echo "err". mysqli_error($conn);
    // }
    ?>
    <script>
    alert("Registration Successfully");
    </script>
    <?php
    }
    else{
        ?>
    <script>
    alert("The username already exist");
    </script>
    <?php
    }
}
?>

    <!-- footer section -->
    <?php require 'components/_footer.php'; ?>
</body>

</html>