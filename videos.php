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
    <title>Videos - St. Peter Life Plan</title>
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
    <link rel="stylesheet" href="assets/css/datatables.min.css">
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
                            <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link active" href="videos.php">Videos</a></li>
                        </ul><a class="btn btn-light btn-sm d-none d-sm-inline-block" role="button" href="functions/logout.php"><i class="fas fa-user text-body-emphasis fa-sm text-white-50"></i>&nbsp;Logout</a>
                    </div>
                </div>
            </nav>

            <div class="container bg-white rounded pt-4 pb-4">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="mb-0">Dashboard</h3><button class="btn btn-light btn-sm d-none d-sm-inline-block shadow-sm" type="button" data-bs-target="#add" data-bs-toggle="modal"><i class="fas fa-download text-body-emphasis fa-sm text-white-50"></i>Upload Video</button>
                </div>
                <div class="row">
                    <div class="col-xl-8">

                        <video id="video-player" controls width="100%" height="500em">
                            <source id="video-path" src="" type="video/mp4">
                        </video>

                        <div class="d-sm-flex justify-content-between align-items-center mb-4">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h3 class="mb-0" id="video-title"></h3>
                                </div>
                                <div class="col">
                                    <h6 id="video-description"></h6>
                                </div>
                            </div>
                            <a id="video-download" class="btn btn-light btn-sm d-none d-sm-inline-block shadow-sm" role="button" href="#" download>
                                <i class="fas fa-download text-body-emphasis fa-sm text-white-50"></i>Download Video
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table w-100" id="myTable" style="max-height: 29em;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Video Playlist</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include_once 'functions/view-videos.php' ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="add" class="modal fade" role="dialog" tabindex="-1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Upload Video</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <p>Here you can upload your video.</p>
                                <form action="functions/add-video.php" method="post" enctype="multipart/form-data">
                                    <div class="mb-2">
                                        <div class="input-group"><span class="input-group-text">Video Title</span><input class="form-control" type="text" name="title" placeholder="video title" /></div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="input-group"><span class="input-group-text">Description</span><input class="form-control" type="text" name="description" placeholder="video description" /></div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="input-group"><input class="form-control" type="file" name="video" required accept="video/*" /></div>
                                    </div><button class="btn btn-primary w-100" type="submit">Upload</button>
                                </form>
                            </div>
                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
                        </div>
                    </div>
                </div>

                <div id="update" class="modal fade" role="dialog" tabindex="-1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Update Video</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <p>Here you can Update your video.</p>
                                <form action="functions/update-video.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="" />
                                    <div class="mb-2">
                                        <div class="input-group"><span class="input-group-text">Video Title</span><input class="form-control" type="text" name="title" placeholder="video title" /></div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="input-group"><span class="input-group-text">Description</span><input class="form-control" type="text" name="description" placeholder="video description" /></div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="input-group"><input class="form-control" type="file" name="video" required accept="video/*" /></div>
                                    </div><button class="btn btn-primary w-100" type="submit">Upload</button>
                                </form>
                            </div>
                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
                        </div>
                    </div>
                </div>

                <div id="delete" class="modal fade" role="dialog" tabindex="-1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Remove Video</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to remove this video?</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                                <form action="functions/delete-video.php" method="post">
                                    <input type="hidden" name="id" value="" />
                                    <button class="btn btn-danger" type="submit">Remove</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/three.min.js"></script>
    <script src="assets/js/vanta.clouds2.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/Lightbox-Gallery-baguetteBox.min.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script>
        $('#myTable').DataTable({
            dom: '<"top"f>',
            language: {
                search: "",
                searchPlaceholder: "Search Videos..."
            },
            columnDefs: [{
                target: 0,
                visible: false,
                searchable: false
            }, ]
        });

        $(document).ready(function() {
            $(".video-link").on("click", function() {
                var id = $(this).data("id");
                var title = $(this).data("title");
                var description = $(this).data("description");
                var video = $(this).data("video");
                $("#video-path").attr("src", video);
                $("#video-player")[0].load();
                $("#video-player")[0].play();
                $("#video-title").html(title);
                $("#video-download").attr("href", video);
                $("#video-description").html(description);
                console.log(id, title, description, video)
            });

            $('button[data-bs-target="#update"]').on("click", function() {
                var id = $(this).data("id");
                var title = $(this).data("title");
                var description = $(this).data("description");
                var video = $(this).data("video");
                $("#update input[name='id']").val(id);
                $("#update input[name='title']").val(title);
                $("#update input[name='description']").val(description);
                console.log(id, title, description)
            });

            $('button[data-bs-target="#delete"]').on("click", function() {
                var id = $(this).data("id");
                $("#delete input[name='id']").val(id);
                console.log(id)
            });
        })
        console.log();
    </script>
</body>

</html>