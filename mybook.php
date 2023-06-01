<div class="container">
    <h1>Мои книги:</h1>
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
                    <h6 class="col-sm-2 mb-0 opacity-10">Дата взятия</h6>
               </table>
           </div>';
        $result = $conn->query("SELECT *, category.category_name AS cname, history_books.date_collect AS DC FROM book, category, history_books WHERE category.category_id = book.category_id AND book.user_id =".$_SESSION['id']." AND history_books.book_id = book.book_id AND history_books.user_id = ".$_SESSION['id']);
        while ($row = $result->fetch()) {
            echo '

            <div class="list-group-item list-group-item-action d-flex gap-2 w-130 nowrap-content-between" aria-current="true">
                <table class="row">
                    <h6 class=" col-sm-1 mb-0">'.$row['book_id'].'</h6>
                    <h7 class="col-sm-2 mb-0 opacity-75">'.$row['book_name'].'</h7>
                    <h7 class="col-sm-2 mb-0 opacity-75">'.$row['cname'].'</h7>
                    <h7 class="col-sm-2 mb-0 opacity-75">'.$row['book_author'].'</h7>
                    <h7 class="col-sm-2 mb-0 opacity-75">'.$row['num_page'].'</h7>
                    <h7 class="col-sm-2 mb-0 opacity-75">'.$row['DC'].'</h7>
                </table>
                    <a class="opacity-50" href=passbook.php?bid='.$row['book_id'].'>Сдать</a>
            </div>
';

        }
        ?>
    </div>
    </table>
</div>



