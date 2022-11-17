<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpsertContactTags extends BaseModel
{
    /** @var NewContactTag[] */
    private $tags;


    /**
     * @param NewContactTag[] $tags
     */
    public function __construct(array $tags)
    {
        $this->tags = $tags;
    }


        public function jsonSerialize(): array
    {
        $data = [
            'tags' => $this->tags,
        ];

        return $this->filterUnsetFields($data);
    }
}
