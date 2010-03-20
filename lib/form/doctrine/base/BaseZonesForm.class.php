<?php

/**
 * Zones form base class.
 *
 * @method Zones getObject() Returns the current form's model object
 *
 * @package    uss
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseZonesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'zone_id'     => new sfWidgetFormInputHidden(),
      'zone_code'   => new sfWidgetFormInputText(),
      'zone_name'   => new sfWidgetFormInputText(),
      'city_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('City'), 'add_empty' => true)),
      'description' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'zone_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'zone_id', 'required' => false)),
      'zone_code'   => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'zone_name'   => new sfValidatorString(array('max_length' => 255)),
      'city_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('City'), 'required' => false)),
      'description' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('zones[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Zones';
  }

}
