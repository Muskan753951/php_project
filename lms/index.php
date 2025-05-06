<?php
session_start();
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
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

html{
    font-size: 85.56%;
}

.navbar-collapse ul{
    display: flex;
    gap: 2rem;
    margin: 0 4rem;
}

body{
    overflow-x: hidden;
}
/* hero section */

.hero-section{
    background-image: url(images/bg.jpg);
    width: 100vw;
    height: 100vh;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    background-position: center;
    background-repeat: no-repeat;
}

.main{
    width: 40rem;
    height: 30rem;
    /* background-color: red; */
    text-align: center;
    backdrop-filter: blur(10px);
    border-radius: 3rem;
    box-shadow: inset 4px 4px 10px black, 4px 4px 10px black;
    color: #fff;
}

.main h3{
    margin: 4rem 0;
    font-size: 3rem;
    
}

.main p{
    font-size: 2rem;
}  

/* footer */

.footer-section{
    background-color: #000;
    bottom:0;
}

.footer-section p a{
    color: #fff;
    font-size: 1.5rem;
    text-decoration: none;
    display: block;
    text-align: center;

}

/* social media */
.container .f-social-icons{
    font-size: 1.5rem;
    text-align: center;
    /* margin: 1rem; */
}

.f-social-icons a ion-icon{
    /* margin: 1rem; */
    border: 2px solid #fff;
    justify-content: center;
    padding:0.5rem;
    color: #fff;
    /* background-color: red; */
    border-radius: 18% 82% 25% 75% / 79% 17% 83% 21%;
    display: inline-block;
    animation: watereffect 3s linear infinite;
}

.f-social-icons a ion-icon:hover, .f-social-icons a ion-icon:active{
    color: rgb(28, 28, 28);
}


@keyframes watereffect {
    0% {
        border-radius: 18% 82% 25% 75% / 79% 17% 83% 21%;
    }

    50% {
        border-radius: 56% 44% 65% 35% / 48% 51% 49% 52%;
    }

    100% {
        border-radius: 18% 82% 25% 75% / 79% 17% 83% 21%;
    }
}
    </style>
</head>

<body>
    <?php
  if(isset($_SESSION['login_user'])){
      require 'components/_stlogout.php';
    }
    else{
      require 'components/_navbar.php';
  }
    ?>

    <!-- hero section -->
    <div class="section hero-section">
        <div class="main">
            <h3>Welcome to Library</h3>
            <p>Opens at 09:00am</p>
            <p>Closes at 06:00pm</p>
        </div>
    </div>
  <?php require 'components/_footer.php'; ?>
</body>

</html>