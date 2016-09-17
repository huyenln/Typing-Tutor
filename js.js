window.onkeydown = function(e) { 
  return !(e.keyCode == 32 && e.target == document.body);
}; 
$(document).ready(function(){
	$("#myBtn").click(function(){
		$("#myText").css("color" , "red");
		alert($('#myInput').val());
	})
})