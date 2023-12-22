function validarCPF(cpf) {
    cpf = cpf.replace(/[^\d]+/g, '');
    if (cpf === '' || cpf.length !== 11 || /^(\d)\1{10}$/.test(cpf)) return false;
    let add = 0;
    for (let i = 0; i < 9; i++) add += parseInt(cpf.charAt(i)) * (10 - i);
    let rev = 11 - (add % 11);
    if (rev === 10 || rev === 11) rev = 0;
    if (rev !== parseInt(cpf.charAt(9))) return false;
    add = 0;
    for (let i = 0; i < 10; i++) add += parseInt(cpf.charAt(i)) * (11 - i);
    rev = 11 - (add % 11);
    if (rev === 10 || rev === 11) rev = 0;
    if (rev !== parseInt(cpf.charAt(10))) return false;
    return true;
  }

  function validarTelefone(telefone) {
    telefone = telefone.replace(/[^\d]+/g, '');
    if (telefone === '' || telefone.length !== 11 || !/^\d+$/.test(telefone)) return false; // Verifica se possui 11 dígitos
    return true;
  }

  function validarFormulario() {
    const cpfInput = document.getElementById('cpf');
    const telefoneInput = document.getElementById('telefone');
    const cpf = cpfInput.value;
    const telefone = telefoneInput.value;


    if (!validarCPF(cpf)) {
      alert('CPF inválido');
      cpfInput.focus();
      return false;
    }

    if (!validarTelefone(telefone)) {
      alert('Telefone inválido');
      telefoneInput.focus();
      return false;
    }
    

    return true;
  }