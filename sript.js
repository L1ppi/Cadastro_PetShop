document.getElementById("cep").addEventListener("blur", buscarEndereco);
document.getElementById("cep").addEventListener("keydown", function (event) {
  if (event.key === "Enter") {
    event.preventDefault();
    buscarEndereco();
  }
});

function buscarEndereco() {
  let cepInput = document.getElementById("cep");
  let cepErro = document.getElementById("cepErro");
  let cep = cepInput.value.replace(/\D/g, "");

  if (cep.length === 8) {
    fetch(`https://viacep.com.br/ws/${cep}/json/`)
      .then((response) => response.json())
      .then((data) => {
        if (!data.erro) {
          document.getElementById("rua").value = data.logradouro;
          document.getElementById("bairro").value = data.bairro;
          cepErro.style.display = "none";
        } else {
          cepErro.style.display = "inline";
        }
      })
      .catch((error) => {
        console.error("Erro ao buscar o CEP:", error);
        cepErro.style.display = "inline";
      });
  } else {
    cepErro.style.display = "inline";
  }
}

document.getElementById("cpf").addEventListener("blur", validarCPF);

function validarCPF() {
  let cpfInput = document.getElementById("cpf");
  let cpfErro = document.getElementById("cpfErro");
  let cpf = cpfInput.value.replace(/\D/g, "");

  if (cpf.length !== 11 || !calculaCPF(cpf)) {
    cpfErro.style.display = "inline";
  } else {
    cpfErro.style.display = "none";
  }
}

function calculaCPF(cpf) {
  let soma = 0,
    resto;
  if (/^([0-9])\1*$/.test(cpf)) return false;

  for (let i = 1; i <= 9; i++) soma += parseInt(cpf[i - 1]) * (11 - i);
  resto = (soma * 10) % 11;
  if (resto === 10 || resto === 11) resto = 0;
  if (resto !== parseInt(cpf[9])) return false;

  soma = 0;
  for (let i = 1; i <= 10; i++) soma += parseInt(cpf[i - 1]) * (12 - i);
  resto = (soma * 10) % 11;
  if (resto === 10 || resto === 11) resto = 0;
  if (resto !== parseInt(cpf[10])) return false;

  return true;
}
document.getElementById("cep").addEventListener("input", function () {
  let cep = this.value.replace(/\D/g, ""); // Remove tudo que não for número
  if (cep.length > 5) {
    this.value = cep.substring(0, 5) + "-" + cep.substring(5, 8);
  } else {
    this.value = cep;
  }
});

document.getElementById("cpf").addEventListener("input", function () {
  let cpf = this.value.replace(/\D/g, ""); // Remove tudo que não for número
  if (cpf.length > 9) {
    this.value =
      cpf.substring(0, 3) +
      "." +
      cpf.substring(3, 6) +
      "." +
      cpf.substring(6, 9) +
      "-" +
      cpf.substring(9, 11);
  } else if (cpf.length > 6) {
    this.value =
      cpf.substring(0, 3) +
      "." +
      cpf.substring(3, 6) +
      "." +
      cpf.substring(6, 9);
  } else if (cpf.length > 3) {
    this.value = cpf.substring(0, 3) + "." + cpf.substring(3, 6);
  } else {
    this.value = cpf;
  }
});
document.getElementById("senha2").addEventListener("input", validarSenhas);

function validarSenhas() {
  let senha = document.getElementById("senha").value;
  let senha2 = document.getElementById("senha2").value;
  let senhaErro = document.getElementById("senhaErro");

  if (senha !== senha2) {
    senhaErro.style.display = "inline";
  } else {
    senhaErro.style.display = "none";
  }
}
