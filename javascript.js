var resize = function () {
    var cw = $('.resize').width();

    
    var resizeDivs = $(".resize").each(function() {
        $(this).css({'height': cw + 'px'});
        if($(this).hasClass("galleryDiv")) {
           if ($(window).width() >= 900){
                $(this).css({'margin-bottom': cw/2 + "px"})
                $(this).css({'margin-top': cw/2 + "px"})
            } else {
                $(this).css({'margin-bottom': 5 + "px"})
                $(this).css({'margin-top': 5 + "px"})                     
            }
        } 
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

lightbox.option({'showImageNumberLabel': false})