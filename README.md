# wp-env_musicschool

WordPressの開発環境ツールwp-envを用いて作成した架空の音楽スクールのサイトです。

## 概要

- WordPressの開発環境を簡単にセットアップするためのツールであるwp-envを使用して、WordPressの開発環境を迅速に立ち上げ、プラグインやテーマの開発を行います。
- Live Serverのホットリロード機能を利用して、ローカル環境での開発を行います。

## 環境

- Node.js
- npm
- Docker desktop

## インストール

```bash
npm ci
```

## .wp-env.jsonの設定

wp-envの設定ファイルを編集することで、WordPressのバージョンやプラグインのインストールなどをカスタマイズできます。

- `core`: WordPressのバージョンを指定します。
- `config`: WordPressの環境変数を指定します。
  - Live Serverのホットリロードを利用するために`WP_HOME`と`WP_SITEURL`にLive ServerのURL`http://localhost:5500`を指定します。
- `mappings`: WordPressのディレクトリorファイルをマッピングします。
- `plugins`: WordPressのプラグインのダウンロードURLを指定します。
- `themes`: WordPressのテーマを指定します。

### mappingsに指定するファイル

- `wp-content/languages/plugins`: プラグインの翻訳ファイルを保存しておくために同期します。
- `wp-content/uploads`: 画像ファイルを保存しておくために同期します。
- `.htaccess`: パーマリンク設定を保存しておくために同期します。
- wp-env側からファイルを操作できるように上記のディレクトリとファイルの権限を変更します。

例）

```bash
chmod 777 uploads/
```

## wp-envの使用方法

開始

```bash
npm run wp-env start
```

停止

```bash
npm run wp-env stop
```

設定ファイルなどを更新して再起動

```bash
npm run wp-env start --update
```

## Live Serverの設定

```json
  "liveServer.settings.proxy": {
    "enable": true,
    "baseUri": "/",
    "proxyUri": "http://localhost:8888"
  }
```

- Live Serverのホットリロード機能を利用するために、wp-envのURL`http://localhost:8888`を`.vscode/settings.json`のLive Serverの設定`proxyUri`に追加します。
- wp-envを開始した後に、Live Serverを起動して`http://localhost:5500`にアクセスすることで、WordPressの開発環境での変更が自動的にブラウザに反映されます。
- 管理画面はホットリロードを利用する必要がないので`http://localhost:8888/wp-admin/`にアクセスします。

## LAN内でのアクセスについて

`localhost`の部分は自IPアドレスに変更することで、LAN内の他のデバイスからもアクセス可能になります。
