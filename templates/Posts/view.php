<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
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
                <?= $this->Html->link(__('List of Posts'), ['action' => 'index'], ['class' => 'items']) ?>
                <?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->post_id], ['class' => 'items']) ?>
                <?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->post_id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->post_id), 'class' => 'items']) ?>
                <?= $this->Html->link(__('Create Post'), ['action' => 'add'], ['class' => 'items']) ?>
            </div>
            <div class="grid gap-5 mt-8">
                <?php
                $status = ['Active' => 'Active', 'Inactive' => 'Inactive'];

                echo '<div><p class="p1">Post ID</p>' . $this->Form->text('post_id', ['class' => 'p2', 'value' => $post->post_id, 'disabled' => 'true']) . '</div>';
                echo '<div><p class="p1">User ID</p>' . $this->Form->text('username', ['class' => 'p2', 'value' => $post->username, 'disabled' => 'true']) . '</div>';
                echo '<div><p class="p1">Title</p>' . $this->Form->text('title', ['class' => 'p2', 'value' => $post->title, 'disabled' => 'true']) . '</div>';
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
                    ], ['value' => $post->category, 'disabled' => 'true'])
                    . "</div>";
                echo '<div><p class="p1">Content</p>' . $this->Form->textarea('content', ['class' => 'p-3 p2','value' => $post->content, 'disabled' => 'true']) . "</div>";
                echo '<div><p class="p1">Status</p>' . $this->Form->select('status', $status, ['default' => $post->status, 'class' => 'p2 pl-3']) . "</div>";
                ?>
            </div>
        </div>
    </div>
</div>