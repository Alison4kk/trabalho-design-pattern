<?php
require_once 'Usuario.php';

$aUsuarios = [];

$aUsuarios[] = new Usuario(1, 'Carlos Alberto', 'carlos@email.com');
$aUsuarios[] = new Usuario(2, 'Ana Paula', 'ana.paula@email.com');
$aUsuarios[] = new Usuario(3, 'João Silva', 'joao.silva@email.com');
$aUsuarios[] = new Usuario(4, 'Maria Oliveira', 'maria.oliveira@email.com');
$aUsuarios[] = new Usuario(5, 'Paulo Santos', 'paulo.santos@email.com');
$aUsuarios[] = new Usuario(6, 'Fernanda Lima', 'fernanda.lima@email.com');
$aUsuarios[] = new Usuario(7, 'Ricardo Souza', 'ricardo.souza@email.com');
$aUsuarios[] = new Usuario(8, 'Juliana Mendes', 'juliana.mendes@email.com');
$aUsuarios[] = new Usuario(9, 'Rafael Alves', 'rafael.alves@email.com');
$aUsuarios[] = new Usuario(10, 'Beatriz Costa', 'beatriz.costa@email.com');
$aUsuarios[] = new Usuario(11, 'Gabriel Pereira', 'gabriel.pereira@email.com');
$aUsuarios[] = new Usuario(12, 'Camila Rocha', 'camila.rocha@email.com');
$aUsuarios[] = new Usuario(13, 'Leonardo Nunes', 'leonardo.nunes@email.com');
$aUsuarios[] = new Usuario(14, 'Roberta Dias', 'roberta.dias@email.com');
$aUsuarios[] = new Usuario(15, 'Tiago Martins', 'tiago.martins@email.com');
$aUsuarios[] = new Usuario(16, 'Larissa Carvalho', 'larissa.carvalho@email.com');

$sOrdenarCampo = $_GET['ordenar-coluna'] ?? 'id'; 
$sOrdenarModo = $_GET['ordenar-modo'] ?? 'ASC'; 



include 'view.php';
