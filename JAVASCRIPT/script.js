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