<?php
namespace Getresponse\Sdk\Operation\Newsletters\Thumbnail\GetNewsletterThumbnail;

use Getresponse\Sdk\Client\Operation\UrlQuery;

class GetNewsletterThumbnailUrlQueryParameters extends UrlQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'size',
        ];
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereSizeIsDefault()
    {
        return $this->set('size', 'default');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereSizeIsSmall()
    {
        return $this->set('size', 'small');
    }
}
