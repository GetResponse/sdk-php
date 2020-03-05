<?php
namespace Getresponse\Sdk\Operation\ClickTracks\GetClickTrack;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetClickTrackFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'clickTrackId',
            'name',
            'url',
            'clicks',
            'message',
            'href',
        ];
    }
}
