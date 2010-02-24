<?php

/**
 * customer actions.
 *
 * @package    uss
 * @subpackage customer
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class customerActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->customers = Doctrine::getTable('Customer')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->customer = Doctrine::getTable('Customer')->find(array($request->getParameter('customer_id')));
    $this->forward404Unless($this->customer);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CustomerForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CustomerForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($customer = Doctrine::getTable('Customer')->find(array($request->getParameter('customer_id'))), sprintf('Object customer does not exist (%s).', $request->getParameter('customer_id')));
    $this->form = new CustomerForm($customer);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($customer = Doctrine::getTable('Customer')->find(array($request->getParameter('customer_id'))), sprintf('Object customer does not exist (%s).', $request->getParameter('customer_id')));
    $this->form = new CustomerForm($customer);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($customer = Doctrine::getTable('Customer')->find(array($request->getParameter('customer_id'))), sprintf('Object customer does not exist (%s).', $request->getParameter('customer_id')));
    $customer->delete();

    $this->redirect('customer/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $customer = $form->save();

      $this->redirect('customer/edit?customer_id='.$customer->getCustomerId());
    }
  }
}
