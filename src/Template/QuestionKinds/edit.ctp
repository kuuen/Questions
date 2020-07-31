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
        <li><?= $this->Form->postLink(
                __('削除'),
                ['action' => 'delete', $questionKind->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $questionKind->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('問題種別一覧'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('問題一覧'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('問題作成'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questionKinds form large-9 medium-8 columns content">
    <?= $this->Form->create($questionKind) ?>
    <fieldset>
        <legend><?= __('問題種別編集') ?></legend>
        <?php
            echo $this->Form->control('name', ['label' => '名前']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('更新'), ['type' => 'button', 'onclick'=>'submit()'] ) ?>
    <?= $this->Form->end() ?>
</div>
