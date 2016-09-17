$(document).ready(function()
{
	$("[data-toggle='tooltip']").tooltip();
});
$(document).ready(function()
{
	$(".message a").click(function()
	{
		$(".modal-content").animate({height:"toggle",opacity:"toggle"},"slow");
	})
})