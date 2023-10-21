<?php
include_once 'connection.php';

$sql = "SELECT * FROM videos";
$stmt = $db->prepare($sql);
$stmt->execute();
$videos = $stmt->fetchAll();

foreach ($videos as $video => $value) {
?>
    <tr>
        <td><?php echo $value['id'] ?></td>
        <td>
            <a class="video-link text-decoration-none fs-5 text-dark" href="#" data-id="<?php echo $value['id'] ?>" data-title="<?php echo $value['title'] ?>" data-description="<?php echo $value['description'] ?>" data-video="functions/<?php echo $value['video'] ?>"><?php echo $value['title'] ?></a>
        </td>
        <td class="text-center">
            <button class="btn btn-warning" type="button" data-bs-target="#update" data-bs-toggle="modal" data-id="<?php echo $value['id'] ?>" data-title="<?php echo $value['title'] ?>" data-description="<?php echo $value['description'] ?>"><i class="fas fa-edit"></i></button>
            <button class="btn btn-danger" type="button" data-bs-target="#delete" data-bs-toggle="modal" data-id="<?php echo $value['id'] ?>"><i class="fas fa-trash"></i></button>
        </td>
    </tr>
<?php
}
