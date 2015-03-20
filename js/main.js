$(function() {
  //
  $("#messages").html("<div>" + $("#name").attr("title") + "</div>");
  
  // Add a hover effect to the external link images
  $(".image-link").hover( 
      function() {
        $(this).css("background", "rgba(0,0,0,0.1)");
      }, function() {
        $(this).css("background", "white");
      }
  ); 
  
  // Give focus to the first field on the form after hitting the reset button
  $("input[type=\"reset\"]").on("click", function() {
     document.getElementById("name").focus();
  });
  
  // Display a help message that utilizes the title attribute of the input field
  $(".message-control").on("focus", function() {
      $("#messages").html("<div>" + $(this).attr("title") + "</div>");
  });
});