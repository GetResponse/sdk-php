<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewProductImage extends BaseModel
{
    /** @var string */
    private $src = self::FIELD_NOT_SET;

    /** @var string */
    private $position = self::FIELD_NOT_SET;


    /**
     * @param string $src
     * @param string $position
     */
    public function __construct($src, $position)
    {
        $this->src = $src;
        $this->position = $position;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'src' => $this->src,
            'position' => $this->position,
        ];

        return $this->filterUnsetFields($data);
    }
}
