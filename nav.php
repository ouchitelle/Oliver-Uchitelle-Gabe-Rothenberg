<nav>
    <a class="<?php
    if ($pathParts['filename'] == "index") {
        print 'activePage';
    }
    ?>" href="index.php">Home</a>

    <a class="<?php
    if ($pathParts['filename'] == "about") {
        print 'activePage';
    }
    ?>" href="about.php">NBA Blog</a>

    <a class="<?php
    if ($pathParts['filename'] == "detail") {
        print 'activePage';
    }
    ?>" href="detail.php">MVP Race</a>

    <a class="<?php
    if ($pathParts['filename'] == "form") {
        print 'activePage';
    }
    ?>" href="form.php">NBA Form</a>
 </nav>
