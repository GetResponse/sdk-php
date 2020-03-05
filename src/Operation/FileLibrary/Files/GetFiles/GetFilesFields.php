<?php
namespace Getresponse\Sdk\Operation\FileLibrary\Files\GetFiles;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetFilesFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'fileId',
            'fileSize',
            'group',
            'thumbnail',
            'url',
            'properties',
            'createdOn',
            'href',
            'name',
            'extension',
            'folder',
        ];
    }
}
