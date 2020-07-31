<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;



/**
 * Questions Model
 *
 * @property \App\Model\Table\QuestionKindsTable&\Cake\ORM\Association\BelongsTo $QuestionKinds
 *
 * @method \App\Model\Entity\Question get($primaryKey, $options = [])
 * @method \App\Model\Entity\Question newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Question[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Question|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Question saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Question patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Question[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Question findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class QuestionsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('questions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('QuestionKinds', [
            'foreignKey' => 'question_kind_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('question')
//            ->maxLength('question', 500)
            ->requirePresence('question', 'create')
            ->notEmptyString('question');

        $validator
            ->scalar('choice1')
            ->maxLength('choice1', 125)
            ->requirePresence('choice1', 'create')
            ->notEmptyString('choice1');

        $validator
            ->scalar('choice2')
            ->maxLength('choice2', 125)
            ->requirePresence('choice2', 'create')
            ->notEmptyString('choice2');

        $validator
            ->scalar('choice3')
            ->maxLength('choice3', 125)
            ->requirePresence('choice3', 'create')
            ->notEmptyString('choice3');

        $validator
            ->scalar('choice4')
            ->maxLength('choice4', 125)
            ->requirePresence('choice4', 'create')
            ->notEmptyString('choice4');

        $validator
            ->integer('answer')
            ->requirePresence('answer', 'create')
            ->notEmptyString('answer');

        $validator
            ->scalar('explanation')
            ->requirePresence('explanation', 'create')
            ->notEmptyString('explanation');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['question_kind_id'], 'QuestionKinds'));

        return $rules;
    }


}
