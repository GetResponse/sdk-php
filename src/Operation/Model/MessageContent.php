<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class MessageContent extends BaseModel
{
    /** @var string */
    private $html = self::FIELD_NOT_SET;

    /** @var string */
    private $plain = self::FIELD_NOT_SET;


    /**
     * @param string $html
     */
    public function setHtml($html)
    {
        $this->html = $html;
    }


    /**
     * @param string $plain
     */
    public function setPlain($plain)
    {
        $this->plain = $plain;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'html' => $this->html,
            'plain' => $this->plain,
        ];

        return $this->filterUnsetFields($data);
    }
}
