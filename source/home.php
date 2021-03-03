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
      <div class="tab tab-img">
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
      <div class="tab-off">
        <a href="delete" class="a-tab-off">Удалить клиента</a>
      </div>
    </div>
    <div class="field-work">

      <table class="table" align=center>
          <tr>
            <th>id</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Фирма</th>
            <th>Бонусы</th>
          </tr>
      <?php
        require_once 'connection.php';
        
        $request = "SELECT * FROM users";
        $query = mysqli_query($db, $request);
        
        while($row = mysqli_fetch_assoc($query)) {
          echo "<tr>";
          foreach($row as $el){
              echo "<td>".$el."</td>";
          }
          echo "</tr>";
        } 
        mysqli_close($db);
      ?>
      </table>

    </div>
  </div>
</body>
</html>