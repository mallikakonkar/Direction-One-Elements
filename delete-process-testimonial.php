<?php
include_once 'admin.php';
$sql1 = "DELETE FROM testimonial WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql1)) {
    echo "Record deleted successfully";
     header("Location: admin.php");

} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

?>
<!DOCTYPE html>
<html>

</html>
