<?php
require 'config.php';
// $_SESSION = [];
session_unset();
session_destroy();
header("Location: ../Main Page/index.php");
$conn->close();
?>