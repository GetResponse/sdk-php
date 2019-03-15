<?php
namespace Getresponse\Sdk\Operation\Shops\MetaFields\GetMetaFields;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetMetaFieldsSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
            'description',
            'value',
            'createdOn',
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
     * @param string $description
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereDescription($description)
    {
        return $this->set('description', $description);
    }


    /**
     * @param string $value
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereValue($value)
    {
        return $this->set('value', $value);
    }


    /**
     * @param DateRangeSearch $createdOn
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereCreatedOn(DateRangeSearch $createdOn)
    {
        return $this->set('createdOn', $createdOn->toArray());
    }
}
