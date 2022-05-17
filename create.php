<?php
require_once('header.php');
require_once('db.php');

$data=[
    'name' => $_POST['name'],
    'user_id' => $_POST['user_id'],
    'birth' => $_POST['birth'],
    'tel' => $_POST['tel'],
    'postalCode' =>$_POST['postalCode'],
    'address'=>$_POST['address']
];

if($_POST['name'] ){
        $sql = "SELECT * FROM `customer`  WHERE `user_id`= '$data[user_id]' ";
        $result = mysqli_query($link,$sql);
        // var_dump(mysqli_num_rows($result));
        if ($result) {
            if (mysqli_num_rows($result) == 0) {
                $sql_insert = "INSERT INTO `customer`( `name`, `user_id`, `birth`, `tel`, `postalCode`, `address`) VALUES ('$data[name]','$data[user_id]','$data[birth]','$data[tel]','$data[postalCode]','$data[address]')";
                mysqli_query($link,$sql_insert);
                header("Location: index.php");
                exit();
            }else{
                echo "身分證已重複";
            }
            mysqli_free_result($result);
        }
        else {
            echo "{$sql_insert} 語法執行失敗，錯誤訊息: " . mysqli_error($link);
        }

        // 處理完後印出資料
        if(!empty($result)){
            // 如果結果不為空，就利用print_r方法印出資料
            print_r($datas);
        }
        else {
            // 為空表示沒資料
            echo "查無資料";
        }
    
}
$smarty->display('create.tpl');
?>