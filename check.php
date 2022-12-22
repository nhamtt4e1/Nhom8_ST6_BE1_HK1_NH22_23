<?php
session_start();
if(isset($_SESSION['user'])){
    if(isset($_GET['id'])){
        	header('location:checkout.php?id='.$_GET['id']);
    }


}else{

    header('location:login/index.php');
}