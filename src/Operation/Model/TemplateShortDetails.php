<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TemplateShortDetails extends BaseModel
{
    /** @var string */
    private $templateId = self::FIELD_NOT_SET;

    /** @var string */
    private $href = self::FIELD_NOT_SET;

    /** @var \Getresponse\Sdk\Operation\Model\TemplateCategoryShort[] */
    private $category = self::FIELD_NOT_SET;


    /**
     * @param string $templateId
     * @param string $href
     */
    public function __construct($templateId, $href)
    {
        $this->templateId = $templateId;
        $this->href = $href;
    }


    /**
     * @param \Getresponse\Sdk\Operation\Model\TemplateCategoryShort[] $category
     */
    public function setCategory(array $category)
    {
        $this->category = $category;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'templateId' => $this->templateId,
            'href' => $this->href,
            'category' => $this->category,
        ];

        return $this->filterUnsetFields($data);
    }
}
