<?php
    $pages = [];
    $pageFolder = 'pages/';
    
    if (is_dir($pageFolder)) {
        $files = scandir($pageFolder);

        foreach ($files as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) == 'php') {
                $pageName = ucfirst(str_replace('.php', '', $file));
                $pages[$file] = [$pageName, "$pageName Page"];
            }
        }
    }

    $currentScript = basename($_SERVER['SCRIPT_NAME']);
    $CURRENT_PAGE = isset($pages[$currentScript]) ? $pages[$currentScript][0] : "Index";
    $PAGE_TITLE = isset($pages[$currentScript]) ? $pages[$currentScript][1] : "Welcome to my homepage!";
?>
