<?php

require('../inc/essential.php');
require('../inc/db_config.php');
adminLogin();


if (isset($_POST['add_room'])) {

    $features = filteration(json_decode($_POST['features']));
    $facilities = filteration(json_decode($_POST['facilities']));

    $frm_data = filteration($_POST);
    $flag = 0;

    $q1 = "INSERT INTO `rooms`(`name`, `area`, `price`, `quantity`, `adult`, `children`, `description`) VALUES (?,?,?,?,?,?,?)";
    $values = [$frm_data['name'], $frm_data['area'], $frm_data['price'], $frm_data['quantity'], $frm_data['adult'], $frm_data['children'], $frm_data['desc']];

    if (insert($q1, $values, 'siiiiis')) {
        $flag = 1;
    }

    $room_id = mysqli_insert_id($conn);

    $q2 = "INSERT INTO `rooms_facilities`(`room_id`, `facilities_id`) VALUES (?,?)";

    if ($stmt = mysqli_prepare($conn, $q2)) {
        foreach ($facilities as $f) {
            mysqli_stmt_bind_param($stmt, "ii", $room_id, $f);
            mysqli_stmt_execute($stmt);
        }
        mysqli_stmt_close($stmt);
    } else {
        $flag = 0;
        die('Query cannot be prepared - insert');
    }

    $q3 = "INSERT INTO `rooms_features`(`room_id`, `features_id`) VALUES (?,?)";

    if ($stmt = mysqli_prepare($conn, $q3)) {
        foreach ($features as $f) {
            mysqli_stmt_bind_param($stmt, "ii", $room_id, $f);
            mysqli_stmt_execute($stmt);
        }
        mysqli_stmt_close($stmt);
    } else {
        $flag = 0;
        die('Query cannot be prepared - insert');
    }

    if ($flag=1) {
        echo 1;
    } else {
        echo 0;
    }
}

?>
