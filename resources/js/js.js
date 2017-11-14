$(document).ready(function () {
    /*slider-1*/
    $("#slider-1").owlCarousel({
        slideSpeed : 300,
        paginationSpeed : 400,
        loop:true,
        margin:10,
        items:1,
        dots:true,
        nav:true,
        navText: [ "<i class='fa fa-chevron-circle-left hvr-backward'></i>", "<i class='fa fa-chevron-circle-right hvr-forward'></i>" ]
    });
    /*mobile navBar*/

    var trigger = $('.hamburger'),
        overlay = $('.overlay'),
        isClosed = false;

    trigger.click(function () {
        hamburger_cross();
    });

    function hamburger_cross() {

        if (isClosed == true) {
            overlay.hide();
            trigger.removeClass('is-open');
            trigger.addClass('is-closed');
            isClosed = false;
        } else {
            overlay.show();
            trigger.removeClass('is-closed');
            trigger.addClass('is-open');
            isClosed = true;
        }
    }
    $('[data-toggle="offcanvas"]').click(function () {
        $('#ivi3-wrapperMenu').toggleClass('toggled');
    });
/* ----jazebe------- */
    $('#ivi3-wrapperMenu').find('.overlay').click(function () {
        hamburger_cross();
        $('#ivi3-wrapperMenu').toggleClass('toggled');
    });

    /*--listHotel---*/
    $('#slider-2').owlCarousel({
        // Enable thumbnails
        slideSpeed : 300,
        paginationSpeed : 400,
        thumbs: true,
        thumbImage: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item',
        loop:true,
        nav:true,
        items:1,
        margin:10,
        navText: [ "<i class='fa fa-chevron-circle-left hvr-backward'></i>", "<i class='fa fa-chevron-circle-right hvr-forward'></i>" ],
        responsive : {
            0:{
                dots:true
            },
            992:{
                dots:false
            }
        }

    });
    $(".owl-stage").parent().addClass("owl-stage-outer");
});
/*search on header*/
function searchToggle(obj, evt){
    var container = $(obj).closest('.search-wrapper');

    if(!container.hasClass('active')){
        container.addClass('active');
        evt.preventDefault();
    }
    else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
        container.removeClass('active');
        // clear input
        container.find('.search-input').val('');
        // clear and hide result container when we press close
        container.find('.result-container').fadeOut(100, function(){$(this).empty();});
    }
}
function submitFn(obj, evt){
    value = $(obj).find('.search-input').val().trim();

    $(obj).find('.result-container').html('<span>' + _html + '</span>');
    $(obj).find('.result-container').fadeIn(100);

    evt.preventDefault();
}