<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
  <!-- ... -->
</head>
<body class="flex-col mx-auto pt-8">

<!-- big flex-->
<!-- div div -->
<!-- div-->

<div class="flex flex-col bg-gray-500">

<div class="flex flex-row">
<div class="flex flex-row font-medium text-3xl pt-5 pl-5 pr-5"><div>Ethan Epp</div>
</div>
<div class="flex flex-col bg-red-500 text-center items-center justify-end text-sm">Computer Engineer</div></div>
<div class="absolute flex-col top-10 right-0 bg-blue-500 h-16 w-32">
<div>Home</div><div>About</div><div>Contact</div>
</div>

</div>


<div class="flex font-semibold text-5xl m-5"><span class="text-red-500">I hope you're having a good day:)</span></div>

  <div class="flex-col font-medium text-m pt-5">
  <div>
  <span id="Red" onmouseover="changeColor(this, 'red', '500')" onmouseout="changeColorBack(this, 'red', '500')"><a href="https://www.instagram.com/e.eppiie/">Hello, if you're here you know my name(and if u don't how did u get here?)</a></span>
  </div>
  <div>
  <span id="Orange" onmouseover="changeColor(this, 'yellow', '500')" onmouseout="changeColorBack(this, 'yellow', '500')"><a href="https://www.instagram.com/e.eppiie/">Wanna learn more about me and what I enjoy? Check it out here!</a></span>
  </div>
  <div>
  <span id="Yellow" onmouseover="changeColor(this, 'yellow', '300')" onmouseout="changeColorBack(this, 'yellow', '300')"><a href="https://www.instagram.com/e.eppiie/">What have I done and coded? Check it out here!</a></span>
  </div>
  <div>
  <span id="Green" onmouseover="changeColor(this, 'green', '500')" onmouseout="changeColorBack(this, 'green', '500')"><a href="https://www.instagram.com/e.eppiie/">Wanna have endless drip? Check out my merch here!</a></span>
  </div>
  <div>
  <span id="Blue" onmouseover="changeColor(this, 'blue', '500')" onmouseout="changeColorBack(this, 'blue', '500')"><a href="https://www.instagram.com/e.eppiie/">Wanna see a peek into more daily life? Check out my youtube here!</a></span>
  </div>
  <div>
  <a id="Indigo" href="https://www.instagram.com/e.eppiie/" onmouseover="changeColor(this, 'indigo', '500')" onmouseout="changeColorBack(this, 'indigo', '500')">Wanna see my public persona? Find me on social media here!</a>
  </div>
  <div>
  <a id="Purple" href="https://www.instagram.com/e.eppiie/" onmouseover="changeColor(this, 'purple', '500')" onmouseout="changeColorBack(this, 'purple', '500')">Wanna meet up and chat sometime? Schedule a meeting with me here!</a>
  </div>
  <div>
  <a id="Pink" href="https://www.instagram.com/e.eppiie/" onmouseover="changeColor(this, 'pink', '500')" onmouseout="changeColorBack(this, 'pink', '500')">Wanna reach out to me somehow? Find my contact information here!</a>
  </div>
  </div>
  <div>
  test</div>
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
    x.className = setColor(color, num) + " text-lg m-5";
    y = 1;
}


function changeColorBack(x,color,num){
    if(y=1){
    var millisecondsToWait = 1500;
    setTimeout(function() {
    y=0;
    x.classList.remove(setColor(color,num));
    }, millisecondsToWait);
    }
}

</script>
</html>