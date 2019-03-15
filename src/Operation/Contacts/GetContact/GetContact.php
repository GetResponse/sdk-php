<?php
namespace Getresponse\Sdk\Operation\Contacts\GetContact;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetContact extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/contacts/{contactId}';

    /** @var string */
    private $contactId;

    /** @var GetContactFields */
    private $fields;


    /**
     * @param string $contactId
     */
    public function __construct($contactId)
    {
        $this->contactId = $contactId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{contactId}'],
            [$this->contactId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetContactFields $fields
     * @return $this
     */
    public function setFields(GetContactFields $fields)
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
