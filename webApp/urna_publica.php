<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CEE-ELO UTFSM</title>
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="./css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
        <link rel='icon' href='./img/favicon.ico' type='image/x-icon'/>
    </head>
    <body class="gradient">
        <div class="w3-row">
            <div class="w3-col l3 m1 s1 w3-container">
            </div>
            <div class="form w3-col l6 m10 s10">
                    <h1>Elecciones CEE-ELO 2021</h1>
                    <h2>Urna Virtual Pública</h2>
                    <div class="alarm">
                        <i class="fas fa-info-circle">
                            <h3>Acá puedes consultar todos los votos que han sido emitidos, con un delay de 15 minutos (por anonimidad).</h3>
                            <h4>Los votos son renombrados a su suma de chequeo SHA256, y recomendamos usarla si quieres verificar que tu voto está subido. Más información sobre esto y sobre cómo garantizamos tu anonimidad en cee-elo.cl/faq.html.</h4>
                        </i>
                    </div>
                    <div>
                    <?php
                        $fileList = glob('./urna_publica/*.bvf');
                        $domain = $_SERVER['SERVER_NAME']."/";
                        $protocol = "https://";
                        foreach($fileList as $filename){
                            //Use the is_file function to make sure that it is not a directory.
                            if(is_file($filename)){
                                echo "<p><a href=$protocol$domain$filename>", basename($filename), "</a> </p>"; 
                            }   
                        }
                    ?>
                    </div>
                    <div class="w3-row">
                        <div class="w3-col l6 m6 s12">
                            <button class="btn" id="downloadBtn">Descargar todo en zip</button>
                        </div>    
                        <div class="w3-col l6 m6 s12">
                            <button class="btn"><a href="./">Volver al Inicio</a></button>
                        </div>
                    </div>
                    <div class="w3-row"> 
                        
                    </div>
                    <br>
                    <image src= "./img/cee_elo_logo.png"> 
            </div>
            <div class="w3-col l3 m1 s1 w3-container">
            </div>
        </div>


    </body>
</html>
