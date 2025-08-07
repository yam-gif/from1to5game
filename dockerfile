# Dockerfile
FROM php:8.1-apache

# アプリケーションコードをコンテナ内にコピー
COPY . /var/www/html/

# ドキュメントルートを設定（必要に応じて調整）
WORKDIR /var/www/html

# ポートを公開
EXPOSE 80
