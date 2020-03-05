<?php
namespace Getresponse\Sdk\Operation\Shops\Categories\DeleteCategory;

use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;

class DeleteCategory extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops/{shopId}/categories/{categoryId}';

    /** @var string */
    private $shopId;

    /** @var string */
    private $categoryId;


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
     * @return string
     */
    public function getUrl()
    {
        return $this->buildUrlFromTemplate();
    }


    /**
     * @return string
     */
    public function getMethod()
    {
        return Operation::DELETE;
    }


    /**
     * @return string
     */
    public function getBody()
    {
        return '';
    }


    /**
     * @return int
     */
    public function getSuccessCode()
    {
        return 204;
    }
}
