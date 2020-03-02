<?php
namespace Getresponse\Sdk\Operation\FileLibrary\Files\GetFile;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetFile extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/file-library/files/{fileId}';

    /** @var string */
    private $fileId;

    /** @var GetFileFields */
    private $fields;


    /**
     * @param string $fileId
     */
    public function __construct($fileId)
    {
        $this->fileId = $fileId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{fileId}'],
            [$this->fileId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetFileFields $fields
     * @return $this
     */
    public function setFields(GetFileFields $fields)
    {
        $this->fields = $fields;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        $extra = $this->getFieldsParameterArray($this->fields);
        return $this->buildUrlFromTemplate() . $this->buildQueryString(null, null, $extra);
    }
}
