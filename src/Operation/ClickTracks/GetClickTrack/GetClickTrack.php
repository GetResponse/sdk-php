<?php
namespace Getresponse\Sdk\Operation\ClickTracks\GetClickTrack;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetClickTrack extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/click-tracks/{clickTrackId}';

    /** @var string */
    private $clickTrackId;

    /** @var GetClickTrackFields */
    private $fields;


    /**
     * @param string $clickTrackId
     */
    public function __construct($clickTrackId)
    {
        $this->clickTrackId = $clickTrackId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{clickTrackId}'],
            [$this->clickTrackId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetClickTrackFields $fields
     * @return $this
     */
    public function setFields(GetClickTrackFields $fields)
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
