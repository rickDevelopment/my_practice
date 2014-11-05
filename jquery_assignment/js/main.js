$(function(){
	$('.alien').click(function(){
		$(this).hide();
	});
$('#restartButton').click(function(){
	$('.alien').show();
	});
});