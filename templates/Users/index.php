<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<!-- <div class="users index content">
    <?= $this->Form->postButton('New User', ['action' => 'add'], ['class' => 'rounded']) ?>
    <h3><?= __('Users') ?></h3> 
    
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('fullname') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('date_of_birth') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('contact_no') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->user_id) ?></td>
                    <td><?= h($user->fullname) ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->date_of_birth) ?></td>
                    <td><?= h($user->gender) ?></td>
                    <td><?= h($user->address) ?></td>
                    <td><?= $this->Number->format($user->contact_no) ?></td>
                    <td><?= h($user->status) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->user_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->user_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div> -->
<div class="w-4/5 h-max">
    <div class="flex justify-between items-center my-10">
        <h1 class="text-5xl font-bold">Users Table</h1>
        <a class="rounded-full create-btn" href="users/add">Create User</a>
    </div>
    <div class="bg-white p-14 rounded-3xl shadow-sm">
        <div class="table-responsive">
            <table class="table-auto">
                <thead class="">
                    <tr>
                        <th>
                            <center>
                                <?= $this->Paginator->sort('user_id', '<span>User ID</span>', ['escape' => false]) ?>
                            </center>
                        </th>
                        <th>
                            <?= $this->Paginator->sort('fullname', '<span>Fullname</span>', ['escape' => false]) ?>
                        </th>
                        <th>
                            <?= $this->Paginator->sort('username', '<span>Username</span>', ['escape' => false]) ?>
                        </th>
                        <th>
                            <?= $this->Paginator->sort('email', '<span>Email Address</span>', ['escape' => false]) ?>
                        </th>
                        <!-- <th>
                        <?= $this->Paginator->sort('date_of_birth') ?>
                    </th> -->
                        <!-- <th>
                        <?= $this->Paginator->sort('gender') ?>
                    </th> -->
                        <!-- <th>
                        <?= $this->Paginator->sort('address') ?>
                    </th> -->
                        <!-- <th>
                        <?= $this->Paginator->sort('contact_no') ?>
                    </th> -->
                        <th>
                            <?= $this->Paginator->sort('status', '<span>Status</span>', ['escape' => false]) ?>
                        </th>
                        <th>
                            <?= $this->Paginator->sort('created', '<span>Created</span>', ['escape' => false]) ?>
                        </th>
                        <!-- <th>
                        <?= $this->Paginator->sort('modified') ?>
                    </th> -->
                        <th>
                            <center>
                                <?= __('Actions') ?>
                            </center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td>
                                <center>
                                    <?= $this->Number->format($user->user_id) ?>
                                </center>
                            </td>
                            <td>
                                <?= h($user->fullname) ?>
                            </td>
                            <td>
                                <?= h($user->username) ?>
                            </td>
                            <td>
                                <?= h($user->email) ?>
                            </td>
                            <!-- <td>
                            <?= h($user->date_of_birth) ?>
                        </td>
                        <td>
                            <?= h($user->gender) ?>
                        </td>
                        <td>
                            <?= h($user->address) ?>
                        </td> -->
                            <!-- <td>
                            <?= $this->Number->format($user->contact_no) ?>
                        </td> -->
                            <td>
                                <?= h($user->status) ?>
                            </td>
                            <td>
                                <?= h($user->created) ?>
                            </td>
                            <!-- <td>
                            <?= h($user->modified) ?>
                        </td> -->
                            <td class="actions">
                                <center>
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->user_id])?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->user_id])?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id)]) ?>
                                </center>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>