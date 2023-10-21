<!-- Developer: Hash'J ❤️ Programming -->
<?php
include_once('connection.php');

$sql = "SELECT * FROM `members`";
$stmt = $db->prepare($sql);
$stmt->execute();
$members = $stmt->fetchAll();
foreach($members as $member){
    $dob = new DateTime($member['bdate']);
    $now = new DateTime();
    $age = $now->diff($dob)->y;
    $fname = explode(' ', $member['fullname'])[0];
    $lname = explode(' ', $member['fullname'])[1];
    ?>
        <tr>
            <td>
                <img class="rounded-circle me-2" width="60" height="60" src="<?php echo 'functions/'.$member['photo']?>">
            </td>
            <td>
                <?php echo $member['fullname']; ?>
            </td>
            <td>
                <?php echo $member['plan']; ?>
            </td>
            <td>
                <?php echo $member['address']; ?>
            </td>
            <td>
                <?php echo $age; ?> Years Old
            </td>
            <td>
                <?php echo $member['gender']; ?>
            </td>
            <td>
                <?php echo $member['bdate']; ?>
            </td>
            <td>
                <?php echo $member['created_at']; ?>
            </td>
            <td class="text-center">
                <button class="btn btn-warning mx-1" type="button" data-bs-target="#update" data-bs-toggle="modal" data-id="<?php echo $member['id']?>" data-fname="<?php echo $lname?>" data-lname="<?php echo $fname?>" data-plan="<?php echo $member['plan']?>" data-address="<?php echo $member['address']?>" data-bdate="<?php echo $member['bdate']?>">Update</button>
                <button class="btn btn-danger mx-1" type="button" data-bs-target="#delete" data-bs-toggle="modal" data-id="<?php echo $member['id']?>">Delete</button>
            </td>
        </tr>
    <?php
}