<?php
namespace Getresponse\Sdk\Operation\Shops\Categories\GetCategory;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetCategory extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops/{shopId}/categories/{categoryId}';

    /** @var string */
    private $shopId;

    /** @var string */
    private $categoryId;

    /** @var GetCategoryFields */
    private $fields;


    /**
     * @param string $shopId
     * @param string $categoryId
     */
    public function __construct($shopId, $categoryId)
    {
        $this->shopId = $shopId;
        $this->categoryId = $categoryId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{shopId}', '{categoryId}'],
            [$this->shopId, $this->categoryId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetCategoryFields $fields
     * @return $this
     */
    public function setFields(GetCategoryFields $fields)
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
