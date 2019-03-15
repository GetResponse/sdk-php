<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateSearchContacts extends BaseModel
{
    /** @var array */
    private $subscribersType;

    /** @var string */
    private $sectionLogicOperator;

    /** @var SearchContactSection[] */
    private $section;

    /** @var string */
    private $name;


    /**
     * @param array $subscribersType
     * @param string $sectionLogicOperator
     * @param SearchContactSection[] $section
     * @param string $name
     */
    public function __construct(array $subscribersType, $sectionLogicOperator, array $section, $name)
    {
        $this->subscribersType = $subscribersType;
        $this->sectionLogicOperator = $sectionLogicOperator;
        $this->section = $section;
        $this->name = $name;
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
            'name' => $this->name,
        ];

        return $this->filterUnsetFields($data);
    }
}
