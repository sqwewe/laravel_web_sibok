<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="index.css">
  <title>Регистрация</title>
</head>

<body>
  <div class="container mx-auto">
    <div class="grey darken-1 empty-layout">


      <form class="card auth-card">
        <div class="card-content">
          <span class="card-title">ОГБУК редакция журнала "Сибирячок"</span>

          <div class="input-field">
            <input id="name" type="text" class="validate @error('name') is invalid @enderror">
            <label for="name" >Имя</label>
            <small class="helper-text invalid">Имя</small>
            <div class="input-field">
              <input id="surname" type="text" class="validate">
              <label for="surname">Фамилия</label>
              <small class="helper-text invalid">Фамилия</small>
            </div>
            <div class="input-field">
              <input id="email" type="text">
              <label for="email">Почта</label>
              <small class="helper-text invalid">Почта</small>
            </div>
            <div class="input-field">
              <div class="row">
                <div>
                  <input id="password" type="password" class="validate">
                  <label for="password">Пароль</label>
                  <small class="helper-text invalid">Пароль</small>
                </div>
              </div>
              <p>
                <label>
                  <input type="checkbox" />
                  <span>С правилами согласен</span>
                </label>
              </p>
            </div>
            <div class="card-action">
              <div>
                <button class="btn waves-effect waves-light auth-submit" type="submit">
                  Зарегистрироваться
                  <i class="material-icons right">send</i>
                </button>
              </div>

              <p class="center">
                Уже есть аккаунт?
                <a href="./login">Войти!</a>
              </p>
            </div>
      </form>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>