<?php

function telveflavor($text)
{
    $emoji_dict = array(
        ":gülümse:" => "simple_smile.png",
        ":)" => "simple_smile.png",
        ":gülücük:" => "smile.png",
        ":D" => "smile.png",
        ":haha:" => "smile.png",
        ":kocamangül:" => "smile.png",
        ":büyükgül:" => "smile.png",
        ":sevimligül:" => "smile.png",
        ":sırıt:" => "grin.png",
        ":gülmektenağla:" => "joy.png",
        ":hehe:" => "sweat_smile.png",
        ":kahkaha:" => "laughing.png",
        "xD" => "laughing.png",
        ":gözkırp:" => "wink.png",
        ";)" => "wink.png",
        ":utangaçgül:" => "blush.png",
        "^_^" => "blush.png",
        ":utanarakgül:" => "blush.png",
        ":nefis:" => "yum.png",
        ":artiz:" => "sunglasses.png",
        ":artist:" => "sunglasses.png",
        ":güneşgözlüğü:" => "sunglasses.png",
        "8|" => "sunglasses.png",
        ":aşıkbak:" => "heart_eyes.png",
        ":aşıkaşıkbak:" => "heart_eyes.png",
        ":gözlerkalp:" => "heart_eyes.png",
        ":kalpliöp:" => "kissing_heart.png",
        ":*" => "kissing_heart.png",
        ":kalpliöpücük:" => "kissing_heart.png",
        ":öp:" => "kissing_smiling_eyes.png",
        ":öpücük:" => "kiss.png",
        ":utangaçöp:" => "kissing_closed_eyes.png",
        ":utangaçöpücük:" => "kissing_closed_eyes.png",
        ":utan:" => "flushed.png",
        "o.O" => "flushed.png",
        ":utandım:" => "flushed.png",
        ":oh:" => "relieved.png",
        ":dilçıkar:" => "stuck_out_tongue_winking_eye.png",
        ":P" => "stuck_out_tongue_winking_eye.png",
        ":uyu:" => "sleeping.png",
        ":zzz:" => "zzz.png",
        ":üzül:" => "worried.png",
        ":(" => "worried.png",
        ":endişelen:" => "worried.png",
        ":ney:" => "anguished.png",
        ":O" => "open_mouth.png",
        ":tüh:" => "confused.png",
        ":|" => "neutral_face.png",
        "-_-" => "expressionless.png",
        ":hıh:" => "unamused.png",
        ":ağla:" => "cry.png",
        ":'(" => "cry.png",
        ":çoküzül:" => "cry.png",
        ":olamaz:" => "scream.png",
        ":sinirli:" => "angry.png",
        ":kızgın:" => "angry.png",
        ":öfkeli:" => "rage.png",
        ":şeytan:" => "imp.png",
        ":şeytanigül:" => "smiling_imp.png",
        ":masum:" => "innocent.png",
        ":melek:" => "innocent.png",
        ":uzaylı:" => "alien.png",
        ":sarıkalp:" => "yellow_heart.png",
        ":mavikalp:" => "blue_heart.png",
        ":morkalp:" => "purple_heart.png",
        ":kalp:" => "heart.png",
        "&lt;3" => "heart.png",
        ":kırmızıkalp:" => "heart.png",
        ":yeşilkalp:" => "green_heart.png",
        ":kırıkkalp:" => "broken_heart.png",
        ":pırıltılıkalp:" => "sparkling_heart.png",
        ":yıldızlıkalp:" => "sparkling_heart.png",
        ":aşktanrısı:" => "cupid.png",
        ":pırıltı:" => "sparkles.png",
        ":yıldız:" => "star2.png",
        ":bom:" => "boom.png",
        ":müzik:" => "musical_note.png",
        ":ateş:" => "fire.png",
        ":kaka:" => "poop.png",
        ":sıç:" => "poop.png",
        ":bok:" => "shit.png",
        ":+1:" => "thumbsup.png",
        ":beğen:" => "thumbsup.png",
        ":evet:" => "thumbsup.png",
        ":-1:" => "thumbsdown.png",
        ":beğenme:" => "thumbsdown.png",
        ":hayır:" => "thumbsdown.png",
        ":ok:" => "ok_hand.png",
        ":tamam:" => "ok_hand.png",
        ":yumruk:" => "punch.png",
        ":zafer:" => "v.png",
        ":trol:" => "trollface.png",
        ":github:" => "octocat.png",
        ":dans:" => "dancer.png",
        ":yukarı:" => "point_up.png",
        ":aşağı:" => "point_down.png",
        ":sol:" => "point_left.png",
        ":sağ:" => "point_right.png",
        ":dua:" => "pray.png",
        ":alkış" => "clap.png",
        ":kas:" => "muscle.png",
        ":metal:" => "metal.png",
        ":nah:" => "fu.png",
        ":ıIıı:" => "fu.png",
        ":ortaparmak:" => "fu.png",
        ":kafatası:" => "skull.png",
        ":kurukafa:" => "skull.png",
        ":damla:" => "droplet.png",
        ":burun:" => "nose.png",
        ":dil:" => "tongue.png",
        ":göz:" => "eyes.png",
        ":kulak:" => "ear.png",
        ":konuşmabalonu:" => "speech_balloon.png",
        ":düşünmebalonu:" => "thought_balloon.png",
        ":türkiye:" => "turkey.png",
        ":tc:" => "turkey.png",
        ":türkbayrağı:" => "turkey.png",
        ":atatürk:" => "ataturk.png",
        ":atatürk2:" => "ataturk2.png",
        ":hediye:" => "gift.png",
        ":altın:" => "gold_bar.png",
        ":para:" => "dollar.png",
        ":dolar:" => "dollar.png",
        ":euro:" => "euro.png",
        ":kredikartı:" => "credit_card.png",
        ":üniversite:" => "mortar_board.png",
        ":üni:" => "mortar_board.png",
        ":viki:" => "mortar_board.png",
        ":bulut:" => "cloud.png",
        ":güneş:" => "sunny.png",
        ":güneşli:" => "sunny.png",
        ":dünya:" => "earth_africa.png",
        ":yağmur:" => "umbrella.png",
        ":kar:" => "snowflake.png"
    );

    foreach ($emoji_dict as $emoji => $file) {
        $text = preg_replace('/(?s)<(pre|code)[^<]*>.*?<\/(pre|code)>(*SKIP)(*FAIL)|'.preg_quote($emoji).'/', '<img class="emoji" src="'.base_url("").'assets/img/emojis/'.$file.'" height="20" width="20" title="'.$emoji.'" alt="'.$emoji.'" align="absmiddle">', $text);
    }

    $CI =& get_instance();
    $CI->load->library("simple_html_dom");
    $html = new Simple_html_dom();
    $html->load($text);

    foreach ($html->find('a') as $link) {
        $parsed = parse_url($link->href);
        if (isset($parsed['path'])) {
            if (endsWith($parsed['path'], '.jpg') || endsWith($parsed['path'], '.jpeg') || endsWith($parsed['path'], '.png') || endsWith($parsed['path'], '.gif')) {
                $text = preg_replace('`<a.*href="'.preg_quote($link->href).'".*<\/a>`', '<img src="'.$link->href.'" alt="" style="max-width: 500px;">', $text);
            }
            if (isset($parsed['host'])) {
                if (endsWith($parsed['host'], 'youtube.com') || ($parsed['host'] == 'youtu.be')) {
                    preg_match("/^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/", $link->href, $id);
                    if (isset($id[7])) {
                        $embed = '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$id[7].'" frameborder="0" allowfullscreen></iframe>';
                        $text = preg_replace('`<a.*href="'.preg_quote($link->href).'".*<\/a>`', $embed, $text);
                    }
                }
            }
        }
    }

    return $text;
}

?>
