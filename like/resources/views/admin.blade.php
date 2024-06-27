<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gain-Like</title>
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/src/assets/css/styles.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Line+Seed:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>

    @include('header.adminheader')
    @yield('contents')
    @include('footer.adminfooter')

    <script src="/src/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/src/assets/js/sidebarmenu.js"></script>
    <script src="/src/assets/js/app.min.js"></script>
    <script src="/src/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="/src/assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="/src/assets/js/dashboard.js"></script>
</body>

</html>