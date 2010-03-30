<?php

/**
 * Employee
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    uss
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
class Employee extends BaseEmployee
{
    public function save(Doctrine_Connection $conn = null)
      {
        if ($this->isNew() && !$this->getEmp_code())
        {
            $zone = $this->getZones();
          $empCodeDerived = $zone->getCity()->getCity_name(). $zone->getZone_code() .$this->getEmployeeProfiles()->getProfile_code().$this->getEmp_id();
          $this->setEmp_code($empCodeDerived);
        }

        return parent::save($conn);
      }
}