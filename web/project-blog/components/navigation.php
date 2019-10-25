<header>
    <nav>
        <a href="index.php" class="nav-item">Home</a>
        <a href="about.php" class="nav-item">About</a>
        <a href="archive.php" class="nav-item">Archive</a>
        <?php
        if ($isAdmin)
            echo "<a href=\"actions/sign-out.php\" class=\"nav-item sign-out-btn\">Sign out</a>";
        ?>
    </nav>
</header>