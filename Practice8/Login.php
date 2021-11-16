<?php
session_start();
$isRestricted = false;
if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
    $isRestricted = true;
}?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<div class="container">
    <?php if($isRestricted):?>
        <h3>Add New User</h3>
        <form action="Handler.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="field">
                    <label>Name: <input type="text" name="name"></label>
                </div>
            </div>
            <div class="row">
                <div class="field">
                    <label>E-mail: <input type="email" name="email"><br></label>
                </div>
            </div>
            <div class="row">
                <div class="field">
                    <label>
                        <input class="with-gap" type="radio" name="gender" value="female"/>
                        <span>Female</span>
                    </label>
                </div>
                <div class="field">
                    <label>
                        <input class="with-gap"  type="radio" name="gender" value="male"/>
                        <span>Male</span>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Photo</span>
                        Select image to upload:
                        <input type="file" name="photo" id="fileToUpload">
                        <input type="submit" value="Upload Image" name="submit">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
            </div>
            <input type="submit" class="btn" value="Add">
        </form>
    <?php else:?>
        <span>
           Content is restricted, please <a href="Author.php">Login</a>
       </span>
    <?php endif;?>
</div>
</body>
</html>