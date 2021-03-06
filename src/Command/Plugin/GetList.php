<?php namespace MODX\Shell\Command\Plugin;

use MODX\Shell\Command\ListProcessor;

class GetList extends ListProcessor
{
    protected $processor = 'element/plugin/getlist';
    protected $headers = array(
        'id', 'name', 'description', 'disabled'
    );

    protected $name = 'plugin:list';
    protected $description = 'List Plugins';

    protected function formatDisabled($value)
    {
        return $this->renderBoolean($value);
    }
}
