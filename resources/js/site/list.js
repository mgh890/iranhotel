$(document).ready(function(ev){
    $('#custom_carousel').on('slide.bs.carousel', function (evt) {
        $('#custom_carousel .controls li.active').removeClass('active');
        $('#custom_carousel .controls li:eq('+$(evt.relatedTarget).index()+')').addClass('active');
    });
    $('#custom_carousel').carousel({
        interval: false
    });
    $(window).resize(function() {

        ellipses1 = $("#bc1 :nth-child(2)");
        if ($("#bc1 a:hidden").length >0) {ellipses1.show()} else {ellipses1.hide()}

        ellipses2 = $("#bc2 :nth-child(2)");
        if ($("#bc2 a:hidden").length >0) {ellipses2.show()} else {ellipses2.hide()}

    })
});