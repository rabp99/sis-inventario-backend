<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UsuarioActivo Entity
 *
 * @property int $id
 * @property int $usuario_id
 * @property int $estado_id
 *
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Estado $estado
 */
class UsuarioActivo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'estado_id' => false
    ];
}
