form template build by Livewire　& crud

https://qiita.com/yuuki-furue/items/e45c634b2ee94c7177a6
上記で少しだけ解説をしております。
CRUDとCSVの機能付きフォームです。

PostController.phpの
$search_params = $request->only([
13行目から74行目までの部分と

Post.phpの22行目から
public function scopeSearch($query) 
で実装しております。

またこちらはredisを組み込んでいるLaravelプロジェクトとなります
現在vpsでnginx運用中です
その設定は後日記載致します。

どういった機能なのかは以下のリンクよりご確認お願い致します。
https://github.com/yuukisfurue/LaravelBoard-redis/issues/1

現在この画面は旧画面であるため、本番運用時はログイン画面入力後にデータ入力画面へリダイレクトするよう設定しております。
