<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = getenv("SERVERNAME"); // Your MySQL server name
$username_db = getenv("USERNAME"); // Your MySQL username
$password_db = getenv("PASSDB"); // Your MySQL password
$dbname = getenv('DB_NAME'); // Your MySQL database name


$conn = new mysqli($servername, $username_db, $password_db, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Code inside this block will execute only if the form is submitted via POST method

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password)VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "New record created successfully";
        echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 2000);</script>";

    } else {
        die(mysqli_error($conn));
    }
    
    $conn->close();

    
}
?>



