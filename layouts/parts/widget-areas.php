<?php

use MapasCulturais\i;

$entityClass = $entity->getClassName();
$entityName = strtolower(array_slice(explode('\\', $entityClass), -1)[0]);
$areas = array_values($app->getRegisteredTaxonomy($entityClass, 'area')->restrictedTerms);
$subareas = array_values($app->getRegisteredTaxonomy($entityClass, 'subarea')->restrictedTerms);
sort($areas);
?>

<div class="widget areas sub-area">
    <div>
        <h3> <span class="required"></span> <?php $this->dict('taxonomies:area: name') ?></h3>
        <?php if ($this->isEditable()) : ?>
            <span id="term-area" class="js-editable-taxonomy" data-original-title="<?php $this->dict('taxonomies:area: name') ?>" data-emptytext="<?php $this->dict('taxonomies:area: select at least one') ?>" data-restrict="true" data-taxonomy="area"><?php echo implode('; ', $entity->terms['area']) ?></span>
        <?php else : ?>
            <?php
            foreach ($areas as $i => $t) : if (in_array($t, $entity->terms['area'])) : ?>
                    <a class="tag tag-<?php echo $this->controller->id ?>" href="<?php echo $app->createUrl('site', 'search') ?>##(<?php echo $entityName ?>:(areas:!(<?php echo $i ?>)),global:(enabled:(<?php echo $entityName ?>:!t),filterEntity:<?php echo $entityName ?>))">
                        <?php echo $t ?>
                    </a>
            <?php endif;
            endforeach; ?>
        <?php endif; ?>
    </div>

    <div>
        <h3> <span class="required"></span> <?php i::_e('Sub área de atuação'); ?></h3>
        <?php if ($this->isEditable()) : ?>
            <span id="term-area" class="js-editable-taxonomy" data-original-title="<?php i::_e('Sub área de atuação'); ?>" data-emptytext="<?php i::_e('Selecione a sub-área de atuação'); ?>" data-restrict="true" data-taxonomy="subarea"><?php echo implode('; ', $entity->terms['subarea']) ?></span>
        <?php else : ?>
            <?php
            foreach ($subareas as $i => $t) : if (in_array($t, $entity->terms['subarea'])) : ?>
                    <a class="tag tag-<?php echo $this->controller->id ?>" href="<?php echo $app->createUrl('site', 'search') ?>##(<?php echo $entityName ?>:(subareas:!(<?php echo $i ?>)),global:(enabled:(<?php echo $entityName ?>:!t),filterEntity:<?php echo $entityName ?>))">
                        <?php echo $t ?>
                    </a>
            <?php endif;
            endforeach; ?>
        <?php endif; ?>
    </div>

</div>