<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

$servername = "db"; // Your MySQL server name
$username_db = "root"; // Your MySQL username
$password_db = "123"; // Your MySQL password
$dbname = "db"; // Your MySQL database name


$conn = new mysqli($servername, $username_db, $password_db, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_select = "SELECT * FROM users";
$result = $conn->query($sql_select);

if ($result->num_rows > 0) {
        // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Username: " . $row["username"] . "<br>";
        echo "Password: " . $row["password"] . "<br>";
            
    }
} else {
    echo "0 results";
}

$conn->close();

?>
	
<form action="register.php" method="post">
  <div>
    <h1>Register</h1>
    <hr>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="username" required>
    
    <p>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>
    </p>
    <hr>
    
    <button type="submit" class="submitbtn">Submit</button>
  </div>
</form>

</body>
</html>

