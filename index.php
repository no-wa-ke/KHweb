<!DOCTYPE html>
<html lang="ja">
    <!-- code written by nowake(@kido_yoji) -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/media/favicon.ico">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
        <script src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
        <script src="<?php echo get_template_directory_uri(); ?>/lib/pace.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" media="screen">
            <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/lib/jquery.fullPage.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/lib/jquery.slimscroll.min.js"></script>
            <title>Kosaka Haruna Web</title>
            <!-- for facebook -->
            <meta property="og:title" content="Kosaka Haruna " />
            <meta property="og:url" content="http://harunakosaka.com/wp/" />
            <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/media/harunakosakaweb.jpg" />
        </head>
        <body>
            <!-- head -->
            <?php get_header(); ?>
            <!-- menu -->
            <?php get_sidebar(); ?>
            <!-- foot -->
            <?php get_footer(); ?>
            <div id="fullpage">
                <!-- 1 -->
                <div class="section full active" id="section0">
                    <div class="cover"></div>
                </div>
                <!-- 2 -->
                <div class="section " id="section1">
                    <div class="centerWrap center">
                        <div class="intro">news</div>
                        
                        <div class="postOut"></div>
                        <div class="linkFoot center">
                            <a href="http://harunak.tumblr.com/">
                            See more posts on Tumblr / Tumblrで読む</a>　</div>
                            
                        </div>
                        
                    </div>
                    <!-- 3 -->
                    <div class="section" id="section2">
                        <div class="centerWrap center">
                            <div class="intro center">works</div>
                            
                            <div id="tumblr-wrap"></div>
                            <div id="loading">
                                <img src="<?php echo get_template_directory_uri(); ?>/media/loading.gif">
                            </div>
                            <div class="linkFoot center">
                                <a href="http://harunak.tumblr.com/">
                                See more works on Tumblr / Tumblrで見る</a>　</div>
                            </div>  
                        </div>
                        <!-- 4 -->
                        <div class="section" id="section3">
                            <div id="storeWrap" style="width:100%;height:auto;display:inline;"></div>
                        </div>
                        <!-- 5 -->
                        <div class="section" id="section4">
                            <div class="boxContainer center">
                                <div class="picBox">
                                    <img src="<?php echo get_template_directory_uri(); ?>/media/profile.png" alt="">
                                </div>
                                <div class="profile big">
                                    <p>
                                    llustration/photo/graphic design
                                    <br>
                                    <br>高坂春菜 / Haruna Kosaka
                                    <br>1988年 東京生まれ。
                                    <br>東京と、５年暮らしたシンガポールで育つ。
                                    <br>2012年 武蔵野美術大学 視覚伝達デザイン学科卒。
                                    <br>デザイン、イラスト、写真、などジャンル問わず
                                    <br>だれかの事からわたくし事まで
                                    <br>足どり軽く、制作活動中です。
                                    <br>_____________________________________________
                                    <br>HARUNA KOSAKA
                                    <br>1988 born in Tokyo, Japan
                                    <br>2012 graduated from Musashino Art University,
                                    <br>and started working as a freelance.
                                    <br>Lives and works in Tokyo.
                                    <br>
                                    <br>
                                    </p>
                                    <p>
                                    [ Past Exhibitions and Events ]
                                    <br>
                                    <br>
                                    <ul class="past">
                                        <li>2010.3 恋ケ窪 はこ庭にて個展 「ここちよいカタチ」</li>
                                        <li>2012.3　 武蔵野美術大学　卒業制作展</li>
                                        <li>2012.4　 世田谷ものづくり学校　FFLLAATT主催</li>
                                        <li>2012.4 MOUNT ZINE3」に出品</li>
                                        <li>2012.9　 京都造形芸術大学・東北芸術大学 外苑キャンパスで THE TOKYO ART BOOK FAIR 2012に出店</li>
                                        <li>2012.10 FFLLAATT主催
                                            <li>2012.10 SUNDAY BOOKS/シブカル祭/MOUNT ZINE4」に出品</li>
                                            <li>2012.10　 池袋ジュンク堂にて写真集・カレンダーの取り扱いがスタート</li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- 6 -->
                            <div class="section" id="section5">
                                <div class="contact center">
                                    <ul class="infoWrap center">
                                        <p>contact : info[at]harunakosaka.com</p>
                                        <p>twitter : <a href="https://twitter.com/_haruna_">@_haruna_</a>
                                        </p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <script src="<?php echo get_template_directory_uri(); ?>/lib/colorBox.js"></script>
                        <script src="<?php echo get_template_directory_uri(); ?>/lib/grid.js"></script>
                        <script type="text/javascript" src="http://harunak.tumblr.com/api/read/json?num=10&type=photo"></script>
                        <script src="<?php echo get_template_directory_uri(); ?>/lib/backStretch.js"></script>
                        <script src="<?php echo get_template_directory_uri(); ?>/lib/photoSets.js"></script>
                        <script src="<?php echo get_template_directory_uri(); ?>/lib/storeCall.js"></script>
                    </body>
                </html>