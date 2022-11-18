<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/sistema.css">
    <link rel="icon" href="../img/logo.png">
    <title>Sistema Operacional</title>
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
                <li><a href="arquitetura.php">Org. e Arquitetura</a></li>
                <li><a href="redes.php">Redes</a></li>
                <li><a href="#">Sis. Operecional</a></li>
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

    <div class="container">
        <h1 class="titulo">Introdução á Sistema Operacional</h1>

        <div class="topico">
            <p>Nos últimos 100 anos ocorreu uma grande evolução da eletrônica, esta deu um grande salto. A
                área de informática sempre esteve diretamente relacionada à eletrônica, ambas resultam no
                fantástico mundo tecnológico. Essa união vencedora fez surgir os computadores. Alguns
                historiadores divergem exatamente com respeito a qual foi o 1o computador inventado, não
                vamos aqui tentar solucionar essa questão, antes vamos expor os dois "candidatos":
            </p>

            <p>1º Concebido em 1930 por dois alunos de pós-graduação em Física Teórica na Universidade de
                Harvard, Grace Hopper e Howard. ASCC (Automatic Sequence Controlled Calculator) ficou conhecido
                como Mark I, a ideia era construir uma calculadora digital de larga escala. Posteriormente, em
                1944 (durante a 2a Guerra Mundial) foi desenvolvido e construído numa parceria entre a Universidade
                de Harvard e a IBM. Era eletromecânico e pesava cerca de 5 toneladas e foi a primeira e maior
                calculadora digital desenvolvida nos Estados Unidos da América.
            </p>

            <img src="../img/Mark1.png" alt="Mark 1 / Computador">

            <p>2º Criado em 1946 por dois cientistas da Electronic Control Company, John Eckert e John Mauchly,
                foi chamado de ENIAC (Electronic Numerical Integrator and Computer). Foi o primeiro computador
                totalmente eletrônico digital de grande escala. Desenvolvido inicialmente em 1943 durante a 2º
                Guerra Mundial, seu objetivo era executar cálculos balísticos, porém só se tornou operacional
                após o final da guerra. Pesava cerca de 30 toneladas, possuia quase 17.500 válvulas e conseguia
                processar 5.000 operações por segundo, ou seja, era imenso e ocupava um grande espaço físico.
            </p>

            <img src="../img/eniac.png" alt="Eniac Computador">

            <p>Considerado o "Pai da Ciência da Computação", Alan Mathison Turing foi um matemático, lógico,
                criptoanalista, pioneiro em inteligência artificial e cientista da computação britânico. Foi
                influente no desenvolvimento do conceito de algoritmo e computação com uma máquina que ele
                construiu, chamada de "Máquina de Turing". Essa máquina embasou conceitos para o desenvolvimento
                dos computadores modernos.
            </p>

            <p>Durante a Segunda Guerra Mundial, Turing trabalhou para a inteligência britânica como chefe da
                seção responsável pela criptoanálise da frota naval alemã. Sua missão era descriptografar os
                códigos alemães da máquina Enigma (máquina alemã que criptografava mensagens). Faleceu em junho de
                1954, aparentemente, cometeu suicídio.
            </p>

            <img class="img" src="../img/AlanTuring.png" alt="Alan Turing">
            <p class="Alan">Alan Turing</p>

            <img class="img" src="../img/MaquinaTuring.png" alt="Máquina de Turing">
            <p class="maquina">Máquina de Turing</p>
        </div>

        <div class="topico_2">
            <h1 class="titulo_2">Evolução</h1>
            <div class="sub_topico">
                <p>Baseados nesses inventos, os computadores evoluíram. A computação, comprovadamente baseada na
                    eletrônica, possui uma evolução constante e certamente, nunca parará:
                </p>

                <p>- Crescimento sem precedentes da computação durante as últimas décadas, na sequência:
                    Mainframes, Microcomputadores, Servidores, Celulares, Tablets;
                </p>

                <p>Surgem estações de trabalho (workstation) de 2 tipos: </p>

                <p>- Computadores que executam mais de um trilhão de instruções por segundo, geralmente essa
                    informação é medida em MIPS (Millions of Instructions Per Second: milhões de informações
                    por segundo). Os mips sugerem o preço de um mainframe, pois, quanto mais mips mais velocidade
                    de processamento o computador possui, logo, mais caro será;
                </p>

                <p>- Os computadores atualmente estão sendo empregados em quase todas as situações da vida.</p>

                <p><b>Conceitos</b></p>

                <p><b>1º - Hardware</b></p>

                <p>Sistema computacional é um conjunto de circuitos eletrônicos interligados, formado por
                    processadores, memória, registradores, barramentos, monitores de vídeo, impressoras, mouse,
                    discos magnéticos, além de outros dispositivos físicos. Os componentes são agrupados em três
                    subsistemas; conhecidos como unidade funcional: processador ou unidade central de processamento
                    (UCP), memória principal e dispositivos de Entrada / Saída (Input / Output).
                </p>

                <p><b>2º - Processador</b></p>

                <p> Também chamado de Unidade Central de Processamento (UCP), gerencia todo o sistema
                    computacional, controlando as operações realizadas por unidade funcional. Sua principal
                    função é controlar e executar instruções que se encontram na memória principal, por meio
                    de operações básicas como somar, subtrair, comparar e movimentar dados. Cada processador
                    é composto por:
                </p>

                <p>- Unidade de Controle (UC): responsável por gerenciar as atividades de todos os componentes
                    do computador, como a gravação de dados em discos ou a busca de instruções na memória;
                </p>

                <p>- Unidade Lógica Aritmética (ULA): responsável pela realização de operações lógicas (testes e
                    comparações) e aritméticas (soma e subtração).
                </p>

                <p>Os registradores têm a função principal de armazenar dados temporariamente. O número de registradores
                    e sua capacidade de armazenamento variam em função da arquitetura de cada processador. Há
                    registradores
                    específicos que são responsáveis por armazenar informações de controle de processador e Sistema
                    Operacional,
                    entre eles:
                </p>

                <p>- Contador de Instruções (CI) ou program counter (PC), contém o endereço da próxima instrução que o
                    processador deve buscar e executar. Sempre que o processador busca nova instrução, esse registrador
                    é atualizado
                    com o endereço de memória da instrução seguinte a ser realizada;
                </p>

                <p>- Apontador da pilha (AP) ou stack Pointer (SP): contém o endereço de memória do topo da pilha, que é
                    a estrutura de dados de onde o sistema mantém as informações sobre programas que estão sendo
                    executados e
                    tiveram que ser interrompidos;
                </p>

                <p>- Registrador de status ou program status Word (PSW): é responsável por armazenar informações sobre
                    execução de instruções, como a ocorrência de overflow. A maioria das instruções, quando executadas,
                    altera o
                    registrador de status conforme o resultado.
                </p>

                <p><b>Memória Principal</b></p>
                <p> Composta por unidades de acesso chamadas células, sendo cada célula composta por um determinado
                    número de bits
                    (0 ou 1). O acesso ao conteúdo da célula é realizado por meio da especificação de um número chamado
                    endereço.
                    A especificação do endereço é realizada por meio de um registrador denominado registrador de
                    endereço de memória
                    (Memory Address Register – MAR). Por meio do conteúdo desse registrador, a unidade de controle sabe
                    qual célula
                    de memória será acessada.
                </p>

                <p><b>Memória Cache</b></p>

                <p>Trata-se de uma memória volátil (que se perde) de alta velocidade, porém com pequena capacidade de
                    armazenamento.
                    Seu tempo de acesso a um dado nela contido é muito menor que se o mesmo estivesse na memória
                    principal. A maioria
                    dos processadores trabalha com uma arquitetura de memória cache com múltiplos níveis. O
                    funcionamento dessa
                    arquitetura tem como base o princípio de quanto menor for a capacidade de armazenamento da memória
                    cache, mais
                    rápido será o acesso dos dados; contudo a probabilidade da ocorrência de cachê hits (se o dado
                    estiver armazenado
                    na memória cache). Caso a informação não estiver na cachê, será obrigatório o acesso à memória
                    principal (cachê miss).
                </p>

                <p><b>Dispositivos de Entrada e Saída (Input / Output)</b></p>

                <p>São dispositivos utilizados para a comunicação entre o sistema computacional e o mundo externo, como
                    por exemplo:
                    teclado, impressora e mouse.
                </p>

                <p><b>Software</b></p>

                <p>É um conjunto de programas utilizado como interface entre as necessidades do usuário e as capacidades
                    do hardware.
                    A utilização de softwares adequados às diversas tarefas e aplicações torna o trabalho dos usuários
                    muito mais
                    simples e eficiente. Para gerenciar tudo isso foi necessário o desenvolvimento de um software
                    (programa) que foi
                    batizado com o nome de Sistema Operacional (SO).
                </p>
            </div>
        </div>

        <div class="topico_3">
            <h1 class="titulo_3">Sistema Operacional</h1>
            <div class="sub_topico_2">
                <p><b>1º Função do SO</b></p>

                <p>O sistema operacional separa as aplicações do hardware por elas acessado, ele gerencia o software e o
                    hardware para
                    gerar os resultados desejados. O sistema operacional é, primordialmente, um gerenciador de recursos:
                </p>

                <p>- Hardware;</p>
                <p>- Aplicações de software.</p>

                <img src="../img/software.png" alt="Sistema Operacional">

                <p>Como gerenciador de recursos o SO:</p>

                <p>- Permite que múltiplos programas sejam executados ao mesmo tempo;</p>
                <p>- Gerencia e proteje a memória, os dispositivos de entrada e saída e outros recursos;</p>
                <p>- Inclui a multiplexação (partilha) de recursos de duas maneiras diferentes: no tempo e no espaço.
                </p>
            </div>
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

    <!-- SCRIPT JQUERY -->
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/menu.js"></script>

</body>
</html>