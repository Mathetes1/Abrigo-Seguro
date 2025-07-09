<?php
require 'cadasguardiao.php';

// Buscar todos os guardiões
$stmt = $pdo->query("SELECT * FROM guardioes ORDER BY id ASC");
$guardioes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Meus Guardiões</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="teste.css" />
</head>
<body>
    <div class="container">
        <div class="header">
            <div><span>Meus Guardiões</span></div>
            <div class="right">
                <a href="index.php" style="color: white; text-decoration: none;">
                    <span class="material-icons" style="cursor:pointer;">arrow_back</span> Voltar
                </a>
            </div>
        </div>

        <?php if (count($guardioes) > 0): ?>
            <?php foreach ($guardioes as $i => $guardiao): ?>
                <div class="guardian">
                    <h3>Guardião <?php echo $i + 1; ?></h3>
                    <p><strong>Nome:</strong> <?php echo htmlspecialchars($guardiao['nome']); ?></p>
                    <p><strong>Telefone:</strong> <?php echo htmlspecialchars($guardiao['telefone']); ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Nenhum guardião cadastrado.</p>
        <?php endif; ?>
    </div>
</body>
</html>
