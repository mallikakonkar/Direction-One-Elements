<?php
include_once 'admin.php';
$sql1 = "DELETE FROM reqaquote1 WHERE serial='" . $_GET["serial"] . "'";
if (mysqli_query($conn, $sql1)) {
    echo "Record deleted successfully";
//     header("Location: admin.php");
    echo "<script>window.location.href='admin.php';</script>";
    exit;
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>