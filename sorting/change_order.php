<?php
$db = mysqli_connect ("localhost", "u_valmaplu", "JBiX4Dw1", "valmaplu") or die ("Невозможно подключиться к БД");

//@mysqli_query ($db, 'set character_set_results = "utf8"');

$new_pos = 1;

foreach ($_POST['punkts'] as $item)
{
    mysqli_query($db, "UPDATE `menu_items` SET `position` = '{$new_pos}' WHERE `id` = '{$item}'");
    $new_pos++;
}

