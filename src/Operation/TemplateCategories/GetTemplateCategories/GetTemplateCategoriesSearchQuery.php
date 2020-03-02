<?php
namespace Getresponse\Sdk\Operation\TemplateCategories\GetTemplateCategories;

use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetTemplateCategoriesSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'type',
        ];
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereTypeIsPredesigned()
    {
        return $this->set('type', 'predesigned');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereTypeIsLayouts()
    {
        return $this->set('type', 'layouts');
    }
}
