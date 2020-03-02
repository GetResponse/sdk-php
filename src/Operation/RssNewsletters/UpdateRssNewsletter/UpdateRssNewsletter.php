<?php
namespace Getresponse\Sdk\Operation\RssNewsletters\UpdateRssNewsletter;

use Getresponse\Sdk\Client\Exception\InvalidCommandDataException;
use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;
use Getresponse\Sdk\Operation\Model\UpdateRssNewsletter as ModelUpdateRssNewsletter;

class UpdateRssNewsletter extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/rss-newsletters/{rssNewsletterId}';

    /** @var ModelUpdateRssNewsletter */
    protected $data;

    /** @var string */
    private $rssNewsletterId;


    /**
     * @param ModelUpdateRssNewsletter $data
     * @param string $rssNewsletterId
     */
    public function __construct(ModelUpdateRssNewsletter $data, $rssNewsletterId)
    {
        $this->data = $data;
        $this->rssNewsletterId = $rssNewsletterId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{rssNewsletterId}'],
            [$this->rssNewsletterId],
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
        return Operation::POST;
    }


    /**
     * @return string
     * @throws InvalidCommandDataException
     */
    public function getBody()
    {
        return $this->encode($this->data->jsonSerialize());
    }


    /**
     * @return int
     */
    public function getSuccessCode()
    {
        return 200;
    }
}
