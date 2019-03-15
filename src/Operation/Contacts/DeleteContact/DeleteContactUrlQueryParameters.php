<?php
namespace Getresponse\Sdk\Operation\Contacts\DeleteContact;

use Getresponse\Sdk\Client\Operation\UrlQuery;

class DeleteContactUrlQueryParameters extends UrlQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'messageId',
            'ipAddress',
        ];
    }


    /**
     * @param string $messageId
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereMessageId($messageId)
    {
        return $this->set('messageId', $messageId);
    }


    /**
     * @param string $ipAddress
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereIpAddress($ipAddress)
    {
        return $this->set('ipAddress', $ipAddress);
    }
}
