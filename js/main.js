const list = document.querySelectorAll('ul');
const listItems = document.querySelectorAll('li');
let c = 9;
const ordererList = [];

listItems.forEach(element => {
    element.classList.add('animate__animated');
    element.classList.add('animate__bounceInRight');
    element.classList.add('animate__delay-' + c + 'ds');
    c++;
});

jQuery(function($){
    var windowWidth = $(window).width();
    var windowHeight = $(window).height();
  
    $(window).resize(function() {
      if(windowWidth != $(window).width() || windowHeight != $(window).height()) {
        location.reload();
        return;
      }
    });
});
