<h2>Добавить любимый жанр</h2>
<form method="get" action="addfav.php">
    <p><label>
            Жанры: <select name="cat_id">
                <?
                $result = $conn->query("SELECT * FROM category");
                while ($row = $result->fetch()) {
                    echo '<option value='.$row['category_id'].'>'.$row['category_name'].'</option>';
                }
                ?>
            </select>

        </label>
    <p><input type="submit" value="Добавить">

</form>