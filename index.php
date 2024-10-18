

<?php
if ($_SERVER['REQUEST_URI'] == '/index.php') {
    header("Location: /");
    exit();
}
?>
<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>
<body>
    <?php include("includes/navigation.php"); ?>
    <div class="container" id="main-content">
        <h2>Home</h2>
        <p>Welcome to the Home page!</p>
    </div>
    <?php include("includes/footer.php"); ?>
</body>
</html>


