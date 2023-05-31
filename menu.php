<?php
if (!isset($_SESSION['nickname']) )
{
    echo "<form method='post'>";
    echo "Имя пользователя:<br><input type=text name='login'/><br>";
    echo "Пароль:<br><input type=password name='password'/><br>";
    echo "<input type='submit' value='Войти'/>";
    echo "</form>";
}
else {
    echo "Привет, " . $_SESSION['first_name'] . ' ' . $_SESSION['sec_name'] . ". Ваш ID: " . $_SESSION['id'] . "<br>";
    echo "<a href='?logout=1'>Выйти из системы</a>";
    }
?>
<ul >
    <li style="display: inline"><a href="index.php?page=c">Жанры книг</a></li>
    <li style="display: inline"><a href="index.php?page=t">Избранные жанры</a></li>
</ul>
