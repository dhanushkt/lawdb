<?php

include("../access/config.php");

if (isset($_POST)) {

    $order_date = $_POST["location"];
    $shop_name = $_POST["orderDate"];

    $get_shop_id = mysqli_query($con, "SELECT * FROM shop_det WHERE shop_name='$shop_name'");
    $get_shop_id_fetch = mysqli_fetch_assoc($get_shop_id);

    $shop_id = $get_shop_id_fetch['shop_id'];

    $query_shop = mysqli_query($con, "INSERT INTO order_table (shop_id, date) VALUES ('$shop_id','$order_date') ");

    echo json_encode(array("shop_name"=>$shop_name, "order_date"=>$order_date));
}

?>