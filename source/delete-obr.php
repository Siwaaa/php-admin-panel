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
      $id = $_REQUEST['id'];
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
      <?php
      require_once 'connection.php'; // подключаемся к БД

      $id = $_REQUEST['id'];

        $query=mysqli_query($db, "DELETE FROM users WHERE id='$id'");

      if ($query==true){
          echo "<div class=\"title-obr\">
                  Клиент успешно удален
                </div>";
      } else{
          echo "<div class=\"title-obr\">
                  Ошибка, клиент не был удален
                </div>";
      }
      echo "<div class=\"a-obr\">
              <a class=\"a-back\" href=\"delete\">Назад</a>
            </div>"
      
      ?>
    </div>
  </div>
</body>
</html>