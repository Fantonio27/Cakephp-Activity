<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="w-2/5 h-max m-auto">
    <div class="">
        <div class="users form content rounded-3xl">
            <?= $this->Form->create($user) ?>
            <h1 class="title">Create New User</h1>
            <div class="grid xl:grid-cols-2 gap-x-10 gap-y-7">
                <?php
                $sizes = ['Active' => 'Active', 'Inactive' => 'Inactive'];
                echo '<div><p class="p1">Fullname</p>' . $this->Form->text('fullname', ['class' => 'p2', 'maxLength'=>'32' , 'minLength'=>'2', 'pattern' => '[a-zA-Z]+', 'title' => 'Letter Only' ]) . '</div>';
                echo '<div><p class="p1">Username</p>' . $this->Form->text('username', ['class' => 'p2', 'maxLength'=>'16' , 'minLength'=>'2', 'pattern' => '[a-zA-Z0-9]+', 'title' => 'Letter or Number only']) . '</div>';
                echo '<div><p class="p1">Email Address</p>' . $this->Form->email('email', ['class' => 'p2']) . '</div>';
                echo '<div><p class="p1">Password</p>' . $this->Form->password('password', ['class' => 'p2', 'maxLength'=>'16' , 'minLength'=>'8']) . '</div>';
                echo '<div><p class="p1">Date of Birth</p>' . $this->Form->date('date_of_birth', ['class' => 'p2']) . '</div>';
                echo '<div><p class="p1">Contact No</p>' . $this->Form->number('contact_no', ['class' => 'p2', 'onKeyPress' => "if(this.value.length==11) return false;"]) . '</div>';
                ?>
            </div>

            <div class="grid gap-5 mt-8">
                <?php
                $sizes = ['Active' => 'Active', 'Inactive' => 'Inactive'];
                echo '<div><p class="p1">Address</p>' . $this->Form->textarea('address', ['class' => 'p-3 p2', 'maxLength'=>'200' , 'minLength'=>'2']) . "</div>";
                echo '<div><p class="p1">Bio</p>' . $this->Form->textarea('bio', ['class' => 'p-3 p2', 'maxLength'=>'200']) . "</div>";
                echo '<div><p class="p1">Gender</p>' .
                    $this->Form->radio('gender', [
                        ['value' => 'Male', 'text' => '  Male', 'label' => ['class' => 'p2 radio']],
                        ['value' => 'Female', 'text' => '  Female', 'label' => ['class' => 'p2 radio']],
                        ['value' => 'Prefer not to answer', 'text' => '  Prefer not to answer', 'label' => ['class' => 'p2 radio']],
                    ])
                    . "</div>";
                echo '<div><p class="p1">Status</p>' . $this->Form->select('status', $sizes, ['default' => 'Active', 'class' => 'p2 pl-3']) . "</div>";
                ?>
            </div>
            <div class="btn-div">
                <?= $this->Form->submit(__('Submit')) ?>
                <a href="../users" class="cancel" >Cancel</a>
            </div>

            <?= $this->Form->end() ?>
        </div>
    </div>
</div>