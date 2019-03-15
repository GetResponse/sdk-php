<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class FromFieldReference extends BaseModel
{
    /** @var string */
    private $fromFieldId;


    /**
     * @param string $fromFieldId
     */
    public function __construct($fromFieldId)
    {
        $this->fromFieldId = $fromFieldId;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'fromFieldId' => $this->fromFieldId,
        ];

        return $this->filterUnsetFields($data);
    }
}
