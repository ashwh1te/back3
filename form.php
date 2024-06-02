
<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <title>3 Задание</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    Форма
  </header>
  <div id="main-aside-wrapper">
    <div id="cont" class="container">
      <div id="form" class="col-12 order-lg-3 order-sm-2">
        <form action="" method="POST">
          ФИО:
          <label>
            <input name="name" placeholder="Введите ФИО">
          </label>
          <br>
          <br>
          E-mail:
          <label>
            <input type="email" name="mail" placeholder="Введите e-mail">
          </label>
		  Телефон:
          <label>
            <input type="phone" name="phone" placeholder="Введите телефон">
          </label>
          <p>Ваш год рождения:</p>
          <label>
            <input type="date" class="form-control" aria-describedby="basic-addon3"  name="year"/>
            </label>
          <p>Пол:</p>
          <label>
            <input type="radio" name="sex" value="M">М   
          </label>
          <label>
            <input type="radio" name="sex" checked="checked" value="F" />Ж   
          </label>
          <p>Любимый язык программирования</p>
          <label>
            <select name="lang[]" multiple=multiple>
              <option value="Python">Python</option>
              <option value="C++">C++</option>
              <option value="Java">Java</option>
            </select>
          </label>

          <p id="biography">Биография</p>
          <label>
            <textarea placeholder="Расскажите о себе" name="biography" rows="6" cols="60"></textarea>
          </label>
          <br>

          <label>
            С контрактом ознакомлен(-а)
            <input type="checkbox" name="check1" checked="checked">
          </label>
          <br>
          <input type="submit" value="Отправить">
        </form>
      </div>
    </div>
  </div>
<footer>
</footer>
</body>
</html>
