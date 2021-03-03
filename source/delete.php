<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin.pro</title>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/st.css">
</head>
<body>

<?php
  $name = $_REQUEST['name'];
  $surname = $_REQUEST['surname'];
  $firma = $_REQUEST['firma'];
  $bonus = $_REQUEST['bonus'];
  ?>

  <div class="main main-home">
    <div class="container-img"></div>
    <div class="container-text">
      <span class="text-hello">Root, привет!</span>
      <span class="text-go-work">Чем займемся?</span>
    </div>
    <div class="container-tab">
      <div class="tab-off tab-img">
        <a href="home">
          <img id="table-img" src="../img/tab.png">
        </a>
      </div>
      <div class="tab-off">
        <a href="ad" class="a-tab-off">Добавить клиента</a>
      </div>
      <div class="tab-off">
        <a href="edit" class="a-tab-off">Редактировать клиента</a>
      </div>
      <div class="tab">
        <a href="delete" class="a-tab">Удалить клиента</a>
      </div>
    </div>
    <div class="field-work">
      <form action="delete-obr.php" method="POST">
      <?php 
          require_once 'connection.php'; // подключаемся к БД

          $rez = mysqli_query($db, "SELECT * FROM users");
          while ($mas=mysqli_fetch_array($rez))
          {
              printf("<div style=\"margin-top:20px; color: #0c005c;\" class=\"form\"><input type=radio name=id value=%s>%s %s %s <br><br></div>", $mas['id'], $mas['name'],  $mas['firma'], $mas['bonus']);
          }
          
      ?>
          <div class="field-btn">
            <input class="btn btn-form" type=submit value="Удалить пользователя"><br>
          </div>
      </form>
    </div>
  </div>
</body>
</html>