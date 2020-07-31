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


	<h1>得点:<?php echo $tokuten ?>/10</h1>
	<?php $i = 1; ?>

	<?php foreach ($results as $result): ?>

	    <table class="vertical-table">
	        <tr>
	            <th scope="row"><?= __('問題' . $i) ?>  </th>
	            <td> <?= nl2br($result->question) ?>  </td>
	        </tr>
	        <tr>
	            <th scope="row"><?= __('1') ?></th>
	            <td><label> <?= h($result->choice1) ?></label></td>
	        </tr>
	        <tr>
	            <th scope="row"><?= __('2') ?></th>
	            <td><label><?= h($result->choice2) ?></label></td>
	        </tr>
	        <tr>
	            <th scope="row"><?= __('3') ?></th>
	            <td><label><?= h($result->choice3) ?></label></td>
	        </tr>
	        <tr>
	            <th scope="row"><?= __('4') ?></th>
	            <td><label><?= h($result->choice4) ?></label></td>
	        </tr>
	        <tr>
				<th scope="row"><font color="red" ><?= __('回答') ?></font></th>
				<td>正解：<?= h($result->answer) ?> &ensp;&ensp; あなたの答え：<?= h($result->kaitou) ?> &ensp;&ensp; 判定:<?= h($result->hantei) ?> </td>
	        </tr>
			<tr>
				<th scope="row"><font color="red" ><?= __('解説') ?></font></th>
				<td> <?= nl2br( h($result->explanation)) ?>  </td>
			</tr>
	    </table>
	    <?php $i++; ?>
	<?php endforeach; ?>


	<?php echo $this->Html->link( '再挑戦', '/tests/', array('class' => 'button', 'target' => '_blank')); ?>

</div>
