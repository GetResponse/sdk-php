<?php
namespace Getresponse\Sdk\Operation\Tags\DeleteTag;

use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;

class DeleteTag extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/tags/{tagId}';

    /** @var string */
    private $tagId;


    /**
     * @param string $tagId
     */
    public function __construct($tagId)
    {
        $this->tagId = $tagId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{tagId}'],
            [$this->tagId],
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
