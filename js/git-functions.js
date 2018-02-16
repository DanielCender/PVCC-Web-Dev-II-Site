// JavaScript Document With the Progress bar functions for the GitHub page

function moveUS() {
	"use strict";
  var elem = document.getElementById("usBar");   
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 25) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
		elem.innerHTML = width * 1 + '%';
    }
  }
}

// Asia bar
function moveAsia() {
	"use strict";
  var elem = document.getElementById("asiaBar");   
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 30) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
		elem.innerHTML = width * 1 + '%';
    }
  }
}


// Europe bar
function moveEU() {
	"use strict";
  var elem = document.getElementById("euBar");   
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 22) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
		elem.innerHTML = width * 1 + '%';
    }
  }
}
