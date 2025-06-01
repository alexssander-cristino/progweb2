<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    // Aqui você pode fazer a validação ou salvar os dados no banco de dados
    // Exemplo (sem banco de dados por enquanto):
    // $conn = new mysqli('localhost', 'usuario', 'senha', 'banco');
    // $stmt = $conn->prepare("INSERT INTO usuarios (nome, cpf, endereco, telefone) VALUES (?, ?, ?, ?)");
    // $stmt->bind_param("ssss", $nome, $cpf, $endereco, $telefone);
    // $stmt->execute();
    // $conn->close();

    echo "<div class='alert'>Usuário cadastrado com sucesso!</div>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="/css/cadastro_usuario.css">
    <!-- Adicionando o Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- Botão para abrir o menu -->
    <button class="open-btn" onclick="toggleMenu()">
        <i class="fas fa-bars"></i> <!-- Ícone de hambúrguer -->
    </button>
    <button class="theme-toggle-btn" onclick="toggleDarkMode()">
            <i class="fas fa-sun"></i> <!-- Ícone de sol para o modo claro -->
    </button>

    <!-- Menu Lateral -->
    <div id="sideMenu" class="side-menu">
        <a href="/public/index.php"><i class="fas fa-home"></i> <span>Início</span></a>
        <a href="/public/cadastro_usuario.php"><i class="fas fa-user-plus"></i> <span>Cadastro</span></a>
        <a href="/public/detalhes_pontos.php"><i class="fas fa-cogs"></i> <span>Pontos</span></a>
        <a href="/public/pesquisa.php"><i class="fas fa-search"></i> <span>Pesquisar</span></a>
        <a href="/public/rank.php"><i class="fas fa-trophy"></i> <span>Ranking</span></a>
        <a href="?page=contato"><i class="fas fa-envelope"></i> <span>Contato</span></a>
    </div>
    <!-- Conteúdo Principal -->
    <div class="content">
        <div class="form-container">
            <h2>Cadastro de Usuário</h2>

            <!-- Formulário de Cadastro -->
            <form action="cadastro_usuario.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Formato: 123.456.789-01">

                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>

                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" required pattern="\(\d{2}\)\s\d{4,5}-\d{4}" title="Formato: (12) 34567-8901">

                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>

    <script src="../js/script.js"></script>
</body>
</html>
