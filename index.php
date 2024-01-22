<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Unidades</title>
    <link rel="stylesheet" href="./css/view.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="./js/cambiarUnidades.js"></script>
</head>

<body>
    <h1 class="h1 text-center mt-4 pt-2 text-primary">Conversor de Unidades</h1>
    <div class="container mt-5">
        <form class="g-3 needs-validation" novalidate>
            <div class="main-select">
                <div>
                    <label class="p-2" for="tipo_medida"><b>Tipo de medida:</b></label>
                    <select class="form-select mt-2" id="tipo_medida" onchange="cambiarUnidades()"
                        aria-label="Default select example" required>
                        <option selected disable value="">Selecciona una opción</option>
                        <option value="longitud">Longitud</option>
                        <option value="masa">Masa</option>
                        <option value="volumen">Volumen</option>
                        <option value="datos">Datos</option>
                        <option value="moneda">Moneda</option>
                        <option value="tiempo">Tiempo</option>
                    </select>
                    <div class="invalid-feedback">
                        Porfavor, selecciona un tipo de medida
                    </div>

                    <div class="main-inputs mt-4">
                        <input class="form-control mt-2" type="number" name="valor" required>
                        <div class="invalid-feedback">
                            Porfavor, ingresa la cantidad a convertir
                        </div>

                        <label class="p-1 mt-2" for="unidad_origen"><b>De:</b></label>
                        <select class="form-select mt-1" id="unidad_origen" name="DeUnidad" required>
                        </select>

                        <label class="p-1 mt-2  " for="unidad_destino"><b>A:</b></label>
                        <select class="form-select mt-1" id="unidad_destino" name="AUnidad" required></br>
                        </select>

                        <div class="resultado p-1 mt-2 text-danger text-center"><span>Resultado de la Conversion</span>
                        </div>

                    </div>
                    <div class="hstack gap-3">
                        <button type="submit" class="btn btn-secondary ms-auto mt-3 mb-3 pt-2">Convertir</button>
                    </div>
        </form>
    </div>
    <?php
    require './clases/masa/deGrsA.php';
    if(isset($_POST['valor'], $_POST['DeUnidad'], $_POST['AUnidad']));
    $deGrsA = new DeGrsA($_POST['valor'], $_POST['DeUnidad'], $_POST['AUnidad']);
    switch($_POST['AUnidad']){
        case 'Libras':
            echo $deGrsA->convert1();
            break;
        case 'Onzas':
            echo $deGrsA->convert2();
            break;
        case 'Kilogramos':
            echo $deGrsA->convert3();
        case 'Toneladas':
            echo $deGrsA->convert4();
    }
    $deGrsA = new DeLbsA($_POST['valor'], $_POST['DeUnidad'], $_POST['AUnidad']);
    switch($_POST['AUnidad']){
        case 'Kilogramos':
            echo $deGrsA->convert1();
            break;
        case 'Onzas':
            echo $deGrsA->convert2();
            break;
        case 'Gramos':
            echo $deGrsA->convert3();
        case 'Toneladas':
            echo $deGrsA->convert4();
    }
    $deGrsA = new DeKilA($_POST['valor'], $_POST['DeUnidad'], $_POST['AUnidad']);
    switch($_POST['AUnidad']){
        case 'Libras':
            echo $deGrsA->convert1();
            break;
        case 'Onzas':
            echo $deGrsA->convert2();
            break;
        case 'Gramos':
            echo $deGrsA->convert3();
        case 'Toneladas':
            echo $deGrsA->convert4();
    }
    $deGrsA = new DeOnzA($_POST['valor'], $_POST['DeUnidad'], $_POST['AUnidad']);
    switch($_POST['AUnidad']){
        case 'Libras':
            echo $deGrsA->convert1();
            break;
        case 'Kilogramos':
            echo $deGrsA->convert2();
            break;
        case 'Gramos':
            echo $deGrsA->convert3();
        case 'Toneladas':
            echo $deGrsA->convert4();
    }
    $deGrsA = new DeTonA($_POST['valor'], $_POST['DeUnidad'], $_POST['AUnidad']);
    switch($_POST['AUnidad']){
        case 'Libras':
            echo $deGrsA->convert1();
            break;
        case 'Onzas':
            echo $deGrsA->convert2();
            break;
        case 'Gramos':
            echo $deGrsA->convert3();
        case 'Kilogramos':
            echo $deGrsA->convert4();
    }
    ?>
    <script src="./js/validation.js"></script>
</body>

</html>