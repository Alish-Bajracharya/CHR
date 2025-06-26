var tabs;
var tabs_reduced;
var close_clicked = false;

(function($) {
	$( document ).ready(function() {
		init();
	});
})(jQuery);

function cfActive(el, tabs, cfSour, all_close){
	for (var i = 0; i < tabs.length; i++) {
		tabs[i].classList.remove("uk-active");
	}
	el.classList.add("uk-active");
	for (var i = 0; i < cfSour.length; i++) {
		cfSour[i].classList.remove("cf-default-close");
		var children = cfSour[i].children;
		for (var child = 0; child < children.length; child++) {
			if(children[child].classList.contains(el.id)){
				children[child].classList.add("uk-active");
				children[child].parentElement.classList.add("cf-default-close");
			}else{
				children[child].classList.remove("uk-active");
			}
		}
	}
	for (var i = 0; i < all_close.length; i++) {
		all_close[i].classList.add("cf-all-close");
	}
	el.parentElement.classList.remove("cf-all-close");

	
}

function allClose(tabs, cfSour, all_close){
	for (var i = 0; i < tabs.length; i++) {
		tabs[i].classList.remove("uk-active");
	}
	for (var i = 0; i < cfSour.length; i++) {
		var children = cfSour[i].children;
		for (var child = 0; child < children.length; child++) {
			children[child].classList.remove("uk-active");
		}
	}
	for (var i = 0; i < all_close.length; i++) {
		all_close[i].classList.add("cf-all-close");
	}
	for (var i = 0; i < cfSour.length; i++) {
		cfSour[i].classList.remove("cf-default-close");
	}
}

function init(){

	window.addEventListener("resize", mobileView);
	tabs = document.getElementsByClassName("cf-tab");
	tabs_reduced = document.getElementsByClassName("cf-item-open");
	cfSour = document.getElementsByClassName("cf-source");
	close = document.getElementsByClassName("cf-close");
	all_close = document.getElementsByClassName("cf-tabs");
	var onmousemove = new Boolean(document.querySelector('.cf-emotion-accordion').dataset.onmousemove);

	for (var i = 0; i < tabs.length; i++) {
		if(onmousemove == true) {
			tabs[i].addEventListener("mousemove", function() {
				if (close_clicked) return;
				cfActive(this, tabs, cfSour, all_close);
			}, true);
			close[i].addEventListener("click", async function() {
				close_clicked = true;
				await new Promise(r => setTimeout(r, 1500));
				close_clicked = false;
			});
		} else {
			tabs[i].addEventListener("click", function(){
				cfActive(this, tabs, cfSour, all_close);
			}, true);
		}
	}


	for (var i = 0; i < close.length; i++) {
		close[i].addEventListener("click", function(){
			allClose(tabs, cfSour, all_close);
		}, true);
	}
	mobileView();
}



function mobileView() {
	var accordions = document.getElementsByClassName('cf-emotion-accordion');
	for (var accordion of accordions) {
		var containerObj = accordion.getElementsByClassName('cf-breakpoint')[0];
		var breakpointClassList = containerObj.classList;
		for (var classItem of breakpointClassList) {
			if (classItem.split('-').length > 2) {
				var breakpointString = classItem.split('-')[2];
				var breakpointInt = 640;
				switch (breakpointString) {
					case 'small':
						breakpointInt = 640;
						break;
					case 'medium':
						breakpointInt = 960;
						break;
					case 'large':
						breakpointInt = 1200;
						break;
					case 'xlarge':
						breakpointInt = 1600;
						break;	
				}
				if (window.innerWidth < breakpointInt) {
					containerObj.classList.add('cf-mobile');
				} else if (window.innerWidth > breakpointInt) {
					containerObj.classList.remove('cf-mobile');
				}
			}
		}
	}
}