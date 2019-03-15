<?php
namespace Getresponse\Sdk\Operation\FromFields\DeleteFromField;

use Getresponse\Sdk\Client\Operation\UrlQuery;

class DeleteFromFieldUrlQueryParameters extends UrlQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'fromFieldIdToReplaceWith',
        ];
    }


    /**
     * @param string $fromFieldIdToReplaceWith
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereFromFieldIdToReplaceWith($fromFieldIdToReplaceWith)
    {
        return $this->set('fromFieldIdToReplaceWith', $fromFieldIdToReplaceWith);
    }
}
