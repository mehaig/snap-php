
<?php
   
    $baseUrl = "http://localhost:8000/";
?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $PAGE_TITLE; ?></title>

    <?php if ($CURRENT_PAGE == "Index") { ?>
        <meta name="description" content="Your page description here" />
        <meta name="keywords" content="keyword1, keyword2, keyword3" />
    <?php } ?>

    <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

   

</body>
</html>
