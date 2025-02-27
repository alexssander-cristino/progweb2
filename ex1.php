<?php
// Exibir os dados enviados via POST
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : '';

// Exibir os dados recebidos
echo "<h1>Dados Recebidos</h1>";
echo "<p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>";
echo "<p><strong>Telefone:</strong> " . htmlspecialchars($telefone) . "</p>";
echo "<p><strong>E-mail:</strong> " . htmlspecialchars($email) . "</p>";
echo "<p><strong>Mensagem:</strong> " . nl2br(htmlspecialchars($mensagem)) . "</p>";

// Exibir o cabeçalho da requisição HTTP
echo "<h2>Cabeçalho da Requisição HTTP</h2>";
echo "<pre>";
print_r(getallheaders());  // Exibe todos os cabeçalhos da requisição
echo "</pre>";

// Exibir o método HTTP utilizado
echo "<h2>Método da Requisição</h2>";
echo "<p>Método HTTP utilizado: " . $_SERVER['REQUEST_METHOD'] . "</p>";
?>

<h2>URL com Requisição GET</h2>
<p>Você pode enviar os dados com uma requisição GET. Exemplo de URL:</p>
<pre>
<a href="http://localhost/destino.php?nome=SeuNome&telefone=123456789&email=exemplo%40email.com&mensagem=Sua+mensagem+aqui"></a>
</pre>
