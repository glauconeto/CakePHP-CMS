<h1><?= h($article->title) ?></h1>

<p><?= h($article->body) ?></p>

<p><small>Created: <?= $article->created->format(DATE_COOKIE) ?></small></p>

<p><?= $this->Html->link('Edit', ['action' => 'edit', $article->slug]) ?></p>
