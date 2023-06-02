<div class="container">
    <h1>Жанры книг:</h1>
    <div class="list-group">
        <?php
        echo '
           <div class="list-group-item
            d-flex gap-2 w-100 nowrap-content-between" aria-current="true">
               <table class="row">
                    <h6 class="col-md-1"></h6>
                    <h6 class="col-sm-4 mb-0">id</h6>
                    <h6 class="col-sm-4 mb-0 opacity-10">Категория</h6>
               </table>
           </div>';
        $result = $conn->query("SELECT * FROM category");
        while ($row = $result->fetch()) {
            echo '
            <div class="list-group-item list-group-item-action d-flex gap-2 w-100 nowrap-content-between" aria-current="true">
                <table class="row">
                    <div class="col-md-1">  
                        <img app="'.$row['cat_url'].'" alt="Task picture" height="60px">
                    </div>
                    <h6 class=" col-sm-4 mb-0">'.$row['category_id'].'</h6>
                    <p class="col-sm-4 mb-0 opacity-75">'.$row['category_name'].'</p>
                    <a class="opacity-30" href=deletecategory.php?id='.$row['category_id'].'>Удалить</a>
                </table>

            </div>';
        }
        ?>
    </div>

    <h2>Добавить жанр</h2>
    <form method="post" action="addcategory.php" enctype="multipart/form-data">
        <input type="text" name="name">
        <label>
            Изображение: <input type="file" name="filename">
        </label>
        <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Добавить">
    </form>
</div>
