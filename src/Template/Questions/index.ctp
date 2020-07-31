<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question[]|\Cake\Collection\CollectionInterface $questions
 */
?>

<?php
$this->assign('title', '問題');
//assign()の第一引数はfetch()の引数と合わせます。第二引数にページタイトルを記述します。
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('操作') ?></li>
        <li><?= $this->Html->link(__('問題作成'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questions index large-9 medium-8 columns content">
    <h3><?= __('問題一覧') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" width="5%"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('問題種別') ?></th>
                <th scope="col" width="40%"><?= $this->Paginator->sort('問題') ?></th>
                <th scope="col"><?= $this->Paginator->sort('作成日時') ?></th>
                <th scope="col"><?= $this->Paginator->sort('編集日時') ?></th>
                <th scope="col" class="actions"><?= __('操作') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questions as $question): ?>
            <tr>
                <td><?= $this->Number->format($question->id) ?></td>
                <td><?= $question->has('question_kind') ? $this->Html->link($question->question_kind->name, ['controller' => 'QuestionKinds', 'action' => 'view', $question->question_kind->id]) : '' ?></td>
                <td><?= h($question->question) ?></td>

                <td><?= h($question->created) ?></td>
                <td><?= h($question->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('詳細'), ['action' => 'view', $question->id]) ?>
                    <?= $this->Html->link(__('編集'), ['action' => 'edit', $question->id]) ?>
                    <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('先頭')) ?>
            <?= $this->Paginator->prev('< ' . __('前')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('次') . ' >') ?>
            <?= $this->Paginator->last(__('最後') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('ページ {{page}} / {{pages}}, 表示 {{current}} 件 全 {{count}} 件')]) ?></p>
    </div>
</div>
