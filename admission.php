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
          <a class="nav-link active" aria-current="page" href="welcome.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admission.php"><u>Admission</u></a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="acadmic.php">Acadmics</a>
        </li>
        

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="sports.php">Sports</a>
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



  <nav class="navbar navbar-expand-lg navbar-light  bg-light ">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      

      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="feesStructure.php"><u>Admission</u>:</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="feesStructure.php">Fees structure</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="cutOff.php">Cut off</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="documents.php">Documents</a>
        </li>

        
        
        
        
       
        
      </ul>
      
      
    </div>
  </div>
</nav>


<div class="container mt-4">
  
  
  <hr>



    <div>
        <h1 style="text-align: center;"><span style="color: #808000;"><img src="C:\Users\SUFI\OneDrive\Desktop\open gates\IMAGES" alt="" /><b><u>ADMISSION</u></b></span></h1>
        </div>
        <hr>
        <div>
        <h2 style="text-align: center;"><span style="color: #993300;"><u>Admission Criteria</u></span></h2>
        <h3 style="text-align: center;">Admission criteria for PICT is beased on the Sate CET Cell, Maharasthra</h3>
        <hr>
        <br>
        <h2 style="text-align: center;"><span style="color: #993300;"><u>Conditions for: Maharastra State Canditaure Candidate</u></span></h2>
        <h6>(i) The Candidate should be an Indian National;</h6>
        <br>
        <h6>(ii) Passed HSC or its equivalent examination with Physics and Mathematics as compulsory subjects along with one of the Chemistry or Biotechnology or Biology or Technical Vocational subject or Computer Science or Information Technology or Informatics Practices or Agriculture or Engineering Graphics or Business Studies or Electronics or Entrepreneurship and obtained at least 45% marks in the above subjects taken together and The Candidate should have appeared in all the subjects in MHT-CET and should</h6>
        <br>
        <h6>(iii)obtain non zero score in MHT-CET</h6>
        <br>
        <h6>(iv) Passed minimum 3 years Diploma in Engineering and Technology and obtained at least 45% marks</h6>
        <br>
        <hr>
        <h2 style="text-align: center;"><span style="color: #993300;"><u>Conditions for: All India Candidature Candidates, Union Territory of Jammu and Kashmir and Union Territory of Ladakh Migrant Candidature Candidates.</u></span></h2>
        <h6 style=>(i) Candidate should be a Indian National</h6>
        <br>
        <h6>(ii) Passed HSC or its equivalent examination with Physics and Mathematics as compulsory subjects along with one of the Chemistry or Biotechnology or Biology or Technical Vocational subject or Computer Science or Information Technology or Informatics Practices or Agriculture or Engineering Graphics or Business Studies or Electronics or Entrepreneurship and obtained at least 45% marks in the above subjects taken together and should obtain non zero positive score in JEE Main (B.E/B.Tech) or the candidate should have appeared in all the subjects in MHT-CET and should obtain non zero score in MHT-CET However, preference shall be given to the candidate obtaining non zero positive score in JEE Main(B.E/B.Tech) over the candidates who obtained non zero score in MHT-CET</h6>
        <br>
        <h6>(iii)) Passed minimum 3 years Diploma in Engineering and Technology and obtained at least 45% marks.</h6>
        <br>
        <hr>
        <h2 style="text-align: center;"><span style="color: #993300;"><u>Conditions for: NRI / OCI / PIO, Children of Indian workers in the Gulf countries, Foreign National</u></span></h2>
        <br>
        <h6>(i) The candidate should have passed the HSC or its equivalent examination with Physics and Mathematics as compulsory subjects along with one of the Chemistry or Biotechnology or Biology or Technical Vocational subject or Computer Science or Information Technology or Informatics Practices or Agriculture or Engineering Graphics or Business Studies or Electronics or Entrepreneurship and obtained at least 45% marks in the above subjects taken together (ii) Any other criterion declared from time to time by the appropriate authority as defined under the Act</h6>
        <br>
        <hr>
        <h1 style="text-align: center;"><span style="color: #993300;"><b><u>Also, there is no separate entrance examination conducted by PICT.</u></b></span></h1>
        </div>
        <hr>
        <div class="topnav" style="text-align: center;"><input type="text" placeholder="Questions Welcomed!!!" /></div>
</body>
</html>
  




</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>