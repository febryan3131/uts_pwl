<?php
session_start();
unset($_SESSION['MEMBER']);
    //landing page
    header('Location:http://localhost/UTS/index.php?hal=formLogin');