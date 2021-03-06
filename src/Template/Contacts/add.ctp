<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?></li>
    </ul>
</nav> -->
<?= $this->Html->css('seLiga.css') ?>

<div class="contacts form large-9 medium-8 columns content">
    <?= $this->Form->create($contact) ?>
    <fieldset>
        <legend><?= __('Fale Conosco') ?></legend>
   
   <div class="container">

    <form action="/action_page.php">
        <div class="row">
            <div class="col-25">
                <label for="fname"><strong>Nome</strong></label>
            </div>
            <div class="col-75">
                <input type="text" id="fname" name="name" placeholder="Digite seu nome..">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="lname"><strong>Email</strong></label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="email" placeholder="Digite seu email..">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="lname"><strong>Título</strong></label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="title" placeholder="Digite um título..">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="subject"><strong>Mensagem</strong></label>
            </div>
            <div class="col-75">
                <textarea id="subject" name="message" placeholder="Escreva Algo.." style="height:200px"></textarea>
            </div>
        </div>

        </div>
    </form>
    <div class="row">
            <a href="../" class="link-sobre w3-bar-item w3-button w3-right" style="color: white;" >Home</a>
      <input type="submit" value="Enviar"> 
    </div>

    </fieldset>
</div>
