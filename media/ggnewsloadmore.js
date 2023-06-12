jQuery(function($){ 
    $('.gg_news_products_loadmore').click(function(){
        var button = $(this);
        var data = {
            'action': 'loadmore',
            'query': gg_news_loadmore_params.posts, // that's how we get params from wp_localize_script() function
            'page' : gg_news_loadmore_params.current_page
        };
        $.ajax({ // you can also use $.post here
            url : gg_news_loadmore_params.ajaxurl, // AJAX handler
            data : data,
            type : 'POST',
            beforeSend : function ( xhr ) {
                button.html('<div class="see-more-detail"><p>Đang tải...</p></div>'); // change the button text, you can also add a preloader image
            },
            success : function( data ){
                if( data ) { 
                    button.html( '<div class="see-more-detail"><p>Xem thêm</p><i class="fa-solid fa-caret-down"></i></div>' ).prev().before(data); // insert new posts
                    gg_news_loadmore_params.current_page++;
                    if ( gg_news_loadmore_params.current_page == gg_news_loadmore_params.max_page ) 
                        button.remove(); // if last page, remove the button
                    // you can also fire the "post-load" event here if you use a plugin that requires it
                    // $( document.body ).trigger( 'post-load' );
                } else {
                    button.remove(); // if no data, remove the button as well
                }
            }
        });
    });
})