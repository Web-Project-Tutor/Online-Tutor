$(".reg-teacher").hide();
$(".Teacher").css("background", "none");

$(".Teacher").click(function(){
  $(".reg-student").hide();
  $(".reg-teacher").show();
  $(".Student").css("background", "none");
  $(".Teacher").css("background", "#fff");
});

$(".Student").click(function(){
  $(".reg-student").show();
  $(".reg-teacher").hide();
  $(".Teacher").css("background", "none");
  $(".Student").css("background", "#fff");
});

$(".btn").click(function(){
  $(".input").val("");
});