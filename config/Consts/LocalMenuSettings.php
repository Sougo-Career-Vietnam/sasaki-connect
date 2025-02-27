<?php
namespace App\config\Consts;

class LocalMenuSettings
{
    const HEADER_LIST = array(
        [
            "text" => "求人検索",
            "url" => "/search",
            "class" => "spOnly",
            "target" => "",
        ],
        [
            "text" => "お仕事を\nお探しの方へ",
            "url" => "/recruit",
            "class" => "",
            "target" => "",
        ],
        [
            "text" => "ご登録・ご面談のお申し込み",
            "url" => "/recruit/form",
            "class" => "spOnly",
            "target" => "",
        ],
    );

    const FOOTER_LIST = array(
        [
            "text" => "TOPページ",
            "url" => "/",
            "class" => "one end",
            "target" => "",
        ],
        [
            "text" => "■お仕事紹介について",
            "url" => "",
            "class" => "noLink",
            "target" => "",
        ],
        [
            "text" => "求人検索",
            "url" => "/search",
            "class" => "two",
            "target" => "",
        ],
        [
            "text" => "お仕事をお探しの方へ",
            "url" => "/recruit",
            "class" => "two",
            "target" => "",
        ],
        [
            "text" => "ご登録・ご面談のお申し込み",
            "url" => "/recruit/form",
            "class" => "two end",
            "target" => "",
        ],
    );
}
