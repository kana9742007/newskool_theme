$(function() {

    //高さを取得
    $(window).load(function() {
        //画面高さ取得
        h = $(window).height();
        $('#NavMenu').css('min-height', h + 'px');
    });

    $(window).resize(function() {
        //画面リサイズ時の高さ取得
        h = $(window).height();
        $('#NavMenu').css('min-height', h + 'px');

    });

    var bottomPos = $(document).height() - $(window).height() -500;

        $(window).scroll(function() {

            if(bottomPos < $(this).scrollTop()) { // 100pxスクロールしていたら上に戻るボタンを表示
                $(".top_back_trigger").fadeIn();
            } else {
                $(".top_back_trigger").fadeOut();
            }
        });
        $(".footer_content").click(function() {
            $("body,html").animate({scrollTop:0},800); // 800msかけて上に戻る
        });

})