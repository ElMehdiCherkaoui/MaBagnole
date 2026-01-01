<?php
require_once "../models/User.php";
(new Users())->logout();
header("location: ../index.php");
