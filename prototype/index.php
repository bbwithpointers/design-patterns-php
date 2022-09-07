<?php

/**
 * Livro Design Patterns PHP 7
 *  Pagina 73 
 * O objetivo desse padrão é definir alguns objetos que servem
 *como uma instância de protótipo, clonada para a criação de novos
 *objetos. Diferente dos demais padrões de criação, o Prototype
 *utiliza o próprio objeto para criar as novas instâncias em vez de
 *usar classes auxiliares para fazer isso.
 *Este padrão é indicado principalmente quando se quer criar
 *cópias exatas de um objeto, incluindo seus atributos. Assim, temos
 *um custo muito menor de memória do que instanciar o mesmo
 *objeto muitas vezes e, em cada uma dessas vezes, setar exatamente
 *os mesmos valores em suas propriedades. 
 */

namespace Prototype;

abstract class LivroPrototype
{
    protected string $titulo;
    protected string $nome;
    abstract function __clone(); 

    public function getNome() : string 
    {
        return $this->nome;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
        return $this; 
    }

    public function  getTitulo(): string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo) : LivroPrototype 
    {
        $this->titulo = $titulo;
        return $this;
    }
}

class LivroPhpPrototype extends LivroPrototype
{
    public function __construct()
    {
        $this->setTitulo("Livro PHP");
    }

    public function __clone()
    {
        echo "Livro PHP Clonado\n";
    }
}

// CLIENTES 

$compradores = ['Gabriel', 'Anderson', 'Bruno'];

$livroPhp = new LivroPhpPrototype();
$livroPhp->setTitulo("Padroes de projeto em PHP");
print_r($livroPhp);

// criando vários clones 

$livros = [];
foreach($compradores as $nomeComprador)
{
    $livroComprador = clone $livroPhp;
    $livroComprador->setNome($nomeComprador);
    $livros[] = $livroComprador; 
}
print_r($livros);
