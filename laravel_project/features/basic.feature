# features/basic.feature
Feature: basic
  プロジェクトのconfigディレクトリに設置されているファイルを取得する
  Scenario: configディレクトリのファイルリスト取得
    Given configディレクトリに移動
    And app.phpファイルが存在している
    And auth.phpファイルが存在している
    Then 配列でファイルが取得できること "array"
