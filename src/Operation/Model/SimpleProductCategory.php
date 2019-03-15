<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class SimpleProductCategory extends BaseModel
{
    /** @var string */
    private $categoryId = self::FIELD_NOT_SET;

    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var string */
    private $url = self::FIELD_NOT_SET;

    /** @var string */
    private $externalId = self::FIELD_NOT_SET;

    /** @var string */
    private $href = self::FIELD_NOT_SET;

    /** @var string */
    private $parentId = self::FIELD_NOT_SET;

    /** @var string */
    private $isDefault = self::FIELD_NOT_SET;


    /**
     * @param string $categoryId
     * @param string $name
     * @param string $href
     */
    public function __construct($categoryId, $name, $href)
    {
        $this->categoryId = $categoryId;
        $this->name = $name;
        $this->href = $href;
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
     * @param string $parentId
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    }


    /**
     * @param string $isDefault
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'categoryId' => $this->categoryId,
            'name' => $this->name,
            'url' => $this->url,
            'externalId' => $this->externalId,
            'href' => $this->href,
            'parentId' => $this->parentId,
            'isDefault' => $this->isDefault,
        ];

        return $this->filterUnsetFields($data);
    }
}
