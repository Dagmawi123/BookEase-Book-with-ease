const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
const header = document.querySelector('.header.container');
let videoBtn=document.querySelectorAll('.vid-btn');

hamburger.addEventListener('click', () => {
	hamburger.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 250) {
		header.style.backgroundColor = '#29323c';
	} else {
		header.style.backgroundColor = 'transparent';
	}
});

menu_item.forEach((item) => {
	item.addEventListener('click', () => {
		hamburger.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
});
videoBtn.forEach(btn =>{
	btn.addEventListener('click', ()=>{
		document.querySelector('.controls .active').classList.remove('active');
		btn.classList.add('active');
		let src=btn.getAttribute('data-src');
		document.querySelector('#video-slider').src= src;
	});
});
i=parseInt(Math.random()*6);
setInterval(()=>{
if(i==videoBtn.length-1){
videoBtn[i].click();	
i=0}
else{
videoBtn[i].click();
i++	}
},10000)

var swiper = new Swiper(".review-slider", {

	spaceBetween:20,
	loop:true,
	autoplay:{
		delay:2500,
		disableOnInteraction:  false,
		
		
	},
	breakpoints:{
		640:{
			slidesPerView:1,
		
		},
		768:{
			slidesPerView:2,

		},
		1024:{
			slidesPerView:3,
		},
	},

});
