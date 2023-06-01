<div class="container">
    <h1>Перечень занятых книг:</h1>
    <div class="list-group">
        <?php
        echo '
           <div class="list-group-item d-flex gap-2 w-100 nowrap-content-between" aria-current="true">
               <table class="row">
                    <h6 class="col-sm-1 mb-0">id</h6>
                    <h6 class="col-sm-2 mb-0 opacity-10">Название</h6>
                    <h6 class="col-sm-2 mb-0 opacity-10">Жанр</h6>
                    <h6 class="col-sm-2 mb-0 opacity-10">Автор</h6>
                    <h6 class="col-sm-2 mb-0 opacity-10">Количество страниц</h6>
                    <h6 class="col-sm-2 mb-0 opacity-10">Кем взята</h6>
               </table>
           </div>';
        $result = $conn->query("SELECT *, category.category_name AS cname, user.nickname AS unic FROM book, category, user WHERE category.category_id=book.category_id AND user.user_id=book.user_id");
        while ($row = $result->fetch()) {
            echo '

            <div class="list-group-item list-group-item-action d-flex gap-2 w-130 nowrap-content-between" aria-current="true">
                <table class="row">
                    <h6 class=" col-sm-1 mb-0">'.$row['book_id'].'</h6>
                    <h7 class="col-sm-2 mb-0 opacity-75">'.$row['book_name'].'</h7>
                    <h7 class="col-sm-2 mb-0 opacity-75">'.$row['cname'].'</h7>
                    <h7 class="col-sm-2 mb-0 opacity-75">'.$row['book_author'].'</h7>
                    <h7 class="col-sm-2 mb-0 opacity-75">'.$row['num_page'].'</h7>
                    <h7 class="col-sm-2 mb-0 opacity-75">'.$row['unic'].'</h7>
                </table>
            </div>

';

        }
        ?>
    </div>
    </table>
</div>

