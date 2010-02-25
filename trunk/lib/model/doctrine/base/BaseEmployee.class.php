<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Employee', 'doctrine');

/**
 * BaseEmployee
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $emp_id
 * @property timestamp $reg_date
 * @property string $emp_code
 * @property string $name
 * @property string $sur_name
 * @property string $mobile
 * @property integer $zone_id
 * @property integer $area_id
 * @property string $role
 * @property integer $working_under
 * @property string $skill_set
 * @property string $address
 * @property Doctrine_Collection $Employee
 * @property Zones $Zones
 * @property Areas $Areas
 * @property Doctrine_Collection $Complaints
 * 
 * @method integer             getEmpId()         Returns the current record's "emp_id" value
 * @method timestamp           getRegDate()       Returns the current record's "reg_date" value
 * @method string              getEmpCode()       Returns the current record's "emp_code" value
 * @method string              getName()          Returns the current record's "name" value
 * @method string              getSurName()       Returns the current record's "sur_name" value
 * @method string              getMobile()        Returns the current record's "mobile" value
 * @method integer             getZoneId()        Returns the current record's "zone_id" value
 * @method integer             getAreaId()        Returns the current record's "area_id" value
 * @method string              getRole()          Returns the current record's "role" value
 * @method integer             getWorkingUnder()  Returns the current record's "working_under" value
 * @method string              getSkillSet()      Returns the current record's "skill_set" value
 * @method string              getAddress()       Returns the current record's "address" value
 * @method Doctrine_Collection getEmployee()      Returns the current record's "Employee" collection
 * @method Zones               getZones()         Returns the current record's "Zones" value
 * @method Areas               getAreas()         Returns the current record's "Areas" value
 * @method Doctrine_Collection getComplaints()    Returns the current record's "Complaints" collection
 * @method Employee            setEmpId()         Sets the current record's "emp_id" value
 * @method Employee            setRegDate()       Sets the current record's "reg_date" value
 * @method Employee            setEmpCode()       Sets the current record's "emp_code" value
 * @method Employee            setName()          Sets the current record's "name" value
 * @method Employee            setSurName()       Sets the current record's "sur_name" value
 * @method Employee            setMobile()        Sets the current record's "mobile" value
 * @method Employee            setZoneId()        Sets the current record's "zone_id" value
 * @method Employee            setAreaId()        Sets the current record's "area_id" value
 * @method Employee            setRole()          Sets the current record's "role" value
 * @method Employee            setWorkingUnder()  Sets the current record's "working_under" value
 * @method Employee            setSkillSet()      Sets the current record's "skill_set" value
 * @method Employee            setAddress()       Sets the current record's "address" value
 * @method Employee            setEmployee()      Sets the current record's "Employee" collection
 * @method Employee            setZones()         Sets the current record's "Zones" value
 * @method Employee            setAreas()         Sets the current record's "Areas" value
 * @method Employee            setComplaints()    Sets the current record's "Complaints" collection
 * 
 * @package    uss
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseEmployee extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('employee');
        $this->hasColumn('emp_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('reg_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('emp_code', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '30',
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '100',
             ));
        $this->hasColumn('sur_name', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '100',
             ));
        $this->hasColumn('mobile', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '10',
             ));
        $this->hasColumn('zone_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('area_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('role', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '30',
             ));
        $this->hasColumn('working_under', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('skill_set', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('address', 'string', null, array(
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
             'local' => 'emp_id',
             'foreign' => 'working_under'));

        $this->hasOne('Zones', array(
             'local' => 'zone_id',
             'foreign' => 'zone_id'));

        $this->hasOne('Areas', array(
             'local' => 'area_id',
             'foreign' => 'area_id'));

        $this->hasMany('Complaints', array(
             'local' => 'emp_id',
             'foreign' => 'assigned_emp_id'));
    }
}