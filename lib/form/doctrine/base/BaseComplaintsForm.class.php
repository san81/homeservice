<?php

/**
 * Complaints form base class.
 *
 * @method Complaints getObject() Returns the current form's model object
 *
 * @package    uss
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseComplaintsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'complaint_date'  => new sfWidgetFormDateTime(),
      'complaint_code'  => new sfWidgetFormInputText(),
      'customer_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Customer'), 'add_empty' => true)),
      'assigned_emp_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Employee'), 'add_empty' => true)),
      'item_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Items'), 'add_empty' => true)),
      'status'          => new sfWidgetFormInputText(),
      'closed_date'     => new sfWidgetFormDateTime(),
      'description'     => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'complaint_date'  => new sfValidatorDateTime(array('required' => false)),
      'complaint_code'  => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'customer_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Customer'), 'required' => false)),
      'assigned_emp_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Employee'), 'required' => false)),
      'item_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Items'), 'required' => false)),
      'status'          => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'closed_date'     => new sfValidatorDateTime(array('required' => false)),
      'description'     => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('complaints[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Complaints';
  }

}
