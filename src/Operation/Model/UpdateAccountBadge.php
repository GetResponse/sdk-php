<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateAccountBadge extends BaseModel
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


    public function jsonSerialize(): array
    {
        $data = [
            'status' => $this->status,
        ];

        return $this->filterUnsetFields($data);
    }
}
