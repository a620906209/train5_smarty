<?php
require_once('header.php');
require_once('db.php');

$get_id = $_GET['cust_id'];

$id = $_POST['cust_id'];
$name = $_POST['name'];
$user_id = $_POST['user_id'];
$birth = $_POST['birth'];
$tel = $_POST['tel'];
$postalCode = $_POST['postalCode'];
$address = $_POST['address'];
//載入資料
if(isset($get_id)){
    $datas = array();
    $sql = "SELECT * FROM `customer` Where `cust_id` = $get_id ";

    $result = mysqli_query($link,$sql);

    // 如果有資料
    if ($result) {
        if (mysqli_num_rows($result)>0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $datas[] = $row;
            }
        }
        // mysqli_free_result($result);
    }
    else {
        echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($link);
    }
    if(!empty($result)){
            $smarty->assign('datas',$datas);
    }
    else {
        // 為空表示沒資料
        echo "查無資料";
    }
}

//修改資料
if(isset($id)){
    $data_arr = array();
    $sql_select ="SELECT * FROM `customer` Where `cust_id` = '$id' ";
    $target = mysqli_query($link,$sql_select);
    if(mysqli_num_rows($target) > 0 ){
        while ($row = mysqli_fetch_assoc($target)) {
            $data_arr[] = $row;
        }
    }
    
    if($user_id === $data_arr[0]['user_id']){
        $sql_inster = "UPDATE `customer` SET `name`='$name',`user_id`='$user_id',`birth`='$birth',`tel`='$tel',`postalCode`='$postalCode',`address`='$address' WHERE `cust_id` = $id";
        $target = mysqli_query($link,$sql_inster);
        header("Location: index.php");
        echo "修改成功";
    }else{
        $check_sql = "SELECT * FROM `customer` Where `user_id` = '$user_id'";
        $check_result = mysqli_query($link,$check_sql);
        if(mysqli_num_rows($check_result)>0){
            echo "身分證號以重複";
        }
    }
}






$smarty->display('edit.tpl');
?>