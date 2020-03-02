<?php
namespace Getresponse\Sdk\Operation\TransactionalEmails\GetTransactionalEmails;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetTransactionalEmailsFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'transactionalEmailId',
            'fromField',
            'recipients',
            'subject',
            'tag',
            'href',
        ];
    }
}
