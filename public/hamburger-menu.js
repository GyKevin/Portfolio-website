var dropdown = document.querySelector("#hamburger-menu");
// on button click, start event
dropdown.addEventListener("click", () => {
    var nav = document.querySelector("nav");
    var header = document.querySelector("header");
    // if button is clicked, and display is none, set it to flex else to none
    if (nav.style.display == "none") {
        nav.style.display = "flex";
        header.style.height = "auto";
    } else {
        nav.style.display = "none";
        header.style.height = "10%";
    }
});