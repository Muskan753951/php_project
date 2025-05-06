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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style>
        body{

            background: rgb(34,193,195);
             background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);
             background-size: cover;
              
        }
        ul{
      text-decoration: none;
      
     
    }
    .nav-link{
      color: #858585;
      margin-right:1rem;
     }
       .nav-item a:hover{
        color : #c7c1c1;
       }
       .scroll{
        max-height:210px;
        overflow: auto;
       }
       .table{
        border: 2px solid black;
       }
       
     
    </style>
</head>
<body>
    <?php
include 'components/_dbconnect.php';
require 'components/_stlogin.php';
?>
<h2 class="text-center mt-4 mb-4"> If you have any suggestions or questions please comment below</h2>
<form name="stu_feedback" action= "" method="post">
                <div class="modal-body mx-5">
                    <div class="mb-3 col-md-70 ">
                        <!-- col-md-5 for small -->
                        
                        <!-- maxlength 30 input length 30 not allow more character input -->
                        <textarea name ="comment" class="form-control" id="comment"  cols="30" rows ="10" placeholder="Comment here........"
                            ></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-20 rounded-4 p-1">Comment</button>
                    
                </div>
                </form>
                <div class="container my-4 scroll">
  
  <table class="table table-bordered" id = "myTable">
    <thead>
          <tr>
    
        <th scope="col">Username</th>
        <th scope="col">Feedbacks</th>
       
      </tr>
    </thead>
    <tbody>
            
            <?php
             if($_SERVER['REQUEST_METHOD'] == 'POST'){
             $sql= " INSERT INTO comments  VALUES ( '','$_SESSION[login_user]','$_POST[comment]')";
            if ($res= mysqli_query($conn,$sql)){
            $q= "SELECT * FROM comments ORDER BY comments.comment_id DESC";
            $result=mysqli_query($conn,$q);
            while($row = mysqli_fetch_assoc($result)){
                
                echo "<tr>
                <td>". $row['uname'] . "</td>
                <td>". $row['comment'] . "</td>
                
                </tr>";
                }
            }
        }
        else{
            $q= "SELECT * FROM comments ORDER BY comments.comment_id DESC";
            $result=mysqli_query($conn,$q);
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                <td>". $row['uname'] . "</td>
                <td>". $row['comment'] . "</td>
                
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