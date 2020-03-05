<?php
namespace Getresponse\Sdk\Operation\FileLibrary\Files\GetFiles;

use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetFilesSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'allFolders',
            'folderId',
            'name',
            'group',
        ];
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereAllFoldersIsTrue()
    {
        return $this->set('allFolders', 'true');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereAllFoldersIsFalse()
    {
        return $this->set('allFolders', 'false');
    }


    /**
     * @param string $folderId
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereFolderId($folderId)
    {
        return $this->set('folderId', $folderId);
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


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereGroupIsAudio()
    {
        return $this->set('group', 'audio');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereGroupIsVideo()
    {
        return $this->set('group', 'video');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereGroupIsPhoto()
    {
        return $this->set('group', 'photo');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereGroupIsDocument()
    {
        return $this->set('group', 'document');
    }
}
