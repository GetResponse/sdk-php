<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TemplateCategoryListElement extends BaseModel
{
    /** @var string */
    private $categoryId = self::FIELD_NOT_SET;

    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var string */
    private $type = self::FIELD_NOT_SET;

    /** @var string */
    private $templates = self::FIELD_NOT_SET;


    /**
     * @param string $categoryId
     * @param string $name
     * @param string $templates
     */
    public function __construct($categoryId, $name, $templates)
    {
        $this->categoryId = $categoryId;
        $this->name = $name;
        $this->templates = $templates;
    }


    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'categoryId' => $this->categoryId,
            'name' => $this->name,
            'type' => $this->type,
            'templates' => $this->templates,
        ];

        return $this->filterUnsetFields($data);
    }
}
