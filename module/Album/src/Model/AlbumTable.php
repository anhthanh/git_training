<?php
/**
 * Created by PhpStorm.
 * User: isling
 * Date: 15/05/2017
 * Time: 16:13
 */

namespace Album\Model;

use RuntimeException;
use Zend\Db\TableGateway\TableGatewayInterface;

class AlbumTable
{
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        return $this->tableGateway->select();
    }

    public function getAlbum($id)
    {
        $id = (int)$id;
        $rowset = $this->tableGateway->select(['id' => $id]);

        $row = $rowset->current();

        if (!$row) {
            throw new RuntimeException(
                sprintf('Could not find row with identifier %d', $id)
            );
        }

        return $row;
    }

    public function saveAlbum(Album $album)
    {
        $data = [
            'artist' => $album->artist,
            'title' => $album->title
        ];

        $id = $album->id;

        if ($id === 0) {
            $this->tableGateway->insert($data);
        }

        if (!$this->getAlbum($id)) {
            throw new RuntimeException(
                sprintf('Cannot udate album with identifier %d; does not exist', $id)
            );
        }

        $this->tableGateway->update($data, ['id' => $id]);
    }

    public function deleteAlbum($id) {
        $this->tableGateway->delete(['id' => (int)$id]);
    }
}
