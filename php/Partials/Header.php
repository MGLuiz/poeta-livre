<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poeta Livre</title>
    <link rel="shortcut icon" href="/poetalivre/img/poetalivre-logo.jpg" type="image/x-icon">

    <!-- CSS imports -->
    <link rel="stylesheet" type="text/css" href="/poetalivre/bootstrap-5.3.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/poetalivre/home.css"/>
    <link rel="stylesheet" type="text/css" href="/poetalivre/css/globals.css"/>
    <!-- JS imports (defer)-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v20.0" nonce="s2U4kSM7"></script>
    <script src="/poetalivre/js/jquery-3.7.1.min.js" defer></script>
    <script src="/poetalivre/bootstrap-5.3.3/js/bootstrap.min.js" defer></script>
    <script src="/poetalivre/js/copy-to-clipboard.js" defer></script>
</head>
<body>
    <header>
        <div class="header container d-flex">
            <a href="/poetalivre/">
                <div class="logo flex">
                    <img src="/poetalivre/img/poetalivre-logo-rmbg.png" alt="">
                    <h1>Poeta Livre</h1>
                </div>
            </a>
            <nav class="nav-menu flex">
                <ul class="flex">
                    <li><a href="/poetalivre/">Poemas</a></li>
                    <li><a href="/poetalivre/sobre/">Sobre</a></li>
                    <li><a href="/poetalivre/adicionar/">Publicar</a></li>
                </ul>
                <form action="/poetalivre/busca/" method="GET" autocomplete="off">
                    <input type="text" name="s" id="serach-input" placeholder="Busque um Poema" required>
                    <button type="submit" value="search-btn" id="search-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0,0,256,256">
                            <g fill="#212b3a" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M21,3c-9.37891,0 -17,7.62109 -17,17c0,9.37891 7.62109,17 17,17c3.71094,0 7.14063,-1.19531 9.9375,-3.21875l13.15625,13.125l2.8125,-2.8125l-13,-13.03125c2.55469,-2.97656 4.09375,-6.83984 4.09375,-11.0625c0,-9.37891 -7.62109,-17 -17,-17zM21,5c8.29688,0 15,6.70313 15,15c0,8.29688 -6.70312,15 -15,15c-8.29687,0 -15,-6.70312 -15,-15c0,-8.29687 6.70313,-15 15,-15z"></path></g></g>
                        </svg>
                    </button>
                </form>
            </nav>

            <div class="open-menu-btn d-flex flex-column justify-content-center">
                <img src="/poetalivre/icons/menu-50.png" alt="">
            </div>

            <nav class="nav-menu-mobile">
                <div class="mobile-menu-head d-flex justify-content-between mb-3">
                    <h2>Menu</h2>
                    <div class="close-menu-button d-flex flex-column justify-content-center">
                        <img class="w-50" src="/poetalivre/icons/excluir-50.png" alt="">
                    </div>
                </div>
                <ul class="mb-3" style="list-style: circle;">
                    <li><a href="/poetalivre/">Poemas</a></li>
                    <li><a href="/poetalivre/sobre/">Sobre</a></li>
                    <li><a href="/poetalivre/adicionar/">Publicar</a></li>
                </ul>
                <form action="/poetalivre/busca/" method="GET" autocomplete="off">
                    <input type="text" name="s" id="serach-input" placeholder="Busque um Poema" required>
                    <button type="submit" value="search-btn" id="search-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0,0,256,256">
                            <g fill="#212b3a" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M21,3c-9.37891,0 -17,7.62109 -17,17c0,9.37891 7.62109,17 17,17c3.71094,0 7.14063,-1.19531 9.9375,-3.21875l13.15625,13.125l2.8125,-2.8125l-13,-13.03125c2.55469,-2.97656 4.09375,-6.83984 4.09375,-11.0625c0,-9.37891 -7.62109,-17 -17,-17zM21,5c8.29688,0 15,6.70313 15,15c0,8.29688 -6.70312,15 -15,15c-8.29687,0 -15,-6.70312 -15,-15c0,-8.29687 6.70313,-15 15,-15z"></path></g></g>
                        </svg>
                    </button>
                </form>
            </nav>
        </div>

        <script>
            const openMenuBtn = document.querySelector('.open-menu-btn');
            const closeMenuBtn = document.querySelector('.close-menu-button');
            const menu = document.querySelector('.nav-menu-mobile');

            openMenuBtn.addEventListener('click', () => {
                menu.style.marginRight = '0';
            });

            closeMenuBtn.addEventListener('click', () => {
                menu.style.marginRight = '-100%';
            });
        </script>
    </header> <!-- Header -->