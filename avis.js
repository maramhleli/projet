
let nomInput = document.getElementById("nom");
function Validation() {
    if (nomInput.value.length < 3) {
        nomError = " Le nom doit compter au minimum 3 caractères.";
        document.getElementById("nomE").innerHTML = nomError;

        return false;
    }
    if (!nomInput.value.match(letters)) {
        nomError2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
        nomValid2 = false;
        document.getElementById("nomE").innerHTML = nomError2;
        return false;
    }
    document.getElementById("nomE").innerHTML =
        "<p style='color:green'> Correct </p>";

    return true;
}

document.forms["inscription2"].addEventListener("submit", function (e) {
    var inputs = document.forms["inscription2"];
    let ids = [
        "erreur",
        "nomEr",
        "erreur",
    ];

    ids.map((id) => (document.getElementById(id).innerHTML = "")); // reinitialiser l'affichage des erreurs

    let errors = false;

    //Traitement cas par cas
    if (nomInput.value.length < 3) {
        errors = false;
        document.getElementById("nomE").innerHTML =
            "Le nom doit compter au minimum 3 caractères.";
    } else if (!nomInput.value.match(letters)) {
        errors = false;
        document.getElementById("nomE").innerHTML =
            "Veuillez entrer un nom valid ! (seulement des lettres)";
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