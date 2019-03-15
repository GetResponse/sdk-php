<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class LoginHistoryListElement extends BaseModel
{
    /** @var string */
    private $loginTime = self::FIELD_NOT_SET;

    /** @var string */
    private $logoutTime = self::FIELD_NOT_SET;

    /** @var string */
    private $isSuccessful = self::FIELD_NOT_SET;

    /** @var string */
    private $ip = self::FIELD_NOT_SET;


    /**
     * @param string $loginTime
     * @param string $isSuccessful
     * @param string $ip
     */
    public function __construct($loginTime, $isSuccessful, $ip)
    {
        $this->loginTime = $loginTime;
        $this->isSuccessful = $isSuccessful;
        $this->ip = $ip;
    }


    /**
     * @param string $logoutTime
     */
    public function setLogoutTime($logoutTime)
    {
        $this->logoutTime = $logoutTime;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'loginTime' => $this->loginTime,
            'logoutTime' => $this->logoutTime,
            'isSuccessful' => $this->isSuccessful,
            'ip' => $this->ip,
        ];

        return $this->filterUnsetFields($data);
    }
}
