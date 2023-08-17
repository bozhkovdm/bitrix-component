<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
      die();


?>


<table>
      <thead>
            <tr>
                  <th></th>
            </tr>
      </thead>
      <tbody>
            <? foreach ($arResult['groups'] as $group): ?>
                  <tr>
                        <td>
                              <?= $group['ID'] ?>
                        </td>
                        <td>
                              <?= $group['NAME'] ?>
                        </td>
                        <td>
                              <?= $group['DESCRIPTION'] ?>
                        </td>
                        <td>
                              <a href="/<?= $group['ID'] ?>">Смотреть детали группы</a>
                        </td>
                  </tr>

            <? endforeach; ?>
      </tbody>
</table>