<?php 

namespace Singleton; 

class LogsSingleton 
{

    /** @var self $singleton instância da classe de logs. */
    protected static LogsSingleton $instancia;

    /** os métodos construtor, clone e wake up precisam ser privados, para que a classe só seja criado via método getInstancia */
    private function __construct()
    {
        
    }
    private function __clone()
    {
        
    }
    private function __wakeup()
    {
        
    }

    public static function getInstancia() : self 
    { 
        // self => se refere a própria classe 
        // Se a instancia estiver vazia, nenhuma classe foi criada ainda 
        if (empty(self::$instancia))
        {
            self::$instancia = new self();
        }
        return self::$instancia;
    }

    /** function para gravar dados em um arquivo de texto, simulando log */
    public function gravarLog(array $dados):void 
    {
        $nomeArquivo = 'logs.txt';

        $logsAnteriores = [];

        if (filesize($nomeArquivo) > 0)
        {
            $conteudoArquivo = file_get_contents($nomeArquivo);
            // com esse array vazio, impedimos erros casos o arquivo inicial esteja vazio
            $logsAnteriores = json_decode($conteudoArquivo, true);
        }
        $logsAnteriores[] = $dados;
        // escreve no arquivo 
        $arquivo = fopen($nomeArquivo, 'w');
        fwrite($arquivo, json_encode($logsAnteriores));
        fclose($arquivo);
    }
}

$instancia = LogsSingleton::getInstancia();
$instanciaNova = LogsSingleton::getInstancia(); 

if ($instancia === $instanciaNova) 
{ 
 echo "são iguais";
}