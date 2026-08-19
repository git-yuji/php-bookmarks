# My Bookmarks

PHPで作る、初学者向けのブックマーク管理アプリです。

## ファイル構成

```text
php-bookmarks/
├── index.php
├── style.css
├── README.md
└── data/
    └── bookmarks.json
```

- `index.php`: PHPの処理とHTMLを書くメインファイル
- `style.css`: 画面の見た目を整えるファイル
- `data/bookmarks.json`: 登録したブックマークを保存するファイル

## 起動方法

このフォルダへ移動して、PHPの開発用サーバーを起動します。

```bash
cd php-bookmarks
php -S localhost:8000
```

ブラウザで <http://localhost:8000> を開きます。

## 作成予定の機能

1. タイトルとURLを入力するフォーム
2. ブックマークの登録
3. 登録したブックマークの一覧表示
4. 編集と削除
5. キーワード検索とカテゴリー絞り込み
