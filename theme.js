$(window).on("load", function() {
    $(document).on('click','.tree-menu li span',function(){

        $(this).closest('li').children('ul').slideToggle();

        if($(this).closest('li').haschildren('ul')){

            $(this).toggleClass('open');

        }
        return false;
    });
    $("#main-menu").sticky({topSpacing:0});
});
