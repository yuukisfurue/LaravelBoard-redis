form template build by Laravel + Livewire　& crud

https://qiita.com/yuuki-furue/items/e45c634b2ee94c7177a6

上記で少しだけ解説をしております。

メールフォームとCRUDの機能です。

gmailに送付する際は以下のように.envを書き直すことで使用できます。

MAIL_FROM_ADDRESSはgmailの場合使用しません。

なので#MAIL_FROM_ADDRESS=メールアドレス
のようにコメントアウトして下さい。

MAIL_FROM_NAME="${name}"

上記については、送信者の名前が記入されますので、実際に送信される方のお名前をお書き添え下さい

```
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com 
MAIL_PORT=587 
MAIL_USERNAME=メールアドレス
MAIL_PASSWORD=アプリパスワード
#gmailのパスワードではありません。
MAIL_ENCRYPTION=tls 
#MAIL_FROM_ADDRESS=メールアドレス
MAIL_FROM_NAME="${name}"

```
