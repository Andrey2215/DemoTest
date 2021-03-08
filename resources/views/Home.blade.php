<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/lux/bootstrap.min.css">
    <title>Document</title>
</head>
<body class="text-center text-white w-100" style="min-width: 300px; min-height: 100vh;display: grid;">
<div class="d-flex w-100 flex-column justify-content-center align-items-center">

    <header class="bg-dark p-4 w-100" >
            @yield("welcome")
    </header>
    <main class="w-75 " style="flex-grow: 1;">

@yield('content')

    </main>


    <footer class="text-white bg-dark p-3 w-100">
        <div>
        <p>Thanks for your attention</p>
        </div>
    </footer>

</div>
</body>
@yield('script')
</html>
