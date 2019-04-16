
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */

// --!!! fix for dropdowns to work!!!!----//
let parts = document.getElementById("tool-parts");
parts.addEventListener("click", dropdown);


function dropdown() {
    document.getElementById("toolPartsDropDown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
Window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        console.log('drop');
        let dropdowns = document.getElementsByClassName("dropdown-content");
        for (let i = 0; i < dropdowns.length; i++) {
            let openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
