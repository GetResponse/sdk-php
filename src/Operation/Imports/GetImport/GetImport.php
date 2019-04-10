<?php
namespace Getresponse\Sdk\Operation\Imports\GetImport;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetImport extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/imports/{importId}';

    /** @var string */
    private $importId;

    /** @var GetImportFields */
    private $fields;


    /**
     * @param string $importId
     */
    public function __construct($importId)
    {
        $this->importId = $importId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{importId}'],
            [$this->importId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetImportFields $fields
     * @return $this
     */
    public function setFields(GetImportFields $fields)
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
