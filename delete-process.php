<?php
include_once 'admin.php';
$sql1 = "DELETE FROM reqaquote1 WHERE serial='" . $_GET["serial"] . "'";
if (mysqli_query($conn, $sql1)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>