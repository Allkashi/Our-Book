<h1>Жанры книг:</h1>
<table border='1'>
<?php
$result = $conn->query("SELECT * FROM category");
while ($row = $result->fetch()) {
    echo '<tr>';
    echo '<td>' . $row['category_id'] . '</td><td>' . $row['category_name'] . '</td>';
    echo '<td><a href=deletecategory.php?id='.$row['category_id'].'>Удалить</a></td>';
    echo '</tr>';
}
?>
</table>
<h2>Добавить жанр</h2>
<form method="get" action="addcategory.php">
    <input type="text" name="name">
    <input type="submit" value="Создать">
</form>