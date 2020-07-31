<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 */
?>

<?php
$this->assign('title', '問題マスタ');
//assign()の第一引数はfetch()の引数と合わせます。第二引数にページタイトルを記述します。
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $question->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $question->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Question Kinds'), ['controller' => 'QuestionKinds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question Kind'), ['controller' => 'QuestionKinds', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questions form large-9 medium-8 columns content">
    <?= $this->Form->create($question) ?>
    <fieldset>
        <legend><?= __('Edit Question') ?></legend>
        <?php
            echo $this->Form->control('question_kind_id', ['options' => $questionKinds]);
            echo $this->Form->control('question');
            echo $this->Form->control('choice1');
            echo $this->Form->control('choice2');
            echo $this->Form->control('choice3');
            echo $this->Form->control('choice4');
            echo $this->Form->control('answer');
            echo $this->Form->control('explanation');
        ?>
    </fieldset>
    <?= $this->Form->button(__('登録'), ['type' => 'button', 'onclick'=>'submit()'] ) ?>
    <?= $this->Form->end() ?>
</div>
