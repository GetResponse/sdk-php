<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TemplateColorVariant extends BaseModel
{
    /** @var string */
    private $templateColorId = self::FIELD_NOT_SET;

    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var string */
    private $colorHex = self::FIELD_NOT_SET;

    /** @var string */
    private $thumbnail = self::FIELD_NOT_SET;

    /** @var string */
    private $preview = self::FIELD_NOT_SET;

    /** @var string */
    private $href = self::FIELD_NOT_SET;

    /** @var \Getresponse\Sdk\Operation\Model\TemplateShortDetails[] */
    private $template = self::FIELD_NOT_SET;

    /** @var string */
    private $htmlContent = self::FIELD_NOT_SET;


    /**
     * @param string $templateColorId
     * @param string $name
     * @param string $colorHex
     * @param string $preview
     * @param string $href
     * @param \Getresponse\Sdk\Operation\Model\TemplateShortDetails[] $template
     * @param string $htmlContent
     */
    public function __construct($templateColorId, $name, $colorHex, $preview, $href, array $template, $htmlContent)
    {
        $this->templateColorId = $templateColorId;
        $this->name = $name;
        $this->colorHex = $colorHex;
        $this->preview = $preview;
        $this->href = $href;
        $this->template = $template;
        $this->htmlContent = $htmlContent;
    }


    /**
     * @param string $thumbnail
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'templateColorId' => $this->templateColorId,
            'name' => $this->name,
            'colorHex' => $this->colorHex,
            'thumbnail' => $this->thumbnail,
            'preview' => $this->preview,
            'href' => $this->href,
            'template' => $this->template,
            'htmlContent' => $this->htmlContent,
        ];

        return $this->filterUnsetFields($data);
    }
}
