<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QuestionKind[]|\Cake\Collection\CollectionInterface $questionKinds
 */
?>
<?php
$this->assign('title', '問題種別マスタ');
//assign()の第一引数はfetch()の引数と合わせます。第二引数にページタイトルを記述します。
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('操作') ?></li>
        <li><?= $this->Html->link(__('新規問題種別'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('問題一覧'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('問題作成'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questionKinds index large-9 medium-8 columns content">
    <h3><?= __('問題種別') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('名前') ?></th>
                <th scope="col"><?= $this->Paginator->sort('作成日時') ?></th>
                <th scope="col"><?= $this->Paginator->sort('編集日時') ?></th>
                <th scope="col" class="actions"><?= __('操作') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questionKinds as $questionKind): ?>
            <tr>
                <td><?= $this->Number->format($questionKind->id) ?></td>
                <td><?= h($questionKind->name) ?></td>
                <td><?= h($questionKind->created) ?></td>
                <td><?= h($questionKind->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('表示'), ['action' => 'view', $questionKind->id]) ?>
                    <?= $this->Html->link(__('編集'), ['action' => 'edit', $questionKind->id]) ?>
                    <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $questionKind->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionKind->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
