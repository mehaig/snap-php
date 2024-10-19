<hr class="my-0">

<div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-center mt-2">
        <li class="nav-item"><a class="p-2 text-muted <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="/">Home</a></li>
        
        <?php foreach ($pages as $file => $info): ?>
        <li class="nav-item">
            <a class="p-2 text-muted <?php if ($CURRENT_PAGE == $info[0]) {?>active<?php }?>" href="<?php echo '/' . htmlspecialchars($pageFolder . $file); ?>">
                <?php echo htmlspecialchars($info[0]); ?>
            </a>
        </li>
        <?php endforeach; ?>
        </nav>
      </div>