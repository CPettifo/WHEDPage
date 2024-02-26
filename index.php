<?php
$user = "root";
$password = "";
$database = "db_name";
$table = "table_name";

try{
    $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
    echo "<h2>TODO</h2?><ol>";
    foreach($db->query("SELECT username FROM $table") as $row) {
        echo "<li>" . $row['username'] . "</li>";
    }
    echo "</ol>";
} catch (PDOExeption $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>