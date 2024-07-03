<?php
echo" Data atual: ".date("d-m-Y")."<br>";
echo" Hora atual: ".date("H:i:s")."<br>";
echo" Hora e Data atual: ".date("d-m-Y H:i:s")."<br>";
$data = "2024-07-02";
$data_formatada = date("d/m/Y", strtotime($data."+1 day"));
echo " Data formatada: ".$data_formatada."<br>";

$date=new Datetime("now", new DatetimeZone("America/Sao_Paulo"));
echo" hora atual: ".$date->format("d-m-Y H:i:s");
//subtrair duas datas e retornar em dias
$data1="2023-07-03";
$data2="2024-07-03";
$diferenca=strtotime($data2)- strtotime($data1);
$dias = floor($diferenca/(60*60*24));
echo " A diferença entre as datas: ".$dias."<br>";

//retorna a data atual em segundos

echo time(). "<br>";
$date =getdate();
print_r($date);

$date=new Datetime("now", new DatetimeZone("America/Sao_Paulo"));
echo"Data e hora de São Paulo: ".$date->format("Y-m-d H:i:s")."<br>";

$date->setTimezone(new DatetimeZone("Europe/london"));
echo"data e hora de Londres: ".$date->format("Y-m-d H:i:s")."<br>";

?>