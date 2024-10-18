<?php
if ($argc != 2) {
    echo "Usage: php generate_page.php <PageName>\n";
    exit(1);
}

$pageName = $argv[1];

$pagesDir = __DIR__ . '/pages/';

$pageFile = $pagesDir . $pageName . '.php';

if (file_exists($pageFile)) {
    echo "Error: A page with the name '$pageName' already exists.\n";
    exit(1);
}

$pageContent = <<<EOD
<?php include(__DIR__ . "/../includes/a_config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <?php include(__DIR__ . "/../includes/head-tag-contents.php"); ?>
</head>
<body>
    <?php include(__DIR__ . "/../includes/navigation.php"); ?>
    <div class="container" id="main-content">
        <h2>$pageName</h2>
        <p>Welcome to the $pageName page!</p>
    </div>
    <?php include(__DIR__ . "/../includes/footer.php"); ?>
</body>
</html>
EOD;

file_put_contents($pageFile, $pageContent);

echo "Page '$pageName.php' created successfully in the 'pages' directory.\n";
