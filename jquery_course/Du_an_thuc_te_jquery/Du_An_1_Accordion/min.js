$(function(){

    $('.ndmotkhoi').slideUp();
});


$('.motkhoi h3').click(function(event){
    //$('.ndmotkhoi').slideDown();
    $(this).next().slideToggle();
});