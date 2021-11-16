<?php
session_start();
$isRestricted = false;
if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
    $isRestricted = true;
}?>

<!doctype html>
<html lang="en">
<head>
    <title>Logout</title>
    <meta http-equiv = "refresh" content = "1; url = del_session.php" />
</head>
</html>