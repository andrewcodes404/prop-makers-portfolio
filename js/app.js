
$(".drop-menu").hide();
$(".drop-btn").click(function(){
    $(".drop-menu").slideToggle(300);

});


$(".splat-label").hide();
$(".splat-item").hover(function(){
    $(".splat-label" , this).fadeToggle(400);

});




$(".big-img").click(function(){
  $( ".pop-up").addClass("show");
})
