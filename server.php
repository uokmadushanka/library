<?php
session_start();

include('connect.php'); 
$con = new mysqli('localhost', 'root', '', 'library_test');

if (!$con) {
    die(mysqli_error($con));
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $con->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);

    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            // Authentication successful
            $_SESSION['user'] = $result->fetch_assoc();
            header("Location: home.php");
            exit();
        } else {
            // Authentication failed
            echo "Invalid email or password";
        }
    } else {
        echo "Error executing query: " . $stmt->error;
    }

    $stmt->close();
}
?>




