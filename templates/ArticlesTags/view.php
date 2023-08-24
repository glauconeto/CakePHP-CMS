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
            <?= $this->Html->link(__('Edit Articles Tag'), ['action' => 'edit', $articlesTag->article_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Articles Tag'), ['action' => 'delete', $articlesTag->article_id], ['confirm' => __('Are you sure you want to delete # {0}?', $articlesTag->article_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Articles Tags'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Articles Tag'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articlesTags view content">
            <h3><?= h($articlesTag->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Article Id') ?></th>
                    <td><?= $this->Number->format($articlesTag->article_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tag Id') ?></th>
                    <td><?= $this->Number->format($articlesTag->tag_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
