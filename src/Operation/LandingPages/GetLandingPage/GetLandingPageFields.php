<?php
namespace Getresponse\Sdk\Operation\LandingPages\GetLandingPage;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetLandingPageFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'metaDescription',
            'metaNoindex',
            'dayOfCycle',
            'optin',
            'favicoUrl',
            'thankYouPageType',
            'thankYouPageUrl',
            'url',
            'variants',
            'landingPageId',
            'href',
            'metaTitle',
            'domain',
            'subdomain',
            'userDomain',
            'userDomainPath',
            'campaign',
            'status',
            'userDomainStatus',
            'testAB',
            'createdOn',
            'updatedOn',
        ];
    }
}
