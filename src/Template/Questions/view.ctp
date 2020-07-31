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
        <li><?= $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Question Kinds'), ['controller' => 'QuestionKinds', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question Kind'), ['controller' => 'QuestionKinds', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questions view large-9 medium-8 columns content">
    <h3><?= h($question->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Question Kind') ?></th>
            <td><?= $question->has('question_kind') ? $this->Html->link($question->question_kind->name, ['controller' => 'QuestionKinds', 'action' => 'view', $question->question_kind->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= h($question->question) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Choice1') ?></th>
            <td><?= h($question->choice1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Choice2') ?></th>
            <td><?= h($question->choice2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Choice3') ?></th>
            <td><?= h($question->choice3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Choice4') ?></th>
            <td><?= h($question->choice4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($question->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Answer') ?></th>
            <td><?= $this->Number->format($question->answer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($question->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($question->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Explanation') ?></h4>
        <?= $this->Text->autoParagraph(h($question->explanation)); ?>
    </div>
</div>
