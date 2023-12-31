<?php
include dirname(__FILE__) . '/../service/UserService.php';

/**
 * ユーザ情報を扱うコントローラ。
 */
class UserController {
    /**
     * ログイン処理を行う。
     * @param string name ユーザ名
     * @param string password パスワード
     */
    public static function signup($name, $password) {
        // ユーザ登録
        UserService::signup($name, $password);
    }

    public static function signin($name, $password) {
        UserService::signin($name, $password);
    }

    /**
     * ユーザ名からidを取得する。存在しない場合はnullを返す
     * @param string name ユーザ名
     * @return int|null id
     */
    public static function findByName($name) {
        return UserService::findByName($name);
    }

    /**
     * ユーザデータを削除する
     * @param string name ユーザ名
     * @return int|null id
     */
    public static function deleteById($name) {
        return UserService::deleteById($name);
    }
}
?>
