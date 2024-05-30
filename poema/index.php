<?php
require_once '../autoload.php';

if (isset($_GET['id'])){
    $id = filter_input(INPUT_GET, "id");
    $poemaDAO = new PoemaDAO(ConnectionFactory::getConnection());
    $poema = $poemaDAO->getPoemaById($id);


    if ($poema == null){
        header("Location:../");
        exit;
    }
}else{
    header("Location: ../");
    exit;
}

require '../php/Partials/Header.php';
?>
    <style>
        @media (max-width: 800px) {
            .container-md{
                flex-wrap: wrap;
            }

            .poema-card{
                width: 100% !important;
            }
        }
    </style>
    
    <div class="container-md d-flex justify-content-between pt-3" style="gap: 1rem;">
        <div class="poema-card w-75">
            <div class="poema-header flex">
                <div class="poema-title"><?=$poema['titulo']?></div>
                <div class="poema-date"><?=$poema['dt_registro']?></div>
            </div>
            <div class="poema-preview mb-3" style="max-height: 100%;">
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
                    <img src="../icons/copy-26x26.png" alt="Botão de Copiar">
                </button>
            </div>
        </div> <!-- Poema Card -->
        <div class="fb-comments" data-href="https://poetalivre.000webhostapp.com" data-width="250" data-numposts="10"></div>
    </div>
</body>