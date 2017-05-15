<?php
/**
 * Created by PhpStorm.
 * User: isling
 * Date: 15/05/2017
 * Time: 14:33
 */

namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Album\Model\AlbumTable;

class AlbumController extends AbstractActionController
{
    private $table;

    public function __construct(AlbumTable $table)
    {
        $this->table = $table;
        sprintf('Create AlbumController');
    }

    public function indexAction()
    {
        return new ViewModel([
            'albums' => $this->table->fetchAll(),
        ]);
    }

    public function addAction()
    {

    }

    public function editAction()
    {

    }

    public function deleteAction()
    {

    }
}
