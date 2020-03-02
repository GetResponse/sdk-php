<?php
namespace Getresponse\Sdk\Operation\FileLibrary\Files\GetFiles;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetFilesSortParams extends SortParams
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
            'group',
            'size',
        ];
    }
}
