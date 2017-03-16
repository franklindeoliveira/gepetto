<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gepetto Marcenaria: Brinquedos e Artes de Madeira</title>
    <meta name="description" content="<strong>Laços de Encantamento</strong> é uma proposta de oficinas de brincar para bebês de 3 meses à 1 ano.">
    <?php include("head.php"); ?>
	<link rel="stylesheet" href="css/carrossel.css">
</head>
<body>
    <?php $inicio="" ?>
    <?php include("cabecalho.php"); ?>
    <main>
        <section class="lacosDeEncantamento">
            <h2>Gepetto Marcenaria</h2>
            <p><strong>Gepetto Marcenaria</strong> é ...</p>
        </section>
        <section class="carrossel-imagens">
            <h2>Brinquedos de Madeira</h2>
            <div class="jcarousel">
                <ul>
                    <li>
                        <img src="img/brinquedo.png" alt="Brinquedo 1">
                    </li>
                    <li>
                        <img src="img/brinquedo.png" alt="Brinquedo 2">
                    </li>
                    <li>
                        <img src="img/brinquedo.png" alt="Brinquedo 3">
                    </li>
                </ul>
            </div>
        </section>
        <section class="carrossel-imagens">
            <h2>Artes de Madeira</h2>
            <div class="jcarousel">
                <ul>
                    <li>
                        <img src="img/arte.png" alt="Arte 1">
                    </li>
                    <li>
                        <img src="img/arte.png" alt="Arte 2">
                    </li>
                    <li>
                        <img src="img/arte.png" alt="Arte 3">
                    </li>
                </ul>
            </div>
        </section>
    </main>
    <?php include("rodape.php"); ?>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/jquery.jcarousel.min.js"></script>
    <script src="js/carrossel.js"></script>
</body>
</html>