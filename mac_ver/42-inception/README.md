### What is Docker?
	Dockerとはコンテナ技術を使用して、アプリケーションの環境構築を容易にするオープンソースソフトウェア。  
	ミドルウェアのインストールや各種環境設定をコード化して管理でき、共有などが容易になる。
	
	Dockerでは、ソフトウェア開発に利用可能なアプリケーションを標準化された単位にパッケージ化することができます。この単位（コンテナ）には、アプリケーションのコードと依存関係が含まれているため、どのようなコンピューティング環境でも簡単に実行できる

#### What are benefits of Docker over VMs?
	VMには、OSとアプリケーションの完全なコピーに加え、必要なバイナリやライブラリも格納されるため、コンピュータ上で数十GB近くの容量を占めてしまうことがあります。また、ゲストOS用にハードウェアを仮想化すると、かなりのオーバーヘッドが発生することがある。
	それに対してDockerはOSを仮想化するのがコンテナであり、コードと依存関係の両方を格納することができるアプリレイヤーにある仮想空間で、同じマシン上で、複数のコンテナを個別に実行することができる。その結果、通常、容量を抑えることができる。

#### Hypervisor vs Container
	ハイパーバイザ型はハイパーバイザにゲストOSをインストールし、物理マシンのメモリやプロセッサを仮想的に割り当てることで物理マシン上にあたかも複数のOSが起動してるかのような状態を作り出す仮想化技術。
	対してコンテナ型はアプリケーションを実行するための領域（ユーザ空間）を複数に分割して利用する仮想化技術である。
	ハイパーバイザ型はホストOSに依存しないが、コンテナ型はホストOSに依存しており、同じOS上で実現するので、全てのコンテナは同じOSしか使えない。
	コンテナは、ハイパーバイザのように、個別にCPUやメモリ、ストレージなどを割り当てる必要がないためシステム資源のオーバーヘッド（仮想化のために割り当てられる資源や能力）が少なく済む。

![container_vs_hypervisor](https://image.itmedia.co.jp/enterprise/articles/1506/08/kz_its01.jpg)

#### Is it possible to set up a linux environment on MacOS using Docker?
	DockerはLinuxコンテナの技術を活用しており、親OSはLinuxに限られる。	MacOSはLinuxではないためDockerは動作しないが、Docker for Macというソフトウェアを使用することでDockerを使用している。
	Docker for Macでは、Macにデフォルトで入っている仮想化ツール「HyperKit」を使ってMacで仮想マシンを立ち上げ、Linuxを起動しています。それによって、Mac上にDockerホストを作成している。
	
	参考URL: https://teratail.com/questions/142866 https://qiita.com/nogizaka46/items/c48728d6c640a3e9d6aa

#### What is Docker image?
	Docker imageはアプリケーションの実行に必要なソースコード、依存関係、ツールを含んだパッケージで、コンテナ作成時に指示を出す読み取り専用のテンプレート、設計書。
	docker-composeを使用した場合、DockerHubなどを使用して複数のコンテナを一括で作成できる。対してDocker-composeを使用しなかった場合Dockerfileを使用して1つのコンテナしか作成できない。

#### What is docker-compose?
	複数のコンテナから成るサービスを構築・実行する手順を自動的にし、管理を容易にする機能。Docker compose では、compose ファイルを用意してコマンドを1 回実行することで、そのファイルから設定を読み込んですべてのコンテナサービスを起動することができる。  

	※ docker containerはバックグランドでプロセスが走ってないとExit 0で正常終了してしまうためcommand: tail -f /dev/null

#### What is Dockerfile?
	Dockerfileとは、新規にDockerイメージを作成するための手順を記したテキストファイル。Dockerイメージの設計図。Dockerfileは独自のDSL（ドメイン固有言語）。  

	※ Dockerfile内で相対パスを使用する場合、docker-compose.yml build contextで指定したdirからの相対パスを使用する必要がある

#### CMD vs ENTRYPOINT in Dockerfile
	- ENTRYPOINTは--entrypointオプションを使用しない限り書き換えられない
	- CMDは`docker run [cmd]`でオーバーライドできる
	- ENTRYPOINT、CMD両方を使用した場合`ENTRYPOINT CMD`の順でCMDがオプション（引数）のような扱いになる （shell, exec形式が混ざると反映されない）
	
	参考URL: https://qiita.com/hnakamur/items/afddaa3dbe48ad2b8b5c https://www.creationline.com/lab/39730

#### What is difference between "ports" in docker-compose.yml and "EXPOSE" in Dockerfile?
	Dockerfileにてexposeされたポートは、同じネットワークに接続されている他のサービスからはアクセスできますが、ホストマシン上では公開されない。
	対して、docker-compose.ymlでのportsはホストマシン上で公開される。

	参考URL: https://www.baeldung.com/ops/docker-compose-expose-vs-ports

#### What is Docker Hub?
	Docker Hubは、コンテナイメージを検索・共有できるプラットフォーム。
	コミュニティ開発者、オープンソースプロジェクト、独立系ソフトウェアベンダー（ISV）提供のリソースにアクセスできる、世界最大のコンテナイメージのリポジトリ。

#### The difference between a Docker image used with docker-compose and without docker-compose
	docker-composeを使用した場合、DockerHubなどを使用して複数のコンテナを一括で作成できる。対してDocker-composeを使用しなかった場合Dockerfileを使用して1つのコンテナしか作成できない。  

#### What is Docker Network?
	Docker内の仮想ネットワーク。Dockerコンテナが他のコンテナや外部ホスト、クライアントと通信するためにはDockerネットワークを利用する必要がある。
	デフォルトでbridge,none, hostの3つのネットワークが作成されている。

#### What is Daemon process?
	HTTPサーバーとしてウェブページを提供したり、メールサーバーとして電子メールを送信したり、定期的に時刻同期を行ったりするプロセスはオペレーティングシステムではバックグラウンドプロセスと呼ばれます。
	特にUNIX/Linuxおいて、このようなプロセスは「Daemon」(デーモン)プロセスと呼ぶ。

### What is SSL/TSL?
	SSL（Secure Socket Layer）/ TLS（Transport Layer Security）は、通信の暗号化、Webサイトの認証を行う仕組みです。
	現在はプロトコルとしては主にTLSが使われていますが、慣例的にTLSのことも含めてSSLと総称されています。  

#### HTTP vs HTTPS
	httpsはSSL/TSL認証がなされ、通信が暗号化されているためセキュアである。対してhttpは通信が暗号化されていないため、IDやパスワードなどもHTTP通信であれば第三者が割と苦労もせずに傍受できてしまう危険性がある。

### What is nginx?
	nginxはオープンソースのWebサーバーの一種。Webサーバーとは静的コンテンツや動的コンテンツを提供するサーバ（常駐プログラム）。

### What is reverse proxy?
	プロキシとは、代理で通信を中継する機能や役割をもつサーバー。
	リバースプロキシはインターネットとサーバーの間に立ち、ユーザーからのリクエストを一手に引き受け、サーバーへリクエストを送信する役割である。
	サーバーの負荷軽減やセキュリティ対策として利用されるものであり、増加するトラフィックをより効率的に処理するために活用される。

#### What is "location" directive in nginx.conf?
	URIのパス毎の設定を記述するためのディレクティブ。

	参考URL: https://qiita.com/yutaroud/items/d324a82524501777f464

### What is MariaDB?
	MariaDBは世界でもっとも普及しているオープンソースのRDBMSであるMySQLから派生したレーショナルデータベース。
	MySQLのソースコードをベースにして、新機能追加やソースコードの改善が組み込まれている。MariaDBは複数のストレージエンジンに対応している。 多くのケースで、MariaDBの方が高い性能を誇る。

#### What is mysql_safe?
	mysqld_safe は、Unix で mysqld サーバーを起動するための推奨される方法。
	/etc/init.d/mysql startを実行した時というのは、mysqldがダイレクトに起動しているのではなく、mysqld_safe内で起動している。つまり、mysqld_safeが内部でmysqldを実行しているのである

	参考URL: https://open-groove.net/mysql/mysqld-mysqldsafe/

### What is PHP-FPM?
	PM ( FastCGI Process Manager ) は PHP の FastCGI 実装のひとつで、 主に高負荷のサイトで有用な追加機能がある。
	CGIとは、Webサーバが、Webブラウザなどからの要求に応じてプログラムを実行する仕組みの1つ。

#### What is "wp-config.php" ?
	wp-config.php ファイルは WordPress のインストールを行う上で最も重要なファイルの1つ。
	このファイルは WordPress のファイルディレクトリのルート直下に置かれ、中にはデータベース接続情報などサイトの基礎となる情報の詳細が含まれている。

#### What is "www.conf"?
	プールディレクティブは PHP-FPM の規約で、複数の子プロセスを "プール" として起動し、それぞれを異なる設定で使用できるようにするもの。
	プールディレクティブファイルのデフォルト名は www.conf。要するにphp-fpmに関する設定を行うファイル。

	listen: リクエストを待ち受けるポート or UNIX ドメインソケットを指定します。

	参考URL: https://stackoverflow.com/questions/39054500/what-is-www-conf

#### What is UNIX domain socket?
	UNIXドメインソケット（英: UNIX domain socket）や IPCソケット とは、単一のオペレーティングシステム内で実行されるプロセス間でデータを交換するためのデータ通信の終点

	参考URL: https://qiita.com/toshihirock/items/b643ed0edd30e6fd1f14
