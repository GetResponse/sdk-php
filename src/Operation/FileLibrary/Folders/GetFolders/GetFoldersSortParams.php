<?php
namespace Getresponse\Sdk\Operation\FileLibrary\Folders\GetFolders;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetFoldersSortParams extends SortParams
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
            'size',
            'createdOn',
        ];
    }
}
