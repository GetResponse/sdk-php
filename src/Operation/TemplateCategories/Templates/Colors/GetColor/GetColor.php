<?php
namespace Getresponse\Sdk\Operation\TemplateCategories\Templates\Colors\GetColor;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetColor extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/template-categories/{templateCategoryId}/templates/{templateId}/colors/{colorId}';

    /** @var string */
    private $templateCategoryId;

    /** @var string */
    private $templateId;

    /** @var string */
    private $colorId;

    /** @var GetColorFields */
    private $fields;


    /**
     * @param string $templateCategoryId
     * @param string $templateId
     * @param string $colorId
     */
    public function __construct($templateCategoryId, $templateId, $colorId)
    {
        $this->templateCategoryId = $templateCategoryId;
        $this->templateId = $templateId;
        $this->colorId = $colorId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{templateCategoryId}', '{templateId}', '{colorId}'],
            [$this->templateCategoryId, $this->templateId, $this->colorId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetColorFields $fields
     * @return $this
     */
    public function setFields(GetColorFields $fields)
    {
        $this->fields = $fields;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        $extra = $this->getFieldsParameterArray($this->fields);
        return $this->buildUrlFromTemplate() . $this->buildQueryString(null, null, $extra);
    }
}
