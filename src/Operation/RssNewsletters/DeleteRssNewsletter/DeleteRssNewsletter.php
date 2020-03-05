<?php
namespace Getresponse\Sdk\Operation\RssNewsletters\DeleteRssNewsletter;

use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;

class DeleteRssNewsletter extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/rss-newsletters/{rssNewsletterId}';

    /** @var string */
    private $rssNewsletterId;


    /**
     * @param string $rssNewsletterId
     */
    public function __construct($rssNewsletterId)
    {
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
