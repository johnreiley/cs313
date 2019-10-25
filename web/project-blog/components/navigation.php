<header>
    <nav>
        <a href="index.php" class="nav-item home-btn"><i class="material-icons">home</i></a>
        <a href="archive.php" class="nav-item">Archive</a>
        <a href="about.php" class="nav-item">About</a>
        <?php
        if ($isAdmin)
            echo "
            <a href=\"actions/sign-out.php\" class=\"nav-item sign-out-btn\">
                <i class=\"material-icons\">exit_to_app</i>
            </a>";
        ?>
    </nav>
</header>