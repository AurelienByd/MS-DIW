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