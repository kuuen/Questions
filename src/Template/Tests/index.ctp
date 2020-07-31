<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">

    </ul>
</nav>
<div class="questions view large-9 medium-8 columns content">


    <?= $this->Form->create() ?>
	<?php $i = 1; ?>
	<?php foreach ($questions as $question): ?>

	    <table class="vertical-table">
	        <tr>
	            <th scope="row"><?= __('問題' . $i) ?>  </th>
	            <td>  <?= nl2br( h($question->question)) ?>    </td>
	        </tr>
	        <tr>
	            <th scope="row"><?= __('1') ?></th>
	            <td><label><input name="<?= h( $question->id) ?>" value="1" id="<?= h('Q' . $i) ?>" type="radio" checked> <?= h($question->choice1) ?></label></td>
	        </tr>
	        <tr>
	            <th scope="row"><?= __('2') ?></th>
	            <td><label><input name="<?= h( $question->id) ?>" value="2" id="<?= h('Q' . $i) ?>" type="radio"><?= h($question->choice2) ?></label></td>
	        </tr>
	        <tr>
	            <th scope="row"><?= __('3') ?></th>
	            <td><label><input name="<?= h( $question->id) ?>" value="3" id="<?= h('Q' . $i) ?>" type="radio"><?= h($question->choice3) ?></label></td>
	        </tr>
	        <tr>
	            <th scope="row"><?= __('4') ?></th>
	            <td><label><input name="<?= h( $question->id) ?>" value="4" id="<?= h('Q' . $i) ?>" type="radio"><?= h($question->choice4) ?></label></td>
	        </tr>

	    </table>
	    <?php $i++; ?>
	<?php endforeach; ?>

	<?= $this->Form->button(__('回答'), ['type' => 'button', 'onclick'=>'submit()'] ) ?>
    <?= $this->Form->end() ?>
</div>
