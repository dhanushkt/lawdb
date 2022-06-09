<?php
include("../access/config.php");

if (isset($_GET)) {

    $query_shop = mysqli_query($con, "SELECT * FROM shop_det");
    $get_shop_num = mysqli_num_rows($query_shop);

    $shop_names = array();
    $num = 0;

    while($get_shop = mysqli_fetch_assoc($query_shop)){

        //echo $get_shop['shop_name'];
        $shop_names[$num] = $get_shop['shop_name'];
        //echo $shop_names[$num];
        $num++;
    }

    //$shop_names = $get_shop['shop_name'];
    
    //echo json_encode(array("shop_name"=>$shop_names));
    echo json_encode($shop_names);
}

?> 