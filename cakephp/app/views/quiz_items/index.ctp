<!-- File: /app/views/quiz_items/index.ctp -->

<?php $this->Html->css('quiz_items','stylesheet', array('inline' => false)); ?>
<?php $i = 1; foreach ($quiz_items as $quiz_item): ?>
<div class='quiz-item'>

	<div class="question-head">
		<h2>Question #<?php echo $i; ?>
		<span class='question'><?php echo $quiz_item['QuizItem']['question']; ?></span>
		</h2>
	</div>

	<div class="imgs-wrapper">
	<?php for ($j = 1; $j <= 4; $j ++): ?>
		<?php
			if ($quiz_item['QuizItem']['option'.$j] != '') {
				echo "<div class='img-wrapper'>".$this->Html->image($quiz_item['QuizItem']['option'.$j],
        			array('alt' => 'option'.$j, 'class' => 'image'))."</div>";
			}
		?>
	<?php endfor;?>
	</div>

</div>

<?php $i ++; endforeach; ?>

<div class='button'>
<?php echo $this->Html->link('Add Question',
	array('class' => 'inner-button', 'controller' => 'quiz_items', 'action' => 'add')); ?>
</div>