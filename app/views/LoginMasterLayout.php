<?php $this->view('blocks/HeaderLogin', $data); ?>
<?php require_once "./app/views/pages/" . $data['pages'] . ".php"; ?>
<?php $this->view('blocks/FooterLogin', $data); ?>

