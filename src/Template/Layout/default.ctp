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
 */

$cakeDescription = 'Se Liga - Igarassu';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->script('jquery.min.js'); ?>    


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <a href="../"><h1>Se Liga</h1></a>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a href="/markers/add">Reportar Incidente</a></li>
                <li><a href="/contacts/add">Contato</a></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
        <meta name='viewport' content="width=device-with, initial-scal=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <div class="rodape">
            <div class='w3-container'>
                <table class="tabela">
                    <tr>
                        <td>
                            <a href="http://www.ifpe.edu.br">
                        </td>
                        <td>
                            <a href="">
                            <i class="fa fa-github fa-5x" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>   
                </table>
                <p>Projeto desenvolvido por estudantes da Instituição Federal de Educação, Ciência e Tecnologia de Pernambuco</p>
            </a>   
        </div>
    </div>
</footer>
</body>
</html>

  