<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateSuppression extends BaseModel
{
    /** @var string */
    private $name;

    /** @var array */
    private $masks;


    /**
     * @param string $name
     * @param array $masks
     */
    public function __construct($name, array $masks)
    {
        $this->name = $name;
        $this->masks = $masks;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'masks' => $this->masks,
        ];

        return $this->filterUnsetFields($data);
    }
}
