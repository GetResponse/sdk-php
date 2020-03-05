<?php
namespace Getresponse\Sdk\Operation\TemplateCategories\Templates\GetTemplates;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetTemplates extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/template-categories/{templateCategoryId}/templates';

    /** @var string */
    private $templateCategoryId;

    /** @var GetTemplatesFields */
    private $fields;


    /**
     * @param string $templateCategoryId
     */
    public function __construct($templateCategoryId)
    {
        $this->templateCategoryId = $templateCategoryId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{templateCategoryId}'],
            [$this->templateCategoryId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetTemplatesFields $fields
     * @return $this
     */
    public function setFields(GetTemplatesFields $fields)
    {
        $this->fields = $fields;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        $extra = array_merge(
           $this->getFieldsParameterArray($this->fields)
        );

        return $this->buildUrlFromTemplate() . $this->buildQueryString(null, null, $extra);
    }
}
