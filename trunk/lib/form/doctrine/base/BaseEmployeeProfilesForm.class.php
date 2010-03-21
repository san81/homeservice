<?php

/**
 * EmployeeProfiles form base class.
 *
 * @method EmployeeProfiles getObject() Returns the current form's model object
 *
 * @package    uss
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseEmployeeProfilesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'profile_id'   => new sfWidgetFormInputHidden(),
      'profile_code' => new sfWidgetFormInputText(),
      'description'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'profile_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'profile_id', 'required' => false)),
      'profile_code' => new sfValidatorString(array('max_length' => 30)),
      'description'  => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('employee_profiles[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EmployeeProfiles';
  }

}
