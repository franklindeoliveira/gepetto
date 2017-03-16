<?php include_once("analyticstracking.php") ?>
<header>
    <h1><img class="logo logoHeader" src="img/logo.png" alt="Gepetto Marcenaria: Brinquedos e Artes de Madeira"></h1>
    <nav class="menu-opcoes">
        <ul itemscope itemtype="http://schema.org/BreadcrumbList">
            <?php if (!is_null($inicio)) { ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="index">
                    <button itemprop="name" class="amarelo">Início</button>
                </a>
            </li>
            <?php } else { ?>
            <li>
                <a href="index">
                    <button class="amarelo">Início</button>
                </a>
            </li>
            <?php } ?>
            <?php if (!is_null($oficinas)) { ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="brinquedos">
                    <button itemprop="name" class="marrom">Brinquedos</button>
                </a>
            </li>
            <?php } else { ?>
            <li>
                <a href="brinquedos">
                    <button class="marrom">Brinquedos</button>
                </a>
            </li>
            <?php } ?>
            <?php if (!is_null($sobre)) { ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="artes">
                    <button itemprop="name" class="amarelo">Artes</button>
                </a>
            </li>
            <?php } else { ?>
            <li>
                <a href="artes">
                    <button class="amarelo">Artes</button>
                </a>
            </li>
            <?php } ?>
            <?php if (!is_null($contato)) { ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="contato">
                    <button itemprop="name" class="marrom">Contato</button>
                </a>
            </li>
            <?php } else { ?>
            <li>
                <a href="contato">
                    <button class="marrom">Contato</button>
                </a>
            </li>
            <?php } ?>
        </ul>
    </nav>
</header>