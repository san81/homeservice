<?php

/**
 * Items form base class.
 *
 * @method Items getObject() Returns the current form's model object
 *
 * @package    uss
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseItemsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'item_id'          => new sfWidgetFormInputHidden(),
      'item_name'        => new sfWidgetFormInputText(),
      'item_price'       => new sfWidgetFormInputText(),
      'item_description' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'item_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'item_id', 'required' => false)),
      'item_name'        => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'item_price'       => new sfValidatorNumber(array('required' => false)),
      'item_description' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('items[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Items';
  }

}
