<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Comparison - Epic Adventure Gear</title>
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="styles.css">
    <link type="image/x-icon" sizes="16x16" rel="icon" href="../img/Untitled-2.svg">
</head>

<body>
    <?php include "../php/header.php"; ?>


    <h1>Compare Our Best Adventure Gear</h1>
    <p style="text-align: center;">Need help choosing the best gear? Compare our
        top-rated products below.</p>

    <div class="table-container">
        <table class="comparison-table">
            <caption>Adventure Gear Comparison Table</caption>
            <thead>
                <tr class="mainHead">
                    <th rowspan="2">Product</th>
                    <th rowspan="2">Weight</th>
                    <th rowspan="2">Durability</th>
                    <th colspan="2">Weather Resistance</th>
                    <th rowspan="2">Capacity/Size</th>
                    <th rowspan="2">Best Use Case</th>
                    <th rowspan="2">Price</th>
                    <th rowspan="2">Rating</th>
                </tr>
                <tr class="weather">
                    <th>Waterproof</th>
                    <th>Wind-Resistant</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>UltraLight Tent</td>
                    <td>3.5 lbs</td>
                    <td>High</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>1-Person, 2-Person</td>
                    <td>Backpacking</td>
                    <td>$199.99</td>
                    <td>⭐⭐⭐⭐⭐ (4.9/5)</td>
                </tr>
                <tr>
                    <td>All-Season Tent</td>
                    <td>6.8 lbs</td>
                    <td>Very High</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>2-Person, 4-Person</td>
                    <td>Winter Camping</td>
                    <td>$299.99</td>
                    <td>⭐⭐⭐⭐ (4.5/5)</td>
                </tr>
                <tr>
                    <td>Lightweight Sleeping Bag</td>
                    <td>2.3 lbs</td>
                    <td>High</td>
                    <td>Yes</td>
                    <td>No</td>
                    <td>Regular, Large</td>
                    <td>Hiking & Camping</td>
                    <td>$149.99</td>
                    <td>⭐⭐⭐⭐⭐ (4.8/5)</td>
                </tr>
                <tr>
                    <td>Portable Stove</td>
                    <td>1.2 lbs</td>
                    <td>Medium</td>
                    <td>No</td>
                    <td>Yes</td>
                    <td>Compact Size</td>
                    <td>Backpacking, Camping</td>
                    <td>$89.99</td>
                    <td>⭐⭐⭐⭐ (4.6/5)</td>
                </tr>
                <tr>
                    <td>Weatherproof Jacket</td>
                    <td>1.5 lbs</td>
                    <td>Very High</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>S, M, L, XL</td>
                    <td>All-Season Hiking</td>
                    <td>$199.99</td>
                    <td>⭐⭐⭐⭐⭐ (4.9/5)</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="9" class="warning">All prices and ratings are
                        subject to change.
                        Check product pages for up-to-date information.</td>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class="back-link">
        <a href="products.php">⬅ Back to Our Products</a>
    </div>

</body>

</html>