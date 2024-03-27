const navPanel = document.querySelector('.navpanel');
const navMenu = document.querySelector('.nav-menu');
navPanel.addEventListener("click", mobileMenu);
function mobileMenu() {
  navPanel.classList.toggle("active");
  navMenu.classList.toggle("active");}
const navLink = document.querySelectorAll('.nav-link');
navLink.forEach((n) => n.addEventListener("click", closeMenu));
function closeMenu() {
  navPanel.classList.remove("active");
  navMenu.classList.remove("active");
}

// var today=new Date().toISOString.split('T')[0];
// document.getElementById("date1").setAttribute('min', today);
//   var tomorrow = new Date();
//   tomorrow.setDate(new Date().getDate()+1);
//   var nextDate = tomorrow.toISOString().split('T')[0];
//   document.getElementById("date2").setAttribute('min', nextDate);

  function newDate() {
    // console.log("object");
var date1=document.getElementById('date1').value;//returns 2012-12-45 as string
var date2=Date.parse(date1)+86400000;//converting the string into milliseconds
var news=new Date(date2) ;//back into date object
var nextDate = news.toISOString().split('T')[0];//only d-m-y
document.getElementById("date2").setAttribute('min', nextDate);
//  var instance=M.Datepicker.getInstance(document.getElementById("date2"));
// instance.options.minDate=news;     
} 

// document.addEventListener('DOMContentLoaded', function() {
//   var elems = document.querySelector('#date1');
//   var instances = M.Datepicker.init(elems, {
// minDate:new Date(),

//   });
  
// });
// document.addEventListener('DOMContentLoaded', function() {
//   console.log("object");
//   var elems = document.querySelector('#date2');
//   var instances = M.Datepicker.init(elems,{});
// });

setTimeout(()=>{
  document.getElementsByClassName("loading")[0].style.opacity=0;
  // document.getElementsByClassName("loading")[0].style.display='none'
},1000)
setTimeout(()=>{
  // document.getElementsByClassName("loading")[0].style.opacity=0;
  document.getElementsByClassName("loading")[0].style.display='none'
},4000)
window.addEventListener('resize', function() {
  const dates=document.querySelectorAll('.dates input')
 if(this.window.innerWidth< 582){
dates[0].placeholder="Check-In"
dates[1].placeholder="Check-Out"
 }
 else{
  dates[0].placeholder="Check-In-Date"
dates[1].placeholder="Check-Out-Date"
 }
});