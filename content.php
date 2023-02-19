<?php
if(isset($_POST['num'])){
$_POST['total']=$_POST['price']*$_POST['num'];
}
if(isset($_POST['submit'])){

    $n_array= array(
        "phone" => $_POST['phone'],
        "total" => $_POST['total']
    );

    if(filesize("data.json") == 0){
        $f_record = array($n_array);

        $data_to_save=$f_record;
    }else{
         
        $o_records= json_decode(file_get_contents("data.json"));
         
        array_push($o_records,$n_array);

        $data_to_save = $o_records;
    }
    if(!file_put_contents("data.json",json_encode($data_to_save,JSON_PRETTY_PRINT),LOCK_EX)){
        $error = "error please try again";
    }
    else{
        $success="success";
    }
}