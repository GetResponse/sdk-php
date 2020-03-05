<?php
namespace Getresponse\Sdk\Operation\ClickTracks\GetClickTracks;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetClickTracksFields extends ValueList
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
