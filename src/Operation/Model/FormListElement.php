<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class FormListElement extends BaseModel
{
    /** @var string */
    private $formId = self::FIELD_NOT_SET;

    /** @var string */
    private $webformId = self::FIELD_NOT_SET;

    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var string */
    private $href = self::FIELD_NOT_SET;

    /** @var string */
    private $hasVariants = self::FIELD_NOT_SET;

    /** @var string */
    private $scriptUrl = self::FIELD_NOT_SET;

    /** @var string */
    private $status = self::FIELD_NOT_SET;

    /** @var string */
    private $createdOn = self::FIELD_NOT_SET;

    /** @var \Getresponse\Sdk\Operation\Model\FormStatistics */
    private $statistics = self::FIELD_NOT_SET;


    /**
     * @param string $formId
     */
    public function setFormId($formId)
    {
        $this->formId = $formId;
    }


    /**
     * @param string $webformId
     */
    public function setWebformId($webformId)
    {
        $this->webformId = $webformId;
    }


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param string $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }


    /**
     * @param string $hasVariants
     */
    public function setHasVariants($hasVariants)
    {
        $this->hasVariants = $hasVariants;
    }


    /**
     * @param string $scriptUrl
     */
    public function setScriptUrl($scriptUrl)
    {
        $this->scriptUrl = $scriptUrl;
    }


    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


    /**
     * @param string $createdOn
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
    }


    /**
     * @param \Getresponse\Sdk\Operation\Model\FormStatistics $statistics
     */
    public function setStatistics(FormStatistics $statistics)
    {
        $this->statistics = $statistics;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'formId' => $this->formId,
            'webformId' => $this->webformId,
            'name' => $this->name,
            'href' => $this->href,
            'hasVariants' => $this->hasVariants,
            'scriptUrl' => $this->scriptUrl,
            'status' => $this->status,
            'createdOn' => $this->createdOn,
            'statistics' => $this->statistics,
        ];

        return $this->filterUnsetFields($data);
    }
}
