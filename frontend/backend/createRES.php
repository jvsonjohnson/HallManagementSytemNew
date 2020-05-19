<?php
session_start();
require 'classes.php';
if($_SESSION['isLogged'] === FALSE){
  header('Location: index.php');
}



  $resControll = new ResidentController($data_store);
  #echo "Huh?" . $_SESSION['isLogged'] . "Huhhh? " . $_SERVER['test'] . $sTest;
  $resControll->addResident($_POST['IDnum'], $_POST['cluster_name'], $_POST['household'],$_POST['room_num']);
?>
////if(!empty($_POST['description'])){
    */exit('PASSED');
//} //else {
   /// exit('FAILED');
