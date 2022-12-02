$(document).on("click",".has-sub-menu",function(){
	$(this).toggleClass("open");
	$(this).children(".sidebar-sub-menu").slideToggle();
});
