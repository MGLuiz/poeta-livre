<?php 
    require 'autoload.php';

    $PoemaDAO = new PoemaDAO(ConnectionFactory::getConnection());
    $_POST['order-by-select'] = "";

    if (isset($_POST['order-by-btn'])){
        $orderBy = filter_input(INPUT_POST, "order-by-select");
        $allPoemas = $PoemaDAO->getAllPoemas($orderBy);
    }else{
        $allPoemas = $PoemaDAO->getAllPoemas("dt_registro DESC");
    }

    require 'php/Partials/Header.php';
?>

    <section id="main-section">
        <div class="container-md">
            <div class="poemas-destaque">
                <span class="qtd-poemas"><?=sizeof($allPoemas)?> poemas publicados</span>
                <div class="order-by mb-4 d-flex align-items-center w-100">
                    <span class="w-auto">Ordenar por: &nbsp;</span>
                    <form action="./" method="POST" class="d-flex w-50" style="gap: 1rem;">
                        <select class="form-select w-50" name="order-by-select" id="order-by-select">
                        <option <?=$_POST['order-by-select'] == "dt_registro DESC" ? "selected" : "" ?> value="dt_registro DESC">Mais Recentes</option>
                        <option <?=$_POST['order-by-select'] == "dt_registro ASC" ? "selected" : "" ?> value="dt_registro ASC">Mais Antigos</option>
                        </select>
                        <button type="submit" class="btn btn btn-secondary" name="order-by-btn" id="order-by-btn">Ordenar</button>
                    </form>
                </div>

                <div class="flex" style="justify-content: space-between;">
                    <div class="poemas-cards">
                        <?php foreach ($allPoemas as $poema){ ?>
                        <div class="poema-card">
                            <div class="poema-header flex">
                                <div class="poema-title"><?=$poema['titulo']?></div>
                                <div class="poema-date"><?=$poema['dt_registro']?></div>
                            </div>
                            <div class="poema-preview">
                                <p> <?=str_replace("\n", "<br/>", $poema['poema'])?> </p>
                            </div>
                            <div class="poema-autoria">
                                <div class="poema-autor"><?=$poema['autor'] ?></div>
                                <div class="poema-fonte"><?=$poema['fonte'] ?></div>
                            </div>
                            <div class="poema-toolbar flex">
                                <button id="like-btn">
                                    <img src="icons/lovelike-24x24.png" alt="Botão de dar like">
                                </button>
                                <button id="copy-btn" onclick="copyToClipBoard(<?=$poema['poema']?>)">
                                    <img src="icons/copy-26x26" alt="Botão de Copiar">
                                </button>
                            </div>
                        </div> <!-- Poema Card -->

                        <?php } ?>
                    </div>

                    <aside class="flex">
                        <a href="./adicionar/" class="add-poema-btn flex">
                            <button class="animated-button">
                                <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
                                </svg>
                                <span class="text">Adicionar Poema</span>
                                <span class="circle"></span>
                                <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
                                </svg>
                            </button>                              
                        </a>
                    </aside>
                </div>
            </div> <!-- Poemas em destaque-->
        </div>
    </section> <!-- Main Section -->
    
    <footer>
        <div class="container">
            <span class="footer-quote flex">
                Poeta Livre é totalmente desenvolvido, com carinho, por &nbsp; <a href="https://mgluiz.github.io/mgluiz-linktree/">MGLuiz</a>
            </span>
            <hr>
            <div class="flex" style="justify-content: space-between; align-items: center;">
                <span class="info-project">
                    "A poesia, antes de tudo, é a transfiguração da realidade em expressão de beleza e de contemplação emocional, esta desperta os valores estéticos, aprimora as emoções, sensibilidade, aguça sensações e enriquece a percepção."
                </span>
                <span class="mgluiz-copyright">
                    &copy; 2024 <a href="https://mgluiz.github.io/mgluiz-linktree/">Luiz Brito</a>
                </span>
            </div>
        </div>
    </footer>
</body>
</html>