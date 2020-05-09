$(document).ready(function() {
    $('.popup-content').next().mousemove(function(event) {

        let _this = $(this).prev()
        $(_this).each(function(index) {
            $(_this).css('display', 'block');
            $(_this).css('top', event.clientY - this.offsetHeight - 10 + 'px');
            $(_this).css('left', event.clientX - 20 + 'px');
        });;

    });;


    $('.popup-content').next().mouseout(function(event) {
        $(this).prev().css('display', 'none');;
    });;


    //cara 2

    $('.pBox').mousemove(function(event) {

        $(this).find('.popup-content-box').each(function(index) {
            $(this).css('display', 'block');
            $(this).css('top', event.clientY - this.offsetHeight - 10 + 'px');
            $(this).css('left', event.clientX - 20 + 'px');
        });

    });;


    $('.pBox').mouseout(function(event) {
        $(this).find('.popup-content-box').css('display', 'none');;
    });;
});