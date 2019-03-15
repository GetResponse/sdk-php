<?php
namespace Getresponse\Sdk\Operation\Newsletters\GetNewsletter;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetNewsletter extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/newsletters/{newsletterId}';

    /** @var string */
    private $newsletterId;

    /** @var GetNewsletterFields */
    private $fields;


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
     * @param GetNewsletterFields $fields
     * @return $this
     */
    public function setFields(GetNewsletterFields $fields)
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
