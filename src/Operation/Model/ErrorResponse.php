<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class ErrorResponse extends BaseModel
{
    /** @var string */
    private $httpStatus = self::FIELD_NOT_SET;

    /** @var string */
    private $code = self::FIELD_NOT_SET;

    /** @var string */
    private $codeDescription = self::FIELD_NOT_SET;

    /** @var string */
    private $message = self::FIELD_NOT_SET;

    /** @var string */
    private $moreInfo = self::FIELD_NOT_SET;

    /** @var array */
    private $context = self::FIELD_NOT_SET;

    /** @var string */
    private $uuid = self::FIELD_NOT_SET;


    /**
     * @param string $httpStatus
     * @param string $code
     * @param string $codeDescription
     * @param string $message
     * @param string $moreInfo
     * @param array $context
     * @param string $uuid
     */
    public function __construct($httpStatus, $code, $codeDescription, $message, $moreInfo, array $context, $uuid)
    {
        $this->httpStatus = $httpStatus;
        $this->code = $code;
        $this->codeDescription = $codeDescription;
        $this->message = $message;
        $this->moreInfo = $moreInfo;
        $this->context = $context;
        $this->uuid = $uuid;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'httpStatus' => $this->httpStatus,
            'code' => $this->code,
            'codeDescription' => $this->codeDescription,
            'message' => $this->message,
            'moreInfo' => $this->moreInfo,
            'context' => $this->context,
            'uuid' => $this->uuid,
        ];

        return $this->filterUnsetFields($data);
    }
}
