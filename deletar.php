<?php
try {
    $conn = new PDO("mysql:host=db;dbname=receitas_baleia", "root", "senha123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $stmt = $conn->prepare("DELETE FROM receitas WHERE id = ?");
        $stmt->execute([$id]);
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

header("Location: salvar.php"); // Volta para a página principal
exit;
?>
