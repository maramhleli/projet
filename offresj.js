let prenomInput = document.getElementById("prenom");
let nomInput = document.getElementById("nom");
let code_promoInput = document.getElementById("code_promo");
var letters = /^[A-Za-z]+$/;

/*function passValidation() {
    if (
        passInput.value != cPassInput.value ||
        passInput.value == "" ||
        cPassInput == ""
    ) {
        alert("Les mots de passe ne correspondent pas");

        return false;
    } else {
        alert(" OK");
    }
}*/

function nameValidation() {
    if (nomInput.value.length < 3) {
        nomError = " Le nom doit compter au minimum 3 caractères.";
        document.getElementById("nomEr").innerHTML = nomError;

        return false;
    }
    if (!nomInput.value.match(letters)) {
        nomError2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
        nomValid2 = false;
        document.getElementById("nomEr").innerHTML = nomError2;
        return false;
    }
    document.getElementById("nomEr").innerHTML =
        "<p style='color:green'> Correct </p>";

    return true;
}
function nameValidation1() {
    if (prenomInput.value.length < 3) {
        prenomError = " Le prenom doit compter au minimum 3 caractères.";
        document.getElementById("prenomEr").innerHTML = prenomError;

        return false;
    }
    if (!prenomInput.value.match(letters)) {
        prenomError2 = "Veuillez entrer un prenom valid ! (seulement des lettres)";
        prenomValid2 = false;
        document.getElementById("prenomEr").innerHTML = prenomError2;
        return false;
    }
    document.getElementById("prenomEr").innerHTML =
        "<p style='color:green'> Correct </p>";

    return true;
}

document.forms["inscription"].addEventListener("submit", function (e) {
    var inputs = document.forms["inscription"];
    let ids = [
        "erreur",
        "nomEr",
        "prenomEr",
        "code_promoEr",
        "erreur",
    ];

    ids.map((id) => (document.getElementById(id).innerHTML = "")); // reinitialiser l'affichage des erreurs

    let errors = false;

    //Traitement cas par cas
    if (nomInput.value.length < 3) {
        errors = false;
        document.getElementById("nomEr").innerHTML =
            "Le nom doit compter au minimum 3 caractères.";
    } else if (!nomInput.value.match(letters)) {
        errors = false;
        document.getElementById("nomEr").innerHTML =
            "Veuillez entrer un nom valid ! (seulement des lettres)";
    } else {
        errors = true;
    }
    if (prenomInput.value.length < 4) {
        errors = false;
        document.getElementById("prenomEr").innerHTML =
            "Le prénom doit compter au minimum 4 caractères";
    } else {
        errors = true;
    }

    if (isNaN(code_promoInput.value)) {
        errors = false;
        document.getElementById("code_promoEr").innerHTML =
            "Le numéro ne doit pas contenir des lettres";
    } else {
        errors = true;
    }
    

   

    //Traitement générique
    for (var i = 0; i < inputs.length; i++) {
        if (!inputs[i].value) {
            errors = false;
            document.getElementById("erreur").innerHTML =
                "Veuillez renseigner tous les champs";
        }
    }

    if (errors === false) {
        e.preventDefault();
    } else {
        alert("formulaire envoyé");
    }
});