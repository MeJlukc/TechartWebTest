<ul class="pagination-group-list">
    <?php
    if ($hasPrev):
    ?>
        <li class="pagination-item pagination-item-before">
            <a href="<?=BASE_URL?>?page=<?= $page - 1 ?>" class="pagination-button-link-before">
                <span class="pagination-before-arrow"></span>
            </a>
        </li>
    <?php
    endif;
    ?>

    <?php
    for ($i = $startPaginationPage; $i <= $endPaginationPage; $i++):
    ?>
        <li class="pagination-item">
            <a href="<?=BASE_URL?>?page=<?=$i?>" class="pagination-button-link <?= $i == $page ? 'active' : '' ?>"><?=$i?></a>
        </li>
    <?php
    endfor;
    ?>

    <?php
    if ($hasNext):
    ?>
        <li class="pagination-item pagination-item-next">
            <a href="<?=BASE_URL?>?page=<?= $page + 1 ?>" class="pagination-button-link-next">
                <span class="pagination-next-arrow"></span>
            </a>
        </li>
    <?php
    endif;
    ?>
</ul>