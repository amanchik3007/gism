<?php
include 'db.php';
$sql = "SELECT * FROM news";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Tags</th>
          <th>body</th>
          <th>Image</th>
        </tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$row["news_id"]."</td>
            <td>".$row["title"]."</td>
            <td>".$row["tags"]."</td>
            <td>".$row["body"]."</td>
            <td>".$row["image"]."</td>
          </tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
