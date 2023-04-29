<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Tailwindcss -->
    <link href="./dist/output.css" rel="stylesheet">

    <!-- Fonts Figtree -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600" rel="stylesheet"/>

    <!-- Organizational Chart -->
    <script src="https://cdn.syncfusion.com/ej2/dist/ej2.min.js" type="text/javascript"></script>
    <link href="https://cdn.syncfusion.com/ej2/material.css" rel="stylesheet">

    <title>Website Resmi Desa Sako</title>
</head>

<body class="font-sans antialiased">

<!-- bottom naivgation for mobile device -->
<?php include_once "./src/views/bottom-navigation.php"; ?>

<div class="min-h-screen bg-zinc-50 dark:bg-black">
    <?php include_once "./src/views/navigation.php"; ?>

    <main>
        <?php include_once "./src/views/jumbotron.php"; ?>

        <?php include_once "./src/views/profile.php"; ?>

        <?php include_once "./src/views/struktur-pemerintahan-desa.php"; ?>

        <?php include_once "./src/views/agenda.php"; ?>

        <?php include_once "./src/views/layanan-publik.php"; ?>

        <?php include_once "./src/views/berita.php"; ?>

        <?php include_once "./src/views/gallery.php"; ?>
    </main>
</div>

<?php include_once "./src/views/footer.php"; ?>

<script type="module" src="./src/js/app.js"></script>
</body>

</html>