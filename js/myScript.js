/**
 * Created by Kh Akash on 11/15/2016.
 */

/* -- Preloader -- */
$(window).load(function(){
    $('.loader').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
    $('body').delay(350);

});

/* -- Slider --
$('#sl2').slider();*/

var RGBChange = function() {
    $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
};


