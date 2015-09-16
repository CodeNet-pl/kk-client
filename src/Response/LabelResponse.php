<?php
namespace CodeNet\KKClient\Response;

use CodeNet\KKClient\Response;

class LabelResponse extends Response
{
    /**
     * @var string
     */
    protected $label;

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }


} 