<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class AccountBadgeStatus extends BaseModel
{
    /** @var string */
    private $status = self::FIELD_NOT_SET;


    /**
     * @param string $status
     */
    public function setStatus($status)
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
