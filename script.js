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