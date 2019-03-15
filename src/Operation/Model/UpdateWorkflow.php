<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateWorkflow extends BaseModel
{
    /** @var string */
    private $status;


    /**
     * @param string $status
     */
    public function __construct($status)
    {
        $this->status = $status;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'status' => $this->status,
        ];

        return $this->filterUnsetFields($data);
    }
}
