
var sidebar  = $('#sidebar');
var mask = document.querySelector('.mask');
var sidebar_trigger = document.querySelector('#sidebar_trigger');
//var bttButton = document.querySelector('#backToTop');
var bttButton= $('#backToTop');

function showSidebar(){
	//sidebar.style.display= 'block';
	event.preventDefault();
	mask.style.display = 'block';
	//sidebar.css('top',document.body.scrollTop);
	sidebar.css('right',0);


}

function hideSidebar(){
	mask.style.display='none';
	sidebar.css('right',-300);
}

function backToTop(){
	
	
	$('html,body').animate({
		scrollTop:0},800)


}

function hideBttbutton(){
	//console.log(document.body.scrollTop);
	//console.log(window.innerHeight);
	var top = document.documentElement.scrollTop || document.body.scrollTop;
	if(top < window.innerHeight)
	{
		bttButton.fadeOut();
	}
	else
	{
		bttButton.fadeIn();
	}
}

sidebar_trigger.addEventListener('click',showSidebar,true);
mask.addEventListener('click',hideSidebar,true);
bttButton.on('click',backToTop);
window.addEventListener('scroll',hideBttbutton,true);

