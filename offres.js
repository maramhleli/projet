//la recuperation des elements
const nom=document.querySelector("#nom");
const prenom=document.querySelector("#prenom");
const email=document.querySelector("#email");
//evenements
form.addEventListener('click',e=>{
e.preventDefault();
from_verify();
})
//fonctions
function form_verify(){
    //obtenir les valeurs des inputs
    const nomvalue=nom.value.trim();
    const prenomvalue=prenom.value.trim();
    const emailvalue=email.value.trim();
    //username verification
    if(nomvalue=== ""){
        let message ="le nom ne peut pas etre vide";
        setError(nom,message);
    }else if(!nomvalue.match(/^[a-zA-Z]/)){
        let message="le nom ne doit pas contenir des chiffres";
        setError(nom,message);
    }else{
        letterNum =nomvalue.length;
        if(letterNum<3){
            let message="username doit avoir au moins 3 caractère";
            setError(nom,message)
        }else{
            setSuccess(nom);
        }
    }
    if(prenomvalue=== ""){
        let message ="le nom ne peut pas etre vide";
        setError(prenom,message);
    }else if(!prenomvalue.match(/^[a-zA-Z]/)){
        let message="le nom ne doit pas contenir des chiffres";
        setError(prenom,message);
    }else{
        letterNum =prenomvalue.length;
        if(letterNum<3){
            let message="username doit avoir au moins 3 caractère";
            setError(nom,message)
        }else{
            setSuccess(nom);
        }
    }
    //email verification
    if(emailvalue === ""){
        let message ="email ne peut pas etre vide";
        setError(email,message);
    }else if(!email_verify(emailvalue)){
        let message="email non valide";
        setError(email,message);
    }else{
        setSuccess(email)
    }
}
function setError(elem,message){
    const formControl = elem.parentElement;
    const small = formControl.querySelector('small');
    //ajout du message d'erreur
    small.innerText = message
    //ajout de la classe error
    formControl.className ="form-control error";
}
function setSuccess(elem) {
    const formControl=elem.parentElement;
    formControl.className='form-control success'
}
function email_verify(email){

return /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/.test(email);
}