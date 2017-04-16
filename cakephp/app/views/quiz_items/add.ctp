<!-- File: /app/views/quiz_items/add.ctp -->

<?php $this->Html->css('add','stylesheet', array('inline' => false)); ?>

<div id='content-wrapper'>
<h1>Add Question</h1>
<?php
echo $this->Form->create('QuizItem');
echo $this->Form->input('question', array('rows' => '3', 'label' => 'Question'));
echo $this->Form->input('option1', array('rows' => '2', 'label' => 'Url 1 (optional)'));
echo $this->Form->input('option2', array('rows' => '2', 'label' => 'Url 2 (optional)'));
echo $this->Form->input('option3', array('rows' => '2', 'label' => 'Url 3 (optional)'));
echo $this->Form->input('option4', array('rows' => '2', 'label' => 'Url 4 (optional)'));
echo $this->Form->end('Save Question');
?>
</div>