<?php
use App\controllers\client\AutoSendController as AutoSend;

// Tạo đối tượng AutoSendController và gọi phương thức index
$autoSendController = new AutoSend();
$autoSendController->index();
