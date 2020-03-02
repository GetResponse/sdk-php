<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewCategory extends BaseModel
{
    /** @var string */
    private $name;

    /** @var string */
    private $parentId = self::FIELD_NOT_SET;

    /** @var bool */
    private $isDefault = self::FIELD_NOT_SET;

    /** @var string */
    private $url = self::FIELD_NOT_SET;

    /** @var string */
    private $externalId = self::FIELD_NOT_SET;


    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


    /**
     * @param string $parentId
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    }


    /**
     * @param bool $isDefault
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
    }


    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }


    /**
     * @param string $externalId
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'parentId' => $this->parentId,
            'isDefault' => $this->isDefault,
            'url' => $this->url,
            'externalId' => $this->externalId,
        ];

        return $this->filterUnsetFields($data);
    }
}
