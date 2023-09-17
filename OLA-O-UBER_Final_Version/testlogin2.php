<?php
$conn = mysqli_connect("localhost", "root", "","ola");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM get_taxi";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Address</th><th>Delete</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["pickup_loc"]. "</td><td><a href='delete.php?id=".$row["id"]."'>Delete</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>