<!-- Developer: Hash'J ❤️ Programming -->
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
                            <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link" href="videos.php">Videos</a></li>
                        </ul><a class="btn btn-light btn-sm d-none d-sm-inline-block" role="button" href="functions/logout.php"><i class="fas fa-user text-body-emphasis fa-sm text-white-50"></i>&nbsp;Logout</a>
                    </div>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-white mb-0">Dashboard</h3><button class="btn btn-light btn-sm d-none d-sm-inline-block" type="button" data-bs-target="#add" data-bs-toggle="modal"><i class="fas fa-download text-body-emphasis fa-sm text-white-50"></i>&nbsp;Add Member</button>
                </div>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 fw-bold">Members Info</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                            <table class="table my-0" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Plan</th>
                                        <th>Address</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Birthdate</th>
                                        <th>Created At</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include_once('functions/view-member.php');
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr></tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <div class="modal fade" role="dialog" tabindex="-1" id="add">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Member</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="functions/add-member.php" method="post" enctype="multipart/form-data">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div><label class="form-label">Firstname</label><input class="form-control mb-1" type="text" name="fname"></div>
                                </div>
                                <div class="col-md-6">
                                    <div><label class="form-label">Lastname</label><input class="form-control mb-1" type="text" name="lname"></div>
                                </div>
                                <div class="col-md-6">
                                    <div><label class="form-label">Plan</label><select class="form-select mb-1" name="plan">
                                            <optgroup label="Select plan">
                                                <option value="St. Anne - PHP 157,500.00" selected="">St. Anne - PHP 157,500.00</option>
                                                <option value="St. Bernadette - PHP 125,000.00">St. Bernadette - PHP 125,000.00</option>
                                                <option value="St. Claire - PHP 98,500.00">St. Claire - PHP 98,500.00</option>
                                                <option value="St. Dominique - PHP 67,500.00">St. Dominique - PHP 67,500.00</option>
                                                <option value="St. Gregory - PHP 57,000.00">St. Gregory - PHP 57,000.00</option>
                                                <option value="St. George - PHP 53,000.00">St. George - PHP 53,000.00</option>
                                            </optgroup>
                                        </select></div>
                                </div>
                                <div class="col-md-6">
                                    <div><label class="form-label">Gender</label>
                                    <select class="form-select mb-1" name="gender">
                                            <optgroup label="Select gender">
                                                <option value="Male" selected="">Male</option>
                                                <option value="Female">Female</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div><label class="form-label">Photo</label>
                                        <input class="form-control" accept="image/*" type="file" name="photo" id="photoFileAdd" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div><label class="form-label">Birthdate</label><input class="form-control mb-1" type="date" name="bdate"></div>
                                </div>
                            </div>
                            <div class="mb-4"><label class="form-label">Address</label><input class="form-control mb-1" type="text" name="address"></div>
                        </div>
                        <div class="container">
                            <img id="previewPhotoAdd" src="assets/img/logo2gold.png" class="img-fluid" alt="">
                        </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Save</button></div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="update">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Member</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="functions/update-member.php" method="post"  enctype="multipart/form-data">
                        <input type="hidden" name="id">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div><label class="form-label">Firstname</label><input class="form-control mb-1" type="text" name="fname"></div>
                                </div>
                                <div class="col-md-6">
                                    <div><label class="form-label">Lastname</label><input class="form-control mb-1" type="text" name="lname"></div>
                                </div>
                                <div class="col-md-6">
                                    <div><label class="form-label">Plan</label>
                                    <select class="form-select mb-1" name="plan">
                                            <optgroup label="Select plan">
                                                <option value="St. Anne - PHP 157,500.00" selected="">St. Anne - PHP 157,500.00</option>
                                                <option value="St. Bernadette - PHP 125,000.00">St. Bernadette - PHP 125,000.00</option>
                                                <option value="St. Claire - PHP 98,500.00">St. Claire - PHP 98,500.00</option>
                                                <option value="St. Dominique - PHP 67,500.00">St. Dominique - PHP 67,500.00</option>
                                                <option value="St. Gregory - PHP 57,000.00">St. Gregory - PHP 57,000.00</option>
                                                <option value="St. George - PHP 53,000.00">St. George - PHP 53,000.00</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div><label class="form-label">Gender</label>
                                    <select class="form-select mb-1" name="gender">
                                            <optgroup label="Select gender">
                                                <option value="Male" selected="">Male</option>
                                                <option value="Female">Female</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div><label class="form-label">Photo</label>
                                        <input class="form-control" accept="image/*" type="file" name="photo" id="photoFileUpdate" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div><label class="form-label">Birthdate</label><input class="form-control mb-1" type="date" name="bdate"></div>
                                </div>
                            </div>
                            <div class="mb-4"><label class="form-label">Address</label><input class="form-control mb-1" type="text" name="address"></div>
                        </div>
                        <div class="container">
                            <img id="previewPhotoUpdate" src="assets/img/logo2gold.png" class="img-fluid" alt="">
                        </div>
                    </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Save</button></div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="delete">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Member</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this member?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                    <form action="functions/delete-member.php" method="post">
                        <input type="hidden" name="id">
                        <button class="btn btn-danger" type="submit">Delete</button></div>
                    </form>
                    
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/js/three.min.js"></script>
    <script src="assets/js/vanta.clouds2.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script>
        $('#myTable').DataTable({
            dom: '<"top"f>',
            language: {
                search: "",
                searchPlaceholder: "Search member..."
            }
        });

        const photoFileAdd = document.getElementById("photoFileAdd");
        const previewPhotoAdd = document.getElementById("previewPhotoAdd");
        photoFileAdd.onchange = () => {
            const file = photoFileAdd.files.item(0);
            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = () => {
                previewPhotoAdd.src = reader.result;
            };
        };

        const photoFileUpdate = document.getElementById("photoFileUpdate");
        const previewPhotoUpdate = document.getElementById("previewPhotoUpdate");
        photoFileUpdate.onchange = () => {
            const file = photoFileUpdate.files.item(0);
            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = () => {
                previewPhotoUpdate.src = reader.result;
            };
        };
    </script>
    <script src="assets/js/main.js"></script>

</body>

</html>
<!-- Developer: Hash'J ❤️ Programming -->