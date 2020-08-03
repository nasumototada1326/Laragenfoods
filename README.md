# アプリ名
###### Larafoods
# 概要
###### 飲食店を登録し、地図が反映されるアプリです。
# 使用技術
###### ・Docker(環境構築)
###### ・記事投稿
###### ・簡単ログイン機能
###### ・管理ユーザーログイン機能
###### ・管理ユーザー登録機能
###### ・ページネーション機能
###### ・記事一覧表示機能
###### ・記事検索機能
###### ・記事詳細表示機能
###### ・Googlemap機能
# 制作背景(意図)
###### 飲食業界で働いていた為、それに関するアプリを作りたいと思いました。

在職中は様々な媒体を活用して大変便利だと感じ、今後もアップデートされると考え、

そして、私はアプリでどんな店舗がどこにあり、どんな料理を提供されているのかを知るアプリを作りたいと感じ、

このアプリを制作しようと考えました。
# 工夫したポイント
###### ・Dockerでの環境構築
# 課題や今後実装したい機能
###### ・AWSへの移行しデプロイ
###### ・Vue.Jsを用いての実装
# DB設計
## userテーブル
|Column|Type  |Options  |
|---|---|---|
|name  |string  |null: false  |
|email  |string  |unique: true,null: false  |
|password  |string  |null: false  |
## contact_formテーブル
|Column|Type  |Options  |
|---|---|---|
|id  |bigIncrements  |  |
|shop_name  |string  |null: false  |
|address  |string  |null: false  |
|category  |string  |null: false  |
|shop_url  |longText  |nullable  |
|contact  |string  |null: false  |
# アプリURL
https://genfoods.herokuapp.com/
