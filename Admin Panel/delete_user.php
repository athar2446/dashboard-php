<?php
session_start();
include 'config.php';

if(!isset($_SESSION['admin'])){
  header('location:login.php');
  exit();
}
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $conn->query("DELETE FROM admins WHERE id=$id");
}
header("Location: users.php");
?>