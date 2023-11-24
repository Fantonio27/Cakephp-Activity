<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $user_id
 * @property string $fullname
 * @property string $username
 * @property string $email
 * @property string $password
 * @property \Cake\I18n\Date $date_of_birth
 * @property string $gender
 * @property string $address
 * @property string $bio
 * @property int $contact_no
 * @property string|resource $profile_picture
 * @property string $status
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 */
class User extends Entity
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
        'fullname' => true,
        'username' => true,
        'email' => true,
        'password' => true,
        'date_of_birth' => true,
        'gender' => true,
        'address' => true,
        'bio' => true,
        'contact_no' => true,
        'profile_picture' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected array $_hidden = [
        'password',
    ];
}
