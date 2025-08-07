# ベースイメージに PHP＋Apache を使う
FROM php:8.2-apache

# Apache のリッスンポートを 10000 番に変更（Render のデフォルト）
RUN sed -i 's/Listen 80/Listen 10000/' /etc/apache2/ports.conf \
 && sed -i 's/<VirtualHost \*:80>/<VirtualHost *:10000>/' /etc/apache2/sites-enabled/000-default.conf

# mod_rewrite が必要なら有効化（不要ならコメントアウト可）
RUN a2enmod rewrite

# ソースコード一式をコンテナにコピー
COPY . /var/www/html/

# パーミッション調整（必要に応じて）
RUN chown -R www-data:www-data /var/www/html

# コンテナの公開ポートを宣言
EXPOSE 10000

# デフォルトの起動コマンド
CMD ["apache2-foreground"]
