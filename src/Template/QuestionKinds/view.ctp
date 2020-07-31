<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QuestionKind $questionKind
 */
?>
<?php
$this->assign('title', '問題種別マスタ');
//assign()の第一引数はfetch()の引数と合わせます。第二引数にページタイトルを記述します。
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('操作') ?></li>
        <li><?= $this->Html->link(__('問題種別編集'), ['action' => 'edit', $questionKind->id]) ?> </li>
        <li><?= $this->Form->postLink(__('問題種別削除'), ['action' => 'delete', $questionKind->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionKind->id)]) ?> </li>
        <li><?= $this->Html->link(__('問題種別一覧'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('問題種別新規作成'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('問題一覧'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('問題種別新規作成'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questionKinds view large-9 medium-8 columns content">
    <h3><?= h($questionKind->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row" width="80px;" ><?= __('名前') ?></th>
            <td><?= h($questionKind->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($questionKind->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('作成日時') ?></th>
            <td><?= h($questionKind->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('修正日時') ?></th>
            <td><?= h($questionKind->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('関連した問題') ?></h4>
        <?php if (!empty($questionKind->questions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col" width="5%"><?= __('Id') ?></th>
                <th scope="col" width="11%"><?= __('問題種別Id') ?></th>
                <th scope="col" width="35%"><?= __('問題') ?></th>

                <th scope="col"><?= __('作成日時') ?></th>
                <th scope="col"><?= __('編集日時') ?></th>
                <th scope="col" class="actions"><?= __('操作') ?></th>
            </tr>
            <?php foreach ($questionKind->questions as $questions): ?>
            <tr>
                <td><?= h($questions->id) ?></td>
                <td><?= h($questions->question_kind_id) ?></td>
                <td><?= h($questions->question) ?></td>

                <td><?= h($questions->created) ?></td>
                <td><?= h($questions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('詳細'), ['controller' => 'Questions', 'action' => 'view', $questions->id]) ?>
                    <?= $this->Html->link(__('編集'), ['controller' => 'Questions', 'action' => 'edit', $questions->id]) ?>
                    <?= $this->Form->postLink(__('削除'), ['controller' => 'Questions', 'action' => 'delete', $questions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
