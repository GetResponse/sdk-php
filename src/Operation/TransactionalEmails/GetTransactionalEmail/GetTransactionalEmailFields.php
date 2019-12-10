<?php
namespace Getresponse\Sdk\Operation\TransactionalEmails\GetTransactionalEmail;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetTransactionalEmailFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'fromField',
            'replyTo',
            'subject',
            'tag',
            'recipients',
            'href',
            'transactionalEmailId',
        ];
    }
}
