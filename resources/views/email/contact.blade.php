閲覧いただきありがとうございます。

■お名前
{{ Arr::get($posts, 'name') }}

■メールアドレス
{{ Arr::get($posts, 'mail') }}

■UPしてほしい機能
@foreach ($posts['request'] as $request)
{{$requestList[$request]}}
@endforeach

■ご希望・ご質問
{{ Arr::get($posts, 'comment', '-') }}