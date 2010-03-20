<?php

/**
 * Employee form base class.
 *
 * @method Employee getObject() Returns the current form's model object
 *
 * @package    uss
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseEmployeeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'emp_id'         => new sfWidgetFormInputHidden(),
      'reg_date'       => new sfWidgetFormDateTime(),
      'emp_code'       => new sfWidgetFormInputHidden(),
      'emp_profile_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EmployeeProfiles'), 'add_empty' => true)),
      'name'           => new sfWidgetFormInputText(),
      'sur_name'       => new sfWidgetFormInputText(),
      'mobile'         => new sfWidgetFormInputText(),
      'zone_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Zones'), 'add_empty' => true)),
      'area_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Areas'), 'add_empty' => true)),
      'working_under'  => new sfWidgetFormInputText(),
      'skill_set'      => new sfWidgetFormTextarea(),
      'category_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => true)),
      'address'        => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'emp_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'emp_id', 'required' => false)),
      'reg_date'       => new sfValidatorDateTime(array('required' => false)),
      'emp_code'       => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'emp_profile_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('EmployeeProfiles'), 'required' => false)),
      'name'           => new sfValidatorString(array('max_length' => 100)),
      'sur_name'       => new sfValidatorString(array('max_length' => 100)),
      'mobile'         => new sfValidatorString(array('max_length' => 10)),
      'zone_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Zones'), 'required' => false)),
      'area_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Areas'), 'required' => false)),
      'working_under'  => new sfValidatorInteger(array('required' => false)),
      'skill_set'      => new sfValidatorString(array('required' => false)),
      'category_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'required' => false)),
      'address'        => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('employee[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Employee';
  }

}
