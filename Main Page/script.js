
function dropItDown(){
    //alert('yes');
    if(document.getElementById('Log').textContent==="Login"){
        window.location.href="Login/sign-in.php"
    }
    else
    document.getElementById('dropContent').classList.toggle('visible');
}
function popUp(){
  //  alert('yes');
document.getElementById('pop').classList.toggle('active');
}

window.addEventListener("beforeunload", function (event) {
  // Make an AJAX call to a PHP script to unset session variables
  console.log("we RR");
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "unset_session.php", true);
  xhr.send();
});
