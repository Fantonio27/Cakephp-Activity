<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>

<div class="w-4/5 h-max m-auto view">
    <div class="flex justify-between items-center my-10">
        <h1 class="table-title">Users Table</h1>
        <a class="rounded-full create-btn" href="users/add">Create User</a>
    </div>
    <div class="nav">
        <a href="./users" class="items bg-white py-2 rounded-lg" style="border: 1px solid rgb(103, 86, 140,0.3)">List of Users</a>
        <a href="./posts" class="items bg-white py-2 rounded-lg" style="border: 1px solid rgb(103, 86, 140,0.3)">List of Posts</a>
    </div>
    <div class="bg-white p-14 pb-10 rounded-3xl shadow-sm">
        <div class="table-responsive">
            <table class="table-auto">
                <thead class="">
                    <tr>
                        <th>
                            <?= $this->Paginator->sort('user_id', '<span>User ID</span>', ['escape' => false]) ?>
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
                                    <?= $this->Html->Link('View', ['action' => 'view', $user->user_id], ['class' => 'action']) ?>
                                    <?= $this->Html->Link('Edit', ['action' => 'edit', $user->user_id], ['class' => 'action']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['style' => 'color: red !important', 'action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id), 'class' => 'action']) ?>
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

