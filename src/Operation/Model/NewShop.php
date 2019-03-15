<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewShop extends BaseModel
{
    /** @var string */
    private $name;

    /** @var string */
    private $locale;

    /** @var string */
    private $currency;


    /**
     * @param string $name
     * @param string $locale
     * @param string $currency
     */
    public function __construct($name, $locale, $currency)
    {
        $this->name = $name;
        $this->locale = $locale;
        $this->currency = $currency;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'locale' => $this->locale,
            'currency' => $this->currency,
        ];

        return $this->filterUnsetFields($data);
    }
}
