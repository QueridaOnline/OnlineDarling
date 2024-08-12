<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://localhost/sites/corrida/css/default.css">
    <title>Michelly</title>
</head>
<body>
    

<div class="mid">
    <iframe type="video/mp4" allow="autoplay" id="video" style="display:none"></iframe>
    <video style="width: 1000px; height: 950px;" autoplay>
        <source src="iskeiro.mp4" type="video/mp4">
</video>


<script>
        // Obtém o elemento de vídeo
        var video = document.getElementById('video');

        // Adiciona um evento para tocar o som quando o vídeo começar a ser reproduzido
        video.addEventListener('play', function() {
            video.muted = false; // Garante que o som esteja ativado
        });

        alert(`Michelly?`);
</script>
</body>
</html>




