<?php
// Simulação de usuários com pontos (remover quando usar banco de dados)
$usuarios = [
    ['id' => 1, 'nome' => 'João Silva', 'cpf' => '123.456.789-01', 'pontos' => 120, 'endereco' => 'Rua A, 123', 'telefone' => '(11) 91234-5678'],
    ['id' => 2, 'nome' => 'Maria Oliveira', 'cpf' => '987.654.321-00', 'pontos' => 85, 'endereco' => 'Rua B, 456', 'telefone' => '(11) 99876-5432'],
    ['id' => 3, 'nome' => 'Carlos Souza', 'cpf' => '111.222.333-44', 'pontos' => 150, 'endereco' => 'Rua C, 789', 'telefone' => '(11) 93456-7890'],
    ['id' => 4, 'nome' => 'Ana Costa', 'cpf' => '555.666.777-88', 'pontos' => 200, 'endereco' => 'Rua D, 101', 'telefone' => '(11) 98765-4321'],
];

// Verifica se o ID do usuário foi passado
$id = isset($_GET['id']) ? $_GET['id'] : null;
$usuario = null;

// Busca o usuário no array
foreach ($usuarios as $u) {
    if ($u['id'] == $id) {
        $usuario = $u;
        break;
    }
}

// Se o usuário não for encontrado, redireciona
if (!$usuario) {
    echo "Usuário não encontrado!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progresso de Pontos</title>
    <link rel="stylesheet" href="/css/progresso_usuario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <button class="open-btn" onclick="toggleMenu()">
        <i class="fas fa-bars"></i>
    </button>
    <button class="theme-toggle-btn" onclick="toggleDarkMode()">
            <i class="fas fa-sun"></i> <!-- Ícone de sol para o modo claro -->
    </button>

    <div id="sideMenu" class="side-menu">
        <a href="/public/index.php"><i class="fas fa-home"></i> <span>Início</span></a>
        <a href="/public/cadastro_usuario.php"><i class="fas fa-user-plus"></i> <span>Cadastro</span></a>
        <a href="/public/detalhes_pontos.php"><i class="fas fa-cogs"></i> <span>Pontos</span></a>
        <a href="/public/pesquisa.php"><i class="fas fa-search"></i> <span>Pesquisar</span></a>
        <a href="/public/rank.php"><i class="fas fa-trophy"></i> <span>Ranking</span></a>
        <a href="?page=contato"><i class="fas fa-envelope"></i> <span>Contato</span></a>
    </div>

    <div class="content">
        <div class="form-container">
            <h2>Progresso de Pontos de <?php echo $usuario['nome']; ?></h2>

            <div class="user-info">
                <p><strong>Nome:</strong> <?php echo $usuario['nome']; ?></p>
                <p><strong>CPF:</strong> <?php echo $usuario['cpf']; ?></p>
                <p><strong>Pontos:</strong> <?php echo $usuario['pontos']; ?> pontos</p>
                <p><strong>Endereço:</strong> <?php echo $usuario['endereco']; ?></p>
                <p><strong>Telefone:</strong> <?php echo $usuario['telefone']; ?></p>
            </div>
        </div>
    </div>

    <div class="rewards-section">
        <h3>Prêmios Disponíveis</h3>
        <div class="rewards">
    <?php
    // Definindo os prêmios
    $premios = [
        ['nome' => 'PS5', 'pontos' => 200, 'imagem' => '/imagens/ps5.png'],
        ['nome' => 'iPhone', 'pontos' => 150, 'imagem' => '/imagens/iphone.png'],
        ['nome' => 'Caneca Personalizada', 'pontos' => 50, 'imagem' => '/imagens/caneca.png'],
        ['nome' => 'Camiseta', 'pontos' => 30, 'imagem' => '/imagens/camisa.png'],
    ];

    // Exibe cada prêmio
    foreach ($premios as $premio) {
        // Verifica se o usuário tem pontos suficientes
        $status = ($usuario['pontos'] >= $premio['pontos']) ? 'conquistado' : 'nao-conquistado';
        ?>
        <div class="reward-box <?php echo $status; ?>">
            <img src="<?php echo $premio['imagem']; ?>" alt="<?php echo $premio['nome']; ?>" class="reward-image">
            <h4><?php echo $premio['nome']; ?></h4>
            <p><strong><?php echo $premio['pontos']; ?> pontos</strong></p>
        </div>
        <?php
    }
    ?>
</div>


<script src="../js/script.js"></script>
</body>
</html>
