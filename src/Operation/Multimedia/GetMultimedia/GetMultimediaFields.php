<?php
namespace Getresponse\Sdk\Operation\Multimedia\GetMultimedia;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetMultimediaFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'imageId',
            'originalImageUrl',
            'size',
            'name',
            'thumbnailUrl',
            'url',
            'extension',
        ];
    }
}
