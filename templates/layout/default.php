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

    * {
        font-family: 'Poppins', sans-serif;
    }

    .view < h1 {
        color: rgb(34, 34, 59, 0.85);
        letter-spacing: 0.5px;
        font-family: 'Quicksand', sans-serif;
    }

    .view th,
    .view span,
    .view center,
    .action {
        letter-spacing: 0.5px;
        font-size: 15px;
        font-family: 'Quicksand', sans-serif;
        color: #67568c;
        text-align: center;
    }

    .view td {
        font-size: 15px;
        color: #1f1235;
        font-family: 'Quicksand', sans-serif;
        color: rgb(74, 78, 105, 0.9);
        text-align: center;
    }

    .create-btn {
        font-family: 'Quicksand', sans-serif;
        padding: 10px 25px;
        letter-spacing: 0.5px;
        cursor: pointer;
        background-color: #ff6e6c;
        /* color: #1f1235; */
        color: white;
        transition: 0.5s;
        font-size: 15px;
        position: relative;
        top: 0;
        transition: 0.3s ease;
    }

    .create-btn:hover {
        color: white;
        top: -5px;
        transition: 0.3s ease;
    }

    .users{
        padding: 50px;
    }

    .title {
        font-size: 26px;
        font-weight: bold;
        /* font-family: 'Poppins', sans-serif; */
        letter-spacing: 1px;
        color: #ff6e6c;
        padding-bottom: 10px;
        /* border-bottom: 2px solid rgb(103,86,140,0.3); */
        /* margin-bottom: 10px; */
    }

    .p1{
        font-family: 'Quicksand', sans-serif;
        font-weight: bold;
        letter-spacing: 0.5px;
        margin-bottom: 8px;
    }
    
    .p2{
        font-size: 14px;
        font-family: 'Quicksand', sans-serif;
        font-weight: bold;  
        color: #1f1235;  
    }

    .radio{
        margin: 10px 0px;
    }

    .btn-div{
        /* padding: 10px; */
        margin: 30px auto 0px;
        display: flex;
        justify-content: right;
        gap: 10px;
    }

    .table-title{
        color: #67568C;
        font-size: 32px;
        font-weight: bold;
        letter-spacing: 1px;
        /* font-family: 'Poppins', sans-serif; */
    }

    .cancel{
        border: 1px solid #dee2e6;
        border-radius: 5px;
        display: flex;
        align-items: center;
        padding: 0px 20px;
        font-size: 14px;
        transition: 0.5s;
    }

    .cancel:hover{
        background-color: #f8f9fa;
    }

    .nav{
        display: flex;
        gap: 8px;
        align-items: center;
        margin-bottom: 25px;
    }

    .items{
        border-radius: 20px;
        border: 1px solid #dee2e6;
        padding: 3px 15px;
        transition: 0.5s;
        font-size: 14.5px;
        font-family: 'Quicksand', sans-serif;
    }

    .items:hover{
        background-color: #f8f9fa;
        color: #1f1235;
    }
</style>

<body style="background-color: #f8f5f2">
    <div class="h-screen">
        <div class="mt-7 fixed w-full">
            <div class="w-max m-auto">
                <?= $this->Flash->render() ?>
            </div>
        </div>
    
        <div class="pt-20 pb-40">
            <?= $this->fetch('content') ?>
        </div>
    </div>
    <footer>
    </footer>
</body>

</html>