$(document).ready(function(){

    $('.animar').waypoint(function() {
        $('.animar').addClass('animated fadeInDown');
    }, {
        offset: '100%'
    });
    $('.animar2').waypoint(function() {
        $('.animar2').addClass('animated fadeInLeft');
    }, {
        offset: '100%'
    });
     $('.animar3').waypoint(function() {
        $('.animar3').addClass('animated fadeInRight');
    }, {
        offset: '100%'
    });
     $('.animar4').waypoint(function() {
        $('.animar4').addClass('animated fadeInDown');
    }, {
        offset: '100%'
    });

});