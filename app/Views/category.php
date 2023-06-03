<?php require 'app/views/header.php'?>

    <main class="container">
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h6 class="border-bottom pb-2 mb-0">Жанры</h6>
        </div>
        <div class="list-group-item d-flex gap-2 w-100 nowrap-content-between" aria-current="true">
            <table class="row">
                <h6 class="ms-4"  width="32" ></h6>
                <h6 class="col-sm-2 mb-0 ">id</h6>
                <h6 class="col-sm-2 mb-0 opacity-10">Категория</h6>
            </table>
        </div>
        <?php
        foreach ($data['category'] as $category) { ?>

            <div class="d-flex text-muted pt-3">
                <img class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" src="<?= $category->cat_url ?>" alt="Placeholder: 32x32">
                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                    <div class="d-flex justify-content-between">
                        <div class="list-group-item list-group-item-action d-flex gap-2 w-100 nowrap-content-between" aria-current="true">
                                <h6 class=" col-sm-2 mb-0"><?= $category->category_id ?></h6>
                                <h5 class="col-sm-8 mb-0 text-gray-dark"><?= $category->category_name ?></h5>
                                <a href="#"><a href=deletecategory.php?id=<?= $category->category_id ?> class="col-sm-1 mb-0 btn btn-danger">Удалить</a></a>

                        </div>
                    </div>
                </div>
            </div>

            <?php
        }
        ?>

    </main>

<?php require 'app/views/footer.php'?>



