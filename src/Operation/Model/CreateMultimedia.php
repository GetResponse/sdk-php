<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CreateMultimedia extends BaseModel
{
    /** @var string */
    private $file = self::FIELD_NOT_SET;


    /**
     * @param string $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'file' => $this->file,
        ];

        return $this->filterUnsetFields($data);
    }
}
