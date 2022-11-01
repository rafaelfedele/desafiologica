<?php
echo "====================================================================================================================================<br>";
echo "==================================== DEV PLAY | DESAFIO DE LÓGICA | DESENVOLVIDO POR RAFAEL FEDELE ===================================<br>";
echo "====================================================================================================================================<br><br>";

echo "====================================================================================================================================<br>";
echo "ROTINAS DO TRABALHOS | RELÁTORIOS MATINAL<br>";
echo "====================================================================================================================================<br><br>";

// MODELO DE VARIAVEIS USADAS NO DECORRER DO DESAFIO;
$numeroSuporte    = 20;  
$numeroRetirada   = 14;
$numeroInstalacao = 4;
$data             = date('d/m/Y');

//MODELO DE VARIAVEL DE ARRAY ALGUMAS SENDO ALIMENTADAS POR OUTRAS VARIAVEIS
$tecnicos                 = array();
$tecnicos[0]["Nome"]      = "Ygor";
$tecnicos[0]["Atividade"] = "Suporte Técnico";
$tecnicos[0]["Quant_OS"]  = $numeroSuporte / 2;
$tecnicos[1]["Nome"]      = "Gabriel";
$tecnicos[1]["Atividade"] = "Suporte Técnico";
$tecnicos[1]["Quant_OS"]  = $numeroSuporte / 2;
$tecnicos[2]["Nome"]      = "Diego";
$tecnicos[2]["Atividade"] = "Retirada";
$tecnicos[2]["Quant_OS"]  = $numeroRetirada;
$tecnicos[3]["Nome"]      = "Tiago";
$tecnicos[3]["Atividade"] = "Instalação";
$tecnicos[3]["Quant_OS"]  = $numeroInstalacao;
$tecnicos[4]["Nome"]      = "Rafael";
$tecnicos[4]["Atividade"] = "Delegar Serviços";
$tecnicos[4]["Quant_OS"]  = $numeroInstalacao + $numeroRetirada + $numeroSuporte;

//EXEMPLO DE CONCATENAÇÃO ENTRE TEXTO PURO E VARIAVEIS DE STRINGS E OUTRAS
echo "||||| ".$data." 08h:00min | Bom dia ".$tecnicos[4]["Nome"].", segue o relátorio do dia;  <br><br>";
echo "===>> Ordens de Serviço: ".$numeroSuporte." | Suporte(s) Técnico(s)<br>";
echo "===>> Ordens de Serviço: ".$numeroRetirada." | Retirada(s)<br>";
echo "===>> Ordens de Serviço: ".$numeroInstalacao." | Instalação(ões)<br><br>";

//EXEMPLO DE LOOP USANDO O MODELO FOR
for($Cont = 0; $Cont <=4; $Cont++){
    echo "===>> Técnico em Serviço: ".$tecnicos[$Cont]["Nome"]." | Atividade: ".$tecnicos[$Cont]["Atividade"]."<br>";
}

// PROXIMA ETAPA MOSTRAR COMO FOI DELEGADA OS VALORES
echo "<br><br>====================================================================================================================================<br>";
echo "DELEGAÇÃO DE ORDENS DE SERVIÇOS<br>";
echo "====================================================================================================================================<br><br>";

echo "||||| ".$data." 08h:30min | Segue abaixo a Delegação das Atividades;  <br><br>";

$Cont = 0; // MODIFICANDO A VARIAVEL CONT QUE ESTAVA SENDO USADA NOS EXEMPLO DE LOOP ACIMA

// MODELO DE LOOP E COM WHILE E JUNTANDO O SWITH CASE
while($Cont <= 3){
    switch($tecnicos[$Cont]["Nome"]){
        case "Ygor":
            echo "===>> $data 08h:31min - Técnico ".$tecnicos[$Cont]["Nome"]." (".$tecnicos[$Cont]["Atividade"].") está com ".$tecnicos[$Cont]["Quant_OS"]." Ordens de Serviço;<br>";
            break;
        case "Gabriel":
            echo "===>> $data 08h:32min - Técnico ".$tecnicos[$Cont]["Nome"]." (".$tecnicos[$Cont]["Atividade"].") está com ".$tecnicos[$Cont]["Quant_OS"]." Ordens de Serviço;<br>";
            break;
        case "Diego":
            echo "===>> $data 08h:33min - Técnico ".$tecnicos[$Cont]["Nome"]." (".$tecnicos[$Cont]["Atividade"].") está com ".$tecnicos[$Cont]["Quant_OS"]." Ordens de Serviço;<br>";
            break;
        default:
            echo "===>> $data 08h:34min - Técnico ".$tecnicos[$Cont]["Nome"]." (".$tecnicos[$Cont]["Atividade"].") está com ".$tecnicos[$Cont]["Quant_OS"]." Ordens de Serviço.<br><br>";
            break;
    }
    $Cont ++;
}
echo "||||| ".$data." 08h:35min | Total de serviços a serem realizados hoje: ".$tecnicos[4]["Quant_OS"]."<br><br>";

echo "<br><br>====================================================================================================================================<br>";
echo "ACOMPANHAMENTO DE REALIZAÇÃO DAS ORDENS DE SERVIÇO<br>";
echo "====================================================================================================================================<br><br>";

$Cont = 1; // MODIFICANDO A VARIAVEL CONT QUE ESTAVA SENDO USADA NOS EXEMPLO DE LOOP ACIMA

// AQUI NESSE LOOP UTILIZEI O IF, IFELSE E ELSE COM EXEMPLO, SALIENTANDO QUE TERIA DIVERSAS MANEIRAS DE REPLICAR ESSE LOOP
while($Cont <= $numeroSuporte){
    if($Cont == 5){
        echo "===>> Técnico ".$tecnicos[0]["Nome"]." Finalizou 02 Ordens de Serviço;<br>";
        $suporteOkay = 2;
        echo "===>> Técnico ".$tecnicos[2]["Nome"]." Finalizou 02 Ordens de Serviço;<br>";
        $retiradaOkay = 2;
        echo "===>> Técnico ".$tecnicos[1]["Nome"]." Finalizou 01 Ordens de Serviço;<br>";
        $suporteOkay ++;
        echo "===>> Técnico ".$tecnicos[3]["Nome"]." Finalizou 01 Ordens de Serviço;<br>";
        $instalacaoOkay = 1;
        echo "===>> Técnico ".$tecnicos[2]["Nome"]." Finalizou 01 Ordens de Serviço;<br>";
        $retiradaOkay ++;
    }elseif($Cont == 10){
        echo "===>> Técnico ".$tecnicos[0]["Nome"]." Finalizou 02 Ordens de Serviço;<br>";
        $suporteOkay = $suporteOkay + 2;
        echo "===>> Técnico ".$tecnicos[2]["Nome"]." Finalizou 03 Ordens de Serviço;<br>";
        $retiradaOkay = $retiradaOkay +3;
        echo "===>> Técnico ".$tecnicos[1]["Nome"]." Finalizou 02 Ordens de Serviço;<br>";
        $suporteOkay = $suporteOkay +2;
        echo "===>> Técnico ".$tecnicos[2]["Nome"]." Finalizou 01 Ordens de Serviço;<br>";
        $retiradaOkay ++;
        echo "===>> Técnico ".$tecnicos[1]["Nome"]." Finalizou 02 Ordens de Serviço;<br>";
        $suporteOkay = $suporteOkay +2;
        echo "===>> Técnico ".$tecnicos[3]["Nome"]." Finalizou 01 Ordens de Serviço;<br>";
        $instalacaoOkay ++;
        echo "===>> Técnico ".$tecnicos[1]["Nome"]." Finalizou 01 Ordens de Serviço;<br><br>";
        $suporteOkay ++;
        echo "===>> TÉCNICOS EM HORARIO DE ALMOÇO DAS 12h:00min AS 13h:00min;<br><br>";
    }elseif($Cont == 15){
        echo "===>> Técnico ".$tecnicos[0]["Nome"]." Finalizou 02 Ordens de Serviço;<br>";
        $suporteOkay = $suporteOkay + 2;
        echo "===>> Técnico ".$tecnicos[2]["Nome"]." Finalizou 03 Ordens de Serviço;<br>";
        $retiradaOkay = $retiradaOkay +3;
        echo "===>> Técnico ".$tecnicos[1]["Nome"]." Finalizou 02 Ordens de Serviço;<br>";
        $suporteOkay = $suporteOkay +2;
        echo "===>> Técnico ".$tecnicos[2]["Nome"]." Finalizou 01 Ordens de Serviço;<br>";
        $retiradaOkay ++;
        echo "===>> Técnico ".$tecnicos[1]["Nome"]." Finalizou 02 Ordens de Serviço;<br>";
        $suporteOkay = $suporteOkay +2;
        echo "===>> Técnico ".$tecnicos[3]["Nome"]." Finalizou 01 Ordens de Serviço;<br>";
        $instalacaoOkay ++;
        echo "===>> Técnico ".$tecnicos[1]["Nome"]." Finalizou 01 Ordens de Serviço;<br>";
        $suporteOkay ++;
    }elseif($Cont == 20){
        echo "===>> Técnico ".$tecnicos[0]["Nome"]." Finalizou 02 Ordens de Serviço;<br>";
        $suporteOkay = $suporteOkay +2;
        echo "===>> Técnico ".$tecnicos[2]["Nome"]." Finalizou 02 Ordens de Serviço;<br>";
        $retiradaOkay = $retiradaOkay +2;
        echo "===>> Técnico ".$tecnicos[1]["Nome"]." Finalizou 01 Ordens de Serviço;<br>";
        $suporteOkay ++;
        echo "===>> Técnico ".$tecnicos[2]["Nome"]." Finalizou 01 Ordens de Serviço;<br>";
        $retiradaOkay ++;
        echo "===>> Técnico ".$tecnicos[3]["Nome"]." Finalizou 01 Ordens de Serviço;<br><br>";
        $instalacaoOkay ++;
    }

    $Cont ++;
}

// ULTIMO EXEMPLO DE CONDIÇÃO USANDO SOMENTE IF E ELSE JUNTO COM UMA VARIAVEL BOOLEAN
if($instalacaoOkay == $numeroInstalacao and $suporteOkay == $numeroSuporte and $retiradaOkay == $numeroRetirada){
    $suporteZero = true;
}else{
    $suporteZero = false;
}

//USANDO EXEMPLO DE CONDICIONAMENTO DENTRO DE UM ECHO COM A VARIAVEL BOOLEAN QUE FOI ATIVADA ACIMA
echo $suporteZero ? "||||| ".$data." 17h:00min | Olá ".$tecnicos[4]["Nome"].", todos os Suportes Foram Realizados; <br>" : "||||| ".$data." 17h:00min | Olá ".$tecnicos[4]["Nome"].", Alguns Suportes Não Foram Realizados e Serão Agendados Para Amanhã.<br>";

echo "<br><br>====================================================================================================================================<br>";
echo "EXPEDIENTE ENCERRADO<br>";
echo "====================================================================================================================================<br><br>";

?>