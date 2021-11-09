<?php
namespace application\libraries\Register;

class Address 
{
    /**
     * Atributo para referenciar o cep.
     *
     * @var string
     */
    private $zipCode;
    /**
     * Atributo para referenciar a rua.
     *
     * @var string
     */
    private $road;    
    /**
     * Atributo para referenciar o número.
     *
     * @var string
     */
    private $number;    
    /**
     * Atributo para referenciar o complemento.
     *
     * @var string
     */
    private $complement;    
    /**
     * Atributo para referenciar o bairro.
     *
     * @var string
     */
    private $district;    
    /**
     * Atributo para referenciar a cidade.
     *
     * @var string
     */
    private $city;    
    /**
     * Atributo para referenciar o estado.
     *
     * @var string
     */
    private $state;
    /**
     * Atributo para referenciar a latitude.
     *
     * @var string
     */
    private $latitude;
    /**
     * Atributo para referenciar a longitude.
     *
     * @var string
     */
    private $longitude;
    
    /**
     * Classe construtora
     *
     * @param  string $zipCode - cep.
     * @param  string $road - rua.
     * @param  string $number - número.
     * @param  string $complement - complemento.
     * @param  string $district - bairro.
     * @param  string $city - cidade.
     * @param  string $state - estado.
     * @param  string $latitude - latitude.
     * @param  string $longitude - longitude.
     */
    public function __construct($zipCode = "", $road = "", $number = "", $complement = "", $district = "", $city = "", $state = "", $latitude = "", $longitude = "") 
    {
        $this->zipCode = $zipCode;
        $this->road = $road;
        $this->number = $number;
        $this->complement = $complement;
        $this->district = $district;
        $this->city = $city;
        $this->state = $state;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }
    
    /**
     * Método para retornar um objeto com os dados de endereço.
     *
     * @return object $object - objeto.
     */
    public function get() 
    {
        $Object = new \stdClass;
        $Object->zipCode = $this->zipCode;
        $Object->road = $this->road;
        $Object->number = $this->number;
        $Object->complement = $this->complement;
        $Object->district = $this->district;
        $Object->city = $this->city;
        $Object->state = $this->state;
        $Object->latitude = $this->latitude;
        $Object->longitude = $this->longitude;
        return $Object;
    }
}
?>
