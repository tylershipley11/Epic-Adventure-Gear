<?php
/* displayOneCategoryItems.php
   Shows all products in the ?category=… you clicked
*/

if (! isset($_GET['category'])) {
    die("No category specified.");
}

// Sanitize incoming category
$category = mysqli_real_escape_string($db, $_GET['category']);

// Query the database
$query = "
    SELECT 
      `product image url`   AS img,
      `product name`        AS name,
      `product description` AS descr,
      `product price`       AS price,
      `product inventory`   AS inventory
    FROM Products
    WHERE `product category` = '$category'
    ORDER BY `product name` ASC
";
$result = mysqli_query($db, $query);
if (! $result) {
    die("Database error: " . mysqli_error($db));
}

$num = mysqli_num_rows($result);
if ($num === 0) {
    echo "<p>No products found in <strong>" . htmlspecialchars($category) . "</strong>.</p>";
    return;
}

// Output a table of products
echo "<table class='category-table'>
        <thead>
          <tr>
            <th>Image</th>
            <th>Name &amp; Description</th>
            <th>Price</th>
            <th>In Stock</th>
          </tr>
        </thead>
        <tbody>
";

while ($row = mysqli_fetch_assoc($result)) {
    $img   = htmlspecialchars($row['img']);
    $name  = htmlspecialchars($row['name']);
    $descr = htmlspecialchars($row['descr']);
    $price = number_format($row['price'], 2);
    $stock = (int)$row['inventory'];

    echo "<tr>
            <td><img src=\"$img\" alt=\"$name\" class=\"table-thumb\"></td>
            <td>
              <strong>$name</strong><br>
              <small>$descr</small>
            </td>
            <td>\$$price</td>
            <td>" . ($stock > 0 ? $stock : "<span class='out-of-stock'>Out of stock</span>") . "</td>
          </tr>
    ";
}

echo "  </tbody>
      </table>";
?>
