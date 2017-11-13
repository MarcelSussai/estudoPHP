<?php
require_once '../var_util.php';
// -Datas-------------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Datas                                                     |
        echo date("d/m/Y - H:i:s").$pl.$hr;
    // |--------------------------------------------------------------|
    // | d = dia do mês, 2 digítos com zero à esquerda                |
        echo date("d").$pl;
    // |--------------------------------------------------------------|
    // | D = Uma representação textual de um dia, 3 letras            |
        echo date("D").$pl;
    // |--------------------------------------------------------------|
    // | j = Dia do mês sem zero a esquerda                           |
        echo date("j").$pl;
    // |--------------------------------------------------------------|
    // | l = a peresentação textual completa do dia da semana         |
        echo date("l").$pl;
    // |--------------------------------------------------------------|
    // | N = representação numérica ISO-8601 do dia da semana         |
        echo date("N").$pl;
    // |--------------------------------------------------------------|
    // | S = sufixo ordinal inglês para o dia do mês, 2 caracteres    |
        echo date("S").$pl;
    // |--------------------------------------------------------------|
    // | w = representação numérica do dia da semana                  |
        echo date("w").$pl;
    // |--------------------------------------------------------------|
    // | z = O dia do ano iniciando em 0)                             |
        echo date("z").$pl;
    // |--------------------------------------------------------------|
    // | W = Nº do ano da semana ISO-8601, começa na segunda          |
        echo date("W").$pl;
    // |--------------------------------------------------------------|
    // | F = uma representação completa de um mês,  como januray ou   |
    // |     march                                                    |
        echo date("F").$pl;
    // |--------------------------------------------------------------|
    // | m = representação numérica de um mês com zero a esquerda     |
        echo date("m").$pl;
    // |--------------------------------------------------------------|
    // | M = representação textual curta de um mês, 3 letras          |
        echo date("M").$pl;
    // |--------------------------------------------------------------|
    // | n = representação numérica de um mês sem zero a esquerda     |
        echo date("n").$pl;
    // |--------------------------------------------------------------|
    // | t = numero de dias de um dado mês                            |
        echo date("t").$pl;
    // |--------------------------------------------------------------|
    // | L = se está em ano bissexto                                  |
        echo date("L").$pl;
    // |--------------------------------------------------------------|
    // | Y = uma representação de ano completa 4 digitos              |
        echo date("Y").$pl;
    // |--------------------------------------------------------------|
    // | y = representação de ano com 2 digitos                       |
        echo date("y").$pl;
    // |--------------------------------------------------------------|
    // | o = nº do ano (ISO8601) parecido com Y                       |
        echo date("o").$pl;
    // |--------------------------------------------------------------|
    // | a = antes e depoi do meio dia em minusculo                   |
        echo date("a").$pl;
    // |--------------------------------------------------------------|
    // | A = antes e depois do meio dia em maíusculo                  |
        echo date("A").$pl;
    // |--------------------------------------------------------------|
    // | B = A Swatch Internet Time foi um projeto da Swatch que      |
    // |     eliminava fusos horários e limites geográficos           |
    // |     construindo um horário imutável de região para região.   |
    // |     O dia real foi dividido em 1000 "beats". Cada beat       |
    // |     equivale a 1 minuto e 26,4 segundos.                     |
        echo date("B").$pl;
    // |--------------------------------------------------------------|
    // | g = Formato 12-horas de uma hora sem zero à esquerda         |
        echo date("g").$pl;
    // |--------------------------------------------------------------|
    // | G = Formato 24-horas de uma hora sem zero à esquerda         |
        echo date("G").$pl;
    // |--------------------------------------------------------------|
    // | h = Formato 12-horas de uma hora com zero à esquerda         |
        echo date("h").$pl;
    // |--------------------------------------------------------------|
    // | H = Formato 24-horas de uma hora com zero à esquerda         |
        echo date("H").$pl;
    // |--------------------------------------------------------------|
    // | i = minutos com zero à esquerda                              |
        echo date("i").$pl;
    // |--------------------------------------------------------------|
    // | s = segundos com zero à esquerda                             |
        echo date("s").$pl;
    // |--------------------------------------------------------------|
    // | u = microsegundos                                            |
        echo date("u").$pl;
    // |--------------------------------------------------------------|
    // | e = identificador do fuso horário                            |
        echo date("e").$pl;
    // |--------------------------------------------------------------|
    // | I = se está ou não em horário de verão                       |
        echo date("I").$pl;
    // |--------------------------------------------------------------|
    // | O = deslocamento ao horário de Greenwish (GMT) em horas      |
        echo date("O").$pl;
    // |--------------------------------------------------------------|
    // | P = deslocamento ao horário de Greenwish (GMT) com dois      |
    // |     pontos entre horas e minutos                             |
        echo date("P").$pl;
    // |--------------------------------------------------------------|
    // | T = abreviação do fuso horário                               |
        echo date("T").$pl;
    // |--------------------------------------------------------------|
    // | Z = deslocamento em segundos do fuso horário. O deslocamento |
    // |     para fusos horários a oeste de UTC sempre será negativo  |
    // |     e para aqueles a lestes de UTC sempre será positivo      |
        echo date("Z").$pl;
    // |--------------------------------------------------------------|
    // | c = Data ISO 8601                                            |
        echo date("c").$pl;
    // |--------------------------------------------------------------|
    // | r = data formatada RFC 2822                                  |
        echo date("r").$pl;
    // |--------------------------------------------------------------|
    // | U = segundos desde Unix Epoch                                |
        echo date("U").$hr;
    // └--------------------------------------------------------------┘

    // ┌--------------------------------------------------------------┐
    // | Timestamp                                                    |
        echo time().$hr; // a partir de 1970                          |
    // |--------------------------------------------------------------|
    // | variavel com strtotime()                                     |
        $ts1 = strtotime("2012-12-30");
    // |--------------------------------------------------------------|
    // | Exibindo                                                     |
        echo $ts1;
        var_dump($ts1);
        print_r($ts1);
        echo $pl;
        echo date("l, d/m/Y", $ts1).$hr;
    // |--------------------------------------------------------------|
    // | outro exemplo                                                |
    // | Criando variáveis                                            |
        $ts2 = strtotime("now");
        $ts3 = strtotime("+1 day");
        $ts4 = strtotime("+1 week");
        $ts5 = strtotime("-2 hours");
    // |--------------------------------------------------------------|
    // | Exibindo o timestamp                                         |
        echo $ts2.$pl.$ts3.$pl.$ts4.$pl.$ts5.$hr;
    // |--------------------------------------------------------------|
    // | formatando e exibindo novamente só que formatado             |
        echo date("l, d/m/Y", $ts2).$pl;
        echo date("l, d/m/Y", $ts3).$pl;
        echo date("l, d/m/Y", $ts4).$pl;
        echo date("l, d/m/Y", $ts5).$hr;
    // └--------------------------------------------------------------┘

    // ┌--------------------------------------------------------------┐
    // |    SetLocale                                                 |
    // | mudando a localização para portugues                         |
        setlocale(LC_ALL,"pt_BR", "pt_BR.utf-8", "portuguese");
    // | strftime()                                                   |
    // |--------------------------------------------------------------|
    // | %a                                                           |
    // | Representação textual abreviada do dia                       |
        echo $s1."dia: ".$s2;
        echo strftime("%a").$pl;
    // |--------------------------------------------------------------|
    // | %A                                                           |
    // | Representação textual completa do dia	                      |
        echo $s1."dia: ".$s2;
        echo strftime("%A").$pl;
    // |--------------------------------------------------------------|
    // | %d                                                           |
    // | Dia do mês, com dois dígitos (com zeros à esquerda)          |
        echo $s1."dia do mês: ".$s2;
        echo strftime("%d").$pl;
    // |--------------------------------------------------------------|
    // | %e                                                           |
    // | Dia do mês com um dígito, precedido com um espaço...         |
        echo $s1."dia do mês: ".$s2;
        echo strftime("%e").$pl;
    // |--------------------------------------------------------------|
    // | %j                                                           |
    // | dia do ano com três dígitos e zeros à esquerda               |
        echo $s1."dia do ano: ".$s2;
        echo strftime("%j").$pl;
    // |--------------------------------------------------------------|
    // | %u                                                           |
    // | Representação numérica, do dia da semana / ISO-8601          |
        echo $s1."dia da semana: ".$s2;
        echo strftime("%u").$pl;
    // |--------------------------------------------------------------|
    // | %w                                                           |
    // | Representação numérida do dia da semana                      |
        echo $s1."dia da semana: ".$s2;
        echo strftime("%w").$pl;
    // |--------------------------------------------------------------|
    // | %U                                                           |
    // | Número da semana de um dado ano, iniciado com o primeiro     |
    // | domingo sendo a primeira semana                              |
        echo $s1."Número da semana: ".$s2;
        echo strftime("%U").$pl;
    // |--------------------------------------------------------------|
    // | %V                                                           |
    // | Número da semana, / ISO-8601:1988                            |
    // | de um dado ano, iniciada com a primeira semana do ano        |
    // | segunda feira como inicio                                    |
        echo $s1."Número da semana: ".$s2;
        echo strftime("%V").$pl;
    // |--------------------------------------------------------------|
    // | %W                                                           |
    // | representação numérica da semana do ano, começando pela      |
    // | primeira segunda feira como primeira semana                  |
        echo $s1."Número da semana: ".$s2;
        echo strftime("%W").$pl;
    // |--------------------------------------------------------------|
    // | %b                                                           |
    // | Nome do mês abreviado, baseado no idioma                     |
        echo $s1."Nome do mês: ".$s2;
        echo strftime("%b").$pl;
    // |--------------------------------------------------------------|
    // | %B                                                           |
    // | Nome completo do mês, baseado no idioma                      |
        echo $s1."Nome do mês: ".$s2;
        echo strftime("%B").$pl;
    // |--------------------------------------------------------------|
    // | %h                                                           |
    // | Nome abreviado do mês, baseado no idioma                     |
        echo $s1."Nome do mês: ".$s2;
        echo strftime("%h").$pl;
    // |--------------------------------------------------------------|
    // | %m                                                           |
    // | Representação de dois dígitos do més                         |
        echo $s1."Número do mês: ".$s2;
        echo strftime("%m").$pl;
    // |--------------------------------------------------------------|
    // | %C                                                           |
    // | Representação, 2 dígitos, do século                          |
    // | (ano dividido por 100, truncado como inteiro)                |
        echo $s1."Número do século: ".$s2;
        echo strftime("%C").$pl;
    // |--------------------------------------------------------------|
    // | %g                                                           |
    // | Ano, 2 dígitos - ISO-8601:1988                               |
        echo $s1."Ano: ".$s2;
        echo strftime("%g").$pl;
    // |--------------------------------------------------------------|
    // | %G                                                           |
    // | Versão de 4 dígitos de %g                                    |
        echo $s1."Ano: ".$s2;
        echo strftime("%G").$pl;
    // |--------------------------------------------------------------|
    // | %y                                                           |
    // | Ano, 2 dítos                                                 |
        echo $s1."Ano: ".$s2;
        echo strftime("%y").$pl;
    // |--------------------------------------------------------------|
    // | %Y                                                           |
    // | Ano, 4 dígitos                                               |
        echo $s1."Ano: ".$s2;
        echo strftime("%Y").$pl;
    // |--------------------------------------------------------------|
    // | %H                                                           |
    // | Hora, 2 dígitos, 24 horas                                    |
        echo $s1."Hora: ".$s2;
        echo strftime("%H").$pl;
    // |--------------------------------------------------------------|
    // | %k                                                           |
    // | Hora, 2 dígitos, 24 horas, espaço depois em que é 1 digito   |
        echo $s1."Hora: ".$s2;
        echo strftime("%k").$pl;
    // |--------------------------------------------------------------|
    // | %I                                                           |
    // | Hora, 2 dígitos, 12 horas                                    |
        echo $s1."Hora: ".$s2;
        echo strftime("%I").$pl;
    // |--------------------------------------------------------------|
    // | %l                                                           |
    // | Hora, 2 dígitos, 12 horas, espaço depois em que é 1 digito   |
        echo $s1."Hora: ".$s2;
        echo strftime("%l").$pl;
    // |--------------------------------------------------------------|
    // | %M                                                           |
    // | minutos, 2 dígitos                                           |
        echo $s1."Minutos: ".$s2;
        echo strftime("%M").$pl;
    // |--------------------------------------------------------------|
    // | %p                                                           |
    // | AM ou PM                                                     |
        echo $s1."dia ou noite ".$s2;
        echo strftime("%p").$pl;
    // |--------------------------------------------------------------|
    // | %P                                                           |
    // | am ou pm                                                     |
        echo $s1."dia ou noite ".$s2;
        echo strftime("%P").$pl;
    // |--------------------------------------------------------------|
    // | %r                                                           |
    // | O mesmo que "%I:%M:%S %p"                                    |
        echo $s1."Horas: ".$s2;
        echo strftime("%r").$pl;
    // |--------------------------------------------------------------|
    // | %R                                                           |
    // | O mesmo que "%H:%M"                                          |
        echo $s1."Horas: ".$s2;
        echo strftime("%R").$pl;
    // |--------------------------------------------------------------|
    // | %S                                                           |
    // | Segundos, 2 digitos                                          |
        echo $s1."Segundos: ".$s2;
        echo strftime("%S").$pl;
    // |--------------------------------------------------------------|
    // | %T                                                           |
    // | O mesmo que "%I:%M:%S"                                       |
        echo $s1."Horas: ".$s2;
        echo strftime("%T").$pl;
    // |--------------------------------------------------------------|
    // | %X                                                           |
    // | baseada no idioma sem a data                                 |
        echo $s1."Horas: ".$s2;
        echo strftime("%X").$pl;
    // |--------------------------------------------------------------|
    // | %z                                                           |
    // | Deslocamento fuso horário                                    |
        echo $s1."Desl Fuso: ".$s2;
        echo strftime("%z").$pl;
    // |--------------------------------------------------------------|
    // | %Z                                                           |
    // |Abreviação fuso horário                                       |
        echo $s1."Fuso: ".$s2;
        echo strftime("%Z").$pl;
    // |--------------------------------------------------------------|
    // | %c                                                           |
    // | Carimbo de data e hora                                       |
        echo $s1."data e hora: ".$s2;
        echo strftime("%c").$pl;
    // |--------------------------------------------------------------|
    // | %D                                                           |
    // | Mes dia e ano                                                |
        echo $s1."M~es dia ano: ".$s2;
        echo strftime("%D").$pl;
    // |--------------------------------------------------------------|
    // | %F                                                           |
    // | ano mes dia                                                  |
        echo $s1."Ano mês dia: ".$s2;
        echo strftime("%F").$pl;
    // |--------------------------------------------------------------|
    // | %s                                                           |
    // | Timestump UNIX                                               |
        echo $s1."Timestump UNIX: ".$s2;
        echo strftime("%s").$pl;
    // |--------------------------------------------------------------|
    // | %x                                                           |
    // | data                                                         |
        echo $s1."data: ".$s2;
        echo strftime("%r").$hr;
    // |--------------------------------------------------------------|
    // | %n uma nova linha | %t tab | %% porcento                     |
    // └--------------------------------------------------------------┘    
// -------------------------------------------------------------------┘

// -classe data-------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Classe Nativa para datas                                  |
        $dt = new DateTime();
        echo $dt->format("d/m/Y H:i:s").$pl;
        $p = new DateInterval("P10D");
        $dt->add($p);
        echo $dt->format("d/m/Y H:i:s").$pl;
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘
?>