<?php

/**
 * Customer
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    uss
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
class Customer extends BaseCustomer
{
    public function save(Doctrine_Connection $conn = null)
      {
        if ($this->isNew() && !$this->getPerson_code())
        {
          $zone = $this->getZones();
          $customerCodeDerived = $zone->getCity()->getCity_name(). $zone->getZone_code() .'Slob'.rand(100,1000);
          $this->setPerson_code($customerCodeDerived);
        }

        return parent::save($conn);
      }

}