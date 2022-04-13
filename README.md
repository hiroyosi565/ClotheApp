<p align="center"><a href="https://clotheapp.herokuapp.com/"><img src="https://news.p-mom.net/wp-content/uploads/2017/08/123661m.jpg" width="200" height="200"></a></p>

# ClotheApp

## アプリの概要
<p>自分が所有する服を登録し、どこにいてもサイトにアクセスし、ログインすることで所有する服を可視化することができるといったアプリとなっています。</p>
<p>URL : https://clotheapp.herokuapp.com/</p>

## 使用言語・OS
<p>AWS（EC2、S3） version 2</p>
<p>Laravel v6.20.44</p>
<p>PHP version 8.0.11</p>
<p>MySQL Server version: 10.2.38-MariaDB MariaDB Server</p>
<p>Bootstrap v4.2.1</p>

## テスト用アカウント
<p>メールアドレス ： test@gmail.com</p>
<p>パスワード ： testuser</p>

## 機能一覧
<h3>機能</h3>
<p>天気登録</p>
<p>服登録機能</p>
<p>服カテゴリー機能</p>
<p>キーワード検索機能</p>
<p>ログイン機能</p>

## 製作した背景
私がこのアプリを開発しようと思った理由は二つあります。まず、外出中でも自分が持っている服を確認したいと思ったからです。自分の所有する服を可視化することで、クローゼットを漁る手間が省かれます。
２つ目の理由は、朝起きてからクローゼットの中から服を取り出し考える時間が面倒であるということです。なので、前日に明日の天気を知りなおかつ自分が持っている服を一覧で見ることができるので朝起きた時にスムーズに着替えをこなし、朝活ができるようになると思いこのWEBアプリ開発を行おうと考えました。

## 注力した機能や工夫した点
気象庁のwebAPIを用いて明日の天気を表示させるという天気登録機能の部分に注力しました。また、この機能を実装したことで、明日きていく服を考えることができるといった強みがあります。

## 使い方
"クローゼットアプリ"の基本的な使い方
まず、アカウントを所有していない場合はアカウント登録をします。
<p align="center"><img src="スクリーンショット 2022-04-13 13.52.16.png" width=400></p>
アカウントを作成したらログインを行い、一覧ページに移動します。
<p align="center"><img src="スクリーンショット 2022-04-13 13.52.47.png" width=400></p>
このindexページでは明日の天気を見ることと、自分が登録した服を見ることができ、キーワード検索をかけて服を探すこともできます。
ナビゲーションバーではカテゴリーごとの服を見れるようにボタン配置をつけています。
真ん中にある「追加」ボタンを押すことで服を登録する画面に移動します。
<p align="center"><img src="スクリーンショット 2022-04-13 13.49.49.png" width=800></p>
次の３つの写真では左から、服登録画面、服のデータを見ることができるshow画面、カテゴリー別画面というふうになっています。
服登録画面では画像を添付し、しっかり全ての情報を入力した上で登録をしなければ登録ができません。
<p align="center"><img src="スクリーンショット 2022-04-13 13.50.35.png" width=200 height="400"><a>.  </a><img src="スクリーンショット 2022-04-13 12.53.52.png" width=200 height="400"><a>.  </a><img src="スクリーンショット 2022-04-13 13.51.21.png" width=200 height="400"></p>


## 今後実装していきたいと考える機能

<h4>ユーザーフォロー機能</h4>
ユーザーフォロー機能を実装させることで、他のユーザーのクローゼットのなかを見ることができ、知り合い同士で服が被らないようにしたり、インフルエンサーがどんな服を持ってるかなどを見ることができるようになります。
<h4>セレクト機能</h4>
セレクト機能を実装させることで、登録しておいた服をセレクトし、コーディネートを組ませる。そのコーディネートを保存することで、何月何日にどういったコーディネートをしたのかわかるようになります。
