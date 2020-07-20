<?php

#1.通过正则获得中文英文和字母

$str = "?><？》”\"《汉字哈斯是55(*&^%………………罚罚劣$#@!!~";

echo match_chinese($str);

function match_chinese($chars,$encoding='utf8')
{
    $pattern =($encoding=='utf8')?'/[\x{4e00}-\x{9fa5}a-zA-Z0-9]/u':'/[\x80-\xFF]/';
    preg_match_all($pattern,$chars,$result);
    $str =join('',$result[0]);
    return $str;
}
#如果判断是否符合中英文字符规则
function is_match_chinese($chars,$encoding='utf8')
{
    $pattern =($encoding=='utf8')?'/[\x{4e00}-\x{9fa5}a-zA-Z0-9]/u':'/[\x80-\xFF]/';
    preg_match_all($pattern,$chars,$result);
    $str =join('',$result[0]);
    if($str == $chars){
      return true;
    }else{
      return false;
    }
}
