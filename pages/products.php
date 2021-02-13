<?php
include '../db.php';
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
<div class="product_box">
  <h1><?php echo "".$row["name"].""; ?></h1>
  <p><?php echo "".$row["active_element"].""; ?></p>
  <p><?php echo "".$row["drugtype"].""; ?></p>
  <p><?php echo "".$row["doze"].""; ?></p>
</div>

<?php
  }
  echo "";
} else {
  echo "0 results";
}
$conn->close();
?>
