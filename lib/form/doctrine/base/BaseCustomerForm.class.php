<?php

/**
 * Customer form base class.
 *
 * @method Customer getObject() Returns the current form's model object
 *
 * @package    uss
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCustomerForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'customer_id' => new sfWidgetFormInputHidden(),
      'reg_date'    => new sfWidgetFormDateTime(),
      'person_code' => new sfWidgetFormInputText(),
      'name'        => new sfWidgetFormInputText(),
      'sur_name'    => new sfWidgetFormInputText(),
      'mobile'      => new sfWidgetFormInputText(),
      'zone_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Zones'), 'add_empty' => true)),
      'area_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Areas'), 'add_empty' => true)),
      'reg_expiry'  => new sfWidgetFormDateTime(),
      'address'     => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'customer_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'customer_id', 'required' => false)),
      'reg_date'    => new sfValidatorDateTime(array('required' => false)),
      'person_code' => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'name'        => new sfValidatorString(array('max_length' => 100)),
      'sur_name'    => new sfValidatorString(array('max_length' => 100)),
      'mobile'      => new sfValidatorString(array('max_length' => 10)),
      'zone_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Zones'), 'required' => false)),
      'area_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Areas'), 'required' => false)),
      'reg_expiry'  => new sfValidatorDateTime(array('required' => false)),
      'address'     => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('customer[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Customer';
  }

}
