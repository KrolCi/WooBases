function header(){
    $(window).scroll(function(){
        var windowWidth = $(this).width();
        var windowHeight = $(this).height();
        var windowScrollTop = $(this).scrollTop();

        if( windowScrollTop > 235 ){
            $('#main-head').css('position','fixed');
            $('main-header').show(500);
        } else {
            $('#main-head').css('position','static');
        }
    });
}
function Click(){
    $('.popup').click(function(event){
        var pop = $(this);

        var Url = pop.attr('href');
        var Red = pop.attr('data-red');

        window.open(Url, Red, 'width=400,height=400');
        return false;
    });
}
function NavShow(){
    var item = $('#main-head #wrap .menu');
    $('.nav-show').on('click', function(){

        if(item.is('.menu-show')){
            item.removeClass('menu-show');
        }else{
            item.addClass('menu-show');
        }
    });
}

$(document).on('ready', function(){
    Click();
    NavShow();
});
