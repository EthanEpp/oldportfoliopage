<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
  <!-- ... -->
</head>
<body class="flex-col mx-auto pt-8 bg-blue-100">

<h1 class="text-center"> Hover here to reveal the page:)</h1>

<div class="flex flex-col">
<div class="flex flex-row">
<div class="flex flex-row font-medium text-4xl pt-5 pl-5 pr-5"><div>Ethan Epp</div>
</div>
<div class="flex flex-col text-center items-center justify-end text-sm pl-20 pb-1">Computer Engineer</div></div>
<!-- <div class="fixed"> -->
<div class="absolute fixed flex-col top-50 right-0 bg-blue-500 h-20 w-20 mr-8 rounded-sm hover:bg-yellow-100">
<div class="pl-2">
<div class="text-right font-semibold pr-2 text-red-400" >Contact</div><div class="text-right text-red-400 font-semibold pr-2">About</div><div class="text-right text-red-400 font-semibold pr-2">Home</div>
</div>
</div>
</div>
 

<!-- Idea. Have some sort of enter a code thingy that if you enter a code found on a different page it revails something related to that page secret -->
<div class="flex font-semibold text-3xl m-5"><span class="text-red-500">I hope you're having a good day:)</span></div>

  <div class="flex-col font-medium text-m pt-5">
  <div>
  <span id="Red" onmouseover="changeColor(this, 'red', '500')" class="transition"  onmouseout="changeColorBack(this, 'red', '500')"><a href="https://www.instagram.com/e.eppiie/">Hello, if you're here you know my name(and if u don't how did u get here?)</a></span>
  </div>
  <div>
  <span id="Orange" onmouseover="changeColor(this, 'yellow', '500')" class="transition"  onmouseout="changeColorBack(this, 'yellow', '500')"><a href="https://www.instagram.com/e.eppiie/">Wanna learn more about me and what I enjoy? Check it out here!</a></span>
  </div>
  <div>
  <span id="Yellow" onmouseover="changeColor(this, 'yellow', '300')" class="transition"  onmouseout="changeColorBack(this, 'yellow', '300')"><a href="https://www.instagram.com/e.eppiie/">What have I done and coded? Check it out here!</a></span>
  </div>
  <div>
  <span id="Green" onmouseover="changeColor(this, 'green', '500')" class="transition"  onmouseout="changeColorBack(this, 'green', '500')"><a href="https://www.instagram.com/e.eppiie/">Wanna have endless drip? Check out my merch here!</a></span>
  </div>
  <div>
  <span id="Blue" onmouseover="changeColor(this, 'blue', '500')" class="transition"  onmouseout="changeColorBack(this, 'blue', '500')"><a href="https://www.instagram.com/e.eppiie/">Wanna see a peek into more daily life? Check out my youtube here!</a></span>
  </div>
  <div>
  <a id="Indigo" href="https://www.instagram.com/e.eppiie/" class="transition" onmouseover="changeColor(this, 'indigo', '500')" onmouseout="changeColorBack(this, 'indigo', '500')">Wanna see my public persona? Find me on social media here!</a>
  </div>
  <div>
  <a id="Purple" href="https://www.instagram.com/e.eppiie/" class="transition"  onmouseover="changeColor(this, 'purple', '500')" onmouseout="changeColorBack(this, 'purple', '500')">Wanna meet up and chat sometime? Schedule a meeting with me here!</a>
  </div>
  <div>
  <a id="Pink" href="https://www.instagram.com/e.eppiie/" class="transition"  onmouseover="changeColor(this, 'pink', '500')" onmouseout="changeColorBack(this, 'pink', '500')">Wanna reach out to me somehow? Find my contact information here!</a>
  </div>
  </div>
</body>
<script>
var secondText = document.getElementById("Orange");
function setColor(x, num){
    var color = "text-" + x + "-" + num;
    return color;
}
var y = 0;

//var orange = document.getElementById("orange");


function changeColor(x, color, num){
    x.className = setColor(color, num) + " text-xl ml-5 pt-8 pb-8";
    y = 1;
}


function changeColorBack(x,color,num){
    if(y=1){
    var millisecondsToWait = 1500;
    setTimeout(function() {
    y=0;
    x.classList.remove(setColor(color,num));
    x.classList.remove("text-xl");	
    x.classList.remove("ml-5");	
    x.classList.remove("pt-8");	
    x.classList.remove("pb-8");		
    }, millisecondsToWait);
    }
}

</script>
</html>