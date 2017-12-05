<?php 
require_once '.'.DIRECTORY_SEPARATOR.'var_util.php';
    // Banco: dbexemplologin
    // User: "root"
    // Pass: ""
    // CRIANDO A TABELA
    /*
        create table tb_user (
        iduser int not null auto_increment primary key,
        vclogin varchar(64) not null,
        vcsenha varchar(256) not null,
        dtcadastro timestamp not null default current_timestamp()
        );
    */
    // INSERINDO DADOS
    /*
        insert into tb_user (vclogin, vcsenha) values ("user01","senh01");
    */
    // ATUALIZANDO DADOS
    /*
        update tb_user set vcsenha = "SENHAPAD" where iduser = 1;
    */
    
    // Cria a conexão MySQLi
    $conn = new mysqli("localhost", "root", "", "dbexemplologin");

    // Para tratar qualquer eventual erro.
    if ($conn->connect_error) {
        echo "Erro: ".$conn->connect_error;
    }

    // Preparando uma inserção de dados, poderia ser uma consulta ou qualquer tipo de query MySQL
    /*
    $dbStatus = $conn->prepare("insert into tb_user (vclogin, vcsenha) values (?,?);");
    $userM = "user02";
    $senhM = "senh02";
    $dbStatus->bind_param("ss", $userM, $senhM);
    $dbStatus->execute();
    
    // cadastrando outro
    $userM = "user03";
    $senhM = "senh03";
    $dbStatus->execute();
    */

    $resultado = $conn->query("select * from tb_user order by vclogin");

    // Enquanto tiver resultado vindo do banco, dados, atribui esses resultados a uma variavel linha
    // MYSQLI_ASSOC = formata o retorno
    $dadosJson = array();
    while ($linha = $resultado->fetch_array(MYSQLI_ASSOC)) {
        array_push($dadosJson, $linha);
        var_dump($linha);

    }
    $dadosJson = json_encode($dadosJson);
    
    var_dump($dadosJson);
?>