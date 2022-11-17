<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class ResourceTag extends BaseModel
{
    /** @var string */
    private $tagId = self::FIELD_NOT_SET;


    /**
     * @param string $tagId
     */
    public function __construct($tagId)
    {
        $this->tagId = $tagId;
    }


        public function jsonSerialize(): array
    {
        $data = [
            'tagId' => $this->tagId,
        ];

        return $this->filterUnsetFields($data);
    }
}
