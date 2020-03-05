<?php
namespace Getresponse\Sdk\Operation\FileLibrary\Folders\GetFolders;

use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetFoldersSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
        ];
    }


    /**
     * @param string $name
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereName($name)
    {
        return $this->set('name', $name);
    }
}
