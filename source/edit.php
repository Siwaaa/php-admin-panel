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
      <div class="tab">
        <a href="edit" class="a-tab">Редактировать клиента</a>
      </div>
      <div class="tab-off">
        <a href="delete" class="a-tab-off">Удалить клиента</a>
      </div>
    </div>
    <div class="field-work">
    <?php 
        require_once 'connection.php'; // подключаемся к БД

        if(!(isset($_GET['id'])))
        {
            $request = "SELECT * FROM users";
            $query = mysqli_query($db, $request);

            echo "<table class=\"table\" align=center>
              <tr>
                <th>id</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Фирма</th>
                <th>Бонусы</th>
              </tr>";

            while($row = mysqli_fetch_assoc($query)) {
              echo "<tr>";
              foreach($row as $el){
                  echo "<td><a class=\"a-table\" href=edit.php?id={$row['id']}>".$el."</a></td>";
              }
              echo "</tr>";
            } 
        }
        else{
            $id=$_GET['id'];
            $rez = mysqli_query($db, "SELECT * FROM users WHERE id='$id'");
            $mas=mysqli_fetch_array($rez);
print<<<HERE
      <form action="edit-obr.php" method="POST" class="form">
        
        <div class="field-form field-form-first">
          <p class="text-input">Имя</p>
          <input class="input input-form" type="text" name="name" value=$mas[name]>
        </div>
          
        <div class="field-form field-form-first">
          <p class="text-input">Логин</p>
          <input class="input input-form" type="text" name="surname" value=$mas[surname]>
        </div>

        <div class="field-form field-form-first">
          <p class="text-input">Фирма</p>
          <input class="input input-form" type="text" name="firma" value=$mas[firma]>
        </div>

        <div class="field-form field-form-first">
          <p class="text-input">Зарплата</p>
          <input class="input input-form" type="text" name="bonus" value=$mas[bonus]>
        </div>
      
        <div class="field-btn">
          <input type="hidden" name=id value=$mas[id]>
          <input class="btn btn-form" type="submit" value="Обновить">
        </div>
      </form>
      <a class="a-back" href="edit">Назад к списку</a>
HERE;
        }
        
    ?>
    </div>
  </div>
</body>
</html>