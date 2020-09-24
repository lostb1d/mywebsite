<?php
  include_once "dbc.php"
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinesh Bishwakarma | Geomatics Engineer</title>
    
    <!-- Bootstrap Css file -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    
    <!-- <link rel="stylesheet" href="css/all.min.css"> -->

    <!-- custom css  -->
    <link rel="stylesheet" href="css/style.css">


    <!-- ---- font awesome ----  -->
    <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.min.css">
    

    <!-- fab css  -->
    <link rel="stylesheet" href="css/fab.css">

</head>
<body>

 <!-- ===========================start header area ============================ -->
    
    <div class="header_area">
      <div class="main-menu">
        <nav class="navbar navbar-expand-lg navbar-light">
          <!-- <a class="navbar-brand" href="#"><img src="img/logo.png"></a> -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mr-auto"></div>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#home">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#skill">Skills</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#involvement">Involvements</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#project">Projects</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>

              <li class="nav-item active">
                <a class="nav-link" href="quiz.php">Quiz</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>

            </ul>
          </div>
        </nav>
      </div>
    </div>

    <!-- ===========================end header area ============================ -->

    <br><br>
    <h1 class="blink_me quiz_title">Welcome to Public Service Commission Quiz for Geomatics Engineer</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Quiz</th>
      <th scope="col">Type</th>
      <th scope="col">Link</th>
    </tr>
  </thead>
  


<!-- ------------------- pagination -----------------  -->
<?php
  include_once 'dbc.php';

  $results_per_page = 10;

  // finding out the number of results in database
  $sql = "SELECT * from quiz";
  $result = mysqli_query($conn,$sql);
  $number_of_results = mysqli_num_rows($result);

  // while($row = mysqli_fetch_array($result)){
  //   echo $row['title'] . $row['link'] . '<br>';

  // }


 $number_of_pages = ceil($number_of_results / $results_per_page);

 if(!isset($_GET['page'])){
   $page = 1;
 }else{
   $page = $_GET['page'];
 }

 $this_page_first_result = ($page-1) * $results_per_page;

 $sql = "SELECT * FROM quiz LIMIT " . $this_page_first_result . "," . $results_per_page;

 $result = mysqli_query($conn,$sql);
 $count = 1;
echo "<tbody>";

 while($row = mysqli_fetch_array($result)){
   echo "<tr><th scope='row'>". $row['date'] . "</th>";
    echo "<td>". $row['title'] . "</td>";
       echo "<td>" . $row['class'] . "</td>";
       echo "<td><a href=". $row['link'] ."><h4>Play Quiz</h4>" . "</a></td>";
       echo "</tr>";
       
  // echo $row['title'] . $row['class'] . $row['link'] . "<br>";
 }

 
echo "</tbody></table>";
echo "<nav aria-label='Page navigation example'>";
echo "<ul class='pagination pagination-sm justify-content-center'>";
  // for($page = 1; $page<=$number_of_pages; $page++){

  //   echo "<li class='page-item'><a class='page-link' href='quiz.php?page=". $page . "'>" . $page ."</a></li>";
  //   // echo '<a href="quiz.php?page=' . $page . '">' . $page . '</a>';
    
  // }

  for($i = 1; $i<=$number_of_pages; $i++){

    if($page==$i){
        $class = "class='page-item active'";

    }else{
      $class = "class='page-item'";
    }
    echo "<li ". $class . "><a class='page-link' href='quiz.php?page=". $i . "'>" . $i ."</a></li>" ;
    // echo '<a href="quiz.php?page=' . $page . '">' . $page . '</a>';

    
    
  }
  // echo '<li class="page-item"> <a class="page-link" href="quiz.php?page='.$i++. '">Next</a>  </li>';
echo "</ul></nav>";

?>

<!-- ------------ pagination ends -------------------- -->




       <!-- ========================== footer area ============================= -->

    <footer class="mainfooter" role="contentinfo">
      <div class="footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <!--Column1-->
            <div class="footer-pad">
              <h4>My Projects</h4>
              <ul class="list-unstyled">
                <li><a href="http://www.dineshbishwakarma.com.np/vehicle_rental/">Vehicle Rental Service</a></li>
                <li><a href="http://www.jaljala.com.np">Jaljala, Your Travel Advisor</a></li>
                <li><a href="http://www.dineshbishwakarma.com.np/jaggadalal">Jagga Dalal</a></li>

              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <!--Column1-->
            <div class="footer-pad">
              <h4>Friends</h4>
              <ul class="list-unstyled">
                <li><a href="https://kaditya97.com.np/">Aditya Kushwaha</a></li>
                <li><a href="http://sunnylabh.com.np/">Sunny Kumar Labh</a></li>
                <li><a href="http://shilpabhandari.com.np/">Shilpa Bhandari</a></li>
                <li><a href="http://sameep.com.np/">Sameep Yogi</a></li>
                <li><a href="http://biratlamichhane.com.np/">Birat Lamichhane</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <!--Column1-->
            <div class="footer-pad">
              <h4>Important Links</h4>
              <ul class="list-unstyled">
                <li><a href="http://www.ioe.edu.np">Institute of Engineering(I.O.E)</a></li>
                <li><a href="http://www.ioepas.edu.np">I.O.E Pashchimanchal Campus</a></li>
                <li><a href="http://www.ioepas.edu.np/cssgs">CSSGS</a></li>
                <li><a href="https://www.ait.ac.th/">Asian Institute of Technology</a></li>
                <li><a href="http://www.ioegesan.org">Geomatics Engineering Students Association of Nepal</a></li>
                <li><a href="http://www.gisjobs.com">GIS Jobs</a></li>
                <li>
                  <a href="#"></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <h4>Follow Me</h4>
                <ul class="social-network social-circle">
                 <li><a href="https://wwww.facebook.com/lostb1" target="_new" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="https://www.linkedin.com/in/lostb1" target="_new" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                 <li><a href="https://www.twitter.com/mylife_dinesh08" target="_new" class="icoLinkedin" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="https://www.instagram.com/lostb1" target="_new" class="icoLinkedin" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                 <li><a href="https://www.github.com/lostb1d" target="_new" class="icoLinkedin" title="Github"><i class="fa fa-github"></i></a></li>
                </ul>				
        </div>
        </div>
      <div class="row">
        <div class="col-md-12 copy">
          <p class="text-center">&copy; Copyright 2020 - Dinesh Bishwakarma.  All rights reserved.</p>
        </div>
      </div>
    
    
      </div>
      </div>
    </footer>
    <!-- ======================== footer area ends ============================ -->

</body>

</html>
