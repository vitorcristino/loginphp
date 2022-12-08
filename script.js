function validar(){
    const senha = formuser.senha.value;
    const repetir_senha = formuser.repetir_senha.value;

    if(senha == "" || senha.length <=7) {
        alert('Senha curta')
        formuser.senha.focus();
        return false;
    }
    if(repetir_senha == "" || repetir_senha.length <=7) {
        alert('Senha curta')
        formuser.senha.focus();
        return false;
    }

    if (senha != repetir_senha){
        alert('Senhas diferentes');
        formuser.repetir_senha.focus();
        return false;
    }
}