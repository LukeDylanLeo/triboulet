$(function() {
  $("#buttonup").hide();
  $("#button").on("click", function() {
    $(".fin").fadeIn(1000);
    $("#buttonup").show();
    $("#button").hide();
  })

  $("#buttonup").on("click", function(){
    $(".fin").fadeOut(700);
    $("#buttonup").hide();
    $("#button").show();
  })
})
