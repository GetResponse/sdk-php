<?php
namespace Getresponse\Sdk\Operation\Autoresponders\Thumbnail\GetAutoresponderThumbnail;

use Getresponse\Sdk\Client\Operation\UrlQuery;

class GetAutoresponderThumbnailUrlQueryParameters extends UrlQuery
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
