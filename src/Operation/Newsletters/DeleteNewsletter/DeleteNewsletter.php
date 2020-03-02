<?php
namespace Getresponse\Sdk\Operation\Newsletters\DeleteNewsletter;

use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;

class DeleteNewsletter extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/newsletters/{newsletterId}';

    /** @var string */
    private $newsletterId;


    /**
     * @param string $newsletterId
     */
    public function __construct($newsletterId)
    {
        $this->newsletterId = $newsletterId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{newsletterId}'],
            [$this->newsletterId],
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
