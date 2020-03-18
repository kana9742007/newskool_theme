<?php get_header(); ?>
<div class="home_container" >
    <ul class="slider">
    <li><img class="slider_img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gdt2019_ss01.png" /></li>
    <li><img class="slider_img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gdt2019_ss02.png" /></li>
    <li><img class="slider_img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gdt2019_ss03.png" /></li>
    </ul>

    <div class="single_content">
        <div class="home_content">
            <div class="home_content_top">
                <h1 class="home_title">「最高の休日」</h1>
                <div class="home_content_top_text">
                    <div class="home_text_message">
                        <p>100個のハンモックに、BBQ。野外シネマに、ヨガ教室！釣りも出来てお酒も飲める！<p>
                        <p>大人だけでも良し！子どもと一緒に家族参加も良し！</p><br>
                        <p>2017年の品川初開催から述べ6万人が参加した、</p>
                        <p>アウトドアコンテンツが大集結の大型イベントがパワーアップして2019年も開催決定！</p><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home_content_detail">
        <div class="list-btn">
            <ul>
                <li class="sort-all"><a class="muuri_title 0" href="#">All<span class="muuri_num_all">14</span></a></li>
                <li class="sort-active"><a class="muuri_title 1" href="#">Active<span class="muuri_num_active">9</span></a></li>
                <li class="sort-kids"><a class="muuri_title 2" href="#">Kids<span class="muuri_num_kids">9</span></a></li>
                <li class="sort-rerax"><a class="muuri_title 3" href="#">Relax<span class="muuri_num_relax">8</span></a></li>
                <li class="sort-summer"><a class="muuri_title 4" href="#"> Summer<span class="muuri_num_summer">6</span></a></li>
            </ul>
        </div>

        <div class="list">
            <ul class="grid" data-col="4" data-col-mobile="2" data-spacer="10" data-spacer-mobile="20" data-template="intro-above">
            <div class="item all rerax">
                <a href="http://<?php echo($_SERVER['HTTP_HOST']) ?>/hammock/" class="item-content" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contents/hammock-airtheme-thumb-43-small-650x490.png')" data-all="1" data-active="15" data-kids="15" data-rerax="1" data-summer="15">
                    <div class="all rerax" ><h3>ハンモック</h3></div>
                </a>
            </div>
            <div class="item all active kids rerax summer">
                <a href="http://<?php echo($_SERVER['HTTP_HOST']) ?>/bbq/" class="item-content" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contents/BBQ-airtheme-thumb-43-small-650x490.png')" data-all="2" data-active="1" data-kids="1"  data-rerax="2" data-summer="1">
                    <div class="all active kids rerax summer"><h3>手ぶらＢＢＱ</h3></div>
                </a>
            </div>
            <div class="item all active kids rerax">
                <a href="http://<?php echo($_SERVER['HTTP_HOST']) ?>/yoga/" class="item-content" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contents/yoga-airtheme-thumb-43-small-650x490.png')" data-all="3" data-active="2" data-kids="2"  data-rerax="3" data-summer="15">
                    <div class="all active kids rerax"><h3>YOGA</h3></div>
                </a>
            </div>
            <div class="item all rerax">
                <a href="http://<?php echo($_SERVER['HTTP_HOST']) ?>/chill-out-djs/" class="item-content" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contents/CHILLMUSIC-airtheme-thumb-43-small-650x490.png')" data-all="4" data-active="15" data-kids="15"  data-rerax="4" data-summer="15">
                    <div class="all rerax"><h3>Chill out DJs</h3></div>
                </a>
            </div>
            <div class="item all active kids rerax summer">
                <a href="http://<?php echo($_SERVER['HTTP_HOST']) ?>/outdoor-cinema/" class="item-content" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contents/night_cinema-airtheme-thumb-43-small-650x490.png')" data-all="5" data-active="3" data-kids="3"  data-rerax="5" data-summer="2">
                    <div class="all active kids rerax summer"><h3>Outdoor Cinema</h3></div>
                </a>
            </div>
            <div class="item all rerax">
                <a href="http://<?php echo($_SERVER['HTTP_HOST']) ?>/book/" class="item-content" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contents/book-airtheme-thumb-43-small-650x490.png')" data-all="6" data-active="15" data-kids="15"  data-rerax="6" data-summer="15">
                    <div class="all rerax"><h3>芝生の本屋さん</h3></div>
                </a>
            </div>
            <div class="item all active kids">
                <a href="http://<?php echo($_SERVER['HTTP_HOST']) ?>/diy-ws/"  class="item-content" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contents/DIY-1-airtheme-thumb-43-small-650x490.png')" data-all="7" data-active="4" data-kids="4"  data-rerax="15" data-summer="15">
                    <div class="all active kids"><h3>DIY WS</h3></div>
                </a>
            </div>
            <div class="item all active summer">
                <a href="http://<?php echo($_SERVER['HTTP_HOST']) ?>/fishing/" class="item-content" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contents/fishing-airtheme-thumb-43-small-650x490.png')" data-all="8" data-active="5" data-kids="15"  data-rerax="15" data-summer="3">
                    <div class="all active summer"><h3>Fishing</h3></div>
                </a>
            </div>
            <div class="item all rerax summer">
                <a  href="http://<?php echo($_SERVER['HTTP_HOST']) ?>/food-drink/" class="item-content" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contents/food_and_drink-airtheme-thumb-43-small-650x490.png')" data-all="9" data-active="15" data-kids="15"  data-rerax="7" data-summer="4">
                    <div class="all rerax summer"><h3>Food & Drink</h3></div>
                </a>
            </div>
            <div class="item all">
                <a href="http://<?php echo($_SERVER['HTTP_HOST']) ?>/kids-bicycle/" class="item-content" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contents/bike-airtheme-thumb-43-small-650x490.png')" data-all="10" data-active="6" data-kids="5"  data-rerax="15" data-summer="15">
                    <div class="all"><h3>Kids Bicycle</h3></div>
                </a>
            </div>
            <div class="item all active kids">
                <a href="http://<?php echo($_SERVER['HTTP_HOST']) ?>/kids-pool/" class="item-content" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contents/pool-airtheme-thumb-43-small-650x490.png')" data-all="11" data-active="7" data-kids="6"  data-rerax="15" data-summer="5">
                    <div class="all active kids"><h3>Kids Pool</h3></div>
                </a>
            </div>
            <div class="item all active kids">
                <a href="http://<?php echo($_SERVER['HTTP_HOST']) ?>/athletic/" class="item-content" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contents/athletic-airtheme-thumb-43-small-650x490.png')" data-all="12" data-active="8" data-kids="7"  data-rerax="15" data-summer="15">
                    <div class="all active kids"><h3>アスレチック</h3></div>
                </a>
            </div>
            <div class="item all active kids summer">
                <a href="http://<?php echo($_SERVER['HTTP_HOST']) ?>/ennichi/" class="item-content" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contents/ennichi-airtheme-thumb-43-small-650x490.png')" data-all="13" data-active="9" data-kids="8"  data-rerax="15" data-summer="6">
                    <div class="all active kids summer"><h3>縁日</h3></div>
                </a>
            </div>
            <div class="item all active kids rerax">
                <a href="http://<?php echo($_SERVER['HTTP_HOST']) ?>/kamishibai/" class="item-content" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contents/kamishibai-airtheme-thumb-43-small-650x490.png')" data-all="14" data-active="15" data-kids="9"  data-rerax="8" data-summer="15">
                    <div class="all active kids rerax"><h3>紙芝居</h3></div>
                </a>
            </div>
            </ul>
        </div>
    </div>
    <div class="single_content">
        <div class="tikcket_content">
            <a href="https://good-day-wakasu-bbq.peatix.com/">
                <img class="ticket_top" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ticket.png">
            </a>
            <a href="https://good-day-wakasu-bbq.peatix.com/">
                <img class="ticket_bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ticket.png">
            </a>
        </div>
        <div class="text_message_nomal">
            <p>遊ぶだけが休日じゃない。<p>
            <p>はしゃぐだけが休日じゃない。</p>
            <p>ゆっくりと、背伸びせずに、</p>
            <p>普段の自分を見つめ直したり。</p>
            <p>the good day TOKYOは、</p>
            <p>最高の休日を過ごす、きっかけづくりの場です。</p>
        </div>
    </div>
<?php get_footer(); ?>