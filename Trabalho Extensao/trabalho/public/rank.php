<?php
// Simulação de usuários com pontos (remover quando usar banco de dados)
$usuarios = [
    ['nome' => 'João Silva', 'cpf' => '123.456.789-01', 'pontos' => 120],
    ['nome' => 'Maria Oliveira', 'cpf' => '987.654.321-00', 'pontos' => 85],
    ['nome' => 'Carlos Souza', 'cpf' => '111.222.333-44', 'pontos' => 150],
    ['nome' => 'Ana Costa', 'cpf' => '555.666.777-88', 'pontos' => 200],
];

// Ordena os usuários por pontos em ordem decrescente
usort($usuarios, function($a, $b) {
    return $b['pontos'] - $a['pontos'];
});
$usuarios = array_slice($usuarios, 0, 3);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking de Pontos</title>
    <link rel="stylesheet" href="/css/rank.css">
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
    <div class="content"> <!-- Aqui, agora com a classe "content" para deslocamento -->
        <div class="ranking-container">
            <!-- Os usuários são exibidos aqui -->
            <!-- Segundo lugar -->
            <div class="usuario-box second-place">
                <div class="avatar">
                    <i class="fas fa-user-circle"></i>
                </div>
                <div class="pontos">
                    <?php echo $usuarios[1]['pontos']; ?> pontos
                </div>
                <div class="user-info">
                    <p><strong><?php echo $usuarios[1]['nome']; ?></strong></p>
                    <p><?php echo $usuarios[1]['cpf']; ?></p>
                </div>
                <div class="rank">
                    #2
                </div>
            </div>
            <!-- Primeiro lugar -->
            <div class="usuario-box first-place">
                <div class="crown">
                    <i class="fas fa-crown"></i>
                </div>
                <div class="avatar">
                    <i class="fas fa-user-circle"></i>
                </div>
                <div class="pontos">
                    <?php echo $usuarios[0]['pontos']; ?> pontos
                </div>
                <div class="user-info">
                    <p><strong><?php echo $usuarios[0]['nome']; ?></strong></p>
                    <p><?php echo $usuarios[0]['cpf']; ?></p>
                </div>
                <div class="rank">
                    #1
                </div>
            </div>
            <!-- Terceiro lugar -->
            <div class="usuario-box third-place">
                <div class="avatar">
                    <i class="fas fa-user-circle"></i>
                </div>
                <div class="pontos">
                    <?php echo $usuarios[2]['pontos']; ?> pontos
                </div>
                <div class="user-info">
                    <p><strong><?php echo $usuarios[2]['nome']; ?></strong></p>
                    <p><?php echo $usuarios[2]['cpf']; ?></p>
                </div>
                <div class="rank">
                    #3
                </div>
            </div>
        </div>

        <!-- Outros usuários -->
        <div class="other-usuarios">
            <?php for ($i = 3; $i < count($usuarios); $i++): ?>
                <div class="usuario-box">
                    <div class="avatar">
                        <i class="fas fa-user-circle"></i> <!-- Silhueta do usuário -->
                    </div>
                    <div class="pontos">
                        <?php echo $usuarios[$i]['pontos']; ?> pontos
                    </div>
                    <div class="user-info">
                        <p><strong><?php echo $usuarios[$i]['nome']; ?></strong></p>
                        <p><?php echo $usuarios[$i]['cpf']; ?></p>
                    </div>
                    <div class="rank">
                        #<?php echo $i + 1; ?>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <script src="../js/script.js"></script>
</body>
</html>
