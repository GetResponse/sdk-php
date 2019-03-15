<?php
namespace Getresponse\Sdk\Operation\LandingPages\GetLandingPage;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetLandingPage extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/landing-pages/{landingPageId}';

    /** @var string */
    private $landingPageId;

    /** @var GetLandingPageFields */
    private $fields;


    /**
     * @param string $landingPageId
     */
    public function __construct($landingPageId)
    {
        $this->landingPageId = $landingPageId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{landingPageId}'],
            [$this->landingPageId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetLandingPageFields $fields
     * @return $this
     */
    public function setFields(GetLandingPageFields $fields)
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
