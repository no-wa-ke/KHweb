<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/media/favicon.ico">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" media="screen">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fullPage.css" media="screen">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightBox.css"media="screen">
<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
<script type="text/javascript" src="http://harunak.tumblr.com/api/read/json?num=10&type=photo"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/jquery.fullPage.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/jquery.slimscroll.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/mason.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/lightBox.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/photoSets.js"></script>



<title>Kosaka Haruna Web</title>
</head>
<body>

<div id = "container">
<!-- head -->
<?php get_header(); ?>
<!-- menu -->
<?php get_sidebar(); ?>
<!-- foot -->
<?php get_footer(); ?>
</div>



<div id="fullpage">
<!-- 1 -->
<div class="section" id="section0"></div>
<!-- 2 -->
<div class="section " id="section1">
            <div class="intro center">
                news.</div>
                <div class ="postOut"></div>
                <div class ="linkFoot center">
                <a href="http://harunak.tumblr.com/">
                See more posts on Tumblr / Tumblrで読む</a>　</div>
            </div>
<!-- 3 -->
<div class="section" id="section2">
<div id = "tumblr-wrap"></div>
</div>
<!-- 4 -->
 <div class="section" id="section3">
            <div class="intro">
                <h1>No limitations!</h1>
                <p>Content is a priority. Even if it is so large :)</p>
            </div>
        </div>
    </div>


        <script src="<?php echo get_template_directory_uri(); ?>/lib/backStretch.js"></script>


</body>
</html>