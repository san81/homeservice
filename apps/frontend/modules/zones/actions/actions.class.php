<?php

/**
 * zones actions.
 *
 * @package    uss
 * @subpackage zones
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class zonesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->zoness = Doctrine::getTable('Zones')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->zones = Doctrine::getTable('Zones')->find(array($request->getParameter('zone_id')));
    $this->forward404Unless($this->zones);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ZonesForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ZonesForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($zones = Doctrine::getTable('Zones')->find(array($request->getParameter('zone_id'))), sprintf('Object zones does not exist (%s).', $request->getParameter('zone_id')));
    $this->form = new ZonesForm($zones);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($zones = Doctrine::getTable('Zones')->find(array($request->getParameter('zone_id'))), sprintf('Object zones does not exist (%s).', $request->getParameter('zone_id')));
    $this->form = new ZonesForm($zones);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($zones = Doctrine::getTable('Zones')->find(array($request->getParameter('zone_id'))), sprintf('Object zones does not exist (%s).', $request->getParameter('zone_id')));
    $zones->delete();

    $this->redirect('zones/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $zones = $form->save();

      $this->redirect('zones/edit?zone_id='.$zones->getZoneId());
    }
  }
}
