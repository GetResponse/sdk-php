<?php
namespace Getresponse\Sdk\Operation\Shops\Categories\CreateCategory;

use Getresponse\Sdk\Client\Exception\InvalidCommandDataException;
use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;
use Getresponse\Sdk\Operation\Model\NewCategory;

class CreateCategory extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops/{shopId}/categories';

    /** @var NewCategory */
    protected $data;

    /** @var string */
    private $shopId;


    /**
     * @param NewCategory $data
     * @param string $shopId
     */
    public function __construct(NewCategory $data, $shopId)
    {
        $this->data = $data;
        $this->shopId = $shopId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{shopId}'],
            [$this->shopId],
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
        return 201;
    }
}
