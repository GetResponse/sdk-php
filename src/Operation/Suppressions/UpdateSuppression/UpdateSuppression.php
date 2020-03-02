<?php
namespace Getresponse\Sdk\Operation\Suppressions\UpdateSuppression;

use Getresponse\Sdk\Client\Exception\InvalidCommandDataException;
use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;
use Getresponse\Sdk\Operation\Model\UpdateSuppression as ModelUpdateSuppression;

class UpdateSuppression extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/suppressions/{suppressionId}';

    /** @var ModelUpdateSuppression */
    protected $data;

    /** @var string */
    private $suppressionId;


    /**
     * @param ModelUpdateSuppression $data
     * @param string $suppressionId
     */
    public function __construct(ModelUpdateSuppression $data, $suppressionId)
    {
        $this->data = $data;
        $this->suppressionId = $suppressionId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{suppressionId}'],
            [$this->suppressionId],
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
