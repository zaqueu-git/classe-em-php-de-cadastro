<?php
namespace application\libraries\Register;

class Client 
{
    /**
     * Atributo para referenciar o tipo.
     *
     * @var string
     */
    private $type;
    /**
     * Atributo para referenciar o nome.
     *
     * @var string
     */
    private $name;
    /**
     * Atributo para referenciar o e-mail.
     *
     * @var object
     */
    private $email;
    /**
     * Atributo para referenciar o endereço.
     *
     * @var object
     */
    private $address;    
    /**
     * Atributo para referenciar o telefone.
     *
     * @var object
     */
    private $phone;
    /**
     * Atributo para referenciar o celular.
     *
     * @var object
     */
    private $cell;
    /**
     * Atributo para referenciar a pessoa física.
     *
     * @var object
     */
    private $PFdocuments;
    /**
     * Atributo para referenciar a pessoa jurídica.
     *
     * @var object
     */
    private $PJdocuments;        
    
    /**
     * Classe construtora
     *
     * @param  string $type - tipo.
     * @param  string $name - nome.
     * @param  object $email - email.
     * @param  object $address - endereço.
     * @param  object $phone - telefone.
     * @param  object $cell - celular.
     */
    public function __construct($type = "", $name = "", $email = "", $address = "", $phone = "", $cell = "", $PFdocuments = "", $PJdocuments = "") 
    {
        $this->type = $type;
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->phone = $phone;
        $this->cell = $cell;
        $this->PFdocuments = $PFdocuments;
        $this->PJdocuments = $PJdocuments;
    }

    /**
     * Método para retornar um objeto com os dados do cliente.
     *
     * @return object $object - objeto.
     */
    public function get() 
    {
        $Object = new \stdClass;
        $Object->type = $this->type;
        $Object->name = $this->name;
        $Object->email = $this->email;
        $Object->address = $this->address;
        $Object->phone = $this->phone;
        $Object->cell = $this->cell;
        $Object->PFdocuments = $this->PFdocuments;
        $Object->PJdocuments = $this->PJdocuments;
        return $Object;
    }
}
?>
