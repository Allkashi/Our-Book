<div class="container">
<h1 style="margin-top: 20px">Добавить любимый жанр</h1>
<form method="get" action="addfav.php">
    <div class="d-flex gap-2 w-100 nowrap-content-between">
            <h2>Жанры:</h2>
            <select name="cat_id">
                <?
                $result = $conn->query("SELECT * FROM category");
                while ($row = $result->fetch()) {
                    echo '<option value='.$row['category_id'].'>'.$row['category_name'].'</option>';
                }
                ?>
            </select>
        <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Добавить">

    </div>
</form>
</div>