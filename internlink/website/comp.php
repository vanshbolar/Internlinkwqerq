<?php

include('./internlink.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INTERNLINK</title>
  <link rel="stylesheet" href="./index.css">
   <!-- Bootstrap CDN -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>


<body>
  
    <!-- start #header -->
    <header id="navbar">
        <nav class="navbar-container container">
          <a href="/" class="home-link">
            <div class="navbar-logo"></div>
            INTERNLINK
          </a>
          <button type="button" id="navbar-toggle" data-toggle="collapse" aria-controls="navbar-menu" aria-label="Toggle menu" aria-expanded="false">
            <span class="icon-bar"></span>
          </button>
          <div id="navbar-menu" aria-labelledby="navbar-toggle">
            <ul class="navbar-links">
              <li class="navbar-item"><a class="navbar-link" href="./website/index.php">Home</a></li>
              <li class="navbar-item"><a class="navbar-link" href="/blog">About</a></li>
              <li class="navbar-item"><a class="navbar-link" href="./dashboard.php">Dashboard</a></li>
              <li class="navbar-item"><a class="navbar-link" href="/contact">Contact</a></li>
            </ul>
          </div>
        </nav>
      </header>
     
      <!-- start #main-site -->
            <!--back to top-->
            <a id="button"></a>
            <!--back to top-->
      <!-- start categories -->
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="./website/html templates/form.css">
     
    </head>
    <body>
    
   

 <?php
        $select_query="SELECT * FROM `intinfo`";
        $result_query=mysqli_query($con,$select_query);

        while($row=mysqli_fetch_assoc($result_query))
        {
          $cname=$row['cname'];
          $cdesc=$row['cdesc'];
          $idesc=$row['idesc'];
          $duration=$row['duration'];
          $time=$row['time'];
          $iname=$row['iname'];
        echo"<div class='container ' style='background-color: biege;'>
        <div class='col-md-12' style='width: 9000px;'>
            <div class='main-description my-9'>
              <br><br><br>
                <div class='name text-bold'>
                  <br>
                  $cname
                </div>
                <div class='product-title text-bold my-3'>
                    DESCRIPTION<br>
                    $cdesc
                </div>
            </div>
            <div class='product-details my-4'>
                <p class='details-title text-color mb-1'>INTERNSHIP NAME<br> Software Engineering Internship</p>
                <br>
                <p class='description'>DESCRIPTION OF INTERNSHIP<br> $idesc</p>
            </div>
            <div class='delivery my-4'>
                <p class='font-weight-bold mb-0'>DURATON<br>$duration</p>
                <br>
                <p>TIME <br>$time</p>
            </div>
            </div>";
        }
            ?>
            
      


           


            
            <!-- The form -->
         <div class="Apply"> 
          <button  onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Apply now</button>
        </div>  
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter your name" name="name" required>

      <label for="regno"><b>Reg no</b></label>
      <input type="text" placeholder="Enter your Reg no" name="regno" required>
        <br>
      
        <label for="stream"><b>Stream</b></label>
      <input type="text" placeholder="Enter your stream" name="stream" required>
        <br>
      <label for="mentor"><b>Select a Mentor</b></label>
      <select name="mentor" >
        <option value="mentor 1">mentor 1</option>
        <option value="mentor 2">mentor 2</option>
        <option value="mentor 3">mentor 3</option>
        <option value="mentor 4">mentor 4</option>
      </select>
      <br>
      
      <label for="cname"><b>Company name</b></label>
      <input type="text" placeholder="Enter company name" name="cname" required>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <button type="submit" value="submit" onclick="document.getElementById('id01').style.display='none'" class="submitbtn">Submit</button>
  </form>
</div>
</div>
             


<script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"/></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</script>
</body>
</html>


