<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AS2 CRUD</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-image: linear-gradient(to right,
          rgb(147, 112, 219),
          rgb(152, 140, 230));
    }

    div {
      background-color: rgba(0, 0, 0, 0.9);
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 80px;
      border-radius: 15px;
      color: white;
    }

    input {
      padding: 15px;
      border: none;
      outline: none;
      font-size: 15px;
    }

    .inputSubmit {
      background-color: rgb(147, 112, 219);
      border: none;
      padding: 15px;
      width: 100%;
      border-radius: 8px;
      color: white;
      font-size: 18px;
      cursor: pointer;
    }

    .inputSubmit:hover {
      background-color: rgb(105, 89, 184);
    }
  </style>
</head>

<body>
  <a href="home.php">Voltar ao inicio</a>
  <div>
    <h1>Login</h1>
    <form action="testeLogin.php" method="POST">
      <input type="text" name="email" placeholder="Email" />
      <br /><br />
      <input type="password" name="senha" placeholder="Senha" />
      <br /><br />
      <input class="inputSubmit" type="submit" name="submit" value="Enviar">
    </form>
  </div>
</body>

</html>