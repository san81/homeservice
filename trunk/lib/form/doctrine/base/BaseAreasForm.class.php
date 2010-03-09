<?php

/**
 * Areas form base class.
 *
 * @method Areas getObject() Returns the current form's model object
 *
 * @package    uss
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAreasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'area_id'     => new sfWidgetFormInputHidden(),
      'area_code'   => new sfWidgetFormInputText(),
      'area_name'   => new sfWidgetFormInputText(),
      'zone_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Zones'), 'add_empty' => true)),
      'description' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'area_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'area_id', 'required' => false)),
      'area_code'   => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'area_name'   => new sfValidatorString(array('max_length' => 255)),
      'zone_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Zones'), 'required' => false)),
      'description' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('areas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Areas';
  }

}
