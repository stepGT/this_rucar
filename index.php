<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap-4.5.0.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>RUCar</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-3">
            <form>
                <div class="form-group form-group-mark">
                    <label for="this_rucar_mark">Марка</label>
                    <select class="form-control" name="this_rucar_mark"
                            id="this_rucar_mark">
                    </select>
                </div>
                <div class="form-group form-group-model">
                    <label for="this_rucar_model">Модель</label>
                    <select disabled class="form-control" name="this_rucar_model"
                            id="this_rucar_model"></select>
                </div>
                <div class="form-group form-group-generation">
                    <label for="this_rucar_generation">Поколение</label>
                    <select disabled class="form-control" name="this_rucar_generation"
                            id="this_rucar_generation"></select>
                </div>
                <div class="form-group form-group-serie">
                    <label for="this_rucar_serie">Серия</label>
                    <select disabled class="form-control" name="this_rucar_serie"
                            id="this_rucar_serie"></select>
                </div>
                <div class="form-group form-group-modification">
                    <label for="this_rucar_modification">Модификация</label>
                    <select disabled class="form-control" name="this_rucar_modification"
                            id="this_rucar_modification"></select>
                </div>
                <div class="form-group form-group-equipment">
                    <label for="this_rucar_equipment">Комплектация</label>
                    <select disabled class="form-control" name="this_rucar_equipment"
                            id="this_rucar_equipment"></select>
                </div>
            </form>
        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-6">
                    <h5>Значения характеристик:</h5>
                    <div class="rucar_characteristic"></div>
                </div>
                <div class="col-6">
                    <h5>Опции:</h5>
                    <div class="rucar_option"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.5.1.js"></script>
<!--<script src="js/popper-1.16.0.js"></script>-->
<script src="js/bootstrap-4.5.0.js"></script>
<script src="frontend/script.js"></script>
</body>
</html>