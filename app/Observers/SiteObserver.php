<?php


namespace App\Observers;


use App\Models\Site;
use Overtrue\Pinyin\Pinyin;
use LasseRafn\InitialAvatarGenerator\InitialAvatar;

class SiteObserver
{
    public function saved(Site $site)
    {
        // 当图片为空时生成一张默认图片
        if (!$site->thumb) {

            $thumbName = 'images/' . md5(uniqid()) . '.png';

            $pinyin = new Pinyin();
            $title = $pinyin->abbr($site->title, PINYIN_KEEP_ENGLISH);
            $letter = mb_substr(ucfirst($title), 0, 1);

            $generater = new InitialAvatar();
            $thumb = $generater->name($letter)->size(200)->generate();
            $thumb->save('uploads/' . $thumbName);

            $site->thumb = $thumbName;
            $site->save();
        }
    }

    protected function getFirstLetter($string)
    {
        mb_substr(ucfirst($string), 0, 1);
    }

}
