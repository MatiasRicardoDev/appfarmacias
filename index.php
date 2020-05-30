<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./assets/imagenes/SN_FARMACIA.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SN FARMACIA</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/turnos.css">
    <link rel="stylesheet" href="./libs/pickadate.js-3.6.2/lib/themes/classic.css">
    <link rel="stylesheet" href="./libs/pickadate.js-3.6.2/lib/themes/classic.date.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <div>
        <div id="home_page" title="Ver Turnos">
        <!--PAGINA 1-->
        <div id="firs_page" class="row main_content">
        <div class="col-lg-4" >
            <img
                id="img_cel_farmacia_turno" 
                src="./assets/imagenes/imagen_celular.png"  
                class="  d-block mx-auto" 
                alt=""
                >
        </div>
        <div class="col-lg-8 mx-auto mt-4">
            <div>
                <h1 id="titulo" ><span>Que es </span>SN Farmacia ?</h1>
            </div>
            <div id="info">
                <p>
                    Es una app que optimiza tu tiempo localizándote las farmacias de turno de la ciudad,
                    ordenándolas en una lista y mostrándote cual es la más cercana a tu ubicacion actual.
                </p>
            </div>
            <div id="lista_items">
                <ul>
                    <li class="mb-3">
                        <img 
                            class="mr-3"
                            src="./assets/imagenes/incono_de_abrir.png" 
                            alt="Abrir" 
                            width="30px" 
                            height="35px" 
                        ><span>Abris la app.</span>
                    </li>
                    <li class="mb-3">
                        <img 
                            class="mr-3"
                            src="./assets/imagenes/icono_de_abrir_app.png" 
                            alt="Ver" 
                            width="30px" 
                            height="35px" 
                            ><span>Visualizas la farmacia de turno mas cercana.</span>
                    </li>
                    <li class="mb-3">
                        <img
                            class="mr-3" 
                            src="./assets/imagenes/incono_de_ubicacion.png" 
                            alt="Ubicacion" 
                            width="30px" 
                            height="35px" 
                            ><span>Seleccionas a cual Farmacia queres ir y te llevamos.</span>
                    </li>
                </ul>
            </div>
            <div class="row container">
                <div id="img_1" class="col mt-5">
                    <img 
                        src="./assets/imagenes/download-on-the-app-store-apple.svg"  
                        alt=""
                        height="80px"
                        width="300px"
                    >
                </div>
                <div id="img_2" class="col mt-2" >
                    <img 
                        src="./assets/imagenes/disponible-en-google-play-badge.svg"  
                        alt=""
                        height="160px"
                        width="300px"
                    >
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Scripts -->
    <script src="./js/index.js"></script>
    <script src="./libs/pickadate.js-3.6.2/lib/picker.js"></script>
    <script src="./libs/pickadate.js-3.6.2/lib/picker.date.js"></script>
    <script>
        $(document).ready(function(){
            $('#img_cel_farmacia_turno').click(function(){
                var url = "./turnos.php";
                $(location).attr('href',url);
            })
        });
    </script>
</body>
</html>