<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura os dados do formulário
    $tipo = $_POST['tipo'];
    $item = $_POST['item'];
    $qualidade = $_POST['qualidade'];

    // Aqui você pode fazer a validação ou salvar os dados no banco de dados
    // Exemplo (sem banco de dados por enquanto):
    // $conn = new mysqli('localhost', 'usuario', 'senha', 'banco');
    // $stmt = $conn->prepare("INSERT INTO pontos (tipo, item, qualidade) VALUES (?, ?, ?)");
    // $stmt->bind_param("sss", $tipo, $item, $qualidade);
    // $stmt->execute();
    // $conn->close();

    echo "<div class='alert'>Pontos adicionados com sucesso!</div>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes dos Pontos</title>
    <link rel="stylesheet" href="/css/detalhes_pontos.css">
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
            <h2>Adição de Pontos</h2>

            <!-- Formulário de Adição de Pontos -->
            <form action="detalhes_pontos.php" method="POST">
                <label for="tipo">Tipo de Doação:</label>
                <select id="tipo" name="tipo" required onchange="mostrarItens()">
                    <option value="">Selecione um tipo</option>
                    <option value="roupa">Roupas</option>
                    <option value="brinquedo">Brinquedos</option>
                    <option value="eletronico">Eletrônicos</option>
                    <option value="livro">Livros</option>
                    <!-- Adicione mais tipos conforme necessário -->
                </select>

                <label for="item" id="itemLabel" style="display:none;">Item:</label>
                <select id="item" name="item" required style="display:none;">
                    <!-- Itens serão adicionados dinamicamente com base no tipo selecionado -->
                </select>

                <label for="qualidade">Qualidade:</label>
                <select id="qualidade" name="qualidade" required>
                    <option value="ruim">Ruim</option>
                    <option value="boa">Boa</option>
                    <option value="excelente">Excelente</option>
                </select>

                <button type="submit">Adicionar Pontos</button>
            </form>
        </div>
    </div>

    <script>
        // Função para exibir os itens com base no tipo de doação selecionado
        function mostrarItens() {
            var tipo = document.getElementById('tipo').value;
            var itemSelect = document.getElementById('item');
            var itemLabel = document.getElementById('itemLabel');

            // Limpar itens anteriores
            itemSelect.innerHTML = '';

            if (tipo === 'roupa') {
                itemLabel.style.display = 'block';
                itemSelect.style.display = 'block';
                itemSelect.innerHTML += '<option value="camisa">Camisa</option>';
                itemSelect.innerHTML += '<option value="calca">Calça</option>';
                itemSelect.innerHTML += '<option value="blusa">Blusa</option>';
                itemSelect.innerHTML += '<option value="jaqueta">Jaqueta</option>';
            } else if (tipo === 'brinquedo') {
                itemLabel.style.display = 'block';
                itemSelect.style.display = 'block';
                itemSelect.innerHTML += '<option value="boneca">Boneca</option>';
                itemSelect.innerHTML += '<option value="carro">Carro</option>';
                itemSelect.innerHTML += '<option value="controle">Controle</option>';
            } else if (tipo === 'eletronico') {
                itemLabel.style.display = 'block';
                itemSelect.style.display = 'block';
                itemSelect.innerHTML += '<option value="celular">Celular</option>';
                itemSelect.innerHTML += '<option value="notebook">Notebook</option>';
                itemSelect.innerHTML += '<option value="tv">TV</option>';
            } else if (tipo === 'livro') {
                itemLabel.style.display = 'block';
                itemSelect.style.display = 'block';
                itemSelect.innerHTML += '<option value="romance">Romance</option>';
                itemSelect.innerHTML += '<option value="ficcao">Ficção</option>';
                itemSelect.innerHTML += '<option value="autoajuda">Autoajuda</option>';
            } else {
                itemLabel.style.display = 'none';
                itemSelect.style.display = 'none';
            }
        }
    </script>
    <script src="../js/script.js"></script>
</body>
</html>
