<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>YUDIS</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap" rel="stylesheet">
</head>

<body>
    @include('layouts.components.navbar')

    @yield('content')
        


    <!-- feather icons -->
    <script>
        feather.replace();
    </script>
    <!-- my JavaScript -->
    <script src="js/script.js"></script>
    @yield('scripts')
</body>

</html>
