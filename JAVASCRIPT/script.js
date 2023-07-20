// let myform = document.getElementById("form-contact");

// myform.addEventListener("submit", function(e) {
//     let myname = document.getElementById("name");
//     let myphone = document.getElementById("phone");
//     let myregex = /^[0-9]+$/;

//     if (myname.ariaValueMax.trim() == "") {
//         let myerror = document.getElementById("error");
//         myerror.innerHTML = 'Ce champ est obligatoire';
//         myerror.style.color = "red"
//         e.preventDefault();
//     }

//     if (myphone.ariaValueMax.trim() == "") {
//         let myerror = document.getElementById("error");
//         myerror.innerHTML = 'Ce champ est obligatoire';
//         myerror.style.color = "red"
//         e.preventDefault();
//     } else if (myregex.test(myphone.value) == false) {
//         let myerror = document.getElementById("error");
//         myerror.innerHTML = 'Ce champ doit comporter uniquement des chiffres';
//         myerror.style.color = "red"
//         e.preventDefault();
//     }

// })




// Pour navbar

const hamburger = document.querySelector(".button");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
})

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}))

// Pour navbar

