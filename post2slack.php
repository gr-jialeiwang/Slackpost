<?php

include_once __DIR__.'/SlackBot.php';
include_once __DIR__.'/SlackBotInfo.php';

// 引数チェック
if ($argc < 2) {
    exit('引数にポストしたいメッセージを指定してください');
}
$message = $argv[1];

// ポスト先ルームのURL
$url = 'https://hooks.slack.com/services/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';
// メッセージをポスト
$bot = new SlackBot();
print_r($bot->post_message(new SlackBotInfo($url, $message)));
