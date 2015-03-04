<?php

echo form_open('crud/create');

echo form_label('Nome Completo:');
echo form_input(array('id' => 'nome', 'name' => 'nome'),'','autofocus');

echo form_label('Email:');
echo form_input(array('id' => 'email', 'name' => 'email'));

echo form_label('Login:');
echo form_input(array('id' => 'login', 'name' => 'login'));

echo form_label('Senha:');
echo form_password(array('id' => 'senha', 'name' => 'senha'));

echo form_label('Confirmação de Senha:');
echo form_password(array('id' => 'confirma_senha', 'name' => 'confirma_senha'));

echo form_submit(array('name' => 'cadastrar', 'value' => 'Cadastrar'));

echo form_close();

