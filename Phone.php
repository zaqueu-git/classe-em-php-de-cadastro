<?php
namespace application\libraries\Register;

class Phone 
{
    /**
     * Atributo para referenciar a discagem direta distância.
     *
     * @var string
     */
    private $ddd;
    
    /**
     * Atributo para referenciar o número.
     *
     * @var string
     */
    private $number;
    
    /**
     * Classe construtora
     *
     * @param  string $number - número.
     */
    public function __construct($number = "") 
    {
        $this->number = $number;
    }
    
    /**
     * Método para retornar um objeto com os dados de telefone.
     *
     * @return object $object - objeto.
     */
    public function get() 
    {
        $Object = new \stdClass;
        $Object->ddd = $this->ddd;
        $Object->number = $this->number;
        return $Object;
    }
}
?>
