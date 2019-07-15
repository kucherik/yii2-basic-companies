<?php if (count($model)): ?>

    <table class="table table-striped table-bordered">
    <thead><tr>
    <th>Название</th>
    <th>ИНН</th>
    <th>Генеральный директор</th>
    <th>Адрес</th>
    <th></th>
    </tr></thead><tbody>
<?php  foreach ($model as $item): ?>
<tr>
    <td><?=$item->title?></td>
    <td><?=$item->inn?></td>
    <td><?=$item->general_director?></td>
    <td><?=$item->address?></td>
    <td><?= \yii\helpers\Html::a( '<span class="glyphicon glyphicon-eye-open"></span>', '/company/view?id=' . $item->id); ?></td>
</tr>
<?php  endforeach ?>
    </tbody>
    </table>
<?php  endif ?>