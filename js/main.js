$(function() {
  if (document.getElementById("name")) {
    $("#messages").text($("#name").attr("title"));
  } else {
    $("#messages").text($("#username").attr("title"));
  }
  
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
  $(".form-control").on("focus", function() {
      $("#messages").text($(this).attr("title"));
  });
  
  // $(".form-control").on("focus", function() {
  //   $(this).addClass("has-warning");
  // });
  
  // $(".form-control").on("focus", function() {
  //   $(this).siblings(".help-block").text($(this).attr("title"));
  // });
  
  // $(".form-control").on("blur", function() {
  //   $(this).siblings(".help-block").text("");
  // });
});