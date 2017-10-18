var slideIndex = 3;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("b_img");
  var dots = document.getElementsByClassName("s_img");
  // if (n > x.length) {slideIndex = 1}
  // if (n < 1) {slideIndex = x.length}
  console.log(x)
  
  for (i = 0; i < x.length; i++) 
  {
     x[i].style.display = "none";
  }

  for (i = 0; i < dots.length; i++) 
  {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }

  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
