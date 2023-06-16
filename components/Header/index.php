<head>
    <link rel="icon" href="img/fav-icon.jpg">
</head>
<header class="header_wrapper">
    <nav class="header_container">
        <a href="index.php" class="logo">
            <img class="logo_img" src="img/logo-1.png">
        </a>
        <ul class="nav_items">
            <?php
            require_once('config.php');
            $sql = "SELECT * FROM menu";
            $result = mysqli_query($conn, $sql);
            ?>
            <?php foreach ($result as $menu):?>
                <li>
                    <a class="nav-link" href="category.php?id=<?=$menu['categoryId']?>"><?=$menu['title']?></a>
                </li>
            <?php endforeach;?>
        </ul>
        <div class="header_buttons">
            <a href="login/index.php" class="header_button" id="login">
                Login
            </a>
        </div>
    </nav>
</header>