<?php
namespace Getresponse\Sdk\Operation\Shops\Taxes\UpdateTax;

use Getresponse\Sdk\Client\Exception\InvalidCommandDataException;
use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;
use Getresponse\Sdk\Operation\Model\UpdateTax as ModelUpdateTax;

class UpdateTax extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops/{shopId}/taxes/{taxId}';

    /** @var ModelUpdateTax */
    protected $data;

    /** @var string */
    private $shopId;

    /** @var string */
    private $taxId;


    /**
     * @param ModelUpdateTax $data
     * @param string $shopId
     * @param string $taxId
     */
    public function __construct(ModelUpdateTax $data, $shopId, $taxId)
    {
        $this->data = $data;
        $this->shopId = $shopId;
        $this->taxId = $taxId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{shopId}', '{taxId}'],
            [$this->shopId, $this->taxId],
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
