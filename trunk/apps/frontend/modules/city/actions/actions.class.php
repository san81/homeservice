<?php

/**
 * city actions.
 *
 * @package    uss
 * @subpackage city
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class cityActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->citys = Doctrine::getTable('city')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->city = Doctrine::getTable('city')->find(array($request->getParameter('city_id')));
    $this->forward404Unless($this->city);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new cityForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new cityForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($city = Doctrine::getTable('city')->find(array($request->getParameter('city_id'))), sprintf('Object city does not exist (%s).', $request->getParameter('city_id')));
    $this->form = new cityForm($city);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($city = Doctrine::getTable('city')->find(array($request->getParameter('city_id'))), sprintf('Object city does not exist (%s).', $request->getParameter('city_id')));
    $this->form = new cityForm($city);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($city = Doctrine::getTable('city')->find(array($request->getParameter('city_id'))), sprintf('Object city does not exist (%s).', $request->getParameter('city_id')));
    $city->delete();

    $this->redirect('city/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $city = $form->save();

      $this->redirect('city/edit?city_id='.$city->getCityId());
    }
  }
}
