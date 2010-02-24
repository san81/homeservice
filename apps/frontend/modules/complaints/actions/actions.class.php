<?php

/**
 * complaints actions.
 *
 * @package    uss
 * @subpackage complaints
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class complaintsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->complaintss = Doctrine::getTable('Complaints')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->complaints = Doctrine::getTable('Complaints')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->complaints);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ComplaintsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ComplaintsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($complaints = Doctrine::getTable('Complaints')->find(array($request->getParameter('id'))), sprintf('Object complaints does not exist (%s).', $request->getParameter('id')));
    $this->form = new ComplaintsForm($complaints);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($complaints = Doctrine::getTable('Complaints')->find(array($request->getParameter('id'))), sprintf('Object complaints does not exist (%s).', $request->getParameter('id')));
    $this->form = new ComplaintsForm($complaints);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($complaints = Doctrine::getTable('Complaints')->find(array($request->getParameter('id'))), sprintf('Object complaints does not exist (%s).', $request->getParameter('id')));
    $complaints->delete();

    $this->redirect('complaints/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $complaints = $form->save();

      $this->redirect('complaints/edit?id='.$complaints->getId());
    }
  }
}
