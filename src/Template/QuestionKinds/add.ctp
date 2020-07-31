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
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Question Kinds'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questionKinds form large-9 medium-8 columns content">
    <?= $this->Form->create($questionKind) ?>
    <fieldset>
        <legend><?= __('Add Question Kind') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
