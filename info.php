<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>DEVS | PROJETO</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
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
    ['name' => 'teste', 'age' => 28, 'ra' => '123456', 'photo' => 'teste.png'],
    ['name' => 'teste', 'age' => 28, 'ra' => '123456', 'photo' => 'teste.png'],
    ['name' => 'Ana Silva', 'age' => 28, 'ra' => '123456', 'photo' => 'teste.png'],
    
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