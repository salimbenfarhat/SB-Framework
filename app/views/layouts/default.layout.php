<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= $variables['meta']['title']; ?></title>
  <meta charset="UTF-8">
  <meta name="description" content="<?= $variables['meta']['description']; ?>">
  <meta name="author" content="Salim Benfarhat">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <base href="<?= URLROOT; ?>">
  <!-- LOADING FAVICON -->
  <link rel="icon" href="<?= BASEPATH . '/public/favicon.ico'; ?>" sizes="any">
  <link rel="icon" href="<?= BASEPATH . '/public/icon.svg'; ?>" type="image/svg+xml">
  <link rel="apple-touch-icon" href="<?= BASEPATH . '/public/icon.png'; ?>">
  <!-- LOADING CSS FILES -->
  <link rel="stylesheet" href="<?= BASEPATH . '/public/assets/css/BootstrapGridSystem.css'; ?>">
  <link rel="stylesheet" href="<?= BASEPATH . '/public/assets/css/App.css'; ?>">
</head>
<body>
  <div class="container">
    <?= $content; ?>
  </div>
  <!-- LOADING JS FILES -->
  <script src="<?= BASEPATH . '/public/assets/js/App.js'; ?>" async></script>
</body>
</html>