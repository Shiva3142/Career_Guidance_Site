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
                                    <a href="index.html"><img src="images/logo.png" style="height: 65px;" /></a>
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
    <section class="banner_main d-flex flex-column">
        <h1 class="text-center font-weight-bold text-success">Result of Assessment</h1>
        <h1 class="text-center font-weight-bold text-secondary">Hey <?php
            echo $_GET['name']." ".$_GET['surname'];
        ?>! This are the job roles that matched your response</h1>
        <div class="container d-flex justify-content-evenly flex-wrap">
            <?php
        $values = array();

        for ($i = 0; $i < 17; $i++) {
            $values[$i] = $_GET['Select' . ($i + 1)];
        }
        include("./Decision.php");
        include 'database_connection.php';
        $show_count=0;
        $result = CosineSimilarity::compareInput($values);
        $email=$_GET['email'];
        $name=$_GET['name'];
        $surname=$_GET['surname'];
        $str_result=implode(",",$result);
        $sql="INSERT INTO `results` (`email`, `name`, `surname`,`result`) VALUES ('$email', '$name', '$surname', '$str_result')";
        $insert_result=mysqli_query($conn,$sql);
        foreach ($result as $key => $value) {
            if (++$show_count>4) {
                break;
            }
            if (round($value*100,2)>0) {
                echo '
                    <div class="card m-5" style="width: 25rem;">
                        <img class="card-img-top" src="https://source.unsplash.com/1600x900/?' . $key . '" alt="Card image cap">
                        <div class="card-body">
                            <h1 class="font-weight-bold">' . $key . '</h1>
                            <p class="card-text">This Career path is matched with <span class="font-weight-bold text-primary">' . round($value*100,2) . '%</span> with your response</p>
                            <div class="progress">
                                <div class="progress-bar ' . (round($value*100,2)>50?'bg-success':'bg-primary') . '" role="progressbar" style="width: ' . round($value*100,2) . '%" aria-valuenow="' . round($value*100,2) . '" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    ';
                
            }
        }
        ?>

</div>




    </section>

    <footer>
        <div class="">
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