<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class Blacklist extends BaseModel
{
    /** @var array */
    private $masks = self::FIELD_NOT_SET;


    /**
     * @param array $masks
     */
    public function setMasks(array $masks)
    {
        $this->masks = $masks;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'masks' => $this->masks,
        ];

        return $this->filterUnsetFields($data);
    }
}
