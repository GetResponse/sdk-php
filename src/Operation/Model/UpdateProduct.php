<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateProduct extends BaseModel
{
    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var string */
    private $type = self::FIELD_NOT_SET;

    /** @var string */
    private $url = self::FIELD_NOT_SET;

    /** @var string */
    private $vendor = self::FIELD_NOT_SET;

    /** @var string */
    private $externalId = self::FIELD_NOT_SET;

    /** @var NewProductCategory[] */
    private $categories = self::FIELD_NOT_SET;

    /** @var NewProductVariant[] */
    private $variants = self::FIELD_NOT_SET;

    /** @var NewMetaField[] */
    private $metaFields = self::FIELD_NOT_SET;


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }


    /**
     * @param string $vendor
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;
    }


    /**
     * @param string $externalId
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
    }


    /**
     * @param NewProductCategory[] $categories
     */
    public function setCategories(array $categories)
    {
        $this->categories = $categories;
    }


    /**
     * @param NewProductVariant[] $variants
     */
    public function setVariants(array $variants)
    {
        $this->variants = $variants;
    }


    /**
     * @param NewMetaField[] $metaFields
     */
    public function setMetaFields(array $metaFields)
    {
        $this->metaFields = $metaFields;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'type' => $this->type,
            'url' => $this->url,
            'vendor' => $this->vendor,
            'externalId' => $this->externalId,
            'categories' => $this->categories,
            'variants' => $this->variants,
            'metaFields' => $this->metaFields,
        ];

        return $this->filterUnsetFields($data);
    }
}
