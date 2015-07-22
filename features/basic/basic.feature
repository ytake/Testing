Feature: basic
  プロジェクトのconfigディレクトリに設置されているファイルを取得する
  Scenario: configディレクトリのファイルリスト取得
    Given configディレクトリに移動
    Then 配列でファイルが取得できること "array"
