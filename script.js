let icons = document.querySelectorAll("i");
let cards = document.querySelectorAll(".card");

cards.forEach(function(card, index) {

    let icon = icons[index];

    card.addEventListener("dblclick", function() {

        icon.style.transform = "translate(-50%, -50%) scale(2)";
        icon.style.opacity = "0.9";

        setTimeout(function() {
            icon.style.opacity = "0";
            icon.style.transform = "translate(-50%, -50%) scale(0)";
        }, 1000);

    });

});






// 1. Save something
// localStorage.setItem("name", "lareb");

// 2. Read it (and actually use the value)
// let name = localStorage.getItem("name");
// console.log(name);   // "lareb"

// 3. Delete it
// localStorage.removeItem("name");

// 4. Check after delete
// console.log(localStorage.getItem("name"));   // null

let name = sessionStorage("name" , "eman");