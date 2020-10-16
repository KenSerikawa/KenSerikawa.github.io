const list = document.querySelectorAll('ul');
const listItems = document.querySelectorAll('li');
let c = 9;
const ordererList = [];

listItems.forEach(element => {
    console.log(element)
    element.classList.add('animate__animated');
    element.classList.add('animate__bounceInRight');
    element.classList.add('animate__delay-' + c + 'ds');
    c++;

});