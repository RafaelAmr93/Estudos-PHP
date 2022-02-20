<?php 
    //-----DEFINE-----\\

    //são definidas em tempo de execução
    define('MAX_GRADE', 10);

    //funcionam dentro de estruturas de controle, como if e for
    if (10 > 5){
        //const IS_FALSE = false; <- não funciona
        define('IS_TRUE', true);
    }


    //-----DINÂMICAS-----\\
    //dá erro porque são definidas em tempo de execução!
    $text = "BAR";
    define('MY_' . $text, "Meu novo texto");
    echo MY_BAR;


    //-----CONST-----\\
    //são definidas em tempo de compilação
    const MIN_GRADE = 1;

    
    //-----PRÉ-DEFINIDAS-----\\
    //trazem diversas infos úteis e começam com PHP_
    //https://www.php.net/manual/pt_BR/reserved.constants.php
    echo PHP_VERSION;
    echo PHP_BINARY;


    //-----MÁGICAS-----\\
    //mudam a depender de onde são utilizadas
    //https://www.php.net/manual/pt_BR/language.constants.magic.php
    echo __FILE__;
    echo __line__;

?>