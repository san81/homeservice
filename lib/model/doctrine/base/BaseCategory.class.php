<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Category', 'doctrine');

/**
 * BaseCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $category_id
 * @property string $category_name
 * @property string $description
 * @property Doctrine_Collection $Employee
 * @property Doctrine_Collection $Items
 * 
 * @method integer             getCategoryId()    Returns the current record's "category_id" value
 * @method string              getCategoryName()  Returns the current record's "category_name" value
 * @method string              getDescription()   Returns the current record's "description" value
 * @method Doctrine_Collection getEmployee()      Returns the current record's "Employee" collection
 * @method Doctrine_Collection getItems()         Returns the current record's "Items" collection
 * @method Category            setCategoryId()    Sets the current record's "category_id" value
 * @method Category            setCategoryName()  Sets the current record's "category_name" value
 * @method Category            setDescription()   Sets the current record's "description" value
 * @method Category            setEmployee()      Sets the current record's "Employee" collection
 * @method Category            setItems()         Sets the current record's "Items" collection
 * 
 * @package    uss
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('category');
        $this->hasColumn('category_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('category_name', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '200',
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Employee', array(
             'local' => 'category_id',
             'foreign' => 'category_id'));

        $this->hasMany('Items', array(
             'local' => 'category_id',
             'foreign' => 'category_id'));
    }
}