<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="w-2/5 h-max m-auto">
    <div>
        <div class="users form content rounded-3xl">
            <?= $this->Form->create($post) ?>
            <h1 class="title">Create New Post</h1>
            <div class="grid gap-5 mt-8">
                <?php
                $status = ['Active' => 'Active', 'Inactive' => 'Inactive'];

                echo '<div><p class="p1">Username</p>' . $this->Form->select('username', $users, ['class' => 'p2 pl-3']) . "</div>";
                echo '<div><p class="p1">Title</p>' . $this->Form->text('title', ['class' => 'p2', 'maxLength'=>'32' , 'minLength'=>'2']) . '</div>';
                echo '<div><p class="p1">Category</p>' .
                    $this->Form->radio('category', [
                        ['value' => 'Technology', 'text' => '  Technology', 'label' => ['class' => 'p2 radio']],
                        ['value' => 'Lifestyle', 'text' => '  Lifestyle', 'label' => ['class' => 'p2 radio']],
                        ['value' => 'Travel', 'text' => '  Travel', 'label' => ['class' => 'p2 radio']],
                        ['value' => 'Health and Wellness', 'text' => '  Health and Wellness', 'label' => ['class' => 'p2 radio']],
                        ['value' => 'Food and Cooking', 'text' => '  Food and Cooking', 'label' => ['class' => 'p2 radio']],
                        ['value' => 'Fashion', 'text' => '  Fashion', 'label' => ['class' => 'p2 radio']],
                        ['value' => 'Entertainment', 'text' => '  Entertainment', 'label' => ['class' => 'p2 radio']],
                        ['value' => 'Others', 'text' => '  Others', 'label' => ['class' => 'p2 radio']],
                    ])
                    . "</div>";
                    echo '<div><p class="p1">Content</p>' . $this->Form->textarea('content', ['class' => 'p-3 p2', 'maxLength'=>'200' , 'minLength'=>'1']) . "</div>";
                echo '<div><p class="p1">Status</p>' . $this->Form->select('status', $status, ['default' => 'Active', 'class' => 'p2 pl-3']) . "</div>";
                ?>
            </div>
            <div class="btn-div">
                <?= $this->Form->submit(__('Submit')) ?>
                <a href="../posts" class="cancel" >Cancel</a>
            </div>

            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
