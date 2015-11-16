# travis_practice

[![Build Status](https://travis-ci.org/niisan-tokyo/travis_practice.svg?branch=master)](https://travis-ci.org/niisan-tokyo/travis_practice)
[![Coverage Status](https://coveralls.io/repos/niisan-tokyo/travis_practice/badge.svg?branch=master&service=github)](https://coveralls.io/github/niisan-tokyo/travis_practice?branch=master)
[![Code Climate](https://codeclimate.com/github/niisan-tokyo/travis_practice/badges/gpa.svg)](https://codeclimate.com/github/niisan-tokyo/travis_practice)

The practice of travis ci php 

## Travisを使用する

要するに、Travis CIを使って自動ビルドがどう動くか確かめてみたいってだけ

## 準備する

準備はVagrantfileとChefの定義ファイルおいてあるけど、そこまで仰々しくする必要なかったかもしれない
PHP5.6入れられればそれでいい

ツールの依存性チェックとかオートローダとかはcomposerにまるなげしてる

動作環境にcomposer入れていない場合は

```
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
```

こんな感じで入れる

もうpackage.jsonは作ってあるので、

```
composer install
```

で行けるはず