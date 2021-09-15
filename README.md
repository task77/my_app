(<img width="1035" alt="トップ" src="https://user-images.githubusercontent.com/66563022/133506606-c0d3c3da-d00c-4a9f-aa77-af4b00d44f4a.png">)

## :four_leaf_clover: 制作過程 :four_leaf_clover:
サービスの概要は社員情報及び貸与品を管理するための<span style="color: blue; ">「社員情報管理システムアプリ」</span>です。  
現職では社員の情報や会社から貸与している制服や靴などの情報が全て紙で管理させており、登録や変更する際に手間が掛かること、また管理態勢や事務処理の効率化を図るためにWEB上で管理できるようサービスを制作しました。
 
 
## :four_leaf_clover: URL :four_leaf_clover:
 
- URL: http://manage-task--systems.herokuapp.com/
- ゲストログインボタンで簡単にログインできます。
 
## :four_leaf_clover: 使用技術 :four_leaf_clover:
- フロントエンド
    - HTML / CSS 
    - Bootstrap
 
- バックエンド
    - PHP　7.3.11
    - Laravel　6.20.12  
 
- インフラ 
    - MySQL　5.7.30
    - Docker　20.10.7
    - Docker-compose　1.29.2

## :four_leaf_clover: 機能一覧 :four_leaf_clover:
|      |  機能  |
| ---- | ---- |
|  1  |  アカウント登録機能  |
|  2  |  ログイン機能  |
|  3  |  ゲストログイン機能  |
|  4  |  ログアウト機能  |
|  5  |  社員情報登録機能(CRUD)   |
|  6  |  社員情報更新機能(CRUD)   |
|  7  |  社員情報削除機能(CRUD)   |
|  8  |  社員情報検索機能   |
|  9  |  社員情報詳細機能   |
 
## :four_leaf_clover: 何ができるか？ :four_leaf_clover:
### 1. 管理者登録
 - 管理者登録することにより、社員登録及び編集が可能となります。
(<img width="767" alt="管理者登録" src="https://user-images.githubusercontent.com/66563022/133506682-09ebd62f-ea88-4922-a827-7a3d1f92ed44.png">)
***

### 2. 社員情報登録
 - 入社した社員の情報及び貸与品が登録できます。
(<img width="614" alt="社員登録" src="https://user-images.githubusercontent.com/66563022/133506863-3cdd8477-ce7a-4ed0-a1b5-9aebabf35dc5.png">)
***

### 3. 社員情報詳細(編集・削除)
 - 登録済み社員の詳細確認、社員登録の編集や削除ができます。
(<img width="768" alt="社員登録編集削除" src="https://user-images.githubusercontent.com/66563022/133506985-537b8089-198c-411c-bacf-92f3724e9480.png">)
***

### 4. 社員検索
 - 登録済み社員の「名前」や「事業所名」から曖昧検索ができます。
(![検索機能](https://user-images.githubusercontent.com/66563022/133507368-9de37b5c-9d24-4293-8d7f-9ae3b3279fa8.gif))
***

### 5. レスポンシブ対応
 - Bootstrap を活用したのでスマートフォンからでも使用可能です。 
 - デバイスによってハンバーガーメニューを実装できます。 

(![レスポンシブ](https://user-images.githubusercontent.com/66563022/133507436-fbcc672f-e280-4a3b-ba66-0b4a383be705.gif))　
