<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpsertMetaField extends BaseModel
{
    /** @var UpsertSingleMetaField[] */
    private $metaFields;


    /**
     * @param UpsertSingleMetaField[] $metaFields
     */
    public function __construct(array $metaFields)
    {
        $this->metaFields = $metaFields;
    }


        public function jsonSerialize(): array
    {
        $data = [
            'metaFields' => $this->metaFields,
        ];

        return $this->filterUnsetFields($data);
    }
}
