<?php
namespace Getresponse\Sdk\Operation\Shops\Orders\GetOrders;

use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetOrdersSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'description',
            'status',
            'externalId',
        ];
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
     * @param string $status
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereStatus($status)
    {
        return $this->set('status', $status);
    }


    /**
     * @param string $externalId
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereExternalId($externalId)
    {
        return $this->set('externalId', $externalId);
    }
}
