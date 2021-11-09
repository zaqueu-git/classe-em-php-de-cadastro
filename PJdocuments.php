<?php
namespace application\libraries\Register;

class PJdocuments 
{
    /**
     * Atributo para referenciar o número do cnpj.
     * @var string
     */
    private $cnpj;
    /**
     * Atributo para referenciar a inscrição estadual.
     * @var string
     */
    private $stateRegistration;
    /**
     * Atributo para referenciar a razão social.
     *
     * @var string
     */
    private $corporateName;
    /**
     * Atributo para referenciar o nome fantasia.
     *
     * @var string
     */
    private $fantasyName;
    
    /**
     * Classe construtora
     *
     * @param  string $cnpj - cnpj.
     * @param  string $corporateName - nome da empresa.
     * @param  string $fantasyName - nome fantasia.
     */
    public function __construct($cnpj = "", $stateRegistration = "", $corporateName = "", $fantasyName = "") 
    {
        $this->cnpj = $cnpj;
        $this->stateRegistration = $stateRegistration;
        $this->corporateName = $corporateName;
        $this->fantasyName = $fantasyName;
    }

    /**
     * Método para retornar um objeto com os dados de pessoa jurídica.
     *
     * @return object $object - objeto.
     */
    public function get() 
    {
        $Object = new \stdClass;
        $Object->cnpj = $this->cnpj;
        $Object->stateRegistration = $this->stateRegistration;
        $Object->corporateName = $this->corporateName;
        $Object->fantasyName = $this->fantasyName;
        return $Object;
    }
}
?>
