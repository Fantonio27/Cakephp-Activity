<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity
 *
 * @property int $post_id
 * @property int $user_id
 * @property string $title
 * @property string $content
 * @property string $category
 * @property string|resource $image
 * @property string $status
 * @property \Cake\I18n\DateTime $modified
 * @property \Cake\I18n\DateTime $created
 *
 * @property \App\Model\Entity\User $user
 */
class Post extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'user_id' => true,
        'title' => true,
        'content' => true,
        'category' => true,
        'image' => true,
        'status' => true,
        'modified' => true,
        'created' => true,
        'user' => true,
    ];
}
