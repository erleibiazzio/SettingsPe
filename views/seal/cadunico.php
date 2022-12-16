<?php

$this->layout = "nolayout";
$agent = $relation->owner;
?>

<div class="cadunico">
    <div class="card" style="background-image: url(<?php $this->asset("img/cadunico/card-bg.png")?>);">
        <div class="card--left">
            <div class="user-img">
                <?php if ($agent->avatar) : ?>
                    <img src="<?= $agent->avatar->url ?>" />
                <?php endif ?>
            </div>
        </div>
        <div class="card--right">
            <div class="title">
                Cadastro único da cultura
            </div>
            <div class="user-name">
                <?= $agent->name ?>
            </div>
            <div class="user-info">
                <div class="user-info__name">
                    Nome completo: <?= $agent->nomeCompleto ?>
                </div>
                <div class="user-info__notation">
                    ID: <?= $agent->id ?> | CPC: <?= $agent->CPC ?>
                </div>
            </div>
            <div class="user-description">
                <strong>Descrição curta:</strong> <?= $agent->shortDescription ?>
            </div>
            <div class="user-tags">
                <div class="tag-group">
                    <div class="tag-group__title"> Área de atuação: </div>
                    <div class="tag-group__content">
                        <?php foreach ($agent->terms['area'] as $area) : ?>
                            <div class="tag"> <?= $area ?> </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="tag-group">
                    <div class="tag-group__title"> Subárea de atuação: </div>
                    <div class="tag-group__content">
                        <?php foreach ($agent->terms['subarea'] as $subarea) : ?>
                            <div class="tag"> <?= $subarea ?> </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="logos">
        <div class="logo">
            <img src="<?php $this->asset("img/cadunico/pe-img1.png")?>" aria-hidden="true">
        </div>
        <div class="logo">
            <img src="<?php $this->asset("img/cadunico/pe-img2.png")?>" aria-hidden="true">
        </div>
        <div class="logo">
            <img src="<?php $this->asset("img/cadunico/pe-img3.png")?>" aria-hidden="true">
        </div>
        <div class="logo">
            <img src="<?php $this->asset("img/cadunico/pe-img4.png")?>" aria-hidden="true">
        </div>
        <div class="logo">
            <img src="<?php $this->asset("img/cadunico/pe-img5.png")?>" aria-hidden="true">
        </div>
    </div>
</div>

<style>
    
</style>