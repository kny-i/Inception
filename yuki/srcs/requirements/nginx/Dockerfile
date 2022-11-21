FROM debian:buster

#-y はyes/no の時のyes
RUN            set -eux;
RUN apt-get update && apt-get install -y \
    nginx \
    openssl \
    vim \
    sudo

RUN openssl req -x509 #CSRに関する処理となるのですが#-x509オプションを指定すると自己署名の証明書が作成されるようになる \
                -nodes #秘密鍵にパスフレーズを付けた暗号化は行われなくなります \
                -days 365 \
                -newkey rsa:2048 # ここではrsa:2048と指定しRSAの鍵をサイズ2048ビットで作成するようにしています RSAは公開鍵暗号で主に使用される暗号方式になります RSAの鍵のサイズは2048ビット以上であれば強度が十分なものとなりますのでここでは2048ビットになるように指定しています \
                -keyout /etc/ssl/private/nginx.key #-keyoutオプションで作成する秘密鍵のファイル名を指定します 秘密鍵のファイル名は任意です 拡張子に決まりもありません\
                -out /etc/ssl/certs/nginx.crt #オプションで作成するSSLサーバー証明書のファイル名を指定します SSLサーバー証明書のファイル名は任意です 拡張子に決まりもありません\
                -subj "/C=JP/ST=Tokyo/L=Ropongi/O=42Tokyo/OU=students/CN=ykondo/emailAddress=ykondo@student.42tokyo.jp" #このままでは識別名の各フィールド 国都道府県 組織 コモンネームなど が対話入力のままです またコモンネームを設定ファイルで指定してしまうと 証明書を発行するサーバやクライアントの数だけ設定ファイルが必要になってしまうという問題もあります



COPY conf/nginx.conf /etc/nginx/sites-enabled/default
COPY tools/index.nginx-debian.html /var/www/html

#CMD ["nginx","-g","deamon off;"]
