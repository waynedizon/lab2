alert("Welcome"); //pop up on the home page



let wayne = "";

wayne = () => {
  document.getElementById("demo").innerHTML += "wayne";
}

// The window object calls the function:
window.addEventListener("load", wayne);

// A button object calls the function:
document.getElementById("btn").addEventListener("click", wayne);

class Car {
  constructor(name, year) {
    this.name = name;
    this.year = year;
  }
  age(x) {
    return x - this.year;
  }
}

const date = new Date();
let currentYear = date.getFullYear();

const myCar = new Car("Pink Lamborghini Aventador", 2023);
document.getElementById("demo").innerHTML =
"My name is Wayne, and my " + myCar.name + " is " + myCar.age(currentYear) + " years old.";
