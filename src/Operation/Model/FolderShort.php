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


        public function jsonSerialize(): array
    {
        $data = [
            'folderId' => $this->folderId,
        ];

        return $this->filterUnsetFields($data);
    }
}
