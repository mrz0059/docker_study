#phpイメージをpullする
docker image pull php:8.0.3-apache

#コンテナイメージを起動
docker container run -d -p 8080:80 php:8.0.3-apache

#コンテナIDを検索
docker container ls

#コンテナにログイン
docker exec -it feeb3ea725ff /bin/bash

#index.phpを作成
echo "<?php phpinfo();" > index.php
