/**
 * Created by ivi3 on 6/19/2017.
 */
function isset(variable) {
    return typeof variable !== typeof undefined ? true : false;
}
$(document).ready(function () {
    var down = $("#goToDown") ;
    var up = $("#goToUp");

    up.click(function() {
        window.scrollUndo = $("html").scrollTop();
        $("html, body").animate({scrollTop: 0}, "slow");
        return false;
    });
    down.click(function() {
        $("html, body").animate({scrollTop: scrollUndo}, "slow");
        return false;
    });

    /*Scroll Top*/
    $(window).scroll(function() {
        var scrollLength = $("html, body").scrollTop();
        if(scrollLength>150) {
            down.css({"display":"none"});
            up.css({"display":"block"});
        }
        if(scrollLength<150) {
            up.css("display","none");

            if(isset(window.scrollUndo)) {
                if (scrollUndo > 150) {
                    down.css("display", "block");
                }
            }
        }

    });

});