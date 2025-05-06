<?php
session_start();
// include "components/_dbconnect.php";
?>
<?php
// if(isset($_SESSION['login_user'])){
//     // timer
//     $b=mysqli_query($conn,"SELECT * from issue_book WHERE uname='$_SESSION[login_user]' and approve='Yes' ORDER BY `return` ASC limit 0,1;");
//     $bid=mysqli_fetch_assoc($b);
//     // echo $bid['bid'];
//     $t=mysqli_query($conn,"SELECT * from `timer` WHERE name='$_SESSION[login_user]' and bid='$bid[bid]';");
//     $res=mysqli_fetch_assoc($t);
//     echo $res['tm'];
// }
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="images/logo1.png" alt="" height="40" class="rounded-circle"
                style="margin-left:25px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="books.php">BOOKS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="feedback.php">FEEDBACK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fine.php">FINES</a>
                </li>
            </ul>

            <ul class="navbar-nav navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link">
                        <p style="color:#ff1503; font-size:20px;" id="demo"></p>
                    </a>
                </li>
                <?php
            if(isset($_SESSION['login_user'])){
                ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="profile.php">PROFILE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="profile.php">
                        <?php
                        echo "<img class='rounded-circle profile_img' height=30 width=30 src='./images/".$_SESSION['pic']."'>";
                        echo " @".$_SESSION['login_user']; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="stlogout.php"><img src="svg/logout.svg" alt=""> LOGOUT</a>
                </li>
                <?php
            }
            else{
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="stlogin.php"><img src="svg/login.svg" alt="">LOGIN</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="stregister.php"><img src="svg/signup.svg" alt="">SIGNUP</a>
                </li>
                <?php
            }
            ?>
            </ul>
        </div>
    </div>
</nav>
<?php
if(isset($_SESSION['login_user'])){
    $day=0;
  $res= mysqli_query($conn,"SELECT return_date from issue_book where uname = '$_SESSION[login_user]' and approve = 'expired';"); 
  while($row = mysqli_fetch_assoc($res)){
    $d = strtotime($row['return_date']);
    $c= strtotime(date("Y-m-d"));
    $diff = $c-$d;
    if($diff>= 0){
   $day= $day+ floor($diff/(60*60*24)); //Days

    }
    
  }
  $_SESSION['fine']= $day*.10;
// echo $day;
}

?>