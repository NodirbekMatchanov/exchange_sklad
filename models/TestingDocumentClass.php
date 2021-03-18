<?php


namespace rare\exchange1c\models;

class TestingDocumentClass extends TestingClass
{
    protected static $property = 'documentClass';

    protected static function methodRules()
    {
        return array_merge(parent::methodRules(), [
            [
                ['getPartner1c'],
                'needContext' => true,
                'return' => 'interface',
                'value' => 'rare\exchange1c\interfaces\PartnerInterface'
            ],
            [['findDocuments1c'], 'return' => 'array'],
        ]);
    }
}