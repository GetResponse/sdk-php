<?php
namespace Getresponse\Sdk\Operation\LandingPages\GetLandingPages;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetLandingPagesSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'domain',
            'status',
            'subdomain',
            'metaTitle',
            'userDomain',
            'campaignId',
            'createdOn',
        ];
    }


    /**
     * @param string $domain
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereDomain($domain)
    {
        return $this->set('domain', $domain);
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereStatusIsEnabled()
    {
        return $this->set('status', 'enabled');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereStatusIsDisabled()
    {
        return $this->set('status', 'disabled');
    }


    /**
     * @param string $subdomain
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereSubdomain($subdomain)
    {
        return $this->set('subdomain', $subdomain);
    }


    /**
     * @param string $metaTitle
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereMetaTitle($metaTitle)
    {
        return $this->set('metaTitle', $metaTitle);
    }


    /**
     * @param string $userDomain
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereUserDomain($userDomain)
    {
        return $this->set('userDomain', $userDomain);
    }


    /**
     * @param string $campaignId
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereCampaignId($campaignId)
    {
        return $this->set('campaignId', $campaignId);
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
