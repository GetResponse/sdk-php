<?php
namespace Getresponse\Sdk\Operation\FileLibrary\Folders\GetFolders;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetFoldersFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'folderId',
            'name',
            'size',
            'createdOn',
        ];
    }
}
