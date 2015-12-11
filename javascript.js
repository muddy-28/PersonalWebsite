var resize = function () {
    var cw = $('.resize').width();

    
    var galleryDivs = $(".resize").each(function() {
        $(this).css({'height': cw + 'px'});
    });
    
    
    $('.middle').css({
        'height': cw + 'px'
    });
    //     var lw =$('#logoDiv').width();
    //     $('#logoDiv').css({
    //        'height': lw + 'px'
    //    });
};
resize();

$(window).resize(function () {
    resize()
});