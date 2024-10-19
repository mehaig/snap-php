

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
    <div class="container">
    <?php include("components/header.php"); ?>
    <?php include("components/navigation.php"); ?>
    <?php include("components/jumbo.php"); ?>
    content here
   <?php include("components/footer.php"); ?>
    </div>
    
</body>
<?php include("includes/scripts.php"); ?>
</html>