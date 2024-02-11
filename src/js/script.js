jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

        // ハンバーガーメニュー
        $(function () {
            $(".js-hamburger").on("click", function () {
                $(this).toggleClass("is-open");
                if ($(this).hasClass("is-open")) {
                    openDrawer();
                } else {
                    closeDrawer();
                }
            });

            // backgroundまたはページ内リンクをクリックで閉じる
            $(".js-drawer a[href]").on("click", function () {
                closeDrawer();
            });

            // resizeイベント
            $(window).on('resize', function() {
                if (window.matchMedia("(min-width: 768px)").matches) {
                    closeDrawer();
                }
            });
        });

        function openDrawer() {
            $(".js-sp-nav").fadeIn();
            $(".js-hamburger").addClass("is-open");
        }

        function closeDrawer() {
                $(".js-sp-nav").fadeOut();
            $(".js-hamburger").removeClass("is-open");
        }

    //mvスライダー
    var swiper = new Swiper(".js-mv-swiper", {
        loop: true,
        speed: 3000,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });

    //campaignスライダー
    var swiper = new Swiper(".js-info-card", {
        loop: true,
        slidesPerView: 1.2,
        spaceBetween: 24,
        breakpoints: {
            768: {
                slidesPerView: 3.5,
                spaceBetween: 40
            }
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });


    //要素の取得とスピードの設定
    var box = $('.course__item-img, .testimonial__item-box-img, .price__img-sp, .price__img-pc'),
    speed = 700;

    //.colorboxの付いた全ての要素に対して下記の処理を行う
    box.each(function(){
    $(this).append('<div class="color"></div>')
    var color = $(this).find($('.color')),
    image = $(this).find('img');
    var counter = 0;

    image.css('opacity','0');
    color.css('width','0%');
    //inviewを使って背景色が画面に現れたら処理をする
    color.on('inview', function(){
        if(counter == 0){
            $(this).delay(200).animate({'width':'100%'},speed,function(){
                image.css('opacity','1');
                $(this).css({'left':'0' , 'right':'auto'});
                $(this).animate({'width':'0%'},speed);
                })
            counter = 1;
            }
        });
    });

    //トップへ戻るボタン
    let topBtn = $('.to-top');
    topBtn.hide();

    //ボタンの表示設定
    $(window).scroll(function () {
        if ($(this).scrollTop() > 150) {
        //指定のpx以上のスクロールでボタンを表示
            topBtn.fadeIn();
        } else {
        //指定のpx以上のスクロールでボタンを非表示
            topBtn.fadeOut();
        }
    });





});
