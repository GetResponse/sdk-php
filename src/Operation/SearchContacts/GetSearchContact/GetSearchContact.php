<?php
namespace Getresponse\Sdk\Operation\SearchContacts\GetSearchContact;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetSearchContact extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/search-contacts/{searchContactId}';

    /** @var string */
    private $searchContactId;

    /** @var GetSearchContactFields */
    private $fields;


    /**
     * @param string $searchContactId
     */
    public function __construct($searchContactId)
    {
        $this->searchContactId = $searchContactId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{searchContactId}'],
            [$this->searchContactId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetSearchContactFields $fields
     * @return $this
     */
    public function setFields(GetSearchContactFields $fields)
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
