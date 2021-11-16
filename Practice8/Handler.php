<?php
require 'db.php';
require 'Loading.php';
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <style>
            .container {
                width: 400px;
            }
        </style>
    </head>
    <body style="padding-top: 3rem;">
    <div class="container">
        <?php
        $sql = "INSERT INTO users (email, name, gender, password, path_to_img)
   VALUES ('$email', '$name','$gender', '11111', '$filePath')";
        echo $sql;
        $res = mysqli_query($conn, $sql);
        if ($res) {
            $valid = true;
        }
        ?>
        <hr>
        <a class="btn" href="Adding.php">return back</a>
        <a class="btn" href="Table.php">view list</a>
    </div>
    </body>
    </html>
<?php