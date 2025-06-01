<?php
// Simulação de usuários com pontos (remover quando usar banco de dados)
$usuarios = [
    ['id' => 1, 'nome' => 'João Silva', 'cpf' => '123.456.789-01', 'pontos' => 120, 'endereco' => 'Rua A, 123', 'telefone' => '(11) 91234-5678'],
    ['id' => 2, 'nome' => 'Maria Oliveira', 'cpf' => '987.654.321-00', 'pontos' => 85, 'endereco' => 'Rua B, 456', 'telefone' => '(11) 99876-5432'],
    ['id' => 3, 'nome' => 'Carlos Souza', 'cpf' => '111.222.333-44', 'pontos' => 150, 'endereco' => 'Rua C, 789', 'telefone' => '(11) 93456-7890'],
    ['id' => 4, 'nome' => 'Ana Costa', 'cpf' => '555.666.777-88', 'pontos' => 200, 'endereco' => 'Rua D, 101', 'telefone' => '(11) 98765-4321'],
];

// Verifica se o formulário de pesquisa foi enviado
$pesquisa = '';
if (isset($_POST['pesquisar'])) {
    $pesquisa = $_POST['pesquisa'];
}

// Filtra os usuários com base no nome ou CPF
$usuariosFiltrados = array_filter($usuarios, function($usuario) use ($pesquisa) {
    return strpos(strtolower($usuario['nome']), strtolower($pesquisa)) !== false ||
           strpos($usuario['cpf'], $pesquisa) !== false;
});
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pontos</title>
    <link rel="stylesheet" href="/css/pesquisa.css">
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
            <h2>Pesquisar</h2>

            <!-- Formulário de Pesquisa -->
            <form action="pesquisa.php" method="POST">
                <input type="text" id="pesquisa" name="pesquisa" placeholder="Buscar por nome ou CPF" value="<?php echo $pesquisa; ?>" required>
                <button type="submit" name="pesquisar">Pesquisar</button>
            </form>

            <h3>Usuários Encontrados:</h3>

            <!-- Exibe os usuários encontrados -->
            <div class="usuarios-container">
                <?php if (count($usuariosFiltrados) > 0): ?>
                    <?php foreach ($usuariosFiltrados as $usuario): ?>
                        <div class="usuario-box">
    <div class="avatar" onclick="window.location.href='progresso_usuario.php?id=<?php echo $usuario['id']; ?>'">
        <i class="fas fa-user-circle"></i> <!-- Silhueta do usuário -->
    </div>
    <div class="pontos">
        <?php echo $usuario['pontos']; ?> pontos
    </div>
    <div class="user-info">
        <p><strong><?php echo $usuario['nome']; ?></strong></p>
        <p><?php echo $usuario['cpf']; ?></p>
    </div>

                            <!-- Botões para adicionar ou editar perfil -->
                            <div class="user-actions">
                                <a href="detalhes_pontos.php?id=<?php echo $usuario['id']; ?>" class="btn">Adicionar</a>
                                <a href="editar_usuario.php"<?php echo $usuario['id']; ?>" class="btn">Editar</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Nenhum usuário encontrado.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="../js/script.js"></script>
</body>
</html>
