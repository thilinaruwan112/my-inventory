<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>myInventory System</title>

    <style>
        body {
            background-image: url('{{ asset('images/background.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="overlay overlay-home"></div>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 text-center">
                <div class="card border-0 shadow-lg rounded-4" style="z-index: 999">
                    <div class="card-body p-4">
                        <h4 class="border-bottom pb-3 mb-3">Welcome to myInventory System</h4>
                        <a class="btn btn-dark" href="{{ route('products.index') }}">Log in to System</a>
                    </div>
                </div>

            </div>
        </div>

    </div>

</body>

</html>
