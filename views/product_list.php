<h2>Products</h2>

<table border="1">
<tr>
<th>ProductsNo></th>
<th>Name</th>
<th>Type</th>
</tr>

<?php
while($row = $products->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    echo "<td>{$row['ProductNo']}</td>";
    echo "<td>{$row['Name']}</td>";
    echo "<td>{$row['Type']}</td>";
    echo "</tr>";
}
?>

</table>