<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kipusa</title>

    <!-- css style -->
    <link rel="stylesheet" href="style.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- JS Bundles -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Main JS -->
  <script src="main.js"></script>
    <!-- Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


            <!-- <script>
            $(document).ready(function(){
            $("a").hover(function(){
                $(this).css("background-color", "yellow");
                }, function(){
                $(this).css("background-color", "none");
            });
            });
            </script> -->
</head>
<body>


                <!-- style -->

                <!-- End of -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning text-warning fixed-top ">
            
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="assets/img/active-loan.jpg" height="28" alt="CoolBrand" class="rounded-circle hover-zoom"> <span>KIPUSA</span>
            </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="index_home.php" id="home"><b>Home</b></a>
                            </li>&nbsp;&nbsp;
                            <li class="nav-item">
                            <a class="nav-link text-white" href="#">About</a>
                            </li>&nbsp;&nbsp;
                            <li class="nav-item dropdown me-10px">
                                <a class="nav-link dropdown-toggle text-white"  class="btn-list" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Student Enrollment
                                </a>&nbsp;&nbsp;
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item text-success" href="#">First years</a></li>
                                    <li><a class="dropdown-item text-success" href="#">Second years</a></li>
                                    <li><a class="dropdown-item text-success" href="#">Third years</a></li>
                                    <li><a class="dropdown-item text-success" href="#">Fourth years</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-success" href="#">Post Graduate</a></li>
                                </ul>&nbsp;&nbsp;
                                    </li>
                                    <li class="nav-item">
                                    <a href="activities.php" class="nav-link text-white" class="btn-list">Activities</a>
                                    </li>

                                    <li class="nav-item dropdown me-10px">
                                        <a class="nav-link dropdown-toggle text-white" class="btn-list" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Departments
                                        </a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item text-success" href="#">Welfare</a></li>
                                            <li><a class="dropdown-item text-success" href="#">Sports</a></li>
                                            <li><a class="dropdown-item text-success" href="#">Cultural</a></li>
                                        </ul>&nbsp;&nbsp;&nbsp;&nbsp;
                                    </li>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                <li class="nav-item">
                                <a class="nav-link text-white" href="#" class="btn-list" ><b>KIPUSA</b> | Governing Council</a>
                                </li>
                            </ul>

                            
                    <form class="d-flex justify-content-around">
                        

                        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-info" type="submit">Search</button>&nbsp;&nbsp;&nbsp;&nbsp; -->

                        <!-- <input class="form-control me-2" type="search" placeholder="Register" aria-label=""> -->
                        <!-- <button class="btn btn-outline-info" type="submit"><a href="register.php">Register</a></button>&nbsp;&nbsp; -->

                        <!-- <input class="form-control me-2" type="search" placeholder="Login" aria-label=""> -->
                        <style>
                            button a{
                                text-decoration: none;
                                text-transform: uppercase;

                            }
                        </style>
                        <button class="btn btn-outline-info" type="submit"><a href="login.php">Login</a></button>
                    </form>
                </div>
        </div>
    </nav>
    <br><br><br>
    <section>
        <style>
            body {
    background-color: #E3F2FD;
}

.heading{
    font-size:20px;
    font-weight:600;
    color:#3D5AFE;

}

  .line1{
    color:#000;
    font-size:12px;

  }
   .line2{
    color:#000;
    font-size:12px;
    
  }
   .line3{
    color:#000;
    font-size:12px;
    
  }

  .cards{

    transition: all 0.2s ease;
    cursor: pointer;
    

  }
    


.cards:hover{

    box-shadow: 5px 6px 6px 2px #e9ecef;
    transform: scale(1.1);
}
        </style>
    <!-- <div class="main text-center mt-5">
         <h6 class="heading">What's included for 12 months</h6>
         <p class="text-info">Everything you'll need to support customer in your first year</p>
         <p class="text-info">We'll also discount your 2nd year with help Scout 20%</p>
        </div> -->
                           
        <div class="container mt-4 d-flex justify-content-center">
           
         <div class="row g-0">

           <div class="col-md-4 border-right">
                <div class="cards">
                    
               
                <div class="first bg-white p-4 text-center">
                    <img src="https://img.icons8.com/clouds/100/000000/box.png" />

                    <h5>Help Scout plus</h5>
                <p class="line1">No limitation - Its got everything that you 'll need as you grow</p>
                    
                </div>

                 </div>
                  
           </div>



        <div class="col-md-4 border-right">
            <div class="cards">
           <div class=" second bg-white p-4 text-center">
                    <img src="https://img.icons8.com/clouds/100/000000/groups.png"/>

                    <h5>10 Users</h5>
                    <p class="line2">$50/month gets you 10 users, and you can add more $10 pe user</p>
                    
                </div>
            </div>

        </div>




        <div class="col-md-4">

            <div class="cards">
            <div class=" third bg-white p-4 text-center">
                     <img src="https://img.icons8.com/fluent/100/000000/trophy.png"/>
                    <h5>World Class Support</h5>
                    <p class="line3">We'll help you get started and be there when you have questions</p>
                </div>
                </div>
               
            

        </div>

     </div>
           
    </div>
    </section>
    <?php
        include_once("about.php");

     ?>
    <!-- End of Nav -->