<?php
session_start();
$isRestricted = false;
if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
    $isRestricted = true;
}
require 'db.php';
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $i = 0;
    while($row = $result->fetch_assoc()) {
        $i++;
        $users[] = [
            'name' => $row['name'],
            'email' => $row['email'],
            'gender' => $row['gender'],
            'path'=>$row['path_to_img']
        ];
    }
}

for($i = 0; $i < count($users); $i++) {
    echo "</br>";
    echo " <td> ".$users[$i]['name']." </td> ";
    echo " <td> ".$users[$i]['email']." </td> ";
    echo " <td> ".$users[$i]['gender']." </td> ";
    $img = pathinfo($users[$i]['filePath']);
    if ($users[$i]['filePath'] == " ")
        $img['basename'] = "picture.png";
    echo "<td>"."<img src='"."public/images/".$img['basename']."' alt='' width='50' height='50'"."</td>";
}