<?php 
if(!isset($_COOKIE['user_id'])) {
  $unique = uniqid('', true);
  setcookie('user_id', $unique, time() + (86400 * 30), "/");
  $user_id = $_COOKIE['user_id'];
}else {
  $user_id = $_COOKIE['user_id'];
}