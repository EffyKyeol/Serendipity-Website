<?php

  include "../include/DBconnect.php";

  $memberID = $_POST['memberID'];

  $sql = "SELECT * FROM member WHERE memberID = '{$memberID}'";

  $res = $DBconnect->query($sql);


  if($res->num_rows >= 1){
    echo json_encode(array('res'=>'bad'));
  }else{
    echo json_encode(array('res'=>'good'));
  }

?>
