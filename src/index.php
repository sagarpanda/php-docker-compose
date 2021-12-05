<?php

echo "Hello docker world!!! <br>";

$mysqli = new mysqli("db", "root", "example", "testdb");

// $sql = "INSERT INTO users (name, city) VALUES('John Doe', 'NY')";
// $result = $mysqli->query($sql);
// $sql = "INSERT INTO users (name, city) VALUES('Jane Doe', 'LA')";
// $result = $mysqli->query($sql);

$sql = 'SELECT * FROM users';

if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->name . " " . $user->city;
    echo "<br>";
}
?>