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


$(document).ready(function () {

    $('.mmm').Lazy();
    $(".myCategory").on('click',function (e) {
        e.preventDefault();
        var cat_id = $(this).data('cat');
        $.ajax({ url: 'functions/ajax_product.php',
            data: {cat_id: cat_id},
            dataType:'json',
            type: 'post',
            success: function(output) {
                $("#showingProduct").html("");

                $.each(output.info, function( index, value ) {

                    var msg = "<div class='col-sm-4 mmm'>"+
                        "<div class='product-image-wrapper'>"+
                        "<div class='single-products'>"+
                        "<div class='product-info text-center'>"+
                        "<img class='img-responsive' src='admin_area/product_images/"+value.product_image+"' alt=''>"+
                        "<h2>$ "+ value.product_image +"</h2>"+
                    "<p>"+ value.product_title +"</p>"
                    "<a href='add_to_cart.php?add_cart="+ value.product_id +"' class='pull-left btn btn-default add-to-cart'>" +
                    "<i class='fa fa-shopping-cart'></i>Add to cart</a>" +
                    "<a href='product_details.php?pro_id="+ value.product_id +"' class='pull-right btn btn-default add-to-cart'>" +
                    "<i class='fa fa-info-circle'></i>Details</a>"+
                        "</div></div></div></div>";
                    $( msg ).appendTo( "#showingProduct" );


                });
            }
        });
    });
});


