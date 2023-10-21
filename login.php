<!-- Developer: Hash'J ❤️ Programming -->
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['username'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html data-bs-theme="light" id="bg" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - St. Peter Life Plan</title>
    <meta name="description" content="St. Peter Life Plan">
    <link rel="icon" type="image/png" sizes="142x156" href="assets/img/StPeterGoldPreloaderFinale.png">
    <link rel="icon" type="image/png" sizes="142x156" href="assets/img/StPeterGoldPreloaderFinale.png">
    <link rel="icon" type="image/png" sizes="142x156" href="assets/img/StPeterGoldPreloaderFinale.png">
    <link rel="icon" type="image/png" sizes="142x156" href="assets/img/StPeterGoldPreloaderFinale.png">
    <link rel="icon" type="image/png" sizes="142x156" href="assets/img/StPeterGoldPreloaderFinale.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Nunito.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/bs-theme-overrides.css">
</head>

<body>
    <nav class="navbar navbar-expand bg-white shadow mb-4 topbar static-top navbar-light">
        <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button><img src="assets/img/logo2gold.png"></div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row" style="padding: 90px;">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="border rounded flex-grow-1 bg-login-image" style="background-image: url(&quot;assets/img/lifeplan.png&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Welcome Back!</h4>
                                    </div>
                                    <form class="user" method="post" action="functions/login.php">
                                        <div class="mb-3"><input class="form-control form-control-user" type="text" placeholder="Username" name="username" value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : ''; ?>"></div>
                                        <div class="mb-3"><input class="form-control form-control-user" type="password" placeholder="Password" name="password" value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : ''; ?>"></div>
                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check">
                                                    <input class="form-check-input custom-control-input" type="checkbox" name="remember" <?php echo isset($_COOKIE['username']) ? 'checked' : ''; ?>>
                                                <label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                            </div>
                                        </div><button class="btn btn-primary d-block btn-user w-100 mb-5" type="submit">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/js/three.min.js"></script>
    <script src="assets/js/vanta.clouds2.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
<!-- Developer: Hash'J ❤️ Programming -->