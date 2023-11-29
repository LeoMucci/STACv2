<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!--<title>Dashboard Sidebar Menu</title>-->
</head>

<body class="dark">

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
      </div>
      <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
      <script>
        new window.VLibras.Widget();
      </script>

    <!-- 
    <label for="theme" class="theme">
        <span class="theme__toggle-wrap">
            <input id="theme" class="theme__toggle" type="checkbox" role="switch" name="change-theme" value="dark">
            <span class="theme__fill"></span>
            <span class="theme__icon">
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
            </span>
        </span>
    </label> -->


    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="./images/soLogo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">STAC</span>
                    <span class="profession">Sistema Academico</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">



                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="../Home/index.html" title="Home">
                            <i class='bx bxs-home icon'></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Notas/index.html" title="Notas">
                            <i class='bx bx-notepad icon'></i>
                            <span class="text nav-text">Notas</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="./index.html" style="
                        background-color: var(--primary-color);" title="Faltas">
                            <i class='bx bx-calendar-check icon'></i>
                            <span class="text nav-text">Faltas</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Historico/index.html" title="Histórico">
                            <i class='bx bxs-graduation icon'></i>
                            <span class="text nav-text">Histórico</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Calendario/index.html" title="Calendário">
                            <i class='bx bxs-calendar icon '></i>
                            <span class="text nav-text">Calendário</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Horario/index.html"title="Horário">
                            <i class='bx bxs-time-five icon'></i>
                            <span class="text nav-text">Horário</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-user icon'></i>
                            <span class="text nav-text">Usuário</span>
                        </a>
                    </li>

                </ul>
            </div>

            <li class="search-box" s>
            </li>

            <div class="bottom-content">
                <li class="">
                    <a href="../../Login/index.html">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>

    <section class="home">


        <div class="container-lg"><b>Faltas</b></div>


        <div class="container-lg">

            <div class="cards">
                <div class="card red">
                    <div class="titulo">
                        <h1>Projeto Integrador I</h1>
                    </div>

                    <div class="label-value-pair">
                        <label for="presenca">Presença</label>
                        <label id="presenca-valor">10</label>
                    </div>

                    <div class="label-value-pair">
                        <label for="ausencia">Ausência</label>
                        <label id="ausencia-valor">10</label>
                    </div>

                    <div class="label-value-pair">
                        <label for="frequencia">Frequência</label>
                        <label id="frequencia-valor">100%</label>
                    </div>

                </div>

                <div class="card blue">
                    <div class="titulo">
                        <h1>Técnicas Avançadas de Banco de Dados Relacional e Não Relacional </h1>
                    </div>

                    <div class="label-value-pair">
                        <label for="presenca">Presença</label>
                        <label id="presenca-valor">10</label>
                    </div>

                    <div class="label-value-pair">
                        <label for="ausencia">Ausência</label>
                        <label id="ausencia-valor">10</label>
                    </div>

                    <div class="label-value-pair">
                        <label for="frequencia">Frequência</label>
                        <label id="frequencia-valor">100%</label>
                    </div>
                </div>

                <div class="card green">
                    <div class="titulo">
                        <h1>Estruturas de Dados</h1>
                    </div>

                    <div class="label-value-pair">
                        <label for="presenca">Presença</label>
                        <label id="presenca-valor">10</label>
                    </div>

                    <div class="label-value-pair">
                        <label for="ausencia">Ausência</label>
                        <label id="ausencia-valor">10</label>
                    </div>

                    <div class="label-value-pair">
                        <label for="frequencia">Frequência</label>
                        <label id="frequencia-valor">100%</label>
                    </div>
                </div>
                <div class="card red">
                    <div class="titulo">
                        <h1>Engenharia de Software</h1>
                    </div>

                    <div class="label-value-pair">
                        <label for="presenca">Presença</label>
                        <label id="presenca-valor">10</label>
                    </div>

                    <div class="label-value-pair">
                        <label for="ausencia">Ausência</label>
                        <label id="ausencia-valor">10</label>
                    </div>

                    <div class="label-value-pair">
                        <label for="frequencia">Frequência</label>
                        <label id="frequencia-valor">100%</label>
                    </div>
                </div>
                <div class="card blue">
                    <div class="titulo">
                        <h1>Interação Humano Computador</h1>
                    </div>

                    <div class="label-value-pair">
                        <label for="presenca">Presença</label>
                        <label id="presenca-valor">10</label>
                    </div>

                    <div class="label-value-pair">
                        <label for="ausencia">Ausência</label>
                        <label id="ausencia-valor">10</label>
                    </div>

                    <div class="label-value-pair">
                        <label for="frequencia">Frequência</label>
                        <label id="frequencia-valor">100%</label>
                    </div>
                </div>
                <div class="card green">
                    <div class="titulo">
                        <h1>Técnicas Avançadas de Programação</h1>
                    </div>

                    <div class="label-value-pair">
                        <label for="presenca">Presença</label>
                        <label id="presenca-valor">10</label>
                    </div>

                    <div class="label-value-pair">
                        <label for="ausencia">Ausência</label>
                        <label id="ausencia-valor">10</label>
                    </div>

                    <div class="label-value-pair">
                        <label for="frequencia">Frequência</label>
                        <label id="frequencia-valor">100%</label>
                    </div>
                </div>

                <div class="card green">
                    <div class="titulo">
                        <h1>Técnicas Avançadas de Programação Web e Mobile</h1>
                    </div>

                    <div class="label-value-pair">
                        <label for="presenca">Presença</label>
                        <label id="presenca-valor">10</label>
                    </div>

                    <div class="label-value-pair">
                        <label for="ausencia">Ausência</label>
                        <label id="ausencia-valor">10</label>
                    </div>

                    <div class="label-value-pair">
                        <label for="frequencia">Frequência</label>
                        <label id="frequencia-valor">100%</label>
                    </div>
                </div>

                <div class="card green">
                    <div class="titulo">
                        <h1>Inteligência Corporativa e Modelos de Negócios na Era Digital</h1>
                    </div>

                    <div class="label-value-pair">
                        <label for="presenca">Presença</label>
                        <label id="presenca-valor">10</label>
                    </div>

                    <div class="label-value-pair">
                        <label for="ausencia">Ausência</label>
                        <label id="ausencia-valor">10</label>
                    </div>

                    <div class="label-value-pair">
                        <label for="frequencia">Frequência</label>
                        <label id="frequencia-valor">100%</label>
                    </div>
                </div>

                <div class="card green">
                    <div class="titulo">
                        <h1>Gestão Ágil de Projetos de Software</h1>
                    </div>

                    <div class="label-value-pair">
                        <label for="presenca">Presença</label>
                        <label id="presenca-valor">10</label>
                    </div>

                    <div class="label-value-pair">
                        <label for="ausencia">Ausência</label>
                        <label id="ausencia-valor">10</label>
                    </div>

                    <div class="label-value-pair">
                        <label for="frequencia">Frequência</label>
                        <label id="frequencia-valor">100%</label>
                    </div>
                </div>

                <div class="card green">
                    <div class="titulo">
                        <h1>Organização de Computadores e Sistemas Operacionais </h1>
                    </div>

                    <div class="label-value-pair">
                        <label for="presenca">Presença</label>
                        <label id="presenca-valor">10</label>
                    </div>

                    <div class="label-value-pair">
                        <label for="ausencia">Ausência</label>
                        <label id="ausencia-valor">10</label>
                    </div>

                    <div class="label-value-pair">
                        <label for="frequencia">Frequência</label>
                        <label id="frequencia-valor">100%</label>
                    </div>
                </div>

                <div class="card green">
                    <div class="titulo">
                        <h1>Matemática Discreta</h1>
                    </div>

                    <div class="label-value-pair">
                        <label for="presenca">Presença</label>
                        <label id="presenca-valor">10</label>
                    </div>

                    <div class="label-value-pair">
                        <label for="ausencia">Ausência</label>
                        <label id="ausencia-valor">10</label>
                    </div>

                    <div class="label-value-pair">
                        <label for="frequencia">Frequência</label>
                        <label id="frequencia-valor">100%</label>
                    </div>
                </div>

            </div>




        </div>



        </div>


    </section>

    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");



        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        })

        function toggleTheme() {
            const body = document.querySelector('body');
            const modeText = document.querySelector('.mode-text');

            // Verifique se o modo atual é escuro
            const isDarkMode = body.classList.contains('dark');

            // Alterne o modo
            if (isDarkMode) {
                body.classList.remove('dark');
                modeText.innerText = 'Dark mode';
            } else {
                body.classList.add('dark');
                modeText.innerText = 'Light mode';
            }
        }

        // Adicione um ouvinte de evento ao botão de alternância de tema, se necessário
        const themeToggleButton = document.querySelector('.theme-toggle-button');

        if (themeToggleButton) {
            themeToggleButton.addEventListener('click', toggleTheme);
        }

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";

            }
        });
    </script>

</body>

</html>