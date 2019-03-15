<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CustomDateRange extends BaseModel
{
    /** @var string */
    private $from;

    /** @var string */
    private $to;


    /**
     * @param string $from
     * @param string $to
     */
    public function __construct($from, $to)
    {
        $this->from = $from;
        $this->to = $to;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'from' => $this->from,
            'to' => $this->to,
        ];

        return $this->filterUnsetFields($data);
    }
}
