<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@300&family=Quicksand:wght@600&display=swap');

    *{
        font-family: 'Poppins', sans-serif;
    }

    h1{
        color: rgb(34, 34, 59, 0.85);
        letter-spacing: 0.5px;
        font-family: 'Quicksand', sans-serif;
    }

    th, span, center, .action{
        letter-spacing: 0.5px;
        font-size: 15px;
        font-family: 'Quicksand', sans-serif;
        color: #67568c;
    }

    td{
        font-size: 15px;
        color: #1f1235;
        font-family: 'Quicksand', sans-serif;
        color: rgb(74, 78, 105, 0.9);
    }

    .create-btn{
        font-family: 'Quicksand', sans-serif;
        padding: 10px 25px;
        letter-spacing: 0.5px;
        cursor: pointer;
        background-color: #ff6e6c;
        color: #1f1235;
        /* color: white; */
        transition: 0.5s;
        font-size: 15px;
        position: relative;
        top: 0;
        transition: 0.3s ease;
    }

    .create-btn:hover{
        color: #1f1235;
        top: -5px;
        transition: 0.3s ease;
    }

</style>
<body style="background-color: #f8f5f2">
    <div class="flex h-screen " style="">
        <div class="flex-initial w-96 rounded-r-3xl" style="background-color: #078080">1</div>
        <div class="flex-auto flex justify-center my-40">
                <?= $this->Flash->render()  ?>
                <?= $this->fetch('content')  ?>
        </div>
    </div>
    <!-- <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>Cake</span>PHP</a>
        </div>
        <div class="top-nav-links">
            <p class="text-red-600">svsav</p>
            <a target="_blank" rel="noopener" href="https://book.cakephp.org/5/" class="">Documentations</a>
            <a target="_blank" rel="noopener" href="https://api.cakephp.org/">API</a>
        </div>
    </nav>
    <main class="main">
        <div class="container">
   
            
        </div>
    </main> -->
    <footer>
    </footer>
</body>

</html>

<!-- #$this->Flash->render() 
             #$this->fetch('content')  -->