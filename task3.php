<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Table</title>
</head>
<body>
    <h2>Product Inventory</h2>
    <a href="task1.php"><button>My Profile</button></a>
    <table>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            
        </tr>
        <?php
        // Array of product types for variety
        $productTypes = ['Laptop', 'Smartphone', 'Headphones', 'Mouse', 'Keyboard', 'Monitor', 'Tablet', 
                        'Printer', 'Speaker', 'Camera'];
        
        // Generate 150 products
        for ($i = 1; $i <= 150; $i++) {
            $productType = $productTypes[array_rand($productTypes)];
            $productName = $productType . " Model " . chr(65 + ($i % 26)) . "-" . rand(100, 999);
            $price = number_format(rand(99, 10000) + (rand(0, 99) / 100), 2);
            $quantity = rand(0, 100);
            
            echo "<tr>";
            echo "<td>$productName</td>";
            echo "<td>₱" . $price . "</td>";
            echo "<td>$quantity</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>