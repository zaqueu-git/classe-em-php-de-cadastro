<?php
namespace application\libraries\Register;

class PFdocuments 
{
    /**
     * Atributo para referenciar o número do cpf.
     *
     * @var string
     */
    private $cpf;
    /**
     * Atributo para referenciar o rg.
     *
     * @var string
     */
    private $rg;
    /**
     * Atributo para referenciar o sexo.
     *
     * @var string
     */
    private $sex;    
    /**
     * Atributo para referenciar a data de nascimento.
     *
     * @var string
     */
    private $birthDate;

    /**
     * Classe construtora
     *
     * @param  string $cpf - cpf.
     * @param  string $rg - rg.
     * @param  string $sex - sexo.
     * @param  string $birthDate - data de nascimento.
     */
    public function __construct($cpf = "", $rg = "", $sex = "", $birthDate = "") 
    {
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->sex = $sex;
        $this->birthDate = $birthDate;
    }

    /**
     * Método para retornar um objeto com os dados de pessoa física.
     *
     * @return object $object - objeto.
     */
    public function get() 
    {
        $Object = new \stdClass;
        $Object->cpf = $this->cpf;
        $Object->rg = $this->rg;
        $Object->sex = $this->sex;
        $Object->birthDate = $this->birthDate;
        return $Object;
    }    
}
?>
