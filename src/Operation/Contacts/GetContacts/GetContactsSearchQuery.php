<?php
namespace Getresponse\Sdk\Operation\Contacts\GetContacts;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetContactsSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'email',
            'name',
            'campaignId',
            'origin',
            'createdOn',
            'changedOn',
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
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereOriginIsImport()
    {
        return $this->set('origin', 'import');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereOriginIsEmail()
    {
        return $this->set('origin', 'email');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereOriginIsWww()
    {
        return $this->set('origin', 'www');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereOriginIsPanel()
    {
        return $this->set('origin', 'panel');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereOriginIsLeads()
    {
        return $this->set('origin', 'leads');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereOriginIsSale()
    {
        return $this->set('origin', 'sale');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereOriginIsApi()
    {
        return $this->set('origin', 'api');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereOriginIsForward()
    {
        return $this->set('origin', 'forward');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereOriginIsSurvey()
    {
        return $this->set('origin', 'survey');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereOriginIsIphone()
    {
        return $this->set('origin', 'iphone');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereOriginIsCopy()
    {
        return $this->set('origin', 'copy');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereOriginIsLandingPage()
    {
        return $this->set('origin', 'landing_page');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereOriginIsWebinar()
    {
        return $this->set('origin', 'webinar');
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


    /**
     * @param DateRangeSearch $changedOn
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereChangedOn(DateRangeSearch $changedOn)
    {
        return $this->set('changedOn', $changedOn->toArray());
    }
}
