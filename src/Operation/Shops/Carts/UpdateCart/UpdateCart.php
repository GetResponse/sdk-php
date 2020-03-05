<?php
namespace Getresponse\Sdk\Operation\Shops\Carts\UpdateCart;

use Getresponse\Sdk\Client\Exception\InvalidCommandDataException;
use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;
use Getresponse\Sdk\Operation\Model\UpdateCart as ModelUpdateCart;

class UpdateCart extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops/{shopId}/carts/{cartId}';

    /** @var ModelUpdateCart */
    protected $data;

    /** @var string */
    private $shopId;

    /** @var string */
    private $cartId;


    /**
     * @param ModelUpdateCart $data
     * @param string $shopId
     * @param string $cartId
     */
    public function __construct(ModelUpdateCart $data, $shopId, $cartId)
    {
        $this->data = $data;
        $this->shopId = $shopId;
        $this->cartId = $cartId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{shopId}', '{cartId}'],
            [$this->shopId, $this->cartId],
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
