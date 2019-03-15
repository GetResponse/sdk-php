<?php
namespace Getresponse\Sdk\Operation\Addresses\GetAddresses;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetAddressesSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
            'firstName',
            'lastName',
            'address1',
            'address2',
            'city',
            'zip',
            'province',
            'provinceCode',
            'phone',
            'company',
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
     * @param string $firstName
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereFirstName($firstName)
    {
        return $this->set('firstName', $firstName);
    }


    /**
     * @param string $lastName
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereLastName($lastName)
    {
        return $this->set('lastName', $lastName);
    }


    /**
     * @param string $address1
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereAddress1($address1)
    {
        return $this->set('address1', $address1);
    }


    /**
     * @param string $address2
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereAddress2($address2)
    {
        return $this->set('address2', $address2);
    }


    /**
     * @param string $city
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereCity($city)
    {
        return $this->set('city', $city);
    }


    /**
     * @param string $zip
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereZip($zip)
    {
        return $this->set('zip', $zip);
    }


    /**
     * @param string $province
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereProvince($province)
    {
        return $this->set('province', $province);
    }


    /**
     * @param string $provinceCode
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereProvinceCode($provinceCode)
    {
        return $this->set('provinceCode', $provinceCode);
    }


    /**
     * @param string $phone
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function wherePhone($phone)
    {
        return $this->set('phone', $phone);
    }


    /**
     * @param string $company
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereCompany($company)
    {
        return $this->set('company', $company);
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
