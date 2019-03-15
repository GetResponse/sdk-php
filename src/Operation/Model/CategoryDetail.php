<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CategoryDetail extends BaseModel
{
    /** @var string */
    private $categoryId = self::FIELD_NOT_SET;

    /** @var string */
    private $parentId = self::FIELD_NOT_SET;

    /** @var string */
    private $href = self::FIELD_NOT_SET;

    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var string */
    private $externalId = self::FIELD_NOT_SET;

    /** @var string */
    private $url = self::FIELD_NOT_SET;

    /** @var string */
    private $createdOn = self::FIELD_NOT_SET;

    /** @var string */
    private $updatedOn = self::FIELD_NOT_SET;


    /**
     * @param string $categoryId
     * @param string $href
     * @param string $name
     * @param string $url
     * @param string $createdOn
     * @param string $updatedOn
     */
    public function __construct($categoryId, $href, $name, $url, $createdOn, $updatedOn)
    {
        $this->categoryId = $categoryId;
        $this->href = $href;
        $this->name = $name;
        $this->url = $url;
        $this->createdOn = $createdOn;
        $this->updatedOn = $updatedOn;
    }


    /**
     * @param string $parentId
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
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
            'categoryId' => $this->categoryId,
            'parentId' => $this->parentId,
            'href' => $this->href,
            'name' => $this->name,
            'externalId' => $this->externalId,
            'url' => $this->url,
            'createdOn' => $this->createdOn,
            'updatedOn' => $this->updatedOn,
        ];

        return $this->filterUnsetFields($data);
    }
}
