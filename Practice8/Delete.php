<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv = "refresh" content = "3; url = login.php" />
</head>
<body>
Redirecting to login page...
<?php
session_unset();
session_destroy();
?>
</body>
</html>