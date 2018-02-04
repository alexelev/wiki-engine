<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use franciscomaya\sceditor\SCEditor;

/* @var $this yii\web\View */
/* @var $model app\models\Discussion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="discussion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->widget(SCEditor::className(), [
        'options' => ['rows' => 15],
        'clientOptions' => [
            'plugins' => 'bbcode',
            'width' => '100%',
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
