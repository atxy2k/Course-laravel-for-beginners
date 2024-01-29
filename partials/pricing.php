<?php 

function printPricing(array $data){ ?>

<div class="col-lg-4 col-md-6 col-12">
    <div class="pricing-style-fourteen">
    <div class="table-head">
        <h6 class="title"><?= isset($data['title']) ? $data['title'] : '' ?></h4>
        <p><?= isset($data['description']) ? $data['description'] : '' ?></p>
        <div class="price">
            <h2 class="amount">
            <span class="currency">$</span><?= isset($data['price']) ? $data['price'] : '' ?><span class="duration">/mo </span>
            </h2>
        </div>
    </div>

    <div class="light-rounded-buttons">
        <a href="javascript:void(0)" class="btn primary-btn-outline">
        Start free trial
        </a>
    </div>

    <div class="table-content">
        <ul class="table-list">
            <?php if(isset($data['items'])){ ?>
                <?php foreach($data['items'] as $item){ ?>
                    <li> <i class="<?= $item['active'] ? 'lni lni-checkmark-circle' : 'lni lni-checkmark-circle deactive' ?>"></i> <?= $item['title'] ?></li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>
    </div>
</div>

<?php } ?>