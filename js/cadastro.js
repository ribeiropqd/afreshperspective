function verificarSenhas() {
    const senha = document.getElementById('senha').value;
    const confirmarSenha = document.getElementById('confirmarSenha').value;
    
    const mensagemp = document.getElementById('mensagemp'); //Referencia a variável "MENSAGEMP"
    const mensagemn = document.getElementById('mensagemn'); //Referencia a variável "MENSAGEMN"
    
    mensagemp.textContent = ''; //LIMPA AS MENSAGENS ANTES DE CADA VERIFICAÇÃO
    mensagemn.textContent = ''; //LIMPA AS MENSAGENS ANTES DE CADA VERIFICAÇÃO
    
    if (senha.length < 8 || confirmarSenha.length < 8) {
        mensagemn.textContent = 'A senha deve ter pelo menos 8 caraceteres.';
        return;
    }

    if (senha === confirmarSenha) { //VERIFICA SE AS SENHAS SÃO IGUAIS.
        mensagemp.textContent = 'Senha correta, pode prosseguir.';
    } else {
        mensagemn.textContent = 'Senhas não coincidem, tente novamente!';
    }
}