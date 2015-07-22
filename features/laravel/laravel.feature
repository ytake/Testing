Feature: laravel
  表示内容を取得する
  Scenario: 表示内容を取得
    Given "/behat" へアクセスする
    And GETリクエストでURLパラメータ "message" に "testing" を利用してアクセスした場合
    Then 画面上に "testing" と表示される
  Scenario: リクエストパラメータがない場合
    Given "/behat" へアクセスする
    And GETリクエストでURLパラメータを利用せずにアクセスした場合
    Then 画面上に "Laravel" と表示される
