$(document).ready(function() {
	$("#js-btn").on("click", function(e) {
		e.preventDefault();
		var top = $("#js-con").offset().top - 60;
		$("html, body").animate({
			scrollTop: top
		},500);
	});
});
$(function(){
	$('a[data-target^="anchor"]').on('click.smoothscroll',function(){
		var target = $(this).attr('href'),
			bl_top = $(target).offset().top - 60;
		$('body,html').animate({scrollTop: bl_top}, 700);
		return false;
	})
});
$(document).ready(function() {

	//E-mail Ajax Send
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

});