<?php
require_once 'var_util.php';
// -Datas-------------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Datas                                                     |
        echo date("d/m/Y - H:i:s").$pl.$hr;
    // | d = dia do mês, 2 digítos com zero à esquerda                |
        echo date("d").$pl;
    // | D = Uma representação textual de um dia, 3 letras            |
        echo date("D").$pl;
    // | j = Dia do mês sem zero a esquerda                           |
        echo date("j").$pl;
    // | l = a peresentação textual completa do dia da semana         |
        echo date("l").$pl;
    // | N = representação numérica ISO-8601 do dia da semana         |
        echo date("N").$pl;
    // | S = sufixo ordinal inglês para o dia do mês, 2 caracteres    |
        echo date("S").$pl;
    // | w = representação numérica do dia da semana                  |
        echo date("w").$pl;
    // | z = O dia do ano iniciando em 0)                             |
        echo date("z").$pl;
    // | W = Nº do ano da semana ISO-8601, começa na segunda          |
        echo date("W").$pl;
    // | F = uma representação completa de um mês,  como januray ou   |
    // |     march                                                    |
        echo date("F").$pl;
    // | m = representação numérica de um mês com zero a esquerda     |
        echo date("m").$pl;
    // | M = representação textual curta de um mês, 3 letras          |
        echo date("M").$pl;
    // | n = representação numérica de um mês sem zero a esquerda     |
        echo date("n").$pl;
    // | t = numero de dias de um dado mês                            |
        echo date("t").$pl;
    // | L = se está em ano bissexto                                  |
        echo date("L").$pl;
    // | Y = uma representação de ano completa 4 digitos              |
        echo date("Y").$pl;
    // | y = representação de ano com 2 digitos                       |
        echo date("y").$pl;
    // | o = nº do ano (ISO8601) parecido com Y                       |
        echo date("o").$pl;
    // | a = antes e depoi do meio dia em minusculo                   |
        echo date("a").$pl;
    // | A = antes e depois do meio dia em maíusculo                  |
        echo date("A").$pl;
    // | B = A Swatch Internet Time foi um projeto da Swatch que      |
    // |     eliminava fusos horários e limites geográficos           |
    // |     construindo um horário imutável de região para região.   |
    // |     O dia real foi dividido em 1000 "beats". Cada beat       |
    // |     equivale a 1 minuto e 26,4 segundos.                     |
        echo date("B").$pl;
    // | g = Formato 12-horas de uma hora sem zero à esquerda         |
        echo date("g").$pl;
    // | G = Formato 24-horas de uma hora sem zero à esquerda         |
        echo date("G").$pl;
    // | h = Formato 12-horas de uma hora com zero à esquerda         |
        echo date("h").$pl;
    // | H = Formato 24-horas de uma hora com zero à esquerda         |
        echo date("H").$pl;
    // | i = minutos com zero à esquerda                              |
        echo date("i").$pl;
    // | s = segundos com zero à esquerda                             |
        echo date("s").$pl;
    // | u = microsegundos                                            |
        echo date("u").$pl;
    // |  Fuso Horário                                                |
    // | e = identificador do fuso horário                            |
        echo date("e").$pl;
    // | I = se está ou não em horário de verão                       |
        echo date("I").$pl;
    // | O = deslocamento ao horário de Greenwish (GMT) em horas      |
        echo date("O").$pl;
    // | P = deslocamento ao horário de Greenwish (GMT) com dois      |
    // |     pontos entre horas e minutos                             |
        echo date("P").$pl;
    // | T = abreviação do fuso horário                               |
        echo date("T").$pl;
    // | Z = deslocamento em segundos do fuso horário. O deslocamento |
    // |     para fusos horários a oeste de UTC sempre será negativo  |
    // |     e para aqueles a lestes de UTC sempre será positivo      |
        echo date("Z").$pl;
    // |  Data Hora completa                                          |
    // | c = Data ISO 8601                                            |
        echo date("c").$pl;
    // | r = data formatada RFC 2822                                  |
        echo date("r").$pl;
    // | U = segundos desde Unix Epoch                                |
        echo date("U").$hr;
    // | Timestamp                                                    |
        echo time().$hr; // a partir de 1970                          |
    // | variavel com strtotime()                                     |
        $ts1 = strtotime("2012-12-30");
    // | Exibindo                                                     |
        echo $ts1;
        var_dump($ts1);
        print_r($ts1);
        echo $pl;
        echo date("l, d/m/Y", $ts1).$hr;
    // | outro exemplo                                                |
        $ts2 = strtotime("now");
        $ts3 = strtotime("+1 day");
        $ts4 = strtotime("+1 week");
        $ts5 = strtotime("-2 hours");
    // | Exibindo o timestamp                                         |
        echo $ts2.$pl.$ts3.$pl.$ts4.$pl.$ts5.$hr;
    // | formatando e exibindo novamente só que formatado             |
        echo date("l, d/m/Y", $ts2).$pl;
        echo date("l, d/m/Y", $ts3).$pl;
        echo date("l, d/m/Y", $ts4).$pl;
        echo date("l, d/m/Y", $ts5).$hr;
    // └--------------------------------------------------------------┘

    // ┌--------------------------------------------------------------┐
    // |                                          |

    // └--------------------------------------------------------------┘

// -------------------------------------------------------------------┘
?>