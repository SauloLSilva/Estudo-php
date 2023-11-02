<?php
    // criar array associativo com caracteristicas de um carro e imprimir pelo menos duas delas
    
    //forma1, array
    function dados_de_um_carro(){
        $carro = ['4 portas', 'vermelho', 2013, true];
        echo 'Caracteristica do carro: ';
        foreach ($carro as $dados){
            if (gettype($dados) == 'string'){
                echo "$dados";
                echo '<br>';
            }
            elseif (gettype($dados)  == 'integer'){
                echo "Ano: $dados";
                echo '<br>';
            }
            else{
                if ($dado == true){
                    echo "Primeiro dono: Sim";
                    echo '<br>';
                }
            }}
        }

            // forma2, array associativo

    function dados_de_um_carro2 (){
        echo '======================================================';
        echo '<br>';
        $carro = ['ano' => 2013, 'cor' => 'branco', 'portas' => 4, 'ar' => 'Sim'];    
        echo "Dados do carro:";
        echo '<br>';
        echo 'Cor: ' . $carro['cor'];
        echo '<br>';
        echo 'Ano: ' . $carro['ano'];
        echo '<br>';
        echo 'Portas: ' . $carro['portas'];
        echo '<br>';
        echo 'Tem ar: ' . $carro['ar'];
    }

    dados_de_um_carro();
    dados_de_um_carro2();


?>