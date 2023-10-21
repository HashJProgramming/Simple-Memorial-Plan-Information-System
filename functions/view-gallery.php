<?php
include_once 'connection.php';

$sql = "SELECT * FROM `gallery`";
$stmt = $db->prepare($sql);
$stmt->execute();
$photos = $stmt->fetchAll();

foreach ($photos as $photo => $value) {
?>
    <div class="col item">
        <a href="functions/<?= $value['photo'] ?>">
            <img class="img-thumbnail img-fluid" src="functions/<?= $value['photo'] ?>">
        </a>
        <div class="row mt-2">
            <div class="col">
                <button class="btn btn-warning w-100" type="button" data-bs-target="#update" data-bs-toggle="modal"
                data-id="<?= $value['id'] ?>"
                >Update</button>
            </div>
            <div class="col">
                <button class="btn btn-danger w-100" type="button" data-bs-target="#delete" data-bs-toggle="modal"
                data-id="<?= $value['id'] ?>"
                >Delete</button>
        </div>
        </div>
    </div>
<?php
}
