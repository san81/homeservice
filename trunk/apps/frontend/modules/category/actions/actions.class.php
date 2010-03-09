<?php

/**
 * category actions.
 *
 * @package    uss
 * @subpackage category
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class categoryActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->categorys = Doctrine::getTable('Category')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->category = Doctrine::getTable('Category')->find(array($request->getParameter('category_id')));
    $this->forward404Unless($this->category);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CategoryForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CategoryForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($category = Doctrine::getTable('Category')->find(array($request->getParameter('category_id'))), sprintf('Object category does not exist (%s).', $request->getParameter('category_id')));
    $this->form = new CategoryForm($category);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($category = Doctrine::getTable('Category')->find(array($request->getParameter('category_id'))), sprintf('Object category does not exist (%s).', $request->getParameter('category_id')));
    $this->form = new CategoryForm($category);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($category = Doctrine::getTable('Category')->find(array($request->getParameter('category_id'))), sprintf('Object category does not exist (%s).', $request->getParameter('category_id')));
    $category->delete();

    $this->redirect('category/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $category = $form->save();

      $this->redirect('category/edit?category_id='.$category->getCategoryId());
    }
  }
}
