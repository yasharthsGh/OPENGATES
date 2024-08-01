<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
 
}



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>WELCOME</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h1>OPENGATES</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admission.php">Admission</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="acadmic.php">Acadmics</a>
        </li>
        

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="sports.php"><u>Sports</u></a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="hostel.php">Hostel</a>
        </li>

        
        
        
        
        <li class="nav-item active">
          <a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
        </li>
        
      </ul>
      
      <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
          <a class="nav-link " href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAEdUlEQVRoge1YTUxcVRT+zhsGOoWWElqIVmBqpYBkStopGErrMDCpGW0ZLKmhMVYXRE10ozubtBIXxlWTLkyoVRddWG2Txib2J4GBtgNtodKiEUFC3Bj86c8QmWEe88M7LupowRnem3tf0pjyLd893znf99695548YBnLeLRBZiarr6+32Wy2ViJqY+ZqACUAcpPriqK4e3p6LplZM8usRG63u42IjgAoZeaUMfPz8+8DMNWAKV+gubn5A2Y+ZDB8gpm/VhTliN/v/0O2trQBt9v9HhF9KEANMfNrfX19Z2TqSxloamqqAzAA8a04T0Rev9/fLapBESX+jY8gd44szPyp0+m0iiYQNuDxeLYAcBuJLStK4IAnhM/euY0DntDi5dL8/PxWUR3Cb0/TNN9S62VFCbg2q2jcrKKsKPHPc3txCDlWxvELqx8M9wI4LaJD2AAzu4gWHqGkaJdDhb04kYYJtLvCiMYJJ3pWAQCIyCGqQ2b/bgTSv2k9vOr590sw8zpREcIGiGgtAHz+7m3RFGh3hZNbSdiATBeySXAXY6UoUbaNPnQIGQj2Vr1QsyE6Z5aIrU/NqUH/Jq8IV+gMMHPXwf3BFV9eWtAK0XU8DCLgjY68lLxU63sbwmhvDNmY6BiA0ky1CG8hhRhvt/y54Nn9rpp+Okm1/taeGRBST69GIDQLBf2bvAzlk4I8rCeSHgi1YJinoOH1Qs9PFzMlSxXnocpxABUyOUA0RrVjT4vSJbsQB+T4ADS+IkOXM0DKV1J8AACfkpIgXf5GZS/Y2FSaApepbrxRpr4JF5nWAeCuADEIi6VDtrq0Aaqd+BmgNhCmM6AFwUorOUcnpevLJkiCr1eVxxORCWv20iNSPK7CuiKv3AzxgMn/he59Y2Vr9kpk5+QiK9sGhSwAAI3nkYipiM2FEY+rKNwdN62uaf+FkojHIojHImanTYtHcxp9EK2BWWfJ4e4buR0nYyNBe1QvfiRoj+Z2nIyVHOoeark8u0W2vrABXyDyjC+g9jOUb1njbZFQ2HpweL9Fj3f41kuWSChsBVBLinLTF1CvtPTPbhPVkbEB73nOaQmoxwC6BqABAOyOCoCAod9Lso6O7krLPTq6C1d/tWeBALujMvl4J7Ey6AtEPt43ytmZ6smoG7RcDxdT3HIGwPbFaz8ODGPy1hgA4PmS7/BmVS+qC6YAAKPT69E11oTzv9QAAMq3VqNq+393DwP9OZzYe/rZVXdMN/Di4EyhFrMOIN30ycD44Agmh3+Alma8VxSg3OlARV3NUpXHEog2nNu5xtDFaMwAM/n65y4AeE4vdObeNMLf9+Hu1G+4M3v/UluXq2LtE48jz+HG6sI1RlSdO7vDttuINEMGWgPqKwycMBJrGggvn91h+0IvTPcQ7zvFFg3oNEeVcRCjs5NZV59uQOyxqJuAJ82RZRwMlN8cmHPpxRloo9oeMwSJQGFe8gcyYMQAU60pagTAIN0LTt8AYYMpasSwUS/AyE1cYIIQUTzM2stYxv8CfwGB1GkEqVQ9lQAAAABJRU5ErkJggg=="><?php echo "Welcome ". $_SESSION['username']?></a>
        </li>
        </ul>
      </div>
    </div>
  </div>
</nav>



  




<div class="container mt-4">

    <h1 style="text-align: center;"><span style="color: #808000;"><b><u>PICT Sports Motive:</u></b> </h1>
    <hr>
    <br>
    <h6>Sport allows students to compete against skilled athletes from other colleges and universities. Alongside competition and
        performance, sport lays emphasis on student initiative and team management, allowing participants to shape their own experience.</h6>
        <br>
        <hr>
        
        <h2 style="text-align: center;"><span style="color: #993300;"><u>Sports Management </u></h2> 
        <br>
        
        <h6> Yoga and Pranayama instructor is exclusively appointed to conduct sessions every day.</h6>
<h6>Physical Instructor is exclusively appointed to look after the gym</h6>
<h6>Physical Instructor and members report to the sports in-charge who in turn reports to the head of the Institution, regularly.</h6>
<hr>

            <h2 style="text-align: center;"><span style="color: #993300;"> <u>Sports Facilities</u>  </h2>
            <br>
            <h6>Outdoor and indoor sports facilities are available for Table Tennis, Chess, Carrom, Basketball, Volleyball, etc </h6>


               <h6> Hired ground facilities are available for Cricket, Shuttle Badminton, Football and Athletics. </h6>

               <h6>Students are motivated / encouraged to take part in various tournaments at College / District / University / State / National / International level.
            </h6>
            <br>
            <hr>
            
           <h2 style="text-align: center;"><span style="color: #993300;"><b><u>Elevate PICT (Inter collegiate Students & Corporate)</u></b></h2>
           <hr>
           <br>
           <img src="pictground.jpeg" width="1100" height="800">
           <br> 
           <br>
           <div class="topnav" style="text-align: center;">
                <input type="text" style="text-align: center;" placeholder="Questions Welcomed!!!">
              </div> 
              <hr>       
            
</div>
          


 </body>
</html>