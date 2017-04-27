<?php
session_start();


unset($_SESSION['user']);
//La deconnexion a lieu avec succes
header("Location:index.php?logoff=1");