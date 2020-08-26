
<h3>Здравствуйте, <?= $_GET['name'] ?>. Ваш заказ успешно подтверждён и уже собирается.<h3>
<table style="border: 1px solid #ddd; border-collapse: collapse; width: 100%; font-size: 20px; font-family: Roboto Light">
    <thead>
        <tr style="background: #f9f9f9;">
            <th style="padding: 8px; border: 1px solid #ddd; font-family: Roboto Light">#</th>
            <th style="padding: 8px; border: 1px solid #ddd; font-family: Roboto Light">Позиция</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; foreach($goods as $item): ?>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd; font-family: Roboto Light"><?= $i ?></td>
                <td style="padding: 8px; border: 1px solid #ddd; font-family: Roboto Light"><?= $item ?></td>
            </tr>
        <?php $i++; endforeach; ?>
    </tbody>
</table>
<h2>Мы позвоним на указанный Вами номер(<?= $_GET['phone'] ?>) или же напишем Вам, когда заказ будет готов!</h2>