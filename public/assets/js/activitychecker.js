this.lastActiveTime = new Date();

window.onclick = function () {
  this.lastActiveTime= new Date();
};
window.onmousemove = function () {
  this.lastActiveTime= new Date();
};
window.onkeypress = function () {
  this.lastActiveTime= new Date();
};
window.onscroll = function () {
  this.lastActiveTime= new Date();
};
    
let idleTimer_k = window.setInterval(CheckIdleTime, ((20*60)*1000));

function getFalse(){
  return false;
}
       
function CheckIdleTime() {
  //returns idle time every 10 seconds
  let dateNowTime = new Date().getTime();
  let lastActiveTime = new Date(this.lastActiveTime).getTime();
  let remTime = Math.floor((dateNowTime-lastActiveTime)/ 1000);
  var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'), {
    keyboard: false
  })
  if (remTime >= 12) {

    myModal.show()
    $("head").append("<meta http-equiv='refresh' content='300;URL=/en/lock-screen' /> ");
    clearInterval(idleTimer_k);
    // $(document).ready(function(){

    //   $('.test-div').addClass('d-none');
    
    // });
  }
  // converting from milliseconds to seconds
  //console.log("Idle since "+remTime+" Seconds Last active at "+this.lastActiveTime)
}