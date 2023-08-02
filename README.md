# XSSSamples
お勉強用 (for study)

# フォルダ作成説明
番号は1~9のみしか使用しない。
a9の次はb1とアルファベットをあげていく。
zまで言ったらaaにしていく。

※9、10、11の時並び順が10、11、9のように先頭の番号をみて並ばせてしまう時があるため。

```
ex)
sample-a1 ~ sample-a9
sample-b1 ~ sample-b9
|
sample-aa1 ~ sample-aa9
|
sample-aaa1 ~ sample-aa9
```


# Docker

```
$ cd <<ymlある箇所>>
$ docker-compose up --build -d

※『localhost』がdockerのipの場合もあるかもです。昔の自分と同じならipは`$ docker-machine ip default`で検索出来るはず、
http://localhost:86/
```