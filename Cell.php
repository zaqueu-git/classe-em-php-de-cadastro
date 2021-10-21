<?php
/**
 * @package Register
 * @link    ''
 * @author  Zaqueu Alves <zaqueu.alves01@gmail.com>
 * @license http://www.gnu.org/licenses/gpl-3.0.html
 * @version 1.0
 */
namespace application\libraries\Register;

class Cell 
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
     * Método para retornar um objeto com os dados de celular.
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