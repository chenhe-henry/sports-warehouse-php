<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= TITLE ?? "NO TITLE" ?> - Sports Warehouse</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div class="site-wrapper">
        <header class="site-header">
            <img src="images/LogoLarge.png" alt="Logo-sportsWarehouse" />
        </header>
        <main class="main-content">
            <?= $output ?? 'NO TEMPLATE CONTENT - $output not defined' ?>
        </main>
        <footer class="site-footer">
            <p class="copyright">Copyright &copy;2023 Sports Warehouse.</p>
        </footer>
    </div>
</body>

</html>
