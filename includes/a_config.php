<?php
    $pages = [];
    $pageFolder = 'pages/';
    
    // Check if the folder exists before scanning
    if (is_dir($pageFolder)) {
        $files = scandir($pageFolder);
    
        // Loop through the files and build the $pages array
        foreach ($files as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) == 'php') {
                $pageName = ucfirst(str_replace('.php', '', $file));
                $pages[$file] = [$pageName, "$pageName Page"];
            }
        }
    }

    // Get the current script name
    $currentScript = basename($_SERVER['SCRIPT_NAME']);
    $CURRENT_PAGE = isset($pages[$currentScript]) ? $pages[$currentScript][0] : "Index";
    $PAGE_TITLE = isset($pages[$currentScript]) ? $pages[$currentScript][1] : "Welcome to my homepage!";
?>
