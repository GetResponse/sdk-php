<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class FolderShort extends BaseModel
{
    /** @var string */
    private $folderId;


    /**
     * @param string $folderId
     */
    public function __construct($folderId)
    {
        $this->folderId = $folderId;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'folderId' => $this->folderId,
        ];

        return $this->filterUnsetFields($data);
    }
}
