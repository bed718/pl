
$( document ).ready(function() {
	$('#back-to-top').click(function(){
	    $("html, body").animate({ scrollTop: 0 }, 1200);
	    return false;
	 });


    var $container = $('.tile-holder');

    $container.imagesLoaded( function() {
        $container.masonry({
            itemSelector: '.tile'
        });
    });

});
