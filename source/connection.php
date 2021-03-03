<?php
    //Подключение к БД и обработка
    $db = mysqli_connect("localhost","root","123456789", "u_control");
    mysqli_set_charset($db, "utf8");
    if (mysqli_connect_errno()) {
        echo "Подключение невозможно: ".mysqli_connect_error();
    }
?>