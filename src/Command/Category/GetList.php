<?php namespace MODX\Shell\Command\Category;

use MODX\Shell\Command\ListProcessor;

/**
 * A command to list elements categories
 */
abstract class GetList extends ListProcessor
{
    protected $processor = 'element/category/getlist';
    protected $headers = array(
        'id', 'category', 'parent'
    );

    protected $name = 'category:list';
    protected $description = 'List categories';

    protected function formatParent($id)
    {
        return $this->renderObject('modCategory', $id, 'category');
    }
}
