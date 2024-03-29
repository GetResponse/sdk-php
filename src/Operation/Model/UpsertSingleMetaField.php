<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpsertSingleMetaField extends BaseModel
{
    /** @var string */
    private $metaFieldId;


    /**
     * @param string $metaFieldId
     */
    public function __construct($metaFieldId)
    {
        $this->metaFieldId = $metaFieldId;
    }


        public function jsonSerialize(): array
    {
        $data = [
            'metaFieldId' => $this->metaFieldId,
        ];

        return $this->filterUnsetFields($data);
    }
}
