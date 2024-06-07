<!DOCTYPE <html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- Font Awesome Icon Pack --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>myInventory System</title>
</head>

<body class="bg-light">

    <div class="container mb-5">
        <div class="cover my-4">
            <div class="overlay"></div>
            <div class="content">
                <h2 class="border-bottom border-3 fw-bold pb-2 mt-3">Inventory Application</h2>
            </div>
        </div>
        @yield('content')

    </div>


    <div class="footer">
        <div class="footer-content p-3">
            <p class="mb-0">Find me on <a href="https://github.com/thilinaruwan112/my-inventory"
                    target="_blank">GitHub</a> and <a href="https://www.linkedin.com/in/thilinaruwan11/"
                    target="_blank">LinkedIn</a>.</p>
        </div>


        <div class="credits-bar">
            <p class="mb-0">Developed By <a href="http://myfolio.payshia.com/" target="_blank"
                    rel="noopener noreferrer">Thilina Ruwan</a></p>
        </div>
    </div>



</body>

</html>

</html>
