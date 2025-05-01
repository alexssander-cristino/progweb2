<?php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="/css/editar_usuario.css">
    <!-- Adicionando o Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- Botão para abrir o menu -->
    <button class="open-btn" onclick="toggleMenu()">
        <i class="fas fa-bars"></i>
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
            <h2>Editar Usuário</h2>

            <!-- Formulário de Edição -->
            <form action="editar_usuario.php?id=<?php echo $usuario['id']; ?>" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?php echo $usuario['nome']; ?>" required>

                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" value="<?php echo $usuario['cpf']; ?>" required>

                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" value="<?php echo $usuario['endereco']; ?>" required>

                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" value="<?php echo $usuario['telefone']; ?>" required>

                <button type="submit" name="editar">Salvar alterações</button>
            </form>
        </div>
    </div>

    <script src="../js/script.js"></script>
</body>
</html>
