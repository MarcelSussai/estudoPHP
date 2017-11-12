<?php
require_once 'var_util.php';
// -If----------------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    if                                                        |
    // | A resposta da idade                                          |
        $idadeR = 31;
    // |--------------------------------------------------------------|
    // | Variáveis de comparação                                      |
        $idadeC = 12;
        $idadeA = 18;
        $idadeI = 60;
    // |--------------------------------------------------------------|
    // | Realizando o if()                                            |
    // | se a resposta da idade for menor ou igual a idade da criança |
    // | exiba "Criança"                                              |
        if ($idadeR <= $idadeC) {
            echo "Criança";
        }
    // |--------------------------------------------------------------|
    // | Senão se idade for maior que cirança e menor que adulto      |
    // | Então exiba "Adolescente"                                    |
        else if ($idadeR > $idadeC && $idadeR < $idadeA) {
            echo "Adolescente";
        }
    // |--------------------------------------------------------------|
    // | Senão se idade for maior ou igual a adulto e menor que idoso |
    // | exiba Adulto
        else if ($idadeR >= $idadeA && $idadeR < $idadeI) {
            echo "Adulto";
        } 
    // |--------------------------------------------------------------|
    // | senão se idade for maior ou igual a idoso exiba "Idoso       |
        else if ($idadeR >= $idadeI) {
            echo "Idoso";
        }
    // |--------------------------------------------------------------|
    // | senão exiba: "não é um valor válido!"                        | 
        else {
            echo "não é um valor válido!";
        }
        echo $pl;
    // |--------------------------------------------------------------|
    // | comparando com o if shortcut ou seja, uma maneira curta de   |
    // | validar coisas simples como a escrita de um texto            |
    // | chamado de operador ternário                                 |
    // | Exemplo:                                                     |
        echo ($idadeR < $idadeA)?"Menor de idade":"Maior de idade".$hr;
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘


// -Switch Case-------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Switch Case                                               |
    // | Criando a variável                                           |
        $diaSemana = date("w");
    // |--------------------------------------------------------------|
    // | caso seja o especificado executa o comando antes do break    |
    // | existe função nativa php para tratar datas, mas é apenas     |
    // | para fins didáticos:                                         |
        switch ($diaSemana) {
            case 0:
                echo "domingo";
            break;
            case 1:
                echo "segunda";
            break;
            case 2:
                echo "terça";
            break;
            case 3:
                echo "quarta";
            break;
            case 4:
                echo "quinta";
            break;
            case 5:
                echo "sexta";
            break;
            case 6:
                echo "sábado";
            break;
            default: echo "data inválida";
        }
        echo $pl.$hr;
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘


// -For---------------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    For                                                       |
    // | Cuidado com os loops infinitos!!!                            |
    // | Primeira parte: Cria o contador                              |
    // | Segunda parte: enquanto o contador for menor que 10 rode     |
    // | Terceira parte: incrementa o contador                        |
        for ($i = 0; $i < 10; $i++) {
            echo $i." ";
        }
        echo $pl.$pl;
    // |--------------------------------------------------------------|
    // | para imprimir de 5 em 5 até 500                              |
        for ($i = 0; $i <= 1000; $i+=5) {
            echo $i." ";
        }
        echo $pl.$pl;
    // |--------------------------------------------------------------|
    // | retirando partes da pesquisa                                 |
        for ($i = 0; $i <= 1000; $i+=5) {
            if ($i > 64 && $i < 512) continue;
            echo $i." ";
        }
        echo $pl.$pl;
    // |--------------------------------------------------------------|
    // | retornando datas com for
        for ($i=date("Y"); $i > date("Y")-100; $i--) {
            echo $i." ";
        }
        echo $hr;
    // |--------------------------------------------------------------|
    // | fazendo um select
        echo "<select>";
        for ($i=date("Y"); $i > date("Y")-1000; $i--) {
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
        echo "</select>".$pl.$hr;
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘


// -Foreach-----------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Foreach                                                   |
    // | De novo, há no PHP funções nativas que tratam a data, mas    |
    // | para fins didáticos:                                         |
    // | Array a percorrer:                                           |
        $meses = array(
            "Janeiro", "Fevereiro", "Março",
            "Abril", "Maio", "Junho",
            "Julho", "Agosto", "Setembro",
            "Outubro", "Novembro", "Dezembro"
        );
    // |--------------------------------------------------------------|
    // | Foreach                                                      |
        foreach($meses as $mes) {
            echo "O mês é ".$mes.$pl;
        }
        echo $hr;
    // |--------------------------------------------------------------|
    // | para saber a posição                                         |
        foreach($meses as $index => $mes) {
            echo "O mês é ".$mes." e o indice ".$index.$pl;
        }
        echo $hr;
    // |--------------------------------------------------------------|
    // | com html                                                     |
        ?>
        <form>
            Nome: 
            <input type="text" name="Nome"><br>
            Data de Nascimento:
            <input type="date" name="Nascimento"><br>
            <input type="submit" name="Enviar">
        </form>
        <hr>
        <?php
    // |--------------------------------------------------------------|
    // | agora fazemos assim:                                         |
        if (isset($_GET)) {
            foreach($_GET as $key => $value) {
                echo "Nome do campo: ".$key.$pl;
                echo "Valor do campo: ".$value.$pl.$hr;
            }
        }
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘

// -While e do while--------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    While                                                     |
    // | variavel utilizada                                           |
        $condição  = true;
    // |--------------------------------------------------------------|
    // | laço                                                         |
        while ($condição) {
            $numero = rand(1, 10);
            if ($numero === 3) {
                echo "Três!".$pl;
                $condição = false;
            }
            echo $numero." ";
        }
        echo $hr;
    // └--------------------------------------------------------------┘
    // ┌--------------------------------------------------------------┐
    // |    Do While                                                  |
        $tt = 160;
        $dc = 0.9;
    // |--------------------------------------------------------------|
    // | Utilizando                                                   |
        do {
            $tt *= $dc;
        } while ($tt > 100);
        echo $tt.$hr;
    // |--------------------------------------------------------------|
    // | utilize um contador para evitar o perigo de loop infinito    |
    // | Outro Exemplo                                                |
        $contador = 1;
        do {
            if ($contador > 1) {
                echo $contador." vezes".$pl;
            } else if ($contador <= 1) {
                echo $contador." vez".$pl;
            }
            $contador++;
        } while ($contador <= 10);
        echo $hr;
    // |--------------------------------------------------------------|
    // | Repare que validei a necessidade de usar plural              |
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘



?>