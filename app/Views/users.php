
<?php require 'app/views/header.php'?>
<h1>Список пользователей:</h1>
<ul>
    <?php foreach ($data['users'] as $user): ?>
        <li>
            <?=$user->first_name?>
            <?=$user->sec_name?>
            <?=$user->nickname?>
        </li>
    <?php endforeach; ?>
</ul>
<?php require 'app/views/footer.php'?>