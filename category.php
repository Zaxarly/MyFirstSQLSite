<?php
require('components/Header/index.php');
$categoryID = $_GET['id'];
require_once('config.php');
$sql = "SELECT * FROM news WHERE category =" .$categoryID;
$result = mysqli_query($conn, $sql);
$post = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/main.css">
    <title>News</title>
</head>
<body>
<section class="category_container">
    <?php foreach ($result as $news):?>
        <div class="news_card">
            <div class="news_card_info">
                <img src="<?=$news['image']?>" class="news_card_image" alt="<?=$news['title']?>">
                <p class="news_card_title"><?=$news['title']?></p>
            </div>
            <div>
                <span><?= mb_substr($news['content'],0,80) . '...';?></span>
            </div>
            <div class="news_card_buttons">
                <a href="news.php?id=<?=$news['id']?>" class="news_card_button">Read More</a>
            </div>
        </div>
    <?php endforeach;?>
</section>
</body>
</html>