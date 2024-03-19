export default function initValidaLoginMedico() {
    const inputCrm = document.querySelector("#crm");
    const inputSenha = document.querySelector("#password");
    const buttonEntrar =document.querySelector(".btn-submit-login");
    const regexCRM = /^[A-Z]{2}\/\d{5}$/;

    console.log(inputSenha + inputCrm);

    buttonEntrar.disabled = true;
    inputCrm.addEventListener('keydown', ()=>{
        inputCrm.style.outline = "none";
        if (regexCRM.test(inputCrm.value)) {            
            inputCrm.style.border = "2px solid green";
            
        } else {
            inputCrm.style.border = "2px solid var(--color-red)";
        }
    });    
    inputSenha.addEventListener('keydown', ()=> {if(inputSenha.value.length > 8){
    buttonEntrar.disabled = false};
    });
}