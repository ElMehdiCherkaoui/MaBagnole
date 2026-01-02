<?php
require_once "../models/User.php";
(new User())->logout();
header("location: ../index.php");