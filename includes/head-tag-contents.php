<?php
    // Scan for CSS and JS files if the assets directory exists
    $cssFiles = is_dir('assets/css') ? glob('assets/css/*.css') : [];
    $jsFiles = is_dir('assets/js') ? glob('assets/js/*.js') : [];
?>

<title><?php print $PAGE_TITLE; ?></title>

<?php if ($CURRENT_PAGE == "Index") { ?>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
<?php } ?>

<?php foreach ($cssFiles as $cssFile): ?>
    <link rel="stylesheet" href="<?php echo $cssFile; ?>">
<?php endforeach; ?>

<?php foreach ($jsFiles as $jsFile): ?>
    <script src="<?php echo $jsFile; ?>"></script>
<?php endforeach; ?>
