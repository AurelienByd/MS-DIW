// Contrôle formulaire commande

let myform2 = document.getElementById("form-commande");

myform2.addEventListener("submit", function form_commande(f) {
    let mynameandfirstname2 = document.getElementById("nameandfirstname");
    let myemail2 = document.getElementById("email");
    let myphone2 = document.getElementById("phone");
    let myadresse2 = document.getElementById("adresse");
    let myregex2 = /^0[1-9]([-. ]?[0-9]{2}){4}$/;
    // let regexemail = /^[a-zA-Z0-9.-]+@[a-z0-9.-].[a-z]{2,4}$/;

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
    } 
    // else if (regexemail.test(myemail2.value) == false) {
    //     let myerror = document.getElementById("error2");
    //     myerror.innerHTML = 'Veuillez saisir une adresse mail valide';
    //     myerror.style.color = "red"
    //     f.preventDefault();
    // }

    if (myphone2.value.trim() == "") {
        let myerror = document.getElementById("error3");
        myerror.innerHTML = 'Ce champ est obligatoire';
        myerror.style.color = "red"
        f.preventDefault();
    } else if (myregex2.test(myphone2.value) == false) {
        let myerror = document.getElementById("error3");
        myerror.innerHTML = 'Veuillez écrire un format accepté';
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