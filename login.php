<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/logo.png" type="image/gif" />

    <title>Login </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            max-width: 400px;
            min-width: 300px;
        }
    </style>


    <link href="sign-in.css" rel="stylesheet">
</head>

<body class="text-center">
    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Empty Fields!</strong> Please fill all the fields.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        } else if ($_GET['error'] == "wrongpassword") {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Wrong Credentials!</strong> Please enter correct Credentials.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        } else if ($_GET['error'] == "nouser") {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>No User!</strong> Please register first.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        } else if ($_GET['error'] == "alreadyregistered") {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>User Already Exists!</strong> .
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    }


    ?>

    <main class="form-signin m-auto">


        <?php
        if (isset($_GET['form_type']) && $_GET['form_type'] == "register") {
            echo '
                <form action="register.php" method="POST">
                <img class="mb-4" src="./images/logo.png" alt="" width="112" height="57">
                <h1 class="h3 mb-3 fw-normal">Please Register</h1>
    
                <div class="form-floating my-2">
                    <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Enter Name">
                    <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating my-2">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating my-2">
                    <input type="tel" name="phone" class="form-control" id="floatingInput" placeholder="9999999999">
                    <label for="floatingInput">Phone Number</label>
                </div>
                <div class="form-floating my-2">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
                ';

        } else {
            echo '
                
                <form action="signin.php" method="POST">
                    <img class="mb-4" src="./images/logo.png" alt="" width="112" height="57">
                    <h1 class="h3 mb-3 fw-normal">Please Login</h1>
        
                    <div class="form-floating my-2">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating my-2">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                <a href="/login.php?form_type=register">if not register?</a>
                </form>
                
                
                ';

        }



        ?>


    </main>



</body>

</html>