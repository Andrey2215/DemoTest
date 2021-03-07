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
<body class="text-center text-white w-100" style="min-width: 300px">
<div class="w-100">
    <header class="mb-auto bg-dark p-4">
            @yield("welcome")
    </header>
    <main class="w-75 m-auto">

@yield('content')

    </main>

    <footer class="text-white bg-dark footer p-3 mt-3">
        <div>
        <p class="">Thanks for your attention</p>
        </div>
    </footer>
</div>
</body>
@yield('script')
</html>
