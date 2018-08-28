<?php
$conn = mysqli_connect("localhost", "root", "", "demo");
if ($conn) {
    echo "ok";
} else {
    echo "error";
}
?>