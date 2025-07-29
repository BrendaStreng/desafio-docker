<title>Receitas Cadastradas</title>
<link rel="stylesheet" href="style.css">
<?php
$host = 'db';
$db = 'receitas_baleia';
$user = 'root';
$pass = 'senha123';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Salvar se vier POST
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];

        $stmt = $conn->prepare("INSERT INTO receitas (nome, descricao) VALUES (?, ?)");
        $stmt->execute([$nome, $descricao]);

        echo "<p>Receita salva com sucesso! 🐳</p>";
    }

    // Buscar todas as receitas
    echo "<h2>Receitas Submarinas já cadastradas:</h2>";
    echo "<ul>";
    
    $stmt = $conn->query("SELECT id, nome, descricao FROM receitas");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<div class='receita'>";
    echo "<span class='titulo'>" . htmlspecialchars($row['nome']) . ":</span>";
    echo "<span class='descricao'>🍣 " . htmlspecialchars($row['descricao']) . "</span>";
    echo "<a class='delete-btn' href='deletar.php?id=" . $row['id'] . "' onclick=\"return confirm('Tem certeza que quer deletar?')\">🗑️ Deletar</a>";
    echo "</div>";
}
    echo "</ul>";

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
