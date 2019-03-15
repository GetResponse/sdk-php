<?php
namespace Getresponse\Sdk\Operation\FromFields\GetFromFields;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetFromFieldsSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'email',
            'name',
        ];
    }


    /**
     * @param string $email
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereEmail($email)
    {
        return $this->set('email', $email);
    }


    /**
     * @param string $name
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereName($name)
    {
        return $this->set('name', $name);
    }
}
