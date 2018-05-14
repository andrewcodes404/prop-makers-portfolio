
$(".drop-menu").hide();
$(".drop-btn").click(function(){
    $(".drop-menu").slideToggle(300);

});


$(".splat-label").hide();





function myFunction(x) {
    if (x.matches) { // If media query matches

    } else {
      $(".splat-item").hover(function(){
          $(".splat-label" , this).fadeToggle(400);

      });
    }
}

var x = window.matchMedia("(max-width: 992px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes

$(".big-img").click(function(){
  $( ".pop-up").addClass("show");
})
