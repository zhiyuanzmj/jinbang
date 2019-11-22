jQuery(document).ready(function() {
    $('.cards-carousel').each(function () {
        var
            $this = $(this)
            , $cards = $this.find('.cards');
        var slider = $cards.lightSlider({
            item: 1
            , loop: false
            , slideMove: 1
            , slideMargin: 0
            , easing: 'cubic-bezier(0.25, 0, 0.25, 1)'
            , speed: 600
            , onBeforeSlide: function (el) {
                var
                    current = (el.getCurrentSlideCount() + slider.find('.clone').length / 2)
                    , pageCurrent = (current - 1) * 4 + $cards.find('> li:nth-child(' + current + ') > a').length;
                $this.find('.number-current').html(pageCurrent);
            }
        });
        $this.find('.card-prev').click(function () {
            slider.goToPrevSlide();
        });
        $this.find('.card-next').click(function () {
            slider.goToNextSlide();
        });
    });
});