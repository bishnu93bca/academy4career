<?php
namespace App\Model\Table;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Filters Model
 *
 */
class TestSheetsTable extends Table
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

       // $this->addBehavior('Search.Search');

        $this->table('test_sheets');
        //$this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        // $this->hasMany('Questions', [
        //     'foreignKey' => 'test_id'
        // ]);
         $this->belongsTo('Questions', [
            'foreignKey' => 'question_id',
            'joinType' => 'INNER'
        ]);
         $this->belongsTo('Tests', [
            'foreignKey' => 'test_id',
            'joinType' => 'INNER'
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
        // $validator
        //     ->integer('id', 'days', 'nights', 'is_active')
        //     ->allowEmpty('id', 'options_json', 'budget', 'days', 'nights', 'other_remarks', 'images');

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
       
        return $rules;
    }
}