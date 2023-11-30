<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Post> $posts
 */
?>

<div class="w-4/5 h-max m-auto view">
    <div class="flex justify-between items-center my-10">
        <h1 class="table-title">Posts Table</h1>
        <a class="rounded-full create-btn" href="posts/add">Create Post</a>
    </div>
    <div class="nav">
        <a href="./users" class="items bg-white py-2 rounded-lg" style="border: 1px solid rgb(103, 86, 140,0.3)">List of Users</a>
        <a href="./posts" class="items bg-white py-2 rounded-lg" style="border: 1px solid rgb(103, 86, 140,0.3)">List of Posts</a>
    </div>
    <div class="bg-white p-14 pb-10 rounded-3xl shadow-sm">
        <div class="table-responsive">
            <table class="table-auto">
                <thead>
                    <tr>
                        <th>
                            <?= $this->Paginator->sort('post_id', '<span>Post ID</span>', ['escape' => false]) ?>
                        </th>
                        <th>
                            <?= $this->Paginator->sort('username', '<span>User ID</span>', ['escape' => false]) ?>
                        </th>
                        <th>
                            <?= $this->Paginator->sort('title', '<span>Title</span>', ['escape' => false]) ?>
                        </th>
                        <th>
                            <?= $this->Paginator->sort('category', '<span>Category</span>', ['escape' => false]) ?>
                        </th>
                        <th>
                            <?= $this->Paginator->sort('status', '<span>Status</span>', ['escape' => false]) ?>
                        </th>
                        <th>
                            <?= $this->Paginator->sort('created', '<span>Created</span>', ['escape' => false]) ?>
                        </th>
                        <th>
                            <?= $this->Paginator->sort('modified', '<span>Modified</span>', ['escape' => false]) ?>
                        </th>
                        <th>
                            <center>
                                <?= __('Actions') ?>
                            </center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($posts as $post): ?>
                        <tr>
                            <td>
                                <center>
                                    <?= $this->Number->format($post->post_id) ?>
                                </center>
                            </td>
                            <td>
                                <?= h($post->username) ?>
                            </td>
                            <td>
                                <?= h($post->title) ?>
                            </td>
                            <td>
                                <?= h($post->category) ?>
                            </td>
                            <td>
                                <?= h($post->status) ?>
                            </td>
                            <td>
                                <?= h($post->created) ?>
                            </td>
                            <td>
                                <?= h($post->modified) ?>
                            </td>
                            <td class="actions">
                                <center>
                                    <?= $this->Html->Link('View', ['action' => 'view', $post->post_id], ['class' => 'action']) ?>
                                    <?= $this->Html->Link('Edit', ['action' => 'edit', $post->post_id], ['class' => 'action']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['style' => 'color: red !important', 'action' => 'delete', $post->post_id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->post_id), 'class' => 'action']) ?>
                                </center>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    <?= $this->Paginator->last(__('last') . ' >>') ?>
                </ul>
                <p></p>
            </div>
        </div>
    </div>

</div>