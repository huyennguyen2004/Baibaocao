<?php

if (isset($_REQUEST['login']))
{
    require_once"views/frontend/customer-login.php";
}

if (isset($_REQUEST['logout']))
{
  unset  ($_SESSION['iscustom']);
  unset  ($_SESSION['name']);
  unset ($_SESSION['user_id']);
}
header('location:index.php');
