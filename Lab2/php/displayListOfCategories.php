<?php

$query = "SELECT DISTINCT `product category` AS category
          FROM Products
          ORDER BY `product category`";
$result = mysqli_query($db, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($db));
}

echo '<ul class="category-list">';
while ($row = mysqli_fetch_assoc($result)) {
    $cat    = htmlspecialchars($row['category']);
    $url    = 'products.php?category=' . urlencode($row['category']);
    echo "<li><a href=\"$url\">$cat</a></li>\n";
}
echo '</ul>';
