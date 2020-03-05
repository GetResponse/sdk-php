<?php
namespace Getresponse\Sdk\Operation\TransactionalEmails\GetTransactionalEmails;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetTransactionalEmails extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/transactional-emails';

    /** @var GetTransactionalEmailsSearchQuery */
    private $query;

    /** @var Pagination */
    private $pagination;

    /** @var GetTransactionalEmailsFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetTransactionalEmailsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetTransactionalEmailsSearchQuery $query)
    {
        $this->query = $query;
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
     * @param GetTransactionalEmailsFields $fields
     * @return $this
     */
    public function setFields(GetTransactionalEmailsFields $fields)
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

        return $this->buildUrlFromTemplate() . $this->buildQueryString($this->query, null, $extra);
    }
}
