<?php


$listEvalute = EvaluteDTO::getInstance()->GetListEvalute($idProduct);
$count = count($listEvalute);
for ($i = 0; $i < $count; $i++) {
    $account = AccountDTO::getInstance()->GetAccount($listEvalute[$i]->GetIdAccount());
    $fullName = $account->GetFullName();
    $comment = $listEvalute[$i]->GetComment();
    $star = $listEvalute[$i]->GetStar();
?>

    <div class="review__item">
        <table>
            <tr>
                <td rowspan="2">
                    <img src="../assets/images/other/avatar.png" alt="" style="width: 50px; height: 50px;">
                </td>
                <td>
                    <p class="review__username"><?php echo $fullName ?></p>
                </td>
            </tr>
            <tr>
                <td style="padding-left: 5px;">
                    <img src="../assets/images/stars/<?php echo $star ?>.png" alt="" style="height: 25px;">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <p class="review__content">
                        <?php echo $comment?>
                    </p>
                </td>
            </tr>
        </table>
    </div>
<?php
}
?>