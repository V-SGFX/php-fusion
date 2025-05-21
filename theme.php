<?php
defined('IN_FUSION') or die();

function render_page($license = false) {
    $settings = fusion_get_settings();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $settings['sitename']; ?></title>
    <link rel="stylesheet" href="<?php echo THEME; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo THEME; ?>styles.css">
    <script src="<?php echo THEME; ?>js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <div class="container">
            <a href="<?php echo BASEDIR; ?>index.php">
                <img src="<?php echo THEME; ?>images/logo.png" alt="AbcLinuxu" class="img-fluid" style="max-width: 200px;">
            </a>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item"><a class="nav-link" href="<?php echo BASEDIR; ?>index.php">Strona główna</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo BASEDIR; ?>articles.php">Artykuły</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo BASEDIR; ?>forum/index.php">Forum</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="container my-4">
        <div class="row">
            <aside class="col-lg-3 col-md-4"><?php echo LEFT; ?></aside>
            <main class="col-lg-6 col-md-8"><?php echo U_CENTER.CONTENT.L_CENTER; ?></main>
            <aside class="col-lg-3 col-md-4"><?php echo RIGHT; ?></aside>
        </div>
    </div>
    <footer class="bg-primary text-white text-center py-3">
        <div class="container">
            <p>© <?php echo date('Y'); ?> <?php echo $settings['sitename']; ?></p>
        </div>
    </footer>
</body>
</html>
<?php
}
