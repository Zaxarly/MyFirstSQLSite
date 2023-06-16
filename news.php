<?php
$news_id = $_GET['id'];
if (!is_numeric($news_id)) exit();
require_once('config.php');
$sql = "SELECT * FROM news WHERE id =" .$news_id;
$result = mysqli_query($conn, $sql);
$news = mysqli_fetch_assoc($result)
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/fav-icon.jpg">
    <link rel="stylesheet" href="styles/global.css">
    <title>News | <?=$news['title']?></title>
</head>
<body>
<?php
require('./components/Header/index.php')
?>
<section class="news_container">
    <div class="single_news_card_container">
        <div>
            <img class="single_news_card_image" src="<?=$news['image']?>" alt="">
        </div>
        <div class="single_news_card_info">
            <h2 class="single_news_card_title"><?=$news['title']?></h2>
            <h3 class="single_news_card_content"><?=nl2br($news['content'])?></h3>
        </div>
    </div>
</section>
<div class="button_position">
    <a href="index.php" class="back">
        Go Back
        <span class="arrow">
        <svg viewBox="0 0 23 24" class="icon-arrow">
        <g transform="rotate(180 11.5 12)">
            <path d="M18.8,10.1L9.3,0.8c-1.1-1.1-2.8-1.1-3.9,0c-1.1,1.1-1.1,2.8,0,3.8l7.6,7.4l-7.6,7.4
        c-1.1,1.1-1.1,2.8,0,3.8c1.1,1.1,2.8,1.1,3.9,0l9.5-9.3C19.9,12.9,19.9,11.2,18.8,10.1z"></path>
        </g>
    </svg>
    </span>
    </a>
</div>
</body>
</html>