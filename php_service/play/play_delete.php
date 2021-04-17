<?php


require_once "../commons/root.php";
require_once "../commons/dao/item.php";

// 判断账号是否有效
$result = root($_POST['user']);
//当前账号
$currentUser = $result['data'];

if($result['code'] == 666) {
    
    //账号有效，获取信息返回
    $delete_data = array('user'=>1,'id'=>$_POST['id']);
    $delete_status = delete($delete_data);
    echo json_encode(array('code'=>666,'data'=>$delete_status));
    

}else {
    
    return json_encode(array('code'=>444,'data'=>null));
}




