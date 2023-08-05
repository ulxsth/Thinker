<?php
include dirname(__FILE__) . '/../service/UserService.php';

/**
 * ユーザ情報を扱うコントローラ。
 */
class UserController {
    public static function signup($name, $password) {
        // パスワードのハッシュ化
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // ユーザ登録
        UserService::signup($name, $password_hash);

        // トップにリダイレクト
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/thinker/app/view/top.php');
    }
}
?>
