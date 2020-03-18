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

    var startPos = 0,winScrollTop = 0;
    $(window).on('scroll',function(){
        winScrollTop = $(this).scrollTop();
        if (winScrollTop >= startPos && winScrollTop  > 0 && startPos > 0) {
			console.log(winScrollTop);
        	console.log(startPos);
            $('.site-header').addClass('hide');
            $('.site-header').removeClass('top');
        } else if(winScrollTop  <= 0 || startPos <= 0 || winScrollTop == 0 || startPos == 0){
			console.log(winScrollTop);
        	console.log(startPos);
            $('.site-header').removeClass('top');
            $('.site-header').removeClass('hide');
        }
        else {
			console.log(winScrollTop);
        	console.log(startPos);
            $('.site-header').removeClass('hide');
            $('.site-header').addClass('top');
        }
		    console.log(winScrollTop);
        	console.log(startPos);
        startPos = winScrollTop;
    });

    $('.menu-trigger').click(function() {
        $(this).toggleClass('active');

        if ($(this).hasClass('active')) {
            $('.NavMenu').addClass('active');
            $('.container').addClass('active');
            $('.home_container').addClass('active');
            $('.menu-trigger_span').addClass('active');
            $('.menu_text_open').addClass('active');
            $('.menu_text_close').addClass('active');//クラスを付与
        } else {
            $('.NavMenu').removeClass('active');
            $('.container').removeClass('active'); //クラスを外す
            $('.home_container').removeClass('active');
            $('.menu-trigger_span').removeClass('active');
            $('.menu_text_open').removeClass('active');
            $('.menu_text_close').removeClass('active');
        }

        var nv = $('#NavMenu');
        var nvp = nv.outerHeight() + nv.offset().top;

            $(window).scroll(function () {
                var distanceTop = $(document).scrollTop();
                if (distanceTop < nvp) {
                    $('.NavMenu').addClass('active');
                    $('.container').addClass('active');
                    $('.home_container').addClass('active');
                    $('.menu-trigger_span').addClass('active');
                    $('.menu_text_open').addClass('active');
                    $('.menu_text_close').addClass('active');//クラスを付与
                } else if(nvp = 0){
                    $('.menu-trigger').removeClass('active');
                    $('.NavMenu').removeClass('active');
                    $('.container').removeClass('active'); //クラスを外す
                    $('.home_container').removeClass('active');
                    $('.menu-trigger_span').removeClass('active');
                    $('.menu_text_open').removeClass('active');
                    $('.menu_text_close').removeClass('active');
                }else {
                    $('.menu-trigger').removeClass('active');
                    $('.NavMenu').removeClass('active');
                    $('.container').removeClass('active'); //クラスを外す
                    $('.home_container').removeClass('active');
                    $('.menu-trigger_span').removeClass('active');
                    $('.menu_text_open').removeClass('active');
                    $('.menu_text_close').removeClass('active');
                }
            });

            $('.menu_link').each(function(){
                if(location.pathname != "/") {
                    $('#' + location.pathname.split("/")[1] ).addClass('current');
                } else {
                    $('.menu_ul li a:eq(0)').addClass('current');
                }
            });
    });
});

