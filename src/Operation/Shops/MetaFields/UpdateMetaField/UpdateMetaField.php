<?php
namespace Getresponse\Sdk\Operation\Shops\MetaFields\UpdateMetaField;

use Getresponse\Sdk\Client\Exception\InvalidCommandDataException;
use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;
use Getresponse\Sdk\Operation\Model\UpdateMetaField as ModelUpdateMetaField;

class UpdateMetaField extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops/{shopId}/meta-fields/{metaFieldId}';

    /** @var ModelUpdateMetaField */
    protected $data;

    /** @var string */
    private $shopId;

    /** @var string */
    private $metaFieldId;


    /**
     * @param ModelUpdateMetaField $data
     * @param string $shopId
     * @param string $metaFieldId
     */
    public function __construct(ModelUpdateMetaField $data, $shopId, $metaFieldId)
    {
        $this->data = $data;
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
