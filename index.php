<?php
require_once('header.php');
require_once('db.php');

$datas = array();
$sql = "SELECT * FROM `customer` ";

$result = mysqli_query($link,$sql);

// 如果有資料
if ($result) {
    if (mysqli_num_rows($result)>0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $datas[] = $row;
        }
    }
    mysqli_free_result($result);
}
else {
    echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($link);
}
if(!empty($result)){
        $smarty->assign('id',$datas);
}
else {
    // 為空表示沒資料
    echo "查無資料";
}


if($_POST['cust_id'] != NULL){
    $id = $_POST['cust_id'];
    echo $id;
    $sql_select ="SELECT * FROM `customer` WHERE cust_id = '$id' ";
    $target = mysqli_query($link,$sql_select);
        if(mysqli_num_rows($target)>0){
            $sql_delete = "DELETE FROM `customer` WHERE cust_id = '$id'";
            mysqli_query($link,$sql_delete);
            header("Location: index.php");
        }else{
            echo '目標不存在';
        }
}
$smarty->display('index.tpl');
?>