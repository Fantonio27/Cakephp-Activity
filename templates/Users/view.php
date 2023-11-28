<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="w-2/5 h-max m-auto">
    <div class="">
        <div class="users form content rounded-3xl">
            <h1 class="title">View Record</h1>
            <div class="nav">
                <?= $this->Html->link(__('List of Users'), ['action' => 'index'], ['class' => 'items']) ?>
                <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->user_id], ['class' => 'items']) ?>
                <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id), 'class' => 'items']) ?>
                <?= $this->Html->link(__('Create User'), ['action' => 'add'], ['class' => 'items']) ?>
            </div>
            <div class="grid xl:grid-cols-2 gap-x-10 gap-y-7">
                <?php
                $sizes = ['Active' => 'Active', 'Inactive' => 'Inactive'];
                echo '<div><p class="p1">Fullname</p>' . $this->Form->text('fullname', ['class' => 'p2', 'value' => $user->fullname, 'disabled' => 'true']) . '</div>';
                echo '<div><p class="p1">Username</p>' . $this->Form->text('username', ['class' => 'p2', 'value' => $user->username, 'disabled' => 'true']) . '</div>';
                echo '<div><p class="p1">Email Address</p>' . $this->Form->email('email', ['class' => 'p2', 'value' => $user->email, 'disabled' => 'true']) . '</div>';
                echo '<div><p class="p1">Password</p>' . $this->Form->password('password', ['class' => 'p2', 'value' => $user->password, 'disabled' => 'true']) . '</div>';
                echo '<div><p class="p1">Date of Birth</p>' . $this->Form->date('date_of_birth', ['class' => 'p2', 'value' => $user->date_of_birth, 'disabled' => 'true']) . '</div>';
                echo '<div><p class="p1">Contact No</p>' . $this->Form->number('contact_no', ['class' => 'p2', 'value' => $user->contact_no, 'disabled' => 'true']) . '</div>';
                ?>
            </div>

            <div class="grid gap-5 mt-8">
                <?php
                $sizes = ['Active' => 'Active', 'Inactive' => 'Inactive'];
                echo '<div><p class="p1">Address</p>' . $this->Form->textarea('address', ['class' => 'p-3 p2', 'value' => $user->address, 'disabled' => 'true']) . "</div>";
                echo '<div><p class="p1">Bio</p>' . $this->Form->textarea('bio', ['class' => 'p-3 p2', 'value' => $user->bio, 'disabled' => 'true']) . "</div>";
                echo '<div><p class="p1">Gender</p>' .
                    $this->Form->radio('gender', [
                        ['value' => 'Male', 'text' => '  Male', 'label' => ['class' => 'p2 radio']],
                        ['value' => 'Female', 'text' => '  Female', 'label' => ['class' => 'p2 radio']],
                        ['value' => 'Prefer not to answer', 'text' => '  Prefer not to answer', 'label' => ['class' => 'p2 radio']],
                    ], ['value' => $user->gender, 'disabled' => 'true'])
                    . "</div>";
                echo '<div><p class="p1">Status</p>' . $this->Form->select('status', $sizes, ['default' => 'Active', 'class' => 'p2 pl-3', 'value' => $user->status, 'disabled' => 'true']) . "</div>";
                ?>
            </div>
        </div>
    </div>
</div>