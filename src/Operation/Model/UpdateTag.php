<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateTag extends BaseModel
{
    /** @var string */
    private $name;


    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


        public function jsonSerialize(): array
    {
        $data = [
            'name' => $this->name,
        ];

        return $this->filterUnsetFields($data);
    }
}
