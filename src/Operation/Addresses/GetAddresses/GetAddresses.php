<?php
namespace Getresponse\Sdk\Operation\Addresses\GetAddresses;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetAddresses extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/addresses';

    /** @var GetAddressesSearchQuery */
    private $query;

    /** @var GetAddressesSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetAddressesFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetAddressesSearchQuery $query
     * @return $this
     */
    public function setQuery(GetAddressesSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetAddressesSortParams $sort
     * @return $this
     */
    public function setSort(GetAddressesSortParams $sort)
    {
        $this->sort = $sort;
        return $this;
    }


    /**
     * @param Pagination $pagination
     * @return $this
     */
    public function setPagination(Pagination $pagination)
    {
        $this->pagination = $pagination;
        return $this;
    }


    /**
     * @param GetAddressesFields $fields
     * @return $this
     */
    public function setFields(GetAddressesFields $fields)
    {
        $this->fields = $fields;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        $extra = array_merge(
           $this->getPaginationParametersArray($this->pagination),
           $this->getFieldsParameterArray($this->fields)
        );

        return $this->buildUrlFromTemplate() . $this->buildQueryString($this->query, $this->sort, $extra);
    }
}
