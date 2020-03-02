<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpsertSingleProductCategory extends BaseModel
{
    /** @var string */
    private $categoryId;

    /** @var bool */
    private $isDefault = self::FIELD_NOT_SET;


    /**
     * @param string $categoryId
     */
    public function __construct($categoryId)
    {
        $this->categoryId = $categoryId;
    }


    /**
     * @param bool $isDefault
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
            'isDefault' => $this->isDefault,
        ];

        return $this->filterUnsetFields($data);
    }
}
