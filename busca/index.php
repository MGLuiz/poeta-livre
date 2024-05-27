<?php
require_once '../autoload.php';
require_once '../php/Partials/Header.php';

if (isset($_GET['s'])){
    $poemaTitle = filter_input(INPUT_GET, "s");
    $poemaDAO = new PoemaDAO(ConnectionFactory::getConnection());
    $poemas = $poemaDAO->getPoemasByTitle($poemaTitle);
}else{
    header('Location: ../');
    exit;
}

?>
    <div class="container-md">
        <span class="qtd-poemas"><?=sizeof($poemas)?> poemas encontrados</span>
        <h2 class="mb-4">Resultados para "<?=$_GET['s'] ?>":</h2>
        <section class="poemas-cards">
            <?php foreach ($poemas as $poema){ ?>
            <a href="poema/?id=<?=$poema['id']?>">
                <div class="poema-card">
                    <div class="poema-header flex">
                        <div class="poema-title"><?=$poema['titulo']?></div>
                        <div class="poema-date"><?=$poema['dt_registro']?></div>
                    </div>
                    <div class="poema-body">
                        <?=str_replace("\n", "<br/>", $poema['poema'])?>
                    </div>
                    <div class="poema-autoria">
                        <div class="poema-autor"><?=$poema['autor'] ?></div>
                        <div class="poema-fonte"><?=$poema['fonte'] ?></div>
                    </div>
                    <div class="poema-toolbar flex">
                        <button id="like-btn">
                            <img src="../icons/lovelike-24x24.png" alt="Botão de dar like">
                        </button>
                        <button id="copy-btn" onclick="copyToClipBoard(<?=$poema['poema']?>)">
                            <img src="../icons/copy-26x26" alt="Botão de Copiar">
                        </button>
                    </div>
                </div> <!-- Poema Card -->
            </a>
            <?php } ?>
        </section>
    </div>
</body>