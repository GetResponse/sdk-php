<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpsertProductCategory extends BaseModel
{
    /** @var UpsertSingleProductCategory[] */
    private $categories;


    /**
     * @param UpsertSingleProductCategory[] $categories
     */
    public function __construct(array $categories)
    {
        $this->categories = $categories;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'categories' => $this->categories,
        ];

        return $this->filterUnsetFields($data);
    }
}
