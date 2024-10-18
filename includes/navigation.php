<div class="container">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="/">Home</a>
        </li>
        <?php foreach ($pages as $file => $info): ?>
        <li class="nav-item">
            <a class="nav-link <?php if ($CURRENT_PAGE == $info[0]) {?>active<?php }?>" href="<?php echo '/' . htmlspecialchars($pageFolder . $file); ?>">
                <?php echo htmlspecialchars($info[0]); ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
