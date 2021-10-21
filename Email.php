<?php
/**
 * @package Register
 * @link    ''
 * @author  Zaqueu Alves <zaqueu.alves01@gmail.com>
 * @license http://www.gnu.org/licenses/gpl-3.0.html
 * @version 1.0
 */
namespace application\libraries\Register;

class Email 
{
    /**
     * Atributo para referenciar o e-mail.
     *
     * @var string
     */
    private $email;
    
    /**
     * Classe construtora
     *
     * @param  string $email - email.
     */
    public function __construct($email = "") 
    {
        $this->email = $email;
    }

    /**
     * Método para retornar um objeto com os dados de e-mail.
     *
     * @return object $object - objeto.
     */
    public function get() 
    {
        $Object = new \stdClass;
        $Object->email = $this->email;
        return $Object;
    }
}
?>