<h1>Artigos</h1>
<?= $this->Html->link('Adicionar artigo', array('controller' => 'Articles', 'action' => 'add')) ?>
<table>
    <tr>
        <th>Título</th>
        <th>Criado em</th>
    </tr>

    <?php foreach ($articles as $article): ?>
    <tr>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_COOKIE) ?>
        </td>
        <td>
            <?= $this->Html->link('Edit', ['action' => 'edit', $article->slug]) ?>|
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $article->slug],
                ['confirm' => 'Você tem cereza?'])
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
