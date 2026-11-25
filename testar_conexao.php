<?php
// testar_conexao.php — já vem pronto. Abra localhost:8000/testar_conexao.php

require __DIR__ . '/conexao.php';

header('Content-Type: text/plain; charset=utf-8');

// Pergunta a versão: se o banco responder, a conexão funciona
$versao = $pdo->query('SELECT version()')->fetchColumn();
echo "Conexão OK!\n\n";
echo "Banco: $banco\n";
echo "Servidor: $versao\n\n";

// Confere se a tabela contatos existe e quantas linhas tem
try {
    $total = $pdo->query('SELECT COUNT(*) FROM contatos')->fetchColumn();
    echo "Tabela contatos encontrada: $total registro(s).\n";
} catch (PDOException $erro) {
    echo "A tabela contatos não existe no banco educacao. Crie no Beekeeper.\n";
}
