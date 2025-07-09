<?php
session_start();

if (!isset($_SESSION['guardioes'])) {
  $_SESSION['guardioes'] = [];
}

// Adicionar guardião
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_guardiao'])) {
  $nome = trim($_POST['nome'] ?? '');
  $telefone = trim($_POST['telefone'] ?? '');
  if ($nome && $telefone) {
    $_SESSION['guardioes'][] = [
      'nome' => htmlspecialchars($nome),
      'telefone' => htmlspecialchars($telefone)
    ];
  }
}

// Remover guardião
if (isset($_POST['delete_index'])) {
  $index = intval($_POST['delete_index']);
  if (isset($_SESSION['guardioes'][$index])) {
    array_splice($_SESSION['guardioes'], $index, 1);
  }
}
?>
