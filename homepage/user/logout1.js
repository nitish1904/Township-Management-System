function logout() {
  var opinion=confirm("Are you sure, Do you want to logout?");
 if(opinion){
    window.location.assign("/../../login.html")
}
else{
 console.log("ok, carry on.");
}
  
}
function preventBack(){
  window.history.forward();
}
setTimeout("preventBack()", 0);
window.onunload=function(){null};
