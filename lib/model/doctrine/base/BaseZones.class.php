<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Zones', 'doctrine');

/**
 * BaseZones
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $zone_id
 * @property string $zone_code
 * @property string $zone_name
 * @property string $description
 * @property Doctrine_Collection $Areas
 * @property Doctrine_Collection $Customer
 * @property Doctrine_Collection $Employee
 * 
 * @method integer             getZoneId()      Returns the current record's "zone_id" value
 * @method string              getZoneCode()    Returns the current record's "zone_code" value
 * @method string              getZoneName()    Returns the current record's "zone_name" value
 * @method string              getDescription() Returns the current record's "description" value
 * @method Doctrine_Collection getAreas()       Returns the current record's "Areas" collection
 * @method Doctrine_Collection getCustomer()    Returns the current record's "Customer" collection
 * @method Doctrine_Collection getEmployee()    Returns the current record's "Employee" collection
 * @method Zones               setZoneId()      Sets the current record's "zone_id" value
 * @method Zones               setZoneCode()    Sets the current record's "zone_code" value
 * @method Zones               setZoneName()    Sets the current record's "zone_name" value
 * @method Zones               setDescription() Sets the current record's "description" value
 * @method Zones               setAreas()       Sets the current record's "Areas" collection
 * @method Zones               setCustomer()    Sets the current record's "Customer" collection
 * @method Zones               setEmployee()    Sets the current record's "Employee" collection
 * 
 * @package    uss
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseZones extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('zones');
        $this->hasColumn('zone_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('zone_code', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '10',
             ));
        $this->hasColumn('zone_name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '255',
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
        $this->hasMany('Areas', array(
             'local' => 'zone_id',
             'foreign' => 'zone_id'));

        $this->hasMany('Customer', array(
             'local' => 'zone_id',
             'foreign' => 'zone_id'));

        $this->hasMany('Employee', array(
             'local' => 'zone_id',
             'foreign' => 'zone_id'));
    }
}