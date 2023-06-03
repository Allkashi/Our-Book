<?php require 'app/views/header.php'?>
<h1>Сведения о пользователе:</h1>

<?=$data['user']->first_name?>
<?=$data['user']->sec_name?><br>
<?=$data['user']->nickname?>
<?php require 'app/views/footer.php'?>