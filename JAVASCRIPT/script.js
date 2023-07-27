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

// Contrôle formulaire contact

let myform = document.getElementById("form-contact");

myform.addEventListener("submit", function form_contact(e) {
    let myname = document.getElementById("name");
    let myphone = document.getElementById("phone");
    let myregex = /^[0-9]{10}$/;

    if (myname.value.trim() == "") {
        let myerror = document.getElementById("error1");
        myerror.innerHTML = 'Ce champ est obligatoire';
        myerror.style.color = "red"
        e.preventDefault();
    }

    if (myphone.value.trim() == "") {
        let myerror = document.getElementById("error2");
        myerror.innerHTML = 'Ce champ est obligatoire';
        myerror.style.color = "red"
        e.preventDefault();
    } else if (myregex.test(myphone.value) == false) {
        let myerror = document.getElementById("error2");
        myerror.innerHTML = 'Veuillez ne saisir que des chiffres';
        myerror.style.color = "red"
        e.preventDefault();
    }

})

// Contrôle formulaire contact

// Contrôle formulaire commande

let myform2 = document.getElementById("form-commande");

myform2.addEventListener("submit", function form_commande(f) {
    let mynameandfirstname2 = document.getElementById("nameandfirstname");
    let myemail2 = document.getElementById("email");
    let myphone2 = document.getElementById("phone");
    let myadresse2 = document.getElementById("adresse");
    // let myregex2 = /^[0-9]{10}$/;
    // let regexemail = /^[a-z0-9.-]+@[a-z0-9.-].[a-z]$/;

    if (mynameandfirstname2.value.trim() == "") {
        let myerror = document.getElementById("error1");
        myerror.innerHTML = 'Ce champ est obligatoire';
        myerror.style.color = "red"
        f.preventDefault();
    }

    if (myemail2.value.trim() == "") {
        let myerror = document.getElementById("error2");
        myerror.innerHTML = 'Ce champ est obligatoire';
        myerror.style.color = "red"
        f.preventDefault();
    } else if (regexemail.test(myemail2.value) == false) {
        let myerror = document.getElementById("error2");
        myerror.innerHTML = 'Veuillez saisir une adresse mail valide';
        myerror.style.color = "red"
        f.preventDefault();
    }

    if (myphone2.value.trim() == "") {
        let myerror = document.getElementById("error3");
        myerror.innerHTML = 'Ce champ est obligatoire';
        myerror.style.color = "red"
        f.preventDefault();
    } else if (myregex2.test(myphone2.value) == false) {
        let myerror = document.getElementById("error3");
        myerror.innerHTML = 'Veuillez ne saisir que des chiffres';
        myerror.style.color = "red"
        f.preventDefault();
    }

    if (myadresse2.value.trim() == "") {
        let myerror = document.getElementById("error4");
        myerror.innerHTML = 'Ce champ est obligatoire';
        myerror.style.color = "red"
        f.preventDefault();
    }
})

// Contrôle formulaire commande