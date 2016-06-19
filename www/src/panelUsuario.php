<?php
session_start();
include_once "scriptTiposVehiculos.php";
?>

<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" xmlns="http://www.w3.org/1999/html"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"/ >
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript" src="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.css" />
    <!--[if lt IE 9]<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<?php include_once 'scriptParking.php';
global $suma;?>
<script>
    $(function() {
        $( "#fecha" ).datepicker({
            'minDate': '0',
            dateFormat: "yy-mm-dd"
        });
    });
</script>
<script>
    $(function() {
        $("#desde").timepicker(
            {
                'timeFormat': 'H:i'
            }
        );
    });
</script>
<script>
    $(function() {
        $("#hasta").timepicker(
            {
                'timeFormat': 'H:i'
            }
        );
    });
</script>
<script type="text/javascript">
    function minTimer() {
        $var1 =$("#desde").timepicker('getTime');
        $("#hasta").timepicker('option', 'minTime', $var1);
    }
    function checkForm()
    {
        // validation fails if the input is blank
        $v1 = document.getElementById("fecha");
        $v2 = document.getElementById("desde");
        $v3 = document.getElementById("hasta");
        
        if($v1.value == null || $v1.value == "") {
            alert("Error: Fecha is empty!");
            $v1.focus();
            return false;
        }
        if($v2.value == null || $v2.value == "") {
            alert("Error: Hora 1 is empty!");
            $v2.focus();
            return false;
        }
        if($v3.value == null || $v3.value == "") {
            alert("Error: Hora 2 is empty!");
            $v3.focus();
            return false;
        }

        // validation was successful
        return true;
    }
    function compareTimers(){
        if(checkForm()) {
            $var1 =$("#desde").timepicker('getTime', new Date());
            $var2 =$("#hasta").timepicker('getTime', new Date());
            if($var2 > $var1) {
                document.getElementById("myForm").submit();
            }else{
                $("#hasta").timepicker('setTime', $var1);
                window.alert("El intervalo de tiempo ha de ser positivo");
            }
        }
        }
</script>
<section class="container">
    <div class="pAdmin">
        <h1>Consulta de disponibilidad</h1>
        <form id="myForm" method="post" action="resBuscar.php" enctype="multipart/form-data">
            <p>Introduzca la fecha y la hora</p>
            <p>
                <label>Fecha</label>
                <input onchange="minTimer()" name="fecha" id="fecha" type="text" class="time"  alt="seleccion de fecha desde" style="float:right" required/>
            </p>
            <br/>

            <p>
                <label>Desde</label>
                <input onchange="minTimer()" name="desde" id="desde" type="text" class="time"  alt="seleccion de fecha desde" style="float:right" required/>
            </p>
            <br/>

            <p>
                <label>Hasta</label>
                <input onclick="minTimer()"  name="hasta" id="hasta" type="text" class="time" alt="hasta"  style="float:right"  required/>
            </p>
            <br/>
            <p>
                <label>Tipo Vehiculo</label>
                <select onclick="minTimer()"  name="tipoV" id="tipoV" alt="Tipo de vehiculo"  style="float:right"  required/>
                    <?php
                    $x = 0;
                    $id ="";
                    foreach ($array as $value) {
                        if ($x % 2 == 1) {
                            echo "<option value='".$id."'>".$value."</option>";
  
                        }else{
                            $id = $value;
                        }
                        $x++;
                    }
                    ?>
                </select>
            </p>
            <br/>

            <p><input type="button" value="Buscar" onclick="compareTimers()" style="float: right"></p>
            <p><input type="button" name="volver" value="Volver" onclick="location.href='scriptLogout.php';"></p>
        </form>
    </div>
</section>

</body>
</html>