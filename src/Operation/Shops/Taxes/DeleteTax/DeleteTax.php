<?php
namespace Getresponse\Sdk\Operation\Shops\Taxes\DeleteTax;

use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;

class DeleteTax extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops/{shopId}/taxes/{taxId}';

    /** @var string */
    private $shopId;

    /** @var string */
    private $taxId;


    /**
     * @param string $shopId
     * @param string $taxId
     */
    public function __construct($shopId, $taxId)
    {
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
