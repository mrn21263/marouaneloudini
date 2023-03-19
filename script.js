 document.addEventListener("mousemove", function(e) {
   var div = document.querySelector(".suivre-souris");
  var x = e.clientX + window.scrollX - div.offsetWidth / 2;
     var y = e.clientY + window.scrollY - div.offsetHeight / 2;
     div.style.left = x + "px";
     div.style.top = y + "px";
 });


  
  function changerTheme() {
    var body = document.getElementsByTagName("body")[0];
    if (body.classList.contains("theme-blanc")) {
      body.classList.remove("theme-blanc");
    } else {
      body.classList.add("theme-blanc");
    }
  }

  

  


  