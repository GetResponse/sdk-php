<?php
namespace Getresponse\Sdk\Operation\Shops\MetaFields\DeleteMetaField;

use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;

class DeleteMetaField extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops/{shopId}/meta-fields/{metaFieldId}';

    /** @var string */
    private $shopId;

    /** @var string */
    private $metaFieldId;


    /**
     * @param string $shopId
     * @param string $metaFieldId
     */
    public function __construct($shopId, $metaFieldId)
    {
        $this->shopId = $shopId;
        $this->metaFieldId = $metaFieldId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{shopId}', '{metaFieldId}'],
            [$this->shopId, $this->metaFieldId],
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
