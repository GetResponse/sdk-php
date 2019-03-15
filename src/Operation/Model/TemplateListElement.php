<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TemplateListElement extends BaseModel
{
    /** @var string */
    private $templateId = self::FIELD_NOT_SET;

    /** @var string */
    private $href = self::FIELD_NOT_SET;

    /** @var string */
    private $isFavourite = self::FIELD_NOT_SET;

    /** @var \Getresponse\Sdk\Operation\Model\TemplateCategoryShort[] */
    private $category = self::FIELD_NOT_SET;

    /** @var \Getresponse\Sdk\Operation\Model\TemplateColorVariantShort[] */
    private $colorVariants = self::FIELD_NOT_SET;


    /**
     * @param string $templateId
     * @param string $href
     * @param string $isFavourite
     * @param \Getresponse\Sdk\Operation\Model\TemplateColorVariantShort[] $colorVariants
     */
    public function __construct($templateId, $href, $isFavourite, array $colorVariants)
    {
        $this->templateId = $templateId;
        $this->href = $href;
        $this->isFavourite = $isFavourite;
        $this->colorVariants = $colorVariants;
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
            'isFavourite' => $this->isFavourite,
            'category' => $this->category,
            'colorVariants' => $this->colorVariants,
        ];

        return $this->filterUnsetFields($data);
    }
}
