let signUp=document.getElementById("signUp");
let signIn=document.getElementById("signIn");
let nameInput=document.getElementById("nameInput");
let dato=document.getElementById("dato");

signIn.onclick=function() {
    nameInput.style.maxHeight="0";
    dato.innerHTML="Login";
    signUp.classList.add("disable");
    signIn.classList.remove("disable");
}

signUp.onclick=function() {
    nameInput.style.maxHeight="60px";
    dato.innerHTML="Registro";
    signUp.classList.remove("disable");
    signIn.classList.add("disable");
}