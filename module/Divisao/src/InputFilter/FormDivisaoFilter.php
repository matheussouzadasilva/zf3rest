<?php
namespace Divisao\InputFilter;

use Zend\InputFilter\InputFilter;

class FormDivisaoFilter extends InputFilter 
{

    public function __construct() 
    {

        $this->add([
            'name'       => 'id',
            'required'   => false,
            'allowEmpty' => false,
            'filters'    => [
            ],
            'validators' => [
            ],
        ]);

        $this->add([
            'name' => 'nome',
            'required' => true,
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ],
            'validators' => [
                [
                    'name' => 'StringLength',
                    'options' => [
                        'min' => 3,
                        'max' => 30,
                    ],
                ],
            ],
        ]);
    }

}