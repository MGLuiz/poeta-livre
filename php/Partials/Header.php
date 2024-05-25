<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poeta Livre</title>
    <link rel="shortcut icon" href="" type="image/x-icon">

    <!-- CSS imports -->
    <link rel="stylesheet" type="text/css" href="/poetalivre/bootstrap-5.3.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/poetalivre/home.css"/>
    <link rel="stylesheet" type="text/css" href="/poetalivre/css/globals.css"/>
    <!-- JS imports (defer)-->
    <script src="/poetalivre/js/jquery-3.7.1.min.js" defer></script>
    <script src="/poetalivre/bootstrap-5.3.3/js/bootstrap.min.js" defer></script>
    <script src="/poetalivre/js/copy-to-clipboard.js" defer></script>
</head>
<body>
    <header>
        <div class="container flex">
            <a href="/poetalivre/">
                <div class="logo flex">
                    <img src="/poetalivre/img/poetalivre-logo-rmbg.png" alt="">
                    <h1>Poeta Livre</h1>
                </div>
            </a>
            <nav class="flex">
                <ul class="flex">
                    <li><a href="/poetalivre/">Poemas</a></li>
                    <li><a href="sobre.html">Categorias</a></li>
                    <li><a href="contato.html">Sobre</a></li>
                    <li><a href="/poetalivre/adicionar/">Publicar</a></li>
                </ul>
                <form action="" method="GET">
                    <input type="text" name="search-input" id="serach-input" placeholder="Busque um Poema" required>
                    <button type="submit" value="search-btn" id="search-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0,0,256,256">
                            <g fill="#212b3a" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M21,3c-9.37891,0 -17,7.62109 -17,17c0,9.37891 7.62109,17 17,17c3.71094,0 7.14063,-1.19531 9.9375,-3.21875l13.15625,13.125l2.8125,-2.8125l-13,-13.03125c2.55469,-2.97656 4.09375,-6.83984 4.09375,-11.0625c0,-9.37891 -7.62109,-17 -17,-17zM21,5c8.29688,0 15,6.70313 15,15c0,8.29688 -6.70312,15 -15,15c-8.29687,0 -15,-6.70312 -15,-15c0,-8.29687 6.70313,-15 15,-15z"></path></g></g>
                        </svg>
                    </button>
                </form>
            </nav>
        </div>

    </header> <!-- Header -->