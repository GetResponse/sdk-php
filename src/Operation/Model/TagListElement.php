<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TagListElement extends BaseModel
{
    /** @var string */
    private $tagId = self::FIELD_NOT_SET;

    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var string */
    private $href = self::FIELD_NOT_SET;

    /** @var string */
    private $color = self::FIELD_NOT_SET;


    /**
     * @param string $tagId
     * @param string $name
     * @param string $href
     */
    public function __construct($tagId, $name, $href)
    {
        $this->tagId = $tagId;
        $this->name = $name;
        $this->href = $href;
    }


    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'tagId' => $this->tagId,
            'name' => $this->name,
            'href' => $this->href,
            'color' => $this->color,
        ];

        return $this->filterUnsetFields($data);
    }
}
