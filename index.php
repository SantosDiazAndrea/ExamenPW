<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTROPHP</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="header">
        <h1>Santos Diaz Andrea</h1>
        <p>Número de Control: 22090754</p>
    </div>
    <div class="container">
        
        <div class="box problem">
            <h2>Problema</h2>
            <p>
                Se dispone de una placa fotovoltaica de 60x30 cm, cuyo rendimiento es del 20%. 
                Determinar la cantidad de energía eléctrica (kWh) que generará, para acumular en una batería, 
                si la placa ha estado funcionando durante 8 horas, siendo el coeficiente de radiación de 0.9 cal/min·cm<sup>2</sup>. 
                Se admite que no hay pérdidas ni en el transporte, ni en la carga de la batería.
            </p>
        </div>
       
        <div class="box image">
            <h2>Imagen</h2>
            <img src="images/imagen.png" width="300" height="200" alt="Imagen del problema">
        </div>
       
        <div class="box data">
            <h2>Datos</h2>
            <p>
                Q = Energía generada<br>
                K = Coeficiente de radiación<br>
                t = Tiempo en minutos<br>
                S = Área, cm<sup>2</sup><br>
                r = Rendimiento
            </p>
        </div>
   
        <div class="box formula">
            <h2>Fórmulas</h2>
            <p>
                Q = K &times; t &times; S en cal
            </p>
        </div>
     
        <div class="box solution">
            <h2>Solución</h2>
            <p>
                La placa fotovoltaica tiene una superficie de:<br>
                S = 60 &times; 30 cm<sup>2</sup> = 1800 cm<sup>2</sup><br><br>
                
                Funciona durante 8 horas:<br>
                t = 8 &times; 60 = 480 minutos<br><br>
                
                La energía generada es:<br>
                Q = 0.9 cal/min·cm<sup>2</sup> &times; 480 min &times; 1800 cm<sup>2</sup><br>
                Q = 777600 cal = 777.6 Kcal<br><br>
                
                Considerando un rendimiento del 20%, la energía obtenida es:<br>
                777.6 &times; 0.2 = 155.52 Kcal<br><br>
                
                Convertimos Kcal a KW-h:<br>
                155.5 Kcal × (4.18 J / cal) × (1 w·s / 1 J) × (1 Kw / 1000 w) × (1 h / 3600 s) × (1000 cal / Kcal) = 0.18 Kw-h<br><br>
            </p>
        </div>
     
        <div class="box resultado">
            <h2>Resultado</h2>
            <p id="resultado">
            <?php
            function calcularEnergia() 
            {
                $superficie_cm2 = 60 * 30; 
                $tiempo_min = 8 * 60;      
                $coeficiente = 0.9;       
                $rendimiento = 0.2;        
                
                $energia_cal = $coeficiente * $tiempo_min * $superficie_cm2;
                $energia_rendimiento_cal = $energia_cal * $rendimiento;
                $energia_julios = $energia_rendimiento_cal * 4.18;
                $energia_kw_seg = $energia_julios / 1000;
                $energia_kWh = $energia_kw_seg / 3600;
            return $energia_kWh;
            }
            $energia = calcularEnergia();
            echo "La energía generada por la placa es: " . number_format($energia, 2) . " kWh.";
            ?>
            </p>
        </div>
    </div>
</body>
</html>
