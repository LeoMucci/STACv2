<!-- precisei fazer um php desse aq -->
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



                <class class="menu-links">
                    <li class="nav-link">
                        <a href="../HomeP/index.html">
                            <i class='bx bxs-home icon'></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../AddNotas/ListaNotas/index.html" style="
                        background-color: var(--primary-color);">
                            <i class='bx bx-notepad icon'></i>
                            <span class="text nav-text">Notas</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../AddFaltas/TurmasFalta/index.php">
                            <i class='bx bx-calendar-check icon'></i>
                            <span class="text nav-text">Faltas</span>
                        </a>
                    </li>
                </class>

            </div>
            <li class="search-box" s>
            </li>

            <div class="bottom-content">
                <li class="">
                    <a href="../../Login/index.html>
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

        
        <div class="homi">

  

  <!-- tabela com a relação dos alunos  -->
  <?php

    if(!empty($_GET['idturma'])){

    $idTurma = $_GET['idturma'];


    $conexao = mysqli_connect("localhost", "root", "", "bd");

    if ($conexao == FALSE)
    {
      echo "Não foi possivel conectar-se ao PhpMyAdmin";
      exit;
    }

    // Consulta dos Alunos
    $consultaAlunos = "SELECT * FROM aluno ORDER BY Nome";
    $resultado_Alunos = mysqli_query($conexao, $consultaAlunos);

    $row_Alunos = mysqli_fetch_all($resultado_Alunos, MYSQLI_ASSOC);

    // Consulta das Notas
    $consultaNotas = "SELECT * FROM notas WHERE idturma = " . $idTurma . ";";
    $resultado_Notas = mysqli_query($conexao, $consultaNotas);

    $row_Notas = mysqli_fetch_all($resultado_Notas, MYSQLI_ASSOC);
?>

<!-- botoes pra add notas -->
<div class="blure">
  <div id="buttons">
  <a href="./AddN1/index.php?idturma=<?php echo $idTurma; ?>"><button class="bn5">Add N1</button></a>
  <a href="./AddN2/index.php?idturma=<?php echo $idTurma; ?>"><button class="bn5">Add N2</button></a>
  <a href="./AddN3/index.php?idturma=<?php echo $idTurma; ?>"><button class="bn5">Add N3</button></a>
  <a href="./AddN4/index.php?idturma=<?php echo $idTurma; ?>"><button class="bn5">Add N4</button></a>
  <a href="./AddN5/index.php?idturma=<?php echo $idTurma; ?>"><button class="bn5">Add N5</button></a>
  </div>
  <table>

    <tr>
    <th>Nome</th>
    <th>RM</th>
    <th>N1</th>
    <th>N2</th>
    <th>N3</th>
    <th>N4</th>
    <th>N5</th>
    
    

<?php
      // Criar um array associativo para armazenar as notas por RA
      $notasPorAluno = array();

      // Preencher o array com as notas
      foreach ($row_Notas as $Nota) {
          $notasPorAluno[$Nota['RA']] = $Nota;
      }
  
      // Loop para exibir a tabela
      foreach ($row_Alunos as $Aluno) {
          echo "<tr>";
          echo "<td>" . $Aluno['Nome'] . "</td>";
          echo "<td>" . $Aluno['RA'] . "</td>";
  
          // Verificar se há notas correspondentes ao aluno
          if (isset($notasPorAluno[$Aluno['RA']])) {
              $Notas = $notasPorAluno[$Aluno['RA']];
              echo "<td>" . $Notas['N1'] . "</td>";
              echo "<td>" . $Notas['N2'] . "</td>";
              echo "<td>" . $Notas['N3'] . "</td>";
              echo "<td>" . $Notas['N4'] . "</td>";
              echo "<td>" . $Notas['N5'] . "</td>";
          } else {
              // Se não houver notas, exibe células vazias
              echo "<td>0</td>";
              echo "<td>0</td>";
              echo "<td>0</td>";
              echo "<td>0</td>";
              echo "<td>0</td>";
          }
  
          echo "</tr>";
      }
  }
   
?>

    
  </table> 

 </div>
</div>

 


    </section>

    <script>

const body = document.querySelector('body'),
    sidebar = body.querySelector('nav'),
    toggle = body.querySelector(".toggle"),
    searchBtn = body.querySelector(".search-box"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = document.querySelector(".mode-text");

toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
});

searchBtn.addEventListener("click", () => {
    sidebar.classList.remove("close");
});

let currentTab = 0;
showTab(currentTab);

function irParaPagina(pagina) {
    // Redirecionar para a página desejada
    window.location.href = pagina;
}

function toggleTheme() {
    const isDarkMode = body.classList.contains('dark');

    if (isDarkMode) {
        body.classList.remove('dark');
        modeText.innerText = 'Dark mode';
    } else {
        body.classList.add('dark');
        modeText.innerText = 'Light mode';
    }
}

document.addEventListener('DOMContentLoaded', function () {
    // Função para mostrar o formulário ao clicar no botão "Add N1"
    function mostrarFormulario() {
        var formNotas = document.getElementById('FormNotas');
        formNotas.style.opacity = 1;
        document.querySelector('.blure').classList.add('blur');
        formNotas.classList.add('slide-in-elliptic-top-fwd');
        showTab(0); // Certifique-se de exibir a primeira etapa ao mostrar o formulário
    }

    // Adiciona um ouvinte de evento ao botão "Add N1"
    var botaoAddN1 = document.getElementById('Mostra');
    botaoAddN1.addEventListener('click', mostrarFormulario);
});


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

function showTab(n) {
  var x = document.getElementsByClassName("tab");
  if (n >= x.length) return; // Adicione esta linha para evitar um erro quando n é maior ou igual ao comprimento de x

  // Oculta todas as abas
  for (var i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }

  // Exibe a aba específica
  x[n].style.display = "block";

  // Atualiza a visibilidade dos botões com base na etapa atual
  if (n === 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }

  if (n === x.length - 1) {
    document.getElementById("nextBtn").innerHTML = "Enviar";
  } else {
    document.getElementById("nextBtn").innerHTML = "Próximo";
  }
}
function nextPrev(n) {
  // Esta função determinará qual etapa exibir
  var x = document.getElementsByClassName("tab");

  // Oculta a etapa atual
  x[currentTab].style.display = "none";

  // Aumenta ou diminui a etapa atual
  currentTab += n;

  // Se você chegou ao final do formulário, o formulário é enviado
  if (currentTab >= x.length) {
    // Adiciona esta linha para evitar a recarga da página
    event.preventDefault();
    document.getElementById("FormNotas").submit();
    return false;
  }

  // Caso contrário, exibe a próxima etapa
  showTab(currentTab);

  return false; // Adiciona esta linha para evitar a recarga da página
}


function validateForm() {
    const tabs = document.getElementsByClassName("tab");
    const currentInputs = tabs[currentTab].getElementsByTagName("input");
    for (let i = 0; i < currentInputs.length; i++) {
        if (currentInputs[i].value === "") {
            currentInputs[i].classList.add("invalid");
            return false;
        }
    }
    document.getElementsByClassName("step")[currentTab].classList.add("finish");
    return true;
}




    </script>

</body>

</html>