<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <title>Career Guidance</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/responsive.css">
   <link rel="icon" href="images/logo.png" type="image/gif" />
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body class="main-layout">
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
   <header>
      <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo">
                           <a href="index.html"><img src="images/logo.png" style="
                                 height: 65px;
                                 " /></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <style>
                     .menu-area {
                        display: flex;
                        justify-content: flex-end;
                        align-items: center;
                     }

                     .menu-area button {
                        margin-left: 10px;
                        padding: 5px 20px;
                     }

                     .menu-area button a {
                        background-color: #007bff;
                        color: white;
                        background-color: transparent;
                     }
                  </style>
                  <div class="menu-area">
                     <?php
                     session_start();
                     if (isset($_SESSION['email'])) {
                        echo '
                              <button class="btn-primary">
                                 <a href="#">Hello ' . $_SESSION['name'] . '</a>
                              </button>
                              <button  class="btn-warning">
                                 <a href="/logout.php">Logout</a>
                              </button>
                           ';
                     } else {
                        echo '
                              <button class="btn-primary">
                                 <a href="/login.php">Login</a>
                              </button>
                              <button  class="btn-warning">
                                 <a href="/login.php?form_type=register">Register</a>
                              </button>';
                     }

                     ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <section class="banner_main">
      <div class="container-fluid">
         <div class="row d_flex">
            <div class="col-xl-6 col-lg-6 col-md-6 ">
               <div class="text-bg">
                  <h1>Discover with Your Ideal Career</h1>
                  <span>Career guidance is a formal way for people to receive advice on their career at different
                     stages</span>
                  <a href="./input.php">Check Now</a>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 padding_lert2">

               <div class="text-img">
                  <figure><img src="images/arrow.png" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </section>
   <div class="about">
      <div class="container">
         <div class="row">
            <div class="col-md-10 offset-md-1">
               <div class="titlepage">
                  <span>About our Service</span>
                  <h2>Suggestion on Career</h2>
                  <p>By taking some input based on the some predefined sequence of the Questions we will
                     Advise/Suggest/Recommend You some of the career paths suitable for you</p>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="ccol-md-10 offset-md-1">
               <div class="about_box">
                  <figure><img src="images/about.png" alt="#" /></figure>

               </div>
            </div>


         </div>

      </div>
   </div>

   <footer>
      <div class="footer">
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <p>© 2023 All Rights Reserved. </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>