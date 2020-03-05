<?php
namespace Getresponse\Sdk\Operation\SubscriptionConfirmations\Subject\GetSubject;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetSubject extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/subscription-confirmations/subject/{languageCode}';

    /** @var string */
    private $languageCode;

    /** @var GetSubjectFields */
    private $fields;


    /**
     * @param string $languageCode
     */
    public function __construct($languageCode)
    {
        $this->languageCode = $languageCode;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{languageCode}'],
            [$this->languageCode],
            self::METHOD_URL
        );
    }


    /**
     * @param GetSubjectFields $fields
     * @return $this
     */
    public function setFields(GetSubjectFields $fields)
    {
        $this->fields = $fields;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        $extra = array_merge(
           $this->getFieldsParameterArray($this->fields)
        );

        return $this->buildUrlFromTemplate() . $this->buildQueryString(null, null, $extra);
    }
}
