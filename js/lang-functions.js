// JavaScript functions for languages page
function moveJS() {
	"use strict";
  var elem = document.getElementById("jsBar");   
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 16) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
		elem.innerHTML = width * 1 + '%';
    }
  }
}

function moveJava() {
	"use strict";
  var elem = document.getElementById("javaBar");   
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 11) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
		elem.innerHTML = width * 1 + '%';
    }
  }
}

function movePython() {
	"use strict";
  var elem = document.getElementById("pythonBar");   
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 8) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
		elem.innerHTML = width * 1 + '%';
    }
  }
}