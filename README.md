# laravel-supabase
  
## Docker で Laravel 開発環境を構築する手順

### 1. 必要ファイル
- `docker-compose.yml`（自動生成済み）
- `nginx/default.conf`（自動生成済み）

### 2. 起動コマンド
```sh
docker compose up -d
```

### 3. Laravel プロジェクト作成（初回のみ）
```sh
docker compose exec app composer create-project --prefer-dist laravel/laravel .
```

### 4. .env 設定
- `.env` の DB 設定を以下のように変更してください：
```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=laravel
```

### 5. マイグレーション
```sh
docker compose exec app php artisan migrate
```

### 6. Webアクセス
- http://localhost:8080 で Laravel のトップページが表示されます。
