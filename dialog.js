//these variables connect our code with the 'id' on the html
//we can then manipulate the variables and it will manipulate the html
var images = document.getElementById("images"); 
var text = document.getElementById("text"); 
var buttonBox = document.getElementById('buttonBox');
var input = document.getElementById('input');
//this is the variable for the name of the character
var cat;

//this is how after we type in the character name and hit enter
//we will add the name to the variable, remove the input box and start our first scenario
input.onkeypress = function(event) {
  console.log(input.value);
  if (event.key == "Enter" || event.keyCode == 13) {
    cat =  input.value;
    input.parentNode.removeChild(input)
    advanceTo(scenario.two)
  }
};

//this changes the text and puts in your characters name
var changeText = function(words) {
  text.innerHTML = words.replace("tu gato", cat);
};

//this takes the image link and puts it in the proper format, sending it to the html
var changeImage = function(img) {
  images.style.backgroundImage = "url(" + img + ")";
};

function replaceName(text) {
   return text.replace("tu gato", cat);
}

//this looks at the number of options we have set and creates enough buttons 
var changeButtons = function(buttonList) {
  buttonBox.innerHTML = "";
  for (var i = 0; i < buttonList.length; i++) {
    buttonBox.innerHTML += "<button class='btn text-white font-2p choice' onClick="+buttonList[i][1]+">" + replaceName(buttonList[i][0]) + "</button>";
  };
};

//this is what moves the game along
var advanceTo = function(s) {
  changeImage(s.image)
  changeText(s.text)
  changeButtons(s.buttons)
};

//this is the object that holds each scenario, the more you add the more options there are
//scenario = {}
var scenario = {
  one: {
    image: "", // 
    text: "Despúes de mucho tiempo, has decidido llevar al gato a la montaña para que vea un poco de naturaleza contigo. Por cierto, ¿cómo se llama el gato? \n",
  },
  two: {
    image: "", //
    text: "Una vez allí, en la ladera más tranqula del valle, abres la mochila con forma de nave donde lleva una hora tu gato descansando y aparece una serpiente como de la nada.",
    buttons: [["Coger a tu gato y correr", "advanceTo(scenario.three)"],["Ver qué sucede durante los próximos segundos", "advanceTo(scenario.four)"]]
  },
  three: {
    image: "",//
    text: "A los pocos metros de escapar de la serpiente tropiezas con un pedrusco con la mala suerte de que tu gato sale volando por los aires hasta unos arbustos.",
    buttons: [["Correr a buscar a tu gato", "advanceTo(scenario.six)"], ["Llamar a tu gato para que venga", "advanceTo(scenario.seven)"]]
  },
  four: {
    image: "",//
    text: "A tu gato se le ha erizado todo el pelo y parece otro, la serpiente parece haberse percatado de la situación y mientras mira a tu gato...  ",
    buttons: [["Coges un palo para matar al reptil", "advanceTo(scenario.five)"],["Le pegas una patada y sales corriendo con tu gato", "advanceTo(scenario.three)"]]
  },
  five: {
    image: "",//
    text: "La serpiente muerde el cuello de tu gato bruscamente pero a duras penas consigue desengancharse, tú estás mirando.",
    buttons: [["Seguir mirando", "advanceTo(scenario.eight)"], ["Aplaudir la pelea", "advanceTo(scenario.nine)"]]
  },
  six: {
    image: "",//
    text: "Te adentras en los frondosos arbustos pero sólo encuentras el collar de tu gato, ¿qué haces?",
    buttons: [["Maldecirte a grito pelao por ser tan irresponsable", "advanceTo(scenario.ten)"], ["Seguir buscando", "advanceTo(scenario.eleven)"]]
  },
  seven: {
    image: "",//
    text: "Tu gato aparece sin ningún rasguño pero parece que quiere que le sigas. Como dueño de tu gato, ¿qué haces?",
    buttons: [["Le sigues", "advanceTo(scenario.ten)"], ["Le coges y os vais a casa", "advanceTo(scenario.eleven)"]]
  },
  eight: {
    image: "",//
    text: "Tu gato huye del lugar sin ademán de que quiera que le sigan, pero...",
    buttons: [["Le sigues", "advanceTo(scenario.ten)"], ["Prefieres mirar el móvil", "advanceTo(scenario.twelve)"]]
  },
  nine: {
    image: "",//
    text: "La serpiente se echa para un lado y termina yéndose del lugar. Tu gato, moribundo con la mirada perdida suelta un leve ronoroneo cuando le coges y le dices:",
    buttons: [["'Lo siento'", "advanceTo(scenario.twelve)"], ["Déjame tuitear este momento super sad", "advanceTo(scenario.twelve)"]]
  },  
  ten: {
    image: "",//
    text: "Tu gato corre con mucha intensidad hasta meterse en una cueva en la ladera de a penas un metro de diámetro con una extraña luz al fondo del trayecto subterráneo.",
    buttons: [["Tratas de seguir el ritmo de tu gato", "advanceTo(scenario.thirdteen)"], ["Coges tu móvil para activar la linterna", "advanceTo(scenario.twelve)"]]
  },  
  eleven: {
    image: "",//
    text: "De camino, un extraño con aspecto tambaleante os da la enhorabuena. Parece que al final no ha pasado nada malo.",
  },
  twelve: {
    image: "",//
    text: "A los pocos segundos, un mensaje aparece en las notificaciones de tu móvil con el mensaje: 'Has fracasado'",
  },
  thirdteen: {
    image: "",//
    text: "Al final del camino, esta extraña luz se ve con mayor nitidez y, para tu sorpresa, tu gato espera paciente a tu llegada con un pequeño obsequio entre sus dientes que, probablemente acabe de picar de lo que parecía ser la luz, siendo en realidad una refracción de la pared, toda llena de diamantes. ",
  },
};


//this is the code that starts the game
advanceTo(scenario.one);