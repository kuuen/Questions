<?php
namespace App\Controller;

use App\Controller\AppController;

use Cake\Datasource\ConnectionManager;

/**
 * Questions Controller
 *
 * @property \App\Model\Table\QuestionsTable $Questions
 *
 * @method \App\Model\Entity\Question[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TestsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->loadModel('Questions');

        // submitで呼ばれたかを判定
        if ($this->request->is(['patch', 'post', 'put'])) {

            // リダイレクト 入力内容を渡す
            return $this->redirect(
                ['action' => 'kaitou',
                    '?' => $this->request->getData() ]);
        }

        // ランダムで問題を10問取得して返す 問題数が増えるとパフォーマンスが悪くなるらしい
        $this->questions = $this->Questions->find( 'all', array(
            'fields' => array(
                'id', 'question', 'choice1','choice2','choice3','choice4',
            ),
            'order' => array('RAND()'),
            'limit' => '10'
        ));

        $this->set('questions', $this->questions);
    }

    public function kaitou()
    {
        $this->loadModel('Questions');

        if (count($this->request->getQuery()) < 1) {
            $this->cakeError('error500');
        }

        // 得点
        $tokuten = 0;

        // 問題
        $results = array();


        // 回答内容を取得
        $kaitous = $this->request->getQuery();

        $questionIds = array_keys($kaitous);

        // 問題idでループ
        foreach ($questionIds as $questionId ) {

            // 問題種別も含めて問題を取得
            $question = $this->Questions->get($questionId, [
                'contain' => ['QuestionKinds'],
            ]);

            $question['kaitou'] = $this->request->getQuery()[$questionId];

            // 判定する
            if ($question['answer'] == $this->request->getQuery()[$questionId]) {
                $tokuten++;

                $question['hantei'] = '〇';
            } else {
                $question['hantei'] = '×';
            }

            array_push($results, $question);
        }

        $this->set('tokuten', $tokuten);
        $this->set('results', $results);
    }
}
