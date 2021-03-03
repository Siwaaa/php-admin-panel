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
      <div class="tab">
        <a href="ad" class="a-tab">Добавить клиента</a>
      </div>
      <div class="tab-off">
        <a href="edit" class="a-tab-off">Редактировать клиента</a>
      </div>
      <div class="tab-off">
        <a href="delete" class="a-tab-off">Удалить клиента</a>
      </div>
    </div>
    <div class="field-work">
      <form action="ad-obr.php" method="POST" class="form">
        
        <div class="field-form field-form-first">
          <p class="text-input">Имя</p>
          <input id="nm" class="input input-form" type="text" name="name" value="<?php echo $name;?>">
        </div>
        <p id="p-nm" class="red-text">*данные введены неверно</p>

        <div class="field-form">
          <p class="text-input">Фамилия</p>
          <input id="fm" class="input input-form" type="text" name="surname" value="<?php echo $surname;?>">
        </div>
        <p id="p-fm" class="red-text">*данные введены неверно</p>

        <div class="field-form">
          <p class="text-input">Фирма</p>
          <input id="fir" class="input input-form" type="text" name="firma" value="<?php echo $firma;?>">
        </div>
        <p id="p-fir" class="red-text">*данные введены неверно</p>

        <div class="field-form">
          <p class="text-input">Коло бонусов</p>
          <input id="bon" class="input input-form" type="text" name="bonus" value="<?php echo $bonus;?>">
        </div>
        <p id="p-bon"class="red-text">*данные введены неверно</p>
        
        <div class="field-btn">
          <input id="go" class="btn btn-form" type="submit" value="Добавить">
          <input class="btn btn-form btn-white" type="reset" value="Очистить">
        </div>
       
      </form>
    </div>
  </div>
  <script>
      go.onclick = function () {
      let nmin = document.querySelector("#nm");
      let fmin = document.querySelector("#fm");
      let firin = document.querySelector("#fir");
      let bonin = document.querySelector("#bon");

      let nmStr = nmin.value;
      let fmStr = fmin.value;
      let firStr = firin.value;
      let bonStr = bonin.value;

      let nm = new String(nmStr);
      let fm = new String(fmStr);
      let fir = new String(firStr);
      let bon = new String(bonStr);

      let mask1 = new RegExp("^[А-Яа-я]{1,}$");
      let mask2 = new RegExp("^[А-Яа-я]{1,}$");
      let mask4 = new RegExp("^[0-9]{1,}$"); 

      if (mask1.test(nm) & mask2.test(fm) & mask4.test(bon)) {
        return true;
      } else if (!(mask1.test(nm)) & mask2.test(fm) & mask4.test(bon)){
        document.querySelector("#p-nm").style.display = "block";
        event.preventDefault();
      } else if (!(mask1.test(nm)) & !(mask2.test(fm)) & mask4.test(bon)){
        document.querySelector("#p-nm").style.display = "block";
        document.querySelector("#p-fm").style.display = "block";
        event.preventDefault();
      } 
      else if (!(mask1.test(nm)) & !(mask2.test(fm)) & !(mask4.test(bon))){
        document.querySelector("#p-nm").style.display = "block";
        document.querySelector("#p-fm").style.display = "block";
        document.querySelector("#p-bon").style.display = "block";
        event.preventDefault();
      } 
      else if (mask1.test(nm) & !(mask2.test(fm)) & !(mask4.test(bon))){
        document.querySelector("#p-fm").style.display = "block";
        document.querySelector("#p-bon").style.display = "block";
        event.preventDefault();
      } 
      else if (mask1.test(nm) & !(mask2.test(fm)) & mask4.test(bon)){
        document.querySelector("#p-fm").style.display = "block";
        event.preventDefault();
      } 
      else if (mask1.test(nm) & mask2.test(fm) & !(mask4.test(bon))){
        document.querySelector("#p-bon").style.display = "block";
        event.preventDefault();
      }
    }
  </script>
</body>
</html>