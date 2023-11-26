<?php

namespace Dcat\Admin\Form\Field;

use Dcat\Admin\DcatIcon;

class Decimal extends Text
{
    /**
     * @see https://github.com/RobinHerbots/Inputmask#options
     *
     * @var array
     */
    protected $options = [
        'alias'      => 'decimal',
        'rightAlign' => false,
    ];

    public function render()
    {
        $this->inputmask($this->options);

        $this->prepend(DcatIcon::TERMINAL(true));

        return parent::render();
    }
}