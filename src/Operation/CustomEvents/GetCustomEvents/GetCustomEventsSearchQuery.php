<?php
namespace Getresponse\Sdk\Operation\CustomEvents\GetCustomEvents;

use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetCustomEventsSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
            'hasAttributes',
        ];
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


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereHasAttributesIsTrue()
    {
        return $this->set('hasAttributes', 'true');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereHasAttributesIsFalse()
    {
        return $this->set('hasAttributes', 'false');
    }
}
