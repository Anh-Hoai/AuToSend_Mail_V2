<?php $this->view('blocks/HeaderAdmin', $data); ?>
<?php $this->view('blocks/SidebarAdmin'); ?>
<?php require_once "./app/views/pages/" . $data['pages'] . ".php"; ?>
<?php $this->view('blocks/FooterAdmin', $data); ?>
