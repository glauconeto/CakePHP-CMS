<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $articlesTag
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $articlesTag->article_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $articlesTag->article_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Articles Tags'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articlesTags form content">
            <?= $this->Form->create($articlesTag) ?>
            <fieldset>
                <legend><?= __('Edit Articles Tag') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
