<html>
<head>
    <title>Calculadora</title>

    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
          integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
          crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"
          integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"
            integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ=="
            crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            /*color: #B0BEC5;*/
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
            margin-bottom: 40px;
        }

        .quote {
            font-size: 24px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Calculadora</div>
        <div class="col-md-5">
            <table>
                <tr>
                    <td colspan="3">
                        <input type="text" class="form-control " id="visor" placeholder="0" " style="text-align: right; color:black;">
                    </td>
                    <td>
                        <button class="btn btn-default btn-lg number" id="visorOperador" type="button"></button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-primary btn-lg number" type="button">7</button>
                    </td>
                    <td>
                        <button class="btn btn-primary btn-lg number" type="button">8</button>
                    </td>
                    <td>
                        <button class="btn btn-primary btn-lg number" type="button">9</button>
                    </td>
                    <td>
                        <button class="btn btn-warning btn-lg operador" type="button">/</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-primary btn-lg number" type="button">4</button>
                    </td>
                    <td>
                        <button class="btn btn-primary btn-lg number" type="button">5</button>
                    </td>
                    <td>
                        <button class="btn btn-primary btn-lg number" type="button">6</button>
                    </td>
                    <td>
                        <button class="btn btn-warning btn-lg operador" type="button">*</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-primary btn-lg number" type="button">1</button>
                    </td>
                    <td>
                        <button class="btn btn-primary btn-lg number" type="button">2</button>
                    </td>
                    <td>
                        <button class="btn btn-primary btn-lg number" type="button">3</button>
                    </td>
                    <td>
                        <button class="btn btn-warning btn-lg operador" type="button">-</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-primary btn-lg" type="button">&nbsp;,&nbsp;</button>
                    </td>
                    <td>
                        <button class="btn btn-primary btn-lg number" type="button">0</button>
                    </td>
                    <td>
                        <button class="btn btn-primary btn-lg" id="igual" type="button">=</button>
                    </td>
                    <td>
                        <button class="btn btn-warning btn-lg operador" type="button">+</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        var stOperador = false
        var valor = 0
        var operador
        var total = 0

        $('.number').click(function () {
            if (stOperador) {
                $('#visor').val('')
                stOperador = false
            }

            $('#visor').val($('#visor').val() + $(this).text())
        })

        $('.operador').click(function () {
            stOperador = true
            operador = $(this).text()
            valor = $('#visor').val()

            $('#visorOperador').text($(this).text())
        })


        $('#igual').click(function () {
            switch (true){
                case operador == '/':
                        total = parseFloat(valor) / parseFloat($('#visor').val())
                    break;
                case operador == '*':
                    total = parseFloat(valor) * parseFloat($('#visor').val())
                    break;
                case operador == '-':
                    total = parseFloat(valor) - parseFloat($('#visor').val())
                    break;
                case operador == '+':
                    total = parseFloat(valor) + parseFloat($('#visor').val())
                    break;
            }

            $('#visor').val(total)

            stOperador = false
            valor = 0
            operador
            total = 0
        })
    })
</script>
</body>
</html>
