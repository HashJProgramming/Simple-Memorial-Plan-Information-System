<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html data-bs-theme="light" id="bg" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - St. Peter Life Plan</title>
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
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery-baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Centered-Links-icons.css">
</head>

<body id="page-top">
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-expand-md bg-body py-3 mb-4 shadow-lg">
                <div class="container-fluid"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-3"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-3">
                        <a href="index.php">
                            <img src="assets/img/logo2gold.png">
                        </a>
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link active" href="gallery.php">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link" href="videos.php">Videos</a></li>
                        </ul><a class="btn btn-light btn-sm d-none d-sm-inline-block" role="button" href="functions/logout.php"><i class="fas fa-user text-body-emphasis fa-sm text-white-50"></i>&nbsp;Logout</a>
                    </div>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-white mb-0">Gallery</h3><button class="btn btn-light btn-sm d-none d-sm-inline-block" type="button" data-bs-target="#add" data-bs-toggle="modal"><i class="fas fa-download text-body-emphasis fa-sm text-white-50"></i>&nbsp;Add Photo</button>
                </div>
                <section class="photo-gallery py-4 py-xl-5">
                    <div class="container">
                        <div class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox="">
                            <?php
                            include_once 'functions/view-gallery.php';
                            ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <div class="modal fade" role="dialog" tabindex="-1" id="add">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Photo</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Here you can add your photo the gallery.</p>
                    <form class="mb-4" action="functions/add-gallery.php" method="post" enctype="multipart/form-data">
                        <input class="form-control mb-4" type="file" required="" accept="image/*" name="image">
                        <img class="img-thumbnail img-fluid img-preview shadow" src="assets/img/lifeplan.png" width="465em" loading="lazy">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Save</button></div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="update">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Photo</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Here you can update your photo.</p>
                    <form class="mb-4" action="functions/update-gallery.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id">
                        <input class="form-control mb-4" type="file" required="" accept="image/*" name="image">
                        <img class="img-thumbnail img-fluid img-preview shadow" src="assets/img/lifeplan.png" width="465em" loading="lazy">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Save</button></div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="delete">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Photo</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this Photo?</p>
                </div>
                <form action="functions/delete-gallery.php" method="post">
                    <input type="hidden" name="id">
                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-danger" type="submit">Delete</button></div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/three.min.js"></script>
    <script src="assets/js/vanta.clouds2.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/Lightbox-Gallery-baguetteBox.min.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script>
        const photoFiles = document.querySelectorAll(".form-control");
        const previewPhotos = document.querySelectorAll(".img-preview");
        photoFiles.forEach((photoFile, index) => {
            photoFile.onchange = () => {
                const file = photoFile.files.item(0);
                const reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = () => {
                    previewPhotos[index].src = reader.result;
                };
            };
        });
    </script>
</body>

</html>