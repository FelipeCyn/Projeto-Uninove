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
    <link rel="stylesheet" href="../css/redes_2.css">
    <link rel="icon" href="../img/logo.png">
    <title>Redes</title>
</head>

<body>
    <!-- CABEÇALHO -->
    <header class="cabecalho ">
        <a href="">
            <img class="img-logo" src="../img/logo.png" alt="Logo da empresa">
        </a>
        <button class="btn-menu"><i class="fa fa-bars fa-lg"></i></button>
        <nav class="menu">
            <a class="btn-close"><i class="fa fa-times"></i></a>
            <ul class="nav">
                <li><a href="home.php">Home</a></li>
                <li><a href="internet.php">IoT</a></li>
                <li><a href="arquitetura.php">Org. e Arquitetura</a></li>
                <li><a href="#">Redes</a></li>
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
        <h1 class="titulo">Introdução á Redes de Computadores</h1>
        <div class="topico">

            <p>A comunicação de dados é a tecnologia básica da comunicação da informação. Usuários
                individuais de sistemas de computação não trabalham isolados. Com a comunicação
                de dados, podemos formar redes de computadores, compartilhar hardwares e softwares,
                ter a informação ao alcance, independentemente de onde ela estiver. A integração de
                duas tecnologias, comunicação e processamento de informações modificou a forma como
                compartilhar as informações. A necessidade de otimização de recursos e de troca de
                informações entre sistemas diferentes levou ao surgimento de redes de computadores.
            </p>

            <p>Em uma rede de computadores, compartilhamos não somente equipamentos, como impressoras e
                computadores, mas também a informação. Um uso importante está na comunicação digital entre
                as pessoas, trabalho colaborativo, ensino à distância e acesso ao conteúdo da Intranet/Internet.
                Há também um grande destaque para o comércio eletrônico. Muitas empresas fornecem catálogos de
                seus produtos ou realizam negócios pela internet. No ramo de entretenimento utilizamos a rede para
                ler jornais, para nos comunicar com nossos amigos por meio das mensagens instantâneas, jogar com outros
                participantes que podem estar do outro lado do mundo, ouvir música e assistir vídeos. Vamos começar
                agora a entender um pouco como funciona o processamento e como conseguimos acessá-lo a distância.
            </p>

            <p>É importante distinguir a diferença entre telecomunicações e teleprocessamento:</p>
            <p>- <b>Telecomunicações:</b> é um processo de comunicação que usa como veículo de transmissão
                linhas telefônicas, micro-ondas, satélites etc.
            </p>
            <p>- <b>Teleprocessamento:</b> é processamento de dados a distância, utilizando os recursos das
                telecomunicações.</p>

            <p>Qualquer processo de comunicação precisa de quatro elementos:</p>
            <p>-<b> Uma fonte de informação:</b> emissor ou origem das informações que se deseja transmitir.</p>
            <p>-<b> Informação:</b> são as informações (dados) que se deseja transmitir, por exemplo, um arquivo.</p>
            <p>-<b> Meio:</b> é o veículo pelo qual a informação é transmitida entre a fonte e o destino.</p>
            <p>-<b> Receptor:</b> quem vai receber a informação (destino).</p>

            <p><b>Transformando dados em informações</b></p>

            <p>Apesar de a maioria dos computadores não ser capaz de responder à fala humana, as pessoas
                conversam com eles o tempo todo. Em geral, parece que os computadores conseguem compreender-nos,
                porque produzem informações que nós entendemos. Mas sabemos que não é isso o que ocorre.
                O computador trabalha com sinais que chamamos digitais. Quando os computadores começaram a ser
                desenvolvidos, foi preciso pensar como os dados seriam armazenados. Como não existia muito espaço
                ou tecnologia para o armazenamento, esses dados tiveram que ser reduzidos ao seu estado mais
                fundamental, ou seja, apenas duas hipóteses: ligado ou desligado. Como é muito mais simples
                desenvolver equipamentos capazes de distinguir duas condições diferentes do que qualquer número
                maior de condições, os equipamentos ainda hoje armazenam dados nesses dois estados fundamentais.
                Cada um desses dados é chamado de bit, que pode ser um ou zero. O conjunto de oito bits forma um byte.
            </p>

            <p>Então já sabemos que o computador processa os dados no formato binário. Mas como esses bits, zero
                e um, são transformados em informação?
                Existem alguns sistemas de representação que convertem conjuntos de bits em caracteres, que podem
                ser letras maiúsculas, minúsculas, acentuação, sinais de pontuação etc., ou seja, tudo que usamos
                na linguagem escrita. Um dos sistemas mais utilizados é o ASCII, que é um código de oito bits
                (ou um byte).
            </p>
        </div>

        <div class="topico_2">
            <h1>Redes de Computadores</h1>

            <div class="sub_topico">
                <p>Uma rede de computadores consiste entre dois ou mais dispositivos computacionais conectados
                    por um meio de transmissão e que possuem a capacidade de transmitir e/ou receber dados. A
                    diferença básica entre um sistema distribuído e uma rede de computadores é que em um ambiente
                    distribuído os recursos são disponibilizados para o usuário de forma transparente, isto é,
                    os usuários não sabem que os computadores estão interconectados. A maioria das aplicações e
                    comunicações em rede de hoje se baseiam em um modelo cliente/servidor. Nesse modelo, são
                    descritos os serviços de rede (por exemplo: transferência de arquivos, correio eletrônico
                    etc.) e os programas utilizados pelos usuários finais para acessar esses serviços. Servidores
                    fornecem os serviços à rede de computadores, e os computadores que acessam esses serviços são
                    considerados clientes. Nesse modelo, existe uma hierarquia de equipamentos, ou seja, um
                    equipamento diferenciado controla os serviços e recursos de rede.
                </p>

                <p>Veja na ilustração a seguir a demonstração de um equipamento diferenciado, o servidor, que
                    controla centralizadamente algumas funções do ambiente.
                </p>

                <img class="img" src="../img/controlserver.png" alt="Controle de Servidor">

                <p>O modelo de rede não-hierárquica é também conhecido como par a par ou ponto a ponto. Esse
                    modelo elimina a necessidade de servidores centralizados, e permite a todos os computadores
                    interconectados trocar arquivos independentemente do tipo, residentes em seus discos (HDs).
                    Não existe hierarquia de equipamentos, cada equipamento poderá exercer as funções de cliente
                    e servidor, este tipo de ambiente é aplicável em situações em que há poucos dispositivos
                    finais de rede e não haver necessidade de complexidade em sua administração.
                    A igualdade e a alternância das funções entre os dispositivos finais de rede são representadas
                    na imagem a seguir.
                </p>

                <img class="img" src="../img/alternarDispositivos.png" alt="Alternância de Dispositivos">
            </div>
        </div>

        <div class="topico_3">
            <h1>Topologia de Redes e Classificação Geográfica de Redes</h1>

            <div class="sub_topico_2">
                <p> Para as redes de computadores existem diversos critérios para a sua classificação. No entanto,
                    a classificação mais frequente baseia-se na abrangência geográfica das redes: PAN, WPAN, HAN,
                    WHAN, LAN, WLAN, MAN, WMAN e WAN.
                </p>

                <img class="img_2" src="../img/wan.png" alt="Tipo Wan">
                <img class="img_2" src="../img/man.png" alt="Tipo Man">
                <img class="img_2" src="../img/lan.png" alt="Tipo Lan">
                <img class="img_2" src="../img/pan.png" alt="Tipo Pan">

                <p>Cada classificação possui uma abrangência e utilização que é detalhada a seguir:</p>

                <p><b>- PAN</b> (Personal Area Network, rede de área pessoal) é um termo recente, trata-se de redes que
                    interligam os mais variados dispositivos (computadores, smartphones etc.) numa área muito
                    reduzida por cabo. Um exemplo que pode ser citado é quando é feita transferência de arquivo
                    entre um telefone celular e um computador por cabo. Quando criamos uma PAN sem fio, temos
                    uma wireless PAN ou WPAN, um exemplo é quando fazemos transferência de informações por
                    bluetooth.
                </p>

                <p><b>- HAN</b> (Home Area Network, rede de área doméstica) também é um termo recente, é uma rede que
                    conecta vários computadores e outros dispositivos digitais por cabo. A rede, neste caso,
                    abrange o espaço de uma única casa ou apartamento, em oposição às LANs (que abrangem um
                    escritório ou edifício). Quando criamos uma HAN sem fio, temos uma wireless HAN ou WHAN,
                    um exemplo é quando utilizamos um roteador wireless para acessar a internet.
                </p>

                <p><b>- LAN</b> (Local Area Network, rede de área local) é um conjunto de computadores que pertencem a
                    uma
                    mesma organização e que estão ligados entre si em uma área geográfica limitada. Quando criamos
                    uma LAN sem fio, temos uma wireless LAN ou WLAN.
                </p>

                <p><b> - MAN</b> (Metropolitan Area Network, rede de área metropolitana) interliga várias LANs
                    geograficamente próximas por algum tipo de cabeamento, no máximo a algumas dezenas de
                    quilômetros. Assim, uma MAN permite a dois computadores distantes comunicação como se
                    fizessem parte de uma mesma rede local. Quando criamos uma MAN sem fio, temos uma wireless
                    MAN ou WMAN, um exemplo é quando interligamos LANs de diferentes prédios por wireless.
                </p>

                <p><b>- WAN</b> (Wide Area Network ou rede de longa distância) abrange uma ou mais redes conectadas em
                    uma grande área geográfica, como um país ou continente. Oferece serviços de e-mail, internet,
                    transferência de arquivos e e-commerce.
                </p>

                <p>A seguir veja uma tabela onde a classificação é descrita baseando-se em distâncias específicas.</p>

                <img class="img" src="../img/calssificaação.png" alt="Classificação Geográfica">

                <p>Além da abrangência geográfica das redes, existe a topologia de rede, que descreve como é o
                    formato de uma rede de computadores, por meio da qual há o tráfego de informações, e também
                    como os dispositivos estão conectados. Há várias formas de organizar a interligação entre
                    cada um dos nós (computadores) da rede. A topologia física é a maneira como a rede é
                    organizada fisicamente.
                </p>

                <p>Existem quatro topologias básicas: barramento, anel, estrela e malha.</p>

                <p><b> Topologia de barramento</b> é uma topologia de rede em que todos os computadores são ligados
                    em um mesmo barramento físico de dados, que é terminado nas extremidades. Apesar de os dados
                    não passarem por dentro de cada um dos nós, apenas uma máquina pode “escrever” no barramento
                    em um dado momento, enquanto isso todas as outras “escutam” e recolhem para si os dados
                    destinados a elas. Na <b>topologia em anel,</b> os dispositivos são conectados em série, formando um
                    circuito fechado (anel). Os dados são transmitidos unidirecionalmente de nó em nó até atingir o
                    seu destino. A mensagem enviada por uma estação passa pelas outras estações, até ser retirada
                    pela estação destino ou de origem.<b> Topologia em estrela</b> é a mais comum atualmente, e conecta
                    todos os cabos a um ponto central de concentração.<b> Na topologia em malha,</b> cada computador
                    está
                    conectado aos outros por meio de cabos distintos, assim fornecendo caminhos adicionais na rede.
                    Se um cabo falhar, outro assumirá o tráfego e a rede continuará a funcionar.
                </p>

                <p>A representação da topologia física pode ser observada nas ilustrações a seguir.</p>

                <img class="img" src="../img/topologias.png" alt="Topologias de Redes">
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