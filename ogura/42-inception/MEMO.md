### What is Docker?
	Dockerとはコンテナ技術を使用して、アプリケーションの環境構築を容易にするオープンソースソフトウェア。  
	ミドルウェアのインストールや各種環境設定をコード化して管理でき、共有などが容易になる。  
参考URL:  
	https://qiita.com/satken2/items/10b22bed7a331e425cfe  
	https://ysko909.github.io/posts/docker-container-gets-into-restarting-loop/  
	https://zenn.dev/swata_dev/articles/2f85a3f4b3022c
	https://mebee.info/2020/03/26/post-8053/

### What is Container Technology?
	コンテナとは、端的に言えばアプリケーションをホストOSから隔離する技術のことである。LinuxOSの中に隔離された空間を作り、他のコンテナ内のプロセスやホストOS上のプロセスに一切干渉せずに動作できる環境を作る。  
参考URL:  
	https://qiita.com/satken2/items/10b22bed7a331e425cfe

### What is Dockerfile?
	Dockerfileとは、新規にDockerイメージを作成するための手順を記したテキストファイル。Dockerイメージの設計図。Dockerfileは独自のDSL（ドメイン固有言語）。  
**Dockerfile内で相対パスを使用する場合、docker-compose.yml build contextで指定したdirからの相対パスを使用する必要がある**  
#### What is difference between CMD and ENTRYPOINT ?
	- ENTRYPOINTは--entrypointオプションを使用しない限り書き換えられない
	- CMDは`docker run [cmd]`でオーバーライドできるため、ユーザーフレンドリー
	- ENTRYPOINT、CMD両方を使用した場合`ENTRYPOINT CMD`の順でCMDがオプション（引数）のような扱いになる (EXEC形式のみ)
	- Shell形式の場合CMDもシェル形式であれば引数と扱うことが可能
	- 

参考URL:  
	https://y-ohgi.com/introduction-docker/2_component/dockerfile/  
	https://www.youtube.com/watch?v=LQjaJINkQXY  
	https://qiita.com/sky0621/items/d837c566b04464469fdb  
	https://docs.docker.jp/engine/reference/builder.html#cmd  

### What is docker-compose?
	複数のコンテナから成るサービスを構築・実行する手順を自動的にし、管理を容易にする機能。Docker compose では、compose ファイルを用意してコマンドを1 回実行することで、そのファイルから設定を読み込んですべてのコンテナサービスを起動することができる。  
**docker-compose up --build -dすることでDockerfileが反映される**  
**docker containerはバックグランドでプロセスが走ってないとExit 0で正常終了してしまうためcommand: tail -f /dev/null**  

参考URL:  
	https://qiita.com/TsutomuNakamura/items/7e90e5efb36601c5bc8a  
	https://qiita.com/yuta-ushijima/items/d3d98177e1b28f736f04  
	https://amateur-engineer-blog.com/docer-compose-volumes/  
	https://zenn.dev/suiudou/articles/3b32a846655aef  
	https://qiita.com/sam8helloworld/items/e7fffa9afc82aea68a7a  
	https://qiita.com/akido_/items/1cfcea6ed48bae926609  
	https://kaki-note-02.netlify.app/2022/04/07/  
	https://zenn.dev/hohner/articles/43a0da20181d34  
	https://zenn.dev/torkralle/articles/388ae878cb5f8b  

# What is Docker image?
	docker imageは、コンテナに必要なファイル郡をひとまとめにしたやつ、読み専用なレイヤーが重なってできてる、設計書。

**The difference between a Docker image used with docker-compose and without docker-compose**  
	docker-composeを使用した場合、DockerHubなどを使用して複数のコンテナを一括で作成できる。対してDocker-composeを使用しなかった場合Dockerfileを使用して1つのコンテナしか作成できない。  
# What is Docker Engine?
	Docker EngineはDockerと同義であり、1つのコンテナしか扱えない。対して、docker-composeは複数のコンテナを扱える。

参考URL:  
	https://zenn.dev/ryoatsuta/articles/64dcc2e2b4e0cf  
	https://o2mamiblog.com/docker-beginner-2/

### What is docker network?
	Docker内の仮想ネットワーク。Dockerコンテナが他のコンテナや外部ホスト、クライアントと通信するためにはDockerネットワークを利用する必要がある。

### What are bridge network and host network?
	https://knowledge.sakura.ad.jp/23899/#Docker3

参考URL:
	https://qiita.com/TsutomuNakamura/items/ed046ee21caca4a2ffd9  
	https://knowledge.sakura.ad.jp/23899/#namespace  
	https://knowledge.sakura.ad.jp/26522/  

#### bind mounts vs volumes  
参考URL:  
	https://www.atatus.com/blog/docker-volumes-vs-bind-mounts/  
	https://w3guides.com/tutorial/docker-compose-syntax-volume-or-bind-mount  
	https://teratail.com/questions/229090  

### What is this subject ? 
	Use docker-compose to create LEMP ( L:Linux E:Nginx M:Mariadb P:Apache ) stack with Wordpress

参考URL:  
	https://docs.docker.jp/compose/environment-variables.html#env  
	https://qiita.com/yuta-ushijima/items/d3d98177e1b28f736f04  
	https://betterprogramming.pub/using-variables-in-docker-compose-265a604c2006  
	https://medium.com/edureka/docker-networking-1a7d65e89013  
	https://faun.pub/docker-networks-part-1-of-2-15a986a48d0a  
	https://www.debian.org/releases/buster/  
	https://knowledge.sakura.ad.jp/26522/  

### What is SSL?
	SSL（Secure Socket Layer）/ TLS（Transport Layer Security）は、通信の暗号化、改ざん検知、通信相手の認証を行う仕組みです。現在はプロトコルとしては主にTLSが使われていますが、慣例的にTLSのことも含めてSSLと総称されています。  

### What is Public Key Infrastructure?
	公開鍵と秘密鍵のキーペアからなる「公開鍵暗号方式」という技術を利用し、インターネット上で安全に情報のやりとりを行うセキュリティのインフラ。

### What is common key crypto system?
	共通鍵暗号方式とは、暗号化するための鍵とそれを復号するための鍵に同じものを使用する方式で、暗号化した際に使用した鍵は、復号する際にも必要になります。

参照URL:  
	https://college.globalsign.com/ssl-pki-info/ssl-encryptions/  
	https://college.globalsign.com/ssl-pki-info/pki/  
	https://qiita.com/k_kind/items/b87777efa3d29dcc4467  

### What is nginx ?
	Webサーバとは、Webシステム上で、利用者側のコンピュータに対しネットワークを通じて情報や機能を提供するコンピュータおよびソフトウェアのこと。そして「Nginx」はWebサイトを公開・管理する際に使われるサーバソフトウェア、「Webサーバ」の1種。
**nginx.conf**  
nginxに関する設定ファイル  
**location directive**  
locationディレクティブは、任意のURI毎に異なる設定をするためのもの  
**fastcgi_params**  
phpに渡すパラメータに関する設定ファイル  
**fast_split_path_info ^(.+\.php)(/.+)$**  
./test.php/article/1 のようなURIを実行するファイル名($fastcgi_script_name)と#phpに渡すパス情報パラメータ($fastcgi_path_info)に分割  
**fastcgi_params SCRIPT_FILENAME $document_root$fastcgi_script_name**  
実行するスクリプトのパスをルートディレクトリ/実行するファイル名 にする  
**fastcgi_param PATH_INFO $fastcgi_path_info**  
パス情報パラメータ  

参考URL:  
https://mogile.web.fc2.com/nginx_wiki/nginx_wiki201510/start/topics/examples/phpfcgi.html  
zenn.dev/nananaoto/articles/c419d9afc9b03e5e3efb#オブジェクトのアップロード  
https://shiro-secret-base.com/?p=468#PHP-fpm-2  

参考URL:  
	https://hnavi.co.jp/knowledge/blog/nginx/#title1  
	https://qiita.com/morrr/items/929e9cb35914a7f3a652  
	https://qiita.com/morrr/items/7c97f0d2e46f7a8ec967  
	https://heartbeats.jp/hbblog/2012/06/nginx06.html  
	http://www2.matsue-ct.ac.jp/home/kanayama/text/nginx/node36.html  
	https://tottoto-toto.hatenablog.com/  
	https://github.com/nginxinc/docker-nginx/blob/master/mainline/alpine/Dockerfile  
	https://nginx.org/en/docs/switches.html  
	https://nginx.org/en/docs/ngx_core_module.html#daemon  
	https://www.web-dev-qa-db-ja.com/ja/nginx/  
	https://stackoverflow.com/questions/25970711/what-is-the-difference-between-nginx-daemon-on-off-option  
	https://heartbeats.jp/hbblog/2012/04/nginx05.html  
	https://www.educba.com/nginx-add_header/  
	https://owlhowto.com/how-to-fix-unexpected-end-of-file-expecting-on-nginx/  
	https://yinm.hatenadiary.jp/entry/2017/05/04/220439  
	https://www.softbanktech.co.jp/special/blog/it-keyword/2022/0030/#content01  
	https://www.codeflow.site/ja/article/understanding-and-implementing-fastcgi-proxying-in-nginx  
	https://linuc.org/study/knowledge/506/  
	https://tooljp.com/windows/chigai/html/TCPIP/localhost-127.0.0.1-chigai.html  

### What is MariaDB?
	MariaDBは世界でもっとも普及しているオープンソースのRDBMSであるMySQLから派生したレーショナルデータベースです。MySQLのソースコードをベースにして、新機能追加やソースコードの改善が組み込まれています。MariaDBは完全なるGPLライセンスですが、MySQLはデュアルライセンスで提供されている。 それぞれ異なる方法でスレッドプールを提供している。 MariaDBは複数のストレージエンジンに対応している。 多くのケースで、MariaDBの方が高い性能を誇る。
**What is mariadb-client?**  
	MariaDBデータベースのクライアントアプリケーションである「mysql」を使えるようにする「mariadb-client」ソフトウェア  
**What is PORT 3306?**  
	MySQLサーバーをデフォルト設定でインストールした場合に、接続のTCPポートは、3306になります。 この3306ポートは、特に何もしていない場合に、サーバーとして使用しているパソコンやサーバーが、他のマシンからのホストを遮断する設定になっています。    
**mysqld_safe**  
	MySQLのインスタンスはmysqldを直接起動するのではなく、mysqld_safeを経由して起動させることが推奨されている。mysqld_safeはひと言で言うとmysqldを監視しているデーモンである。
参考URL:  
	https://open-groove.net/mysql/mysqld-mysqldsafe/  

参考URL:  
	https://www.naka-sys.okinawa/docker-mariadb-container-create/#st-toc-h-2  
	https://mariadb.com/kb/en/creating-a-custom-docker-image/  
	https://mseeeen.msen.jp/init-with-subdirectory-sql-files-with-mysql-docker/  
	https://gist.github.com/tomoh1r/9f2bdd05169a2f9af25d  
	https://chienomi.org/archives/livewithlinux/1282  
	https://blog.turai.work/entry/20161011/1476170075  
	https://dev.mysql.com/doc/refman/5.6/ja/mysql-install-db.html  
	http://www.momobro.com/rasbro/rp-make-db/  
	https://qiita.com/kazuyoshikakihara/items/f0c5158c700bb7a5df9f  
	https://wenchma.github.io/2015/06/30/Build-self-customized-MariaDB-Docker-image-from-Dockerfile.html  
	http://kyamawork.info/post/0007/  
	https://wiki.alpinelinux.org/wiki/OpenRC  
	https://stackoverflow.com/questions/61483773/how-to-start-a-service-on-alpine-linux  
	https://gist.github.com/mariotpc/21ee33450e871b3b4c15ca36c24dedc7#file-install-mysql-mariadb-on-alpine-L75  
	https://www.digitalocean.com/community/tutorials/how-to-create-a-new-user-and-grant-permissions-in-mysql-ja  
	

### What is PHP-FPM?
	FPM ( FastCGI Process Manager ) は PHP の FastCGI 実装のひとつで、 主に高負荷のサイトで有用な追加機能を用意しています。FastCGIとは、Webサーバ上でユーザプログラムを動作させるためのインタフェース仕様の一つである。 CGIの問題を解決するために Open Market社によって1990年代中頃に開発された[1]もので、プロトコルは公開されている。
**what is fastcgi?**  
	役割はCGIと同じだけど、Webサーバ上で動くプログラムを一度起動したらしばらく待機させることによって、プログラムの開始と終了にかかる手間を減らし、動きを速くしたりWebサーバの負荷を軽減することができる仕組み  
**what is www.conf?**
	php-fpmに関するconfigファイル
	https://teratail.com/questions/186783
参考URL:  
	https://qiita.com/kotarella1110/items/634f6fafeb33ae0f51dc  
	https://murashun.jp/article/programming/regular-expression.html  
	https://53ningen.com/docker-wordpress
	https://kinsta.com/jp/knowledgebase/what-is-php/ 
	https://www.digitalocean.com/community/tutorials/how-to-install-wordpress-with-docker-compose  
	https://make.wordpress.org/hosting/handbook/server-environment/  
	http://www.ajisaba.net/php/php-fpm/php74-fpm_conf.html  
	https://make.wordpress.org/hosting/handbook/server-environment/  

### What is wp-config.php?
	wp-config.php ファイルは WordPress のインストールを行う上で最も重要なファイルの一つです。このファイルは WordPress のファイルディレクトリのルート直下に置かれ、中にはデータベース接続情報などサイトの基礎となる情報の詳細が含まれています。
参考URL:  
	https://ja.wordpress.org/support/article/editing-wp-config-php/#:~:text=wp%2Dconfig.php%20%E3%83%95%E3%82%A1%E3%82%A4%E3%83%AB%E3%81%AF,%E3%81%8C%E5%90%AB%E3%81%BE%E3%82%8C%E3%81%A6%E3%81%84%E3%81%BE%E3%81%99%E3%80%82  

### What is MySQL?
	MySQLiとは「MySQL improved extension」の略で、PHPからMySQL/MariaDBデータベースを操作するためのインターフェースを提供する、PHPの拡張機能です。

### What is proxy?
	「プロキシ」とは、インターネットを接続する際に、ネットワークの内部から外部へのアクセスを代理で行うシステムのことです。プロキシサーバーとも呼ばれ、企業がサイバー攻撃などに対抗し、自社の情報システムを安全に管理する手段として利用されている。

### debian memo
- 「/etc/hosts」ファイルは、ホスト名とIPアドレスを対応させるためのファイル  
**What is PORT 80?**  
	TCPの80番をWebサーバがHTTPでWebブラウザなどと通信するために用いる。  
**What is PORT 443?**  
	TCPの443番をWebサーバがHTTPSでWebブラウザなどと通信するために用いる。  
### alpine memo
- パッケージマネージャー apk  
参考URL:
	https://blog.stormcat.io/post/entry/alpine-entry-apk/
### Internal Server Error HTTP 500 
	Internal Server Error HTTP 500 とは、閲覧しているウェブサーバー上でエラーが起きており、ウェブサイトが正しく表示できない状態のエラーコード。

**docker volumes**  
	service内で指定したdirがvolumesに入っていく
	/はlocalでそれ以外（変化した部分が）volumesに保存される
	
**related to Makefile**  
https://qiita.com/suin/items/19d65e191b96a0079417  


**The benefit of Docker compared to VMs**  
	VMsと違ってDockerはインフラ環境をコード化することができるため、組織での環境構築、共有が楽になる。ゲストOSが入らないため余計なメモリを食わない。  
	https://and-engineer.com/articles/YaJcFRIAAB4AiFgz#heading3-5  
	https://duckduckgo.com/?q=%E3%82%B3%E3%83%B3%E3%83%86%E3%83%8A%E5%9E%8B+%E3%83%8F%E3%82%A4%E3%83%91%E3%83%BC%E3%83%90%E3%82%A4%E3%82%B6%E3%83%BC%E5%9E%8B&atb=v347-5vb&iar=images&iax=images&ia=images&iai=https%3A%2F%2Fsonnaka.com%2Fwp-content%2Fuploads%2F2021%2F06%2Ff58a0771e2f8f9cebfd2a3180f88a05b.png  

- 
