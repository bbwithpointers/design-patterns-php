<?php

/**
 * 
 * No padrão Factory Method, temos uma interface que define
 *um contrato para os objetos a serem criados pelas fábricas, que
 *seriam nossos produtos finais. Também temos uma interface que
 *define como nossas classes-fábrica deverão ser construídas.
 * 
 * 
 */

 $teslaFactory = new TeslaFactory();
 $fuscaFactory = new FuscaFactory();

 try 
 {
    $teslas = $teslaFactory->criarCarro('modeloX');
 } 
 catch(Exception $e)
 { 
    echo $e->getMessage();
 }
 
 $teslas->acelerar();
 $teslas->trocarMarcha();
 $teslas->frear();
