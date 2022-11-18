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
    <link rel="stylesheet" href="../css/internet.css">
    <link rel="icon" href="../img/logo.png">
    <title>Internet das Coisas (IoT)</title>
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
                <li><a href="#">IoT</a></li>
                <li><a href="arquitetura.php">Org. e Arquitetura</a></li>
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
        <h1 class="titulo">Introdução á Internet das Coisas (IoT)</h1>
        <div class="topico">
            <p> Atualmente no mundo, há mais dispositivos inteligentes do que pessoas no mundo, sendo
                em média entre 3 e 4 para cada habitante, podendo ser eles smartphones, monitores de
                saúde, monitores de exercícios, leitores eletrônicos e tablets. O que torna isso possível
                são as chamadas redes digitais, que permitem interconexão e a transmissão de dispositivos
                digitais, funcionando como uma "camada fina". Isso permite que a maioria dos dispositivos
                com acesso à internet monitorem, comuniquem, avaliem e em alguns casos, se adaptem de forma
                automática aos dados recebidos. Quanto mais a sociedade adotar os dispositivos inteligentes,
                é possível maior crescimento das redes digitais, o que aumenta os benefícios econômicos, como
                em digitalizações.
            </p>

            <p>O nome original vem do inglês Internet of things (IoT). Consiste em objetos conectados à
                internet, podendo ser máquinas, sensores, câmeras, eletrodomésticos, entre outros. Essa
                modalidade está em crescimento constante e seu surgimento credita-se a Kevin Ashton. Ele
                acreditava que as “coisas” podiam se conectar à internet, permitindo a conexão entre si.
                Com isso, implantou seus conhecimentos nos laboratórios da Procter & Gamble.
            </p>

            <p><b> A tecnologia de IoT possui as seguintes características:</b></p>
            <p>- Conexão entre "objetos-pessoas", "pessoas-objetos", "objetos-objetos";</p>
            <p>- Uso de sensores para coleta de dados;</p>
            <p>- Comunicação entre objetos pela internet;</p>
            <p>- Processadores embutidos nos próprios objetos;</p>
            <p>- Segurança nas informações transmitidas entre si.</p>
        </div>

        <div class="topico_2">
            <h1 class="titulo_2">IoT e a Compuatação em Nuvem</h1>
            <div class="sub_topico">

                <p>Desde os primeiros computadores "mecânicos" e posteriormente nos "eletrônicos" que
                    surgiram com a introdução dos microchips nos computadores digitais. A computação
                    sempre esteve relacionada diretamente com elementos físicos, denominados como hardware.
                </p>

                <p>Esses elementos físicos (Processadores, Teclados, Hard-Disk, etc...) sempre estiveram
                    presentes em ambientes domésticos e empresariais onde existiam a necessidade de soluções
                    computacionais. Porém, graças a disponibilidade de redes de Internet de maior capacidade,
                    computadores e dispositivos de armazenamento mais poderosos e baratos, bem como a evolução
                    das tecnologias de virtualização de hardware foi possivel eliminar os elementos fisicos
                    necessarios para o processamento das informações, a isso denominou-se Computação em Nuvem,
                    em inglês comumente denominada como "Cloud Computing". A Computação em Nuvem ("Cloud Computing")
                    tem gerado grandes benefícios para as empresas devido ao tempo e dinheiro economizados e o aumento
                    da produtividade que ela traz às organizações.
                </p>

                <p><b>Na arquitetura de negócios voltados para a computação em nuvem, podemos destacar os principais
                        atores:</b></p>
                <p>- Prestadores de Infraestrutura (IPs);</p>
                <p>- Prestadores de Serviços (SPs);</p>
                <p>- Usuários dos Serviços.</p>

                <img class="img" src="../img/infraestrutura.png" alt="Infraestrutura de Serviços">

                <p><b>Também dentro desse conceito de arquitetura, podemos citar 3 tipos de nuvens:</b></p>
                <p>- Nuvens Públicas (Data center privado virtual);</p>
                <p>- Nuvens Privadas;</p>
                <p>- Nuvens Hibridas (Pública-Privada).</p>

                <img class="img" src="../img/tipos_nuvens.png" alt="Tipos de Nuvens">

                <p>As nuvens públicas são gerenciadas e pertencem exclusivamente ao próprio provedor de nuvem,
                    oferecendo
                    recursos de computação (tais como servidores e armazenamento) pela Internet sem custos aos usuários.
                    Já
                    as nuvens privadas são recursos de computação em nuvem, podendo ou não ficar localizada fisicamente
                    no datacenter local da empresa e por fim as Nuvens Hibridas são a combinação de nuvens públicas e
                    privadas ligadas por uma tecnologia que compartilha dados e aplicativos.</p>
            </div>
        </div>

        <div class="topico_3">
            <h1 class="titulo_3">Hardware IoT e Plataformas de Hardware para IoT</h1>
            <div class="sub_topico_2">

                <p>A essência da IoT está em conectar "coisas", conectar vários dispositivos, coletar e
                    processar dados, e a partir das informações auxiliar nas diversas tomadas de decisões.
                    Neste contexto a inteligência para que esta dinâmica ocorra não seria viável sem a existência
                    do hardware. Neste sentido, os hardwares possuem sua importância como impulsionadores da
                    transformação do processo de transformação digital em IoT.
                </p>

                <p>Devido à disponibilidade de hardware de computação compacto e com a tendência de se tornar mais
                    acessível financeiramente, a Internet das Coisas vem crescendo rapidamente. Esses dispositivos IoT
                    administram as funções básicas, como ativação do sistema, segurança, especificações de ação,
                    detecção
                    e comunicação. Estes hardwares possuem muitas configurações diferentes que podem ir desde a pequenos
                    chips alimentados por bateria que trabalham com bluetooth até computadores do tamanho de um cartão
                    de
                    crédito alimentados por USB. O Hardware IoT contempla uma variedade de dispositivos, entre outros,
                    como equipamentos de sensoriamento, roteamento, atuação e processamento.
                </p>

                <p><b>Arquitetura IoT</b></p>
                <p>A arquitetura IoT inclui os dispositivos sensores, redes na nuvem e a camada de gerenciamento
                    da aplicação.
                </p>
                <p>- A camada de percepção e a camada física, possui também sensores físicos
                    e atuadores para detectar e coletar informações sobre o ambiente. Esses sensores em geral se
                    conectam através de tecnologias como Bluetooth LE ou ZigBee aos dispositivos de IoT que possuem
                    maior capacidade para realizar os processamentos.
                </p>
                <p>- A camada de rede é responsável por se conectar a outros dispositivos inteligentes, dispositivos 
                    de rede e servidores, auxilia a transmitir os dados do dispositivo sensor de borda para a nuvem.
                    Nesta camada também ocorre o pré-processamento e filtragem e agregação de dados.
                </p>
                <p>- A camada nuvem / aplicação é responsável por fornecer serviços específicos de aplicativo ao
                    usuário. ele define vários aplicativos nos quais a Internet das Coisas pode ser implantada,
                    por exemplo, casas inteligentes, cidades inteligentes e saúde inteligente. Os dados recebidos 
                    nesta camada os dados passam por processamento, armazenamento eu uso nos aplicativos de nuvem.
                </p>

                <img class="img" src="../img/camadas-IoT.png" alt="Camadas de Arquitetura IoT">

                <p><b>Requisitos Básicos de Hardware:</b></p>
                <p>Na escolha dos hardwares para atender um determinado projeto os requisitos podem ser diferentes 
                    de acordo com o tipo, ambiente e objetivo do projeto. Em geral alguns fatores básicos são considerados:
                </p>
                <p>- Segurança;</p>
                <p>- Custo;</p>
                <p>- Capacidade de processamento e armazenamento;</p>
                <p>- Consumo de energia;</p>
                <p>- Conectividade.</p>

                <p><b>Exemplo de esquema de arquitetura de rede para IoT e seus principais Hardwares:</b></p>
                <img class="img" src="../img/hardwaresesquema.png" alt="Hardware e Esquemas IoT">

                <p><b>Hardware para IoT - Sensores e Atuadores</b></p>

                <p>O que são Sensores em IoT?</p>
                <p>Trata-se de um dispositivo eletrônico que capta eventos no ambiente e envia informações 
                    para outros dispositivos eletrônicos, como por exemplo um processador de computador. 
                    Há diversos tipos de sensores, podendo ser analógicos ou digitais. Os eventos capturados 
                    pelos sensores podem ser por exemplo a temperatura de um ambiente, umidade local, detecção 
                    de luz, velocidade, movimento, geolocalização, peso, força, distância entre objetos, etc.
                </p>

                <p>O que são Atuadores em IoT?</p>
                <p>Trata-se de um componente da máquina responsável por movimentação ou controle de um mecanismo 
                    ou sistema. Convertem a energia elétrica em energia mecânica. Exemplos de aplicação de 
                    atuadores: motores elétricos, indicadores luminosos, acionamento de válvulas, etc.
                </p>

                <p><b>IoT Hardware - Principais Dispositivos</b></p>
                <p>Os dispositivos utilizados em IoT podem ir de um microcontrolador simples para desenvolvimento 
                    em plataforma Arduino, NodeMCU ou mais completos e potentes como Raspberry Pi. Estes 
                    dispositivos leem a informação do sensor e através de protocolos de comunicação podem enviar 
                    estas informações para a nuvem. Os devices também podem receber informações de outros 
                    dispositivos da nuvem e ligar coisas como motores e luzes.
                </p>

                <p><b>Arduino</b></p>
                <p>Trata-se de uma plataforma livre e gratuita utilizada para construir projetos eletrônicos, 
                    consiste em uma placa de circuito programável física (muitas vezes referida como um 
                    microcontrolador) e um pedaço de software, ou ambiente de desenvolvimento integrado que é 
                    executado em seu computador, usado para escrever e fazer upload de código de computador para 
                    a placa física.
                </p>

                <p><b>Principais Especificações Arduino:</b></p>
                <p>- Microcontrolador: ATmega328;</p>
                <p>- Operating voltage(recommended): 7-12V</p>
                <p>- Input voltage (limits): 6:20V;</p>
                <p>- Digital I/O Pins: 14 (of which 6 provide PWM output);</p>
                <p>- Analog Input Pins: 6</p>
                <p>- DC current per I/O Pin: 40 mA e DC Current for 3.3V Pin: 50 mA;</p>
                <p>- Flash Memory: 32 of which 0.5 KB used by bootloader;</p>
                <p>- SRAM: 2 KB (ATmega328);</p>
                <p>- EEPROM: 1 KB (ATmega328);</p>
                <p>- Clock Speed: 16MHz.</p>

                <p><b>Arduino IDE</b></p>
                <p>Um ambiente de desenvolvimento integrado (IDE) é um pacote de software que consolida 
                    as ferramentas básicas de que os desenvolvedores precisam para escrever e testar software.
                    Normalmente, um IDE contém um editor de código, um compilador ou interpretador e um depurador 
                    que o desenvolvedor acessa por meio de uma interface gráfica de usuário (GUI) única.
                </p>

                <p><b>Arduino SHIELDS</b></p>
                <p>São placas que podem ser conectas ao Arduíno e desta forma viabiliza mais versatilidade à 
                    plataforma Arduino. Alguns exemplos destes hardwares:</p>
                <p>- Arduino Ethernet Shield:  Trata-se de uma placa que permite a conexão do Arduino com a internet;</p>
                <p>- Relay Shield: Trata-se de módulo eletrônico utilizado para desenvolvimento e controlar 
                    dispositivos de alta corrente e tensão, é compatível com a placa Arduíno;</p>
                <p>- Camera Shield: Trata-se do dispositivo câmera fotográfica compatível com a placa Arduino;</p>
                <p>- GPS Logger Shield: Este Hardware adiciona o acesso ao módulo GPS no Arduino.</p>
                <img class="img" src="../img/arduino-shields.png" alt=" Arduino Shields">

                <p><b>Módulo ESP8266</b></p>
                <p>ESP8266 é um módulo Wi-fi capaz de fornecer conectividade com a Internet a qualquer 
                    microcontrolador através de comunicação UART. Vem com pilha de protocolo TCP / IP integrada. 
                    Este módulo também pode ser usado para aplicações específicas, conectando sensores a seus 
                    pinos GPIO.
                </p>
                <img class="img" src="../img/moduloESP.png" alt="Módulo ESP8266">
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