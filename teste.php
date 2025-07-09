<?php
require 'cadasguardiao.php';

// Atualizar guardião
if (isset($_POST['edit_id'])) {
    $id = $_POST['edit_id'];
    $novo_nome = $_POST['novo_nome'];
    $novo_telefone = $_POST['novo_telefone'];

    $stmt = $pdo->prepare("UPDATE guardioes SET nome = :nome, telefone = :telefone WHERE id = :id");
    $stmt->execute([
        ':nome' => $novo_nome,
        ':telefone' => $novo_telefone,
        ':id' => $id
    ]);
}

// Inserir novo guardião
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_guardiao'])) {
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];

        $stmt = $pdo->prepare("INSERT INTO guardioes (nome, telefone) VALUES (:nome, :telefone)");
        $stmt->execute([':nome' => $nome, ':telefone' => $telefone]);
    }

    // Remover guardião
    if (isset($_POST['delete_id'])) {
        $id = $_POST['delete_id'];
        $stmt = $pdo->prepare("DELETE FROM guardioes WHERE id = :id");
        $stmt->execute([':id' => $id]);
    }
}

// Verifica se está em modo de edição
$editando = isset($_POST['editar']) ? $_POST['editar'] : null;

// Buscar todos os guardiões
$stmt = $pdo->query("SELECT * FROM guardioes ORDER BY id ASC");
$guardioes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardiões</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="teste.css">
</head>
<body>
    <div class="container">
        <div class="header">
          <div><span>Olá, Rebeca</span></div>
          <div class="right">
            <span class="material-icons">settings</span>
            <div class="avatar">R</div>
          </div>
        </div>

        <div class="title-bar">
            <h1>Adicionar Guardiões</h1>
        </div>

        <?php foreach ($guardioes as $i => $guardiao): ?>
        <div class="guardian">
            <h3>Guardião <?php echo $i + 1; ?></h3>

            <?php if ($editando == $guardiao['id']): ?>
            <form method="post">
                <input type="hidden" name="edit_id" value="<?php echo $guardiao['id']; ?>">
                <input type="text" name="novo_nome" value="<?php echo htmlspecialchars($guardiao['nome']); ?>" required />
                <input type="tel" name="novo_telefone" value="<?php echo htmlspecialchars($guardiao['telefone']); ?>" required />
                <button type="submit" class="btn add">Salvar</button>
            </form>
            <?php else: ?>
            <input type="text" value="<?php echo htmlspecialchars($guardiao['nome']); ?>" readonly />
            <input type="tel" value="<?php echo htmlspecialchars($guardiao['telefone']); ?>" readonly />
            <form method="post" style="display:inline;">
                <input type="hidden" name="editar" value="<?php echo $guardiao['id']; ?>">
                <button class="btn secondary" title="Editar" type="submit">Editar</button>
            </form>
            <form method="post" style="display:inline;">
                <input type="hidden" name="delete_id" value="<?php echo $guardiao['id']; ?>">
                <button class="btn secondary btn-spacing" title="Remover guardião" type="submit">Excluir</button>
            </form>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>

        <form method="post" style="margin-bottom: 15px;">
            <div class="guardian">
                <h3>Novo Guardião</h3>
                <input type="text" name="nome" placeholder="Nome completo" required />
                <input type="tel" name="telefone" placeholder="Telefone" required />
                <button type="submit" name="add_guardiao" class="btn add">Adicionar Guardião</button>
            </div>
        </form>
    </div>

    <div class="nav">
        <a><div class="nav-item active" onclick="selectNav(this)"><i class="material-icons">book</i><span>Boletim</span></div></a>
        <a><div class="nav-item" onclick="selectNav(this)"><i class="material-icons">location_on</i><span>Mapa</span></div></a>
        <a href="homepage.php" style="color: white;"><div class="nav-item" onclick="selectNav(this)"><i class="material-icons">home</i><span>Home</span></div></a>
        <a><div class="nav-item" onclick="selectNav(this)"><i class="material-icons">info</i><span>Informação</span></div></a>
        <a><div class="nav-item" onclick="selectNav(this)"><i class="material-icons">history</i><span>Histórico</span></div></a>
    </div>

    <script>
        function selectNav(element) {
            document.querySelectorAll('.nav-item').forEach(el => el.classList.remove('active'));
            element.classList.add('active');
        }
    </script>
</body>
</html>