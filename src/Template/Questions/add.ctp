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
        <li class="heading"><?= __('操作') ?></li>
        <li><?= $this->Html->link(__('問題一覧'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="questions form large-9 medium-8 columns content">
    <?= $this->Form->create($question) ?>
    <fieldset>
        <legend><?= __('問題新規登録') ?></legend>
        <?php
            echo $this->Form->control('question_kind_id', ['options' => $questionKinds, 'label' => '問題種別']);
            echo $this->Form->control('question', ['label' => '問題']);
            echo $this->Form->control('choice1', ['label' => '選択肢1']);
            echo $this->Form->control('choice2', ['label' => '選択肢2']);
            echo $this->Form->control('choice3', ['label' => '選択肢3']);
            echo $this->Form->control('choice4', ['label' => '選択肢4']);
            echo $this->Form->control('answer', ['label' => '答え']);
            echo $this->Form->control('explanation', ['label' => '解説']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('登録')) ?>
    <?= $this->Form->end() ?>
</div>
