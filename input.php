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

                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="banner_main d-flex flex-column">
        <h1 class="text-center font-weight-bold text-primary">Assessment Form for Computer Related Field Students</h1>
        <div class="container">
            <form action="output.php" method="GET">
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault01" class="text-success font-weight-bold">First name</label>
                        <input type="text" name="name" value="Shiv" class="form-control" id="validationDefault01"
                            placeholder="First name" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="text-success font-weight-bold" for="validationDefault02">Last name</label>
                        <input type="text" name="surname" value="Kumar" class="form-control" id="validationDefault02"
                            placeholder="Last name" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="text-success font-weight-bold" for="validationDefault02">Email</label>
                        <input type="text" name="email" value="abc@mail.com" class="form-control" id="validationDefault02"
                            placeholder="Last name" required>
                    </div>
                </div>
                <?php
                $questions=[
                    "Rate your Database Skills",
                    "Interested in Computer Architecture?",
                    "Do you have knowledge of Distributed Computing Systems?",
                    "Experience Cyber Security?",
                    "Do you have Networking curiosity?",
                    "Familiar about Software Development?",
                    "Rate your Programming Skills",
                    "Rate your Project Management Skills",
                    "Any Knowledge of Computer Forensics Fundamentals?",
                    "What about Technical Communication?",
                    "Any AI ML Experience?",
                    "Do you interested in Software Engineering",
                    "Rate your Business Analysis skills",
                    "Rate your Communication skills",
                    "Do you know about Data Science",
                    "What about your Troubleshooting skills ?",
                    "Rate your Graphics Designing Skills"
                ];
foreach ($questions as $i => $value) {
    echo '
    <div class="form-row d-flex flex-column mb-3">
    <label class="text-success font-weight-bold" for="Select'.($i+1).'">'.$value.'</label>
    <select name="Select'.($i+1).'" id="Select'.($i+1).'">
        <option selected value="Not Interested">Not Interested</option>
        <option value="Poor">Poor</option>
        <option value="Beginner">Beginner</option>
        <option value="Average">Average</option>
        <option value="Intermediate">Intermediate</option>
        <option value="Excellent">Excellent</option>
        <option value="Professional">Professional</option>
    </select>
</div>
    
    
    
    ';
}


                ?>
                <button class="btn btn-primary my-3 float-right px-5" type="submit">Submit</button>
            </form>
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