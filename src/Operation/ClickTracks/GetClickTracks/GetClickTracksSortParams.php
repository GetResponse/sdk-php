<?php
namespace Getresponse\Sdk\Operation\ClickTracks\GetClickTracks;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetClickTracksSortParams extends SortParams
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'createdOn',
        ];
    }
}
