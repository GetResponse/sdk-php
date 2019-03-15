<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class SearchContactsConditionsDetails extends BaseModel
{
    /** @var array */
    private $subscribersType;

    /** @var string */
    private $sectionLogicOperator;

    /** @var SearchContactSection[] */
    private $section;


    /**
     * @param array $subscribersType
     * @param string $sectionLogicOperator
     * @param SearchContactSection[] $section
     */
    public function __construct(array $subscribersType, $sectionLogicOperator, array $section)
    {
        $this->subscribersType = $subscribersType;
        $this->sectionLogicOperator = $sectionLogicOperator;
        $this->section = $section;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'subscribersType' => $this->subscribersType,
            'sectionLogicOperator' => $this->sectionLogicOperator,
            'section' => $this->section,
        ];

        return $this->filterUnsetFields($data);
    }
}
