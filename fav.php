<div class="container">
<h1>Избранные жанры:</h1>
    <div class="list-group">
    <?php
    echo '
           <div class="list-group-item d-flex gap-2 w-100 nowrap-content-between" aria-current="true">
               <table class="row">
                    <h6 class="col-sm-4 mb-0">id</h6>
                    <h6 class="col-sm-4 mb-0 opacity-10">Категория</h6>
               </table>
           </div>';
    $result = $conn->query("SELECT *, fav_category.user_id, fav_category.category_id AS cid, category.category_name AS cname FROM category, fav_category WHERE category.category_id =fav_category.category_id AND fav_category.user_id=".$_SESSION['id']);
    while ($row = $result->fetch()) {

        echo '
            
            <div class="list-group-item list-group-item-action d-flex gap-2 w-100 nowrap-content-between" aria-current="true">
                <table class="row">
                    <h6 class=" col-sm-4 mb-0">'.$row['cid'].'</h6>
                    <p class="col-sm-4 mb-0 opacity-75">'.$row['cname'].'</p>
                </table>

                <a class="opacity-50" href=deletefav.php?cid='.$row['cid'].'>Удалить</a>
            </div>

';

    }
    ?>
    </div>
</table>
</div>

