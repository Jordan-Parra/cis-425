$(function() {
  $(".image-link").hover( 
      function() {
        $(this).css("background", "rgba(0,0,0,0.1)");
      }, function() {
        $(this).css("background", "white");
      }
  ); 
  
  $("input[type=\"reset\"]").on("click", function() {
     document.getElementById("name").focus()
  });
});

// document.getElementById("external-nav-links").innerHTML("<p>Hello Bitches</p>");