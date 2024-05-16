<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>DEVS | PROJETO</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <a href="index.php">Voltar</a>
    <div class="container">
        <h1>Equipe de Desenvolvedores</h1>
    </div>
    <br>
</body>
</html>

<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
    color: white;
}

.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    background-color: rgba(0, 0, 0, 0.6);
    border-radius: 15px;
}

.developer {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    margin-left: auto;
    margin-right: auto;
    width: 15%;
}

.developer img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-right: 20px;
}

.developer-info {
    font-size: 16px;
}

h1 {
    text-align: center;
}
</style>

<?php
$developers = [
    ['name' => 'Luiz Fernando Primila Vieira', 'age' => 24, 'ra' => '3024103939', 'photo' => 'luiz.png'],
    ['name' => 'Matheus Fava de Silva', 'age' => 19, 'ra' => '302302987', 'photo' => 'matheus.png'],
    ['name' => 'Wendel Medrado Gonçalves', 'age' => 25, 'ra' => '3023102065', 'photo' => 'wendel.png'],
    ['name' => 'Luciano Cupertino', 'age' => 30, 'ra' => '3023101452', 'photo' => 'luciano.png'],
    ['name' => 'Luccas Moreira de Melo', 'age' => 21, 'ra' => '3023102981', 'photo' => 'luccas.png'],
    ['name' => 'Guilherme de Oliveira', 'age' => 30, 'ra' => '3023100591', 'photo' => 'guilherme.png'],
    
];

foreach ($developers as $dev) {
    echo "<div class='developer'>";
    echo "<img src='images/{$dev['photo']}' alt='Foto de {$dev['name']}'>";
    echo "<div class='developer-info'>";
    echo "<strong>Nome:</strong> {$dev['name']}<br>";
    echo "<strong>Idade:</strong> {$dev['age']} anos<br>";
    echo "<strong>R.A.:</strong> {$dev['ra']}";
    echo "</div>";
    echo "</div>";
}
?>