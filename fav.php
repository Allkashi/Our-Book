<h1>Избранные жанры:</h1>
<table border='1'>
    <?php
    echo '<tr>
            <th>id</th>
            <th>Категория</th>
           </tr>';
    $result = $conn->query("SELECT *, fav_category.user_id, fav_category.category_id AS cid, category.category_name AS cname FROM category, fav_category WHERE category.category_id =fav_category.category_id AND fav_category.user_id=".$_SESSION['id']);
    while ($row = $result->fetch()) {
        echo '<tr>';
        echo '<td>'.$row['cid'].'</td>
              <td>'.$row['cname'].'</td>';
        echo '<td><a href=deletefav.php?cid='.$row['cid'].'>Удалить </a></td>';
        echo '</tr>';
    }
    ?>
</table>