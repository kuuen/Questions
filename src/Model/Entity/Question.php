<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Question Entity
 *
 * @property int $id
 * @property int $question_kind_id
 * @property string $question
 * @property string $choice1
 * @property string $choice2
 * @property string $choice3
 * @property string $choice4
 * @property int $answer
 * @property string $explanation
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\QuestionKind $question_kind
 */
class Question extends Entity
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
        'question_kind_id' => true,
        'question' => true,
        'choice1' => true,
        'choice2' => true,
        'choice3' => true,
        'choice4' => true,
        'answer' => true,
        'explanation' => true,
        'created' => true,
        'modified' => true,
        'question_kind' => true,
    ];
}
