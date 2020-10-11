<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Dúvidas</title>
</head>

<body>
    <header class="topbar">
        <nav class="topbar__menu">
            <div class="topbar__menu__left-buttons">
                <button style="background-color: rgb(216, 155, 41)">
                    <img src="assets/icons/editar.png"></img>
                    Seja um franqueado
                </button>
                <button style="background-color: rgb(83, 55, 111)">
                    <img src="assets/icons/seja_consultor.png"></img>
                    Seja um Consultor(A)
                </button>
                <button style="background-color: rgb(37, 164, 196)">
                    Quero Comprar
                </button>
            </div>
        </nav>

        <nav class="topbar__menu-mobile">
            <svg viewBox="0 0 100 80" width="40" height="40" onclick="showMenu()">
                <rect width="100" height="15"></rect>
                <rect y="25" width="100" height="15"></rect>
                <rect y="50" width="100" height="15"></rect>
            </svg>
                <div id="menuMobile" class="topbar__menu-mobile__hidden-menu">
                    <a href="#">
                        Seja um Franqueado
                    </a>
                    <a href="#">
                        Seja um Consultor
                    </a>
                    <a href="#">
                        Quero Comprar
                    </a>
                </div>
            </nav>
            <button class="topbar__menu__right-button">
                <img src="assets/icons/area_restrita.png"></img>
                Área restrita
            </button>
    </header>

    <section class="first-section">
    <div class="first-section__content">
    <h1>Dúvidas</h1>
    <p><b>Listamos aqui algumas dúvidas frequentes,</b> 
    <br>
    caso a sua dúvida não esteja aqui você pode
    <br> 
    entrar em contato conosco 
    <a href="#"><b>clicando aqui</b></a></a></p>
    </div>
    </section>

    
    <section class="second-section">
        <button class="second-section__accordion">Section 1</button>
            <div class="second-section__accordion__panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
    </section>

    <footer></footer>

    <script src="assets/js/index.js"></script>

</body>

</html>