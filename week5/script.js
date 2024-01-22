alert("Welcome"); //pop up on the home page



let wayne = "";

wayne = () => {
  document.getElementById("demo").innerHTML += "wayne";
}

// The window object calls the function:
window.addEventListener("load", wayne);

// A button object calls the function:
document.getElementById("btn").addEventListener("click", wayne);


