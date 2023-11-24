<!-- precisei criar um php -->
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
                        <a href="../Home/index.html">
                            <i class='bx bxs-home icon'></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Notas/index.html" style="
                        background-color: var(--primary-color);">
                            <i class='bx bx-notepad icon'></i>
                            <span class="text nav-text">Notas</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Faltas/index.html">
                            <i class='bx bx-calendar-check icon'></i>
                            <span class="text nav-text">Faltas:</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Historico/index.html">
                            <i class='bx bxs-graduation icon'></i>
                            <span class="text nav-text">Historico</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Calendario/index.html">
                            <i class='bx bxs-calendar icon'></i>
                            <span class="text nav-text">Calendario</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Horario/index.html">
                            <i class='bx bxs-grid icon'></i>
                            <span class="text nav-text">Horario</span>
                        </a>
                    </li>

                    <li class="nav-link" id="user-section">
                        <a href="#" class="user-link">
                            <i class='bx bxs-user icon'></i>
                            <span class="text nav-text">Usuario</span>
                        </a>
                    </li>

                </ul>
            </div>

            <li class="search-box" s>
            </li>

            <div class="bottom-content">
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

        <div class="user-popup">
            <div class="user-info">
                <img src="./images/leo.jpg" alt="Foto do Aluno">
                <p class="aluno-nome">Leonardo Capra Mucci</p>
                <p class="aluno-ra">RA: 1681432312016 - Ciclo: 1</p></div>
                <p class="rendimento">Rendimento no Curso:</p>
                <ul class="rendimento-info">
                    <li>PP: 0.00%</li>
                    <li>PR: 0.00</li>
                    <li>MAIOR PR: 0.00</li>
                </ul>
                <p class="prazo">Prazo de Integralização:</p>
                <ul class="prazo-info">
                    <li>Cursado: 1</li>
                    <li>Máximo: 3</li>
                    <li>Faltam: 2</li>
                </ul>
                <p class="email">Email Institucional:</p>
                <p class="email-info">FATEC - Leonardo.mucci@fatec.sp.gov.br</p>
            
        </div>
<!-- notas -->

<?php
    $conexao = mysqli_connect("localhost", "root", "", "bd");

    if ($conexao == FALSE) {
        echo "Não foi possível conectar-se ao PhpMyAdmin";
        exit;
    }

    $consultaNotasPI = "SELECT * FROM notas WHERE ra = 16 AND idturma = 1";
    $resultado_NotasPI = mysqli_query($conexao, $consultaNotasPI);
    $NotasPI = mysqli_fetch_array($resultado_NotasPI);

    $consultaMediaFinalPI = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
    FROM notas WHERE ra = 16 AND idturma = 1";
    $resultado_MediaFinalPI = mysqli_query($conexao, $consultaMediaFinalPI);
    $MediaFinalPI = mysqli_fetch_array($resultado_MediaFinalPI);
?>

<div class="container-lg"><b>Notas</b></div>

<center>
    <div class="container-lg">
        <div class="grid">
            <div class="card-container">
                <div class="card">
                    <div class="materia">
                        <div class="nomes">
                            <h1>Projeto Integrador I</h1>
                        </div>
                    </div>
                    <div class="content">
                        <div class="card-title"></div>
                        <h5>Projeto Integrador I</h5>
                        <div class="card-info">
                            <p>Média final: <?php echo $MediaFinalPI['MediaFinal']; ?></p>
                            <p>Faltas:**</p>
                            <p>% Frequência: **</p>
                        </div>
                        <div class="card-table">
                            <table>
                                <tr>
                                    <th>Avaliação</th>
                                    <th>Data</th>
                                    <th>Nota</th>
                                </tr>
                                <tr>
                                    <td>N1</td>
                                    <td>xx/xx/xx</td>
                                    <td><?php echo $NotasPI['N1']; ?></td>
                                </tr>
                                <tr>
                                    <td>N2</td>
                                    <td>xx/xx/xx</td>
                                    <td><?php echo $NotasPI['N2']; ?></td>
                                </tr>
                                <tr>
                                    <td>N3</td>
                                    <td>xx/xx/xx</td>
                                    <td><?php echo $NotasPI['N3']; ?></td>
                                </tr>
                                <tr>
                                    <td>N4</td>
                                    <td>xx/xx/xx</td>
                                    <td><?php echo $NotasPI['N4']; ?></td>
                                </tr>
                                <tr>
                                    <td>N5</td>
                                    <td>xx/xx/xx</td>
                                    <td><?php echo $NotasPI['N5']; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
    
                </div>
            </div>
        
    
        <div class="card-container">
            <div class="card">
                <div class="materia">

                    <div class="nomes">
                        <h1>Técnicas Avançadas de Banco de Dados</h1>
                    </div>

                </div>
                <div class="content">
                    
                    <div class="card-title"></div>
                    <h5>Técnicas Avançadas de Banco de Dados</h5>
    
                    <div class="card-info">
                        <p>Media final: **</p>
                        <p>Faltas:**</p>
                        <p>% Frequência: **</p>
                    </div>
                    <div class="card-table">
                        <table>
                            <tr>
                                <th>Avaliação</th>
                                <th>Data</th>
                                <th>Nota</th>
                            </tr>
                            <tr>
                                <td>N1</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N2</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N3</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N4</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N5</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="card-container">
            <div class="card">
                <div class="materia">

                    <div class="nomes">
                        <h1>Estruturas de Dados</h1>
                    </div>

                </div>
                <div class="content">
                    <div class="card-title"></div>
                    <h5>Estruturas de Dados</h5>
    
                    <div class="card-info">
                        <p>Media final: **</p>
                        <p>Faltas:**</p>
                        <p>% Frequência: **</p>
                    </div>
                    <div class="card-table">
                        <table>
                            <tr>
                                <th>Avaliação</th>
                                <th>Data</th>
                                <th>Nota</th>
                            </tr>
                            <tr>
                                <td>N1</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N2</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N3</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N4</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N5</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="card-container">
            <div class="card">
                <div class="materia">

                    <div class="nomes">
                        <h1>Engenharia de Software</h1>
                    </div>

                </div>
                <div class="content">
                
                    <div class="card-title"></div>
                    <h5>Engenharia de Software</h5>
    
                    <div class="card-info">
                        <p>Media final: **</p>
                        <p>Faltas:**</p>
                        <p>% Frequência: **</p>
                    </div>
                    <div class="card-table">
                        <table>
                            <tr>
                                <th>Avaliação</th>
                                <th>Data</th>
                                <th>Nota</th>
                            </tr>
                            <tr>
                                <td>N1</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N2</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N3</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N4</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N5</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                        </table>
                    </div>
                </div>
    
            </div>
        </div>
    
        <div class="card-container">
            <div class="card">
                <div class="materia">

                    <div class="nomes">
                        <h1>Interação Humano Computador</h1>
                    </div>

                </div>
                <div class="content">
                
                    <div class="card-title"></div>
                    <h5>Interação Humano Computador</h5>
    
                    <div class="card-info">
                        <p>Media final: **</p>
                        <p>Faltas:**</p>
                        <p>% Frequência: **</p>
                    </div>
                    <div class="card-table">
                        <table>
                            <tr>
                                <th>Avaliação</th>
                                <th>Data</th>
                                <th>Nota</th>
                            </tr>
                            <tr>
                                <td>N1</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N2</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N3</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N4</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N5</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                        </table>
                    </div>
                </div>
    
            </div>
        </div>
    
        <div class="card-container">
            <div class="card">
                <div class="materia">

                    <div class="nomes">
                        <h1>Técnicas Avançadas de Programação</h1>
                    </div>

                </div>
                <div class="content">
                
                    <div class="card-title"></div>
                    <h5>Técnicas Avançadas de Programação</h5>
    
                    <div class="card-info">
                        <p>Media final: **</p>
                        <p>Faltas:**</p>
                        <p>% Frequência: **</p>
                    </div>
                    <div class="card-table">
                        <table>
                            <tr>
                                <th>Avaliação</th>
                                <th>Data</th>
                                <th>Nota</th>
                            </tr>
                            <tr>
                                <td>N1</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N2</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N3</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N4</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N5</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                        </table>
                    </div>
                </div>
    
            </div>
        </div>
    
        <div class="card-container">
            <div class="card">
                <div class="materia">

                    <div class="nomes">
                        <h1>Técnicas Avançadas de Programação Web e Mobile</h1>
                    </div>

                </div>
                <div class="content">
                
                    <div class="card-title"></div>
                    <h5>Técnicas Avançadas de Programação Web e Mobile</h5>
    
                    <div class="card-info">
                        <p>Media final: **</p>
                        <p>Faltas:**</p>
                        <p>% Frequência: **</p>
                    </div>
                    <div class="card-table">
                        <table>
                            <tr>
                                <th>Avaliação</th>
                                <th>Data</th>
                                <th>Nota</th>
                            </tr>
                            <tr>
                                <td>N1</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N2</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N3</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N4</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N5</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                        </table>
                    </div>
                </div>
    
            </div>
        </div>
    
        <div class="card-container">
            <div class="card">
                <div class="materia">

                    <div class="nomes">
                        <h1>Inteligência Corporativa e Modelos de Negócios na Era Digita</h1>
                    </div>

                </div>
                <div class="content">
                
                    <div class="card-title"></div>
                    <h5>Inteligência Corporativa e Modelos de Negócios na Era Digita</h5>
    
                    <div class="card-info">
                        <p>Media final: **</p>
                        <p>Faltas:**</p>
                        <p>% Frequência: **</p>
                    </div>
                    <div class="card-table">
                        <table>
                            <tr>
                                <th>Avaliação</th>
                                <th>Data</th>
                                <th>Nota</th>
                            </tr>
                            <tr>
                                <td>N1</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N2</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N3</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N4</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N5</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                        </table>
                    </div>
                </div>
    
            </div>
        </div>

        <div class="card-container">
            <div class="card">
                <div class="materia">

                    <div class="nomes">
                        <h1>Gestão Ágil de Projetos de Software</h1>
                    </div>

                </div>
                <div class="content">
                
                    <div class="card-title"></div>
                    <h5>Gestão Ágil de Projetos de Software</h5>
    
                    <div class="card-info">
                        <p>Media final: **</p>
                        <p>Faltas:**</p>
                        <p>% Frequência: **</p>
                    </div>
                    <div class="card-table">
                        <table>
                            <tr>
                                <th>Avaliação</th>
                                <th>Data</th>
                                <th>Nota</th>
                            </tr>
                            <tr>
                                <td>N1</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N2</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N3</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N4</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N5</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                        </table>
                    </div>
                </div>
    
            </div>
        </div>

        <div class="card-container">
            <div class="card">
                <div class="materia">

                    <div class="nomes">
                        <h1>Organização de Computadores e Sistemas Operacionais</h1>
                    </div>

                </div>
                <div class="content">
                
                    <div class="card-title"></div>
                    <h5>Organização de Computadores e Sistemas Operacionais</h5>
    
                    <div class="card-info">
                        <p>Media final: **</p>
                        <p>Faltas:**</p>
                        <p>% Frequência: **</p>
                    </div>
                    <div class="card-table">
                        <table>
                            <tr>
                                <th>Avaliação</th>
                                <th>Data</th>
                                <th>Nota</th>
                            </tr>
                            <tr>
                                <td>N1</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N2</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N3</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N4</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N5</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                        </table>
                    </div>
                </div>
    
            </div>
        </div>

        <div class="card-container">
            <div class="card">
                <div class="materia">

                    <div class="nomes">
                        <h1>Matemática Discreta</h1>
                    </div>

                </div>
                <div class="content">
                
                    <div class="card-title"></div>
                    <h5>Matemática Discreta</h5>
    
                    <div class="card-info">
                        <p>Media final: **</p>
                        <p>Faltas:**</p>
                        <p>% Frequência: **</p>
                    </div>
                    <div class="card-table">
                        <table>
                            <tr>
                                <th>Avaliação</th>
                                <th>Data</th>
                                <th>Nota</th>
                            </tr>
                            <tr>
                                <td>N1</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N2</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N3</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N4</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>N5</td>
                                <td>xx/xx/xx</td>
                                <td>10</td>
                            </tr>
                        </table>
                    </div>
                </div>
    
            </div>
        </div>


        
    </div>
</div></center>



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

        
        document.addEventListener('DOMContentLoaded', function () {
    var userLink = document.querySelector('.user-link');
    var userPopup = document.querySelector('.user-popup');
    var sidebar = document.querySelector('.sidebar');

    userLink.addEventListener('mouseenter', function () {
        userPopup.style.display = 'block';
    });

    userLink.addEventListener('mouseleave', function () {
        userPopup.style.display = 'none';
    });

    sidebar.addEventListener('click', function () {
        userPopup.classList.toggle('active-sidebar');
    });
});

    </script>

</body>

</html>