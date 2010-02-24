<?php

/**
 * items actions.
 *
 * @package    uss
 * @subpackage items
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class itemsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->itemss = Doctrine::getTable('Items')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->items = Doctrine::getTable('Items')->find(array($request->getParameter('item_id')));
    $this->forward404Unless($this->items);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ItemsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ItemsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($items = Doctrine::getTable('Items')->find(array($request->getParameter('item_id'))), sprintf('Object items does not exist (%s).', $request->getParameter('item_id')));
    $this->form = new ItemsForm($items);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($items = Doctrine::getTable('Items')->find(array($request->getParameter('item_id'))), sprintf('Object items does not exist (%s).', $request->getParameter('item_id')));
    $this->form = new ItemsForm($items);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($items = Doctrine::getTable('Items')->find(array($request->getParameter('item_id'))), sprintf('Object items does not exist (%s).', $request->getParameter('item_id')));
    $items->delete();

    $this->redirect('items/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $items = $form->save();

      $this->redirect('items/edit?item_id='.$items->getItemId());
    }
  }
}
