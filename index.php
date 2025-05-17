<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo/estilo.css">
    <link rel="shortcut icon" type="image/x-icon" href="./img/Logo.png">
    <title>Cadastro</title>
</head>

<body>
    <div class="usuario">
        <div class="cadastro">
            <img src="./img/Login.png" alt="Logo" width="50px">
            <p class="titulo">Cadastro de Cliente</p>
            <p class="subtitulo">Preencha os campos abaixo:</p>
            <div class="inputs">
                <form action="#">
                    <div class="campo"><input type="text" name="usuario" placeholder="Nome de Usuário" required></div>

                    <div class="campo">
                        <input type="text" id="cep" placeholder="CEP" maxlength="9">
                        <span id="cepErro" style="color: red; display: none;">*</span>
                    </div>

                    <div class="campo">
                        <input type="text" id="cpf" name="cpf" placeholder="CPF: 999.999.999-99" required>
                        <span id="cpfErro" style="color: red; display: none;">*</span>
                    </div>
                    <div class="campo">
                        <input type="text" id="rua" placeholder="Rua" readonly>
                    </div>

                    <div class="campo"><input type="text" name="telefone" placeholder="TEL: (99) 99999-9999" required>
                    </div>

                    <div class="campo">
                        <input type="text" id="bairro" placeholder="Bairro" readonly>
                    </div>
                    <div class="campo"><input type="password" id="senha" name="senha2" placeholder="Digite uma senha"
                            required></div>
                    <div class="campo">
                        <input type="text" id="numero" placeholder="Número">
                    </div>
                    <div class="campo">
                        <input type="password" id="senha2" name="senha2" placeholder="Confirme sua senha" required>
                        <span id="senhaErro" style="color: red; display: none;">*</span>
                    </div>
                    <div class="campo"><input type="text" name="endereco4" placeholder="Complemento"></div>
                    <button type="submit">Salvar</button>
                </form>
            </div>
        </div>
    </div>

    
</body>

</html>
