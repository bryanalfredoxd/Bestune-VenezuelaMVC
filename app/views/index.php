<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title']; ?></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
</head>
<body>
    <header>
        <h1><?php echo $data['title']; ?></h1>
    </header>
    <main>
        <p><?php echo $data['description']; ?></p>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> <?php echo SITENAME; ?></p>
    </footer>
    <script src="<?php echo URLROOT; ?>/js/main.js"></script>
</body>
</html>