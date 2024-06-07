<!DOCTYPE html>
<html>
<head>
    <title>Disney+ - Star Wars: The Mandalorian</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="<?php echo $logo_url; ?>" alt="Disney+ logo">
        </div>
        <div class="show-info">
            <h1><?php echo $show_title; ?></h1>
            <p><?php echo $age_rating; ?></p>
            <p><?php echo $content_description; ?></p>
            <p><?php echo $years_of_broadcast; ?></p>
            <p><?php echo $number_of_seasons; ?></p>
            <button><?php echo $next_button; ?></button>
            <button><?php echo $back_button; ?></button>
            <p><?php echo $show_description; ?></p>
            <img src="<?php echo $image_url; ?>" alt="Mandalorian holding Baby Yoda">
        </div>
    </div>
</body>
</html>