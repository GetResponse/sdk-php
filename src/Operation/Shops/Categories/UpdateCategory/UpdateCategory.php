<?php
namespace Getresponse\Sdk\Operation\Shops\Categories\UpdateCategory;

use Getresponse\Sdk\Client\Exception\InvalidCommandDataException;
use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;
use Getresponse\Sdk\Operation\Model\UpdateCategory as ModelUpdateCategory;

class UpdateCategory extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops/{shopId}/categories/{categoryId}';

    /** @var ModelUpdateCategory */
    protected $data;

    /** @var string */
    private $shopId;

    /** @var string */
    private $categoryId;


    /**
     * @param ModelUpdateCategory $data
     * @param string $shopId
     * @param string $categoryId
     */
    public function __construct(ModelUpdateCategory $data, $shopId, $categoryId)
    {
        $this->data = $data;
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
        return Operation::POST;
    }


    /**
     * @return string
     * @throws InvalidCommandDataException
     */
    public function getBody()
    {
        return $this->encode($this->data->jsonSerialize());
    }


    /**
     * @return int
     */
    public function getSuccessCode()
    {
        return 200;
    }
}
