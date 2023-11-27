<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"];
    echo "Received message: $message";
} else {
    echo "Error: Invalid request.";
}
?>
