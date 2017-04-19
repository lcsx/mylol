<?php
    
    header("Content-Type: text/plain;charset=utf-8"); 

    $data = array(
        array("ID"=>"123","PASSWORD"=>"123")
        array("ID"=>"123456","PASSWORD"=>"123456")
    );
//    $result;
    if($_SERVER["REQUEST_METHOD"]=="GET"){
//        echo "asdfgh";
        GG();
    }
    function GG(){    
        $ID = $_GET["ID"];
        $PASSWORD = $_GET["PASSWORD"];
        global $data;
        foreach($data as $value){
            if($value["ID"] == $ID && $value["PASSWORD"] == $PASSWORD){
                $result = '{"success":true,"msg":"账号：'.$value["ID"].'密码：'.$value["PASSWORD"].'"}';
                break;
            }else{
                $result = '{"success":false,"msg":"请输入正确的账号和密码"}';
            }
           
        }
         echo $result;
    }
?>