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

    //スライダー
    var swiper = new Swiper(".js-mv-swiper", {
        loop: true,
        speed: 3000,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });

    //
    var swiper = new Swiper(".js-info-card", {
        loop: true,
        slidesPerView: 1.2,
        spaceBetween: 20,
        breakpoints: {
            768: {
                slidesPerView: 4,
                spaceBetween: 40
            }
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });


});
