<?php
require '../autoload.php';
require '../php/Partials/Header.php';
$foiPublicado = false;

if (isset($_POST['publicar-btn'])){

    $titulo = filter_input(INPUT_POST, 'titulo');
    $corpo = filter_input(INPUT_POST, 'corpo');
    $autor = filter_input(INPUT_POST, 'autor');
    $referencia = filter_input(INPUT_POST, 'referencia');
    
    $poema = new Poema($titulo, $corpo, $autor, $referencia, date("Y-m-d"));
    $poemaDAO = new PoemaDAO(ConnectionFactory::getConnection());
    $foiPublicado = $poemaDAO->insertPoema($poema);

}

?>
<head>
    <link rel="stylesheet" href="adicionar.css">
</head>
    <section id="add-poema">
        <div id="add-poema-form">
            <h1>Adicionar Poema</h1>
            <form action="./" method="POST">
                <div class="input-group input-box">
                    <span class="input-group-text">Título:</span>
                    <input type="text" class="form-control" name="titulo" id="titulo">
                </div>
                <div class="input-box">
                    <textarea name="corpo" id="corpo" class="form-control" placeholder="Digite o poema" rows="15"></textarea>
                </div>
                <div class="input-group input-box">
                    <span class="input-group-text">Autor:</span>
                    <input type="text" class="form-control" placeholder="" name="autor" id="autor">
                </div>
                <div class="input-group input-box">
                    <span class="input-group-text">Referencia:</span>
                    <input type="text" class="form-control" placeholder="" name="referencia" id="referencia">
                </div>
                <button type="submit" class="btn btn-success" name="publicar-btn" id="publicar-btn">Publicar</button>
            </form>
        </div>
    </section>

    <div class="modal-container">
        <div class="my-modal d-flex flex-column justify-content-center align-items-center">
            <div class="my-modal-header">
                <h1 style="text-align: center;">Publicado com sucesso!</h1>
            </div>
            <div class="my-modal-body mb-6">
                <p>
                    Obrigado pelo poema que você escreveu. Suas palavras são inspiradoras e iram trazer uma nova perspectiva para outras pessoas. Apreciamos muito o seu talento e a dedicação que você coloca em sua escrita. <br>
                    Obrigado, Poeta Livre.
                </p>
            </div>
            <button type="button" class="btn btn-success close-modal-button w-25">OK</button>
        </div>
    </div>

    <?php
        if ($foiPublicado){
            echo '<script src="/poetalivre/js/my-modal.js" defer> openModal() </script>';
        }
    ?>
</body>