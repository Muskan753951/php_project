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
                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
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
            <ul class="navbar-nav  navbar-nav-scroll" style="--bs-scroll-height: 100px;">
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
        </div>
    </div>
</nav>