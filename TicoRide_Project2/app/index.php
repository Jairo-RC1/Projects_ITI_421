<?php
session_start();

if ($_SESSION && $_SESSION['user']) {
  header('Location: ../app/pages/dashboard.php');
} else {
  header('Location: ../app/pages/login.php');
}