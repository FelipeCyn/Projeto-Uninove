<?php
    // inicia seção
    session_start();

    // se não existir email e senha
    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)) {
         //destruir todos os dados caso não exista
         unset($_SESSION['email']);
         unset($_SESSION['password']);
        //redireciona para:
        header('location: login.php');
    }
    else {
        //se existir login
        $logado = $_SESSION['email'];
    }
 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/arquitetura.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="icon" href="../img/logo.png">
    <title>Organização e Arquitetura de Redes</title>
</head>

<body>
    <!-- CABEÇALHO -->
    <header class="cabecalho ">
        <a href="">
            <img class="img-logo" src="../img/logo.png" alt="Logo da empresa">
        </a>
        <button type="button" class="btn-menu"><i class="fa fa-bars fa-lg"></i></button>
        <nav class="menu">
            <a class="btn-close"><i class="fa fa-times"></i></a>
            <ul class="nav">
                <li><a href="home.php">Home</a></li>
                <li><a href="internet.php">IoT</a></li>
                <li><a href="#">Org. e Arquitetura</a></li>
                <li><a href="redes.php">Redes</a></li>
                <li><a href="sisOperacional.php">Sis. Operecional</a></li>
                <li class="sub-menu">
                    <a>Opções⤵</a>
                    <ul>
                        <li><a href="outros.php">Outros</a></li>
                        <li><a href="../app/sair.php">Sair</a></li>
                    </ul>
                </li>
            </ul>
            </ul>
        </nav>
    </header>

    <!-- CORPO DO SITE -->
    <div class="container">
        <h1 class="titulo">Introdução á Organização e Arquitetura de Computadores</h1>
        <div class="topico">
            <p> Na literatura, ao se descrever um sistema de computação, é feita uma distinção entre os
                termos arquitetura e organização do computador. O termo arquitetura de um computador
                refere-se aos atributos de um sistema que são visíveis para o programador ou, em
                outras palavras, aos atributos que têm impacto direto sobre a execução lógica de um programa.
                Convém lembrar que o termo arquitetura também significa projeto. Já o termo organização de um
                computador diz respeito às unidades operacionais e suas interconexões que efetivam as especificações
                de sua arquitetura, ou seja, como as características da arquitetura são implementadas.</p>

            <p>Por atributos de arquitetura, podemos entender: o conjunto de instruções, o número de bits usados
                para representar os tipos de dados, os mecanismos de E/S. etc. Enquanto os atributos da organização
                são transparentes aos usuários e incluem detalhes de hardware como, por exemplo: sinais de controle,
                tecnologia de memória utilizada, etc.</p>

            <p><b>Estrutura e Função dos Computadores: </b></p>
            <p>Os computadores são equipamentos eletrônicos digitais que têm como função:</p>
            <p>- Processar dados;</p>
            <p>- Armazenar dados;</p>
            <p>- Comunicar (transferir) dados;</p>
            <p>- Exercer controle.</p>

            <p>Para cumprir esses objetivos, eles possuem a seguinte estrutura básica:</p>

            <p><b>Unidade Central de Processamento (CPU);</b></p>
            <p>- Processa os dados através da execução das instruções que compõem os programas.</p>

            <p><b>Sistema de Armazenamento (Memórias);</b></p>
            <p>- Armazena dados e instruções (programas). Normalmente um computador possui mais de uma memória,
                cada uma com sua especificidade.</p>

            <p><b>Sistema de Entradas e Saídas (E/S):</b></p>
            <p>- Transfere dados entre o computador e o usuário, periféricos, outros computadores, ou
                o ambiente.</p>

            <p><b>Sistema de Interconexão (Barramentos):</b></p>
            <p>- Meios de comunicação entre a CPU, memórias e E/S.</p>

            <img class="img" src="../img/estrutura.png" alt="Estrutura do Computador">

            <p>A CPU é o principal componente de um computador. Poderia-se dizer que ela é o "cérebro"
                do computador. A estrutura da CPU é a seguinte:</p>

            <p><b>Unidade Central de Processamento (CPU)</b></p>
            <p>- Processa os dados através da execução das instruções que compõem os programas.</p>

            <p><b>Unidade lógica aritmética (ULA)</b></p>
            <p>- Efetua toda as operações lógicas (boolenas) e aritméticas, ou seja, o processamento dos dados.</p>

            <p><b>Registradores</b></p>
            <p>- Constituem as unidades de armazenamento mais básicas do computador, internamente à CPU. Armazenam
                a instrução em execução, os dados referentes a essa instrução e o resultado gerado.</p>

            <p><b>Interconexão da CPU (Barramento Interno)</b></p>
            <p>- Conecta os diversos componentes da CPU.</p>
        </div>

        <div class="topico_2">
            <h1 class="titulo_2">Estrutura do Computador - Busca e Execução de Intruções</h1>
            <div class="sub_topico">

                <p>Um programa, para ser efetivamente executado por uma CPU, deve ser constituído por uma
                    série de instruções (em linguagem de máquina). Essas instruções devem estar armazenadas
                    em posições sucessivas da memória principal. A execução é sequencial, ou seja, se a
                    instrução executada está na posição x, a próxima instrução a ser executada deverá estar
                    na posição x + 1. Cada instrução atuará sobre um ou mais dados que são o(s) operando(s) da
                    instrução, gerando um respectivo resultado. Por exemplo a instrução "soma" requer dois
                    números como operandos, gerando um terceiro número como resultado. Os dados processados
                    no programa também ficam armazenados na memória. A sequência de funcionamento de uma CPU
                    é conhecida como ciclo de busca e execução de instruções, ou "busca – decodificação – execução"
                    de instruções.</p>

                <img class="img_2" src="../img/instruções.png" alt="Instruções do Computador">

                <p>As atividades realizadas pela CPU podem ser divididas em duas grandes categorias funcionais:</p>
                <p>- Funções de processamento;</p>
                <p>- Funções de controle.</p>

                <p>A função de processamento se encarrega de realizar as atividades relacionadas com a efetiva
                    execução de uma operação, ou seja, processar (executar a instrução) de instruções. O principal
                    componente da CPU que realiza a função de processamento é a ULA (Unidade Lógica e Aritmética)
                    e a ação dela é complementada pelo uso de registradores de processamento.</p>

                <p>A função de controle é exercida pelos componentes da CPU que se encarregam de atividades de
                    busca, interpretação e controle da execução das instruções, bem como do controle da ação dos
                    demais componentes do sistema de computação (memória, entrada/saída).O principal componente
                    da CPU responsável pela função de controle é a UC (Unidade de Controle). Ela tem o papel de
                    executar o ciclo de busca e execução gerando os sinais adequados para os demais componentes da
                    CPU e do computador.</p>

                <p><b>Vejamos de forma um pouco mais detalhada o que ocorre durante o ciclo de busca e execução:</b></p>

                <p>- O registrador Contador de Programa (PC – Program Counter), contém a posição da próxima
                    instrução a ser executada. Quando uma sequência de execução de instruções tem início, a instrução
                    cujo endereço está no Contador de Programa é trazida da memória para o Registrador de Instruções
                    (RI). Esse processo é conhecido como busca da instrução;</p>

                <p>- A próxima etapa corresponde à "interpretação" da instrução pelos circuitos da Unidade
                    de Controle, ao que chamamos de decodificação da instrução;</p>

                <p>- Conhecida a instrução, a etapa da execução da instrução envolve a obtenção dos operandos
                    (dados manipulados pela instrução), efetivação da operação e armazenamento dos resultados.
                    Quando a execução de uma instrução é terminada, o contador de instruções é atualizado para o
                    endereço da memória da próxima instrução (x + 1).</p>

                <p>Processar o dado é executar com ele uma ação que produza algum tipo de resultado.
                    Essa é a atividade-fim do sistema computacional, ele existe para processar dados.</p>

                <p><b>Dentre as tarefas de processamento de dados podem ser citadas:</b></p>

                <p>- Operações aritméticas: soma, subtração, multiplicação e divisão;</p>
                <p>- Operações lógicas:and,or,xor,not;</p>
                <p>- Movimentação de dados: memória – CPU (registrador), CPU (registrador) – memória,
                    registrador – registrador;</p>
                <p>- Desvios: alteração da sequência de execução das instruções;</p>
                <p>- Operações de entrada ou saída.</p>

                <p>O principal dispositivo da CPU para a realização das atividades de processamento é a ULA.
                    Ela utiliza os registradores como auxiliares, armazenando os operandos (dados) da instrução
                    e os respectivos resultados.</p>
            </div>
        </div>

        <!-- RODAPÉ -->
        <footer>
            <div class="footer-content">
                <h3>Hardware And Tech's</h3>
                <p>A <i> Hardware and Techs </i> é um site que contém informações sobre
                    hardwares, softwares e tudo para o que você precisa para estudar direto da sua casa.</p>
                <ul class="socials">
                    <li><a href="#"><i class="fa fa-whatsapp"> (11) 97402-3353</i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"> Viny Alves</i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"> Viny_alves02</i></a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>Copyright &copy;2021 Hardware And Tech's. Designed by <span>Vinicius Alves de
                        Moraes</span>
                </p>
            </div>
    </div>

    <!-- SCRIPT JQUERY -->
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/menu.js"></script>

</body>

</html>