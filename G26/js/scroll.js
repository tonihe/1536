var timeOut;
function scrollToTop() {
  if (document.body.scrollTop!=0 || document.documentElement.scrollTop!=0){
    window.scrollBy(0,-50);
    timeOut=setTimeout('scrollToTop()',14);
  }
  else clearTimeout(timeOut);
}