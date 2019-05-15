<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Blank Page</h1>

<pre>
    <code class="php">
&#x3C;?php

require_once CAMINHO_FISICO . &#x27;/NeoRB/Includes/IncludesDAO.php&#x27;;

class RelatorioClientePermissaoDAO extends DAO
{

    private $table = &#x27;relatorios_cliente_permissao&#x27;;
    private $destruirDB = 0;
    public $dataBase = null;

    public function __construct($dataBase = null)
    {
        if (Validacoes::isNullOrEmpty($dataBase))
        {
            $this-&#x3E;dataBase = new AcessarDB();
            $this-&#x3E;dataBase = $this-&#x3E;dataBase-&#x3E;acessarDB();
            $this-&#x3E;destruirDB = 1;
        }
        else
        {
            $this-&#x3E;dataBase = $dataBase;
        }

        parent::__construct($this-&#x3E;table, $this-&#x3E;dataBase);
    }

    function __destruct()
    {
        if ($this-&#x3E;destruirDB == 1)
            Utilidade::encerrarConexaoBD($this-&#x3E;dataBase);
    }

}

?&#x3E;
    </code>
</pre>