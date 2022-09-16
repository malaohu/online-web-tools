<?php

namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $data = array();
        $act = input('act', 'index');
        switch ($act) {
            case 'uuid':
                $data['uuid_number'] = input('uuid_number', 1);
                $data['uuid_letter'] = input('uuid_letter', 2);
                $data['uuid'] = uuid($data['uuid_number'], $data['uuid_letter']);
                break;
            case 'guid':
                $data['guid_number'] = input('guid_number', 1);
                $data['guid_letter'] = input('guid_letter', 1);
                $array = array();
                for ($i = 0; $data['guid_number'] > $i; $i++) {
                    $guid = create_guid();
                    if (!in_array($guid, $array)) {
                        $array[] = ($data['guid_letter'] == 1) ? strtoupper($guid) : strtolower($guid);
                    } else {
                        $i--;
                    }
                }
                $data['guid'] = $array;
                break;
            case 'md5':
                $data['txt_md5'] = input('txt_md5', '');
                $md532 = md5($data['txt_md5']);
                $md516 = substr($md532, 8, 16);
                $data['md532_d'] = strtoupper($md532);
                $data['md532_x'] = strtolower($md532);
                $data['md516_d'] = strtoupper($md516);
                $data['md516_x'] = strtolower($md516);
                break;
            case 'caiji':
                $data['url'] = input('url', '');
                $data['content'] = $data['url'] ? Fcurl($data['url']) : '';
                break;
            case 'ip':
                if (request()->isPost()) {
                    $ip = input('post.ip');
                    return $this->redirect('/ip/' . $ip . '.html', 302);
                }
                $ips = new \Net\Ips('../qqwry.dat');
                $ip = input('ip');
                if ($ip) {
                    $data['ym']['ip'] = $ip;
                    $data['ym']['domain'] = gethostbyname($ip);
                    $domain = preg_replace('/(\d+)..*/', '\\1', $data['ym']['domain']);
                    if ('1' <= $domain && $domain <= '126') {
                        $data['ym']['fw'] = '1.0.0.1 - 126.155.255.254';
                    } elseif ('128' <= $domain && $domain <= '191') {
                        $data['ym']['fw'] = '128.0.0.1 - 191.255.255.254';
                    } elseif ('192' <= $domain && $domain <= '223') {
                        $data['ym']['fw'] = '192.0.0.1 - 223.255.255.254';
                    }
                    $fwq = $ips->Getlocation($data['ym']['domain']);
                    $data['ym']['city'] = strToUTF8($fwq['country'] . ' ' . $fwq['area']);
                }
                $data['getip'] = getip();
                $data['getBrowserOs'] = getBrowserOs();
                $city = $ips->Getlocation($data['getip']);
                $data['city'] = strToUTF8($city['country'] . ' ' . $city['area']);
                break;
            case 'favicon':
                $data['upmsg'] = '';
                if (request()->isPost()) {
                    $upimage = input('file.upimage');
                    $getInfo = $upimage->getInfo();
                    if (isset($getInfo['tmp_name']) && $getInfo['tmp_name'] && is_uploaded_file($getInfo['tmp_name'])) {
                        if ($getInfo['type'] > 210000) {
                            $data['upmsg'] = "<font color=\"red\">你上传的文件体积超过了限制 最大不能超过200K</font>";
                        } else {
                            $fileext = array("image/pjpeg", "image/gif", "image/x-png", "image/png", "image/jpeg", "image/jpg");
                            if (!in_array($getInfo['type'], $fileext)) {
                                $data['upmsg'] = "<font color=\"red\">你上传的文件格式不正确 仅支持 jpg，gif，png</font>";
                            } else {
                                $type = substr(strrchr($getInfo['name'], '.'), 1);
                                switch ($type) {
                                    case 'pjpeg':
                                    case 'jpeg':
                                    case 'jpg':
                                        $im = imagecreatefromjpeg($getInfo['tmp_name']);
                                        break;
                                    case 'x-png':
                                    case 'png':
                                        $im = imagecreatefrompng($getInfo['tmp_name']);
                                        break;
                                    case 'gif':
                                        $im = imagecreatefromgif($getInfo['tmp_name']);
                                        break;
                                    default:
                                        $im = null;
                                }
                                if ($im) {
                                    $imginfo = getimagesize($getInfo['tmp_name']);
                                    if (!is_array($imginfo)) {
                                        $data['upmsg'] = "<font color=\"red\">图形格式错误！</font>";
                                    } else {
                                        switch (input('favicon_size')) {
                                            case 1;
                                                $resize_im = imagecreatetruecolor(16, 16);
                                                $size = 16;
                                                break;
                                            case 2;
                                                $resize_im = imagecreatetruecolor(32, 32);
                                                $size = 32;
                                                break;
                                            case 3;
                                                $resize_im = imagecreatetruecolor(48, 48);
                                                $size = 48;
                                                break;
                                            case 4;
                                                $resize_im = imagecreatetruecolor(64, 64);
                                                $size = 64;
                                                break;
                                            case 5;
                                                $resize_im = imagecreatetruecolor(128, 128);
                                                $size = 128;
                                                break;
                                            default;
                                                $resize_im = imagecreatetruecolor(32, 32);
                                                $size = 32;
                                                break;
                                        }
                                        imagecopyresampled($resize_im, $im, 0, 0, 0, 0, $size, $size, $imginfo[0], $imginfo[1]);
                                        $icon = new \Net\Ico();
                                        $gd_image_array = array($resize_im);
                                        $icon_data = $icon->GD2ICOstring($gd_image_array);
                                        header("Accept-Ranges: bytes");
                                        header("Accept-Length: " . strlen($icon_data));
                                        header("Content-type: application/octet-stream");
                                        header("Content-Disposition: attachment; filename=" . 'favicon.ico');
                                        return $icon_data;
                                    }
                                } else {
                                    $data['upmsg'] = "<font color=\"red\">生成错误请重试！</font>";
                                }
                            }
                        }
                    }
                }
                break;
            case 'gzip':
                $data['q'] = input('q');
                if (request()->isPost()) {
                    $data['q'] = str_replace(array('http://', 'https://'), '', $data['q']);
                    return $this->redirect('/gzip/?q=' . $data['q'], 302);
                }
                if ($data['q']) {
                    $data['url'] = preg_replace("/([\w.]+)[\w\/]*[\w.]*\??[\w=&\+\%]*/is", '\\1', $data['q']);
                    $data['gzip'] = is_url('http://' . $data['q']) ? urlheader($data['q']) : '';
                }
                break;
            case 'refresh':
                $url = input('url');
                if ($url) {
                    $content = Fcurl($url);
                    return $content;
                }
                break;
            case 'checkkeyword':
                $data['url'] = input('txt_url');
                $data['keyword'] = input('txt_keyword');
                if ($data['url'] && $data['keyword']) {
                    $str = Fcurl($data['url']);
                    $str = htmlTotext($str);
                    $data['html_strlen'] = mb_strlen($str, 'utf-8');
                    $data['html_gjccd'] = mb_strlen($data['keyword'], 'utf-8');
                    $data['html_gjcsl'] = substr_count($str, $data['keyword']);
                    $data['html_gjczcd'] = $data['html_gjccd'] * $data['html_gjcsl'];
                    $data['html_mdjgjs'] = @round(($data['html_gjczcd'] / $data['html_strlen'] * 100), 1);
                }
                break;
            case 'chameta':
                $data['url'] = input('txt_url');
                $data['title'] = '';
                $data['title_len'] = 0;
                $data['keywords'] = '';
                $data['keywords_len'] = 0;
                $data['description'] = '';
                $data['description_len'] = 0;
                if ($data['url']) {
                    $str = Fcurl($data['url']);
                    preg_match("/<title>([\w\W]*?)<\/title>/is", $str, $match);
                    $data['title'] = isset($match['1']) ? $match['1'] : null;
                    $data['title_len'] = mb_strlen($data['title'], 'utf-8');
                    preg_match("/<meta\s+name=\"keywords\"\s+content=\"([\w\W]*?)\"\s+\/>/is", $str, $match);
                    $data['keywords'] = isset($match['1']) ? $match['1'] : null;
                    $data['keywords_len'] = mb_strlen($data['keywords'], 'utf-8');
                    preg_match("/<meta\s+name=\"description\"\s+content=\"([\w\W]*?)\"\s+\/>/is", $str, $match);
                    $data['description'] = isset($match['1']) ? $match['1'] : null;
                    $data['description_len'] = mb_strlen($data['description'], 'utf-8');
                }
                break;
            case 'webstatus':
                $data['url'] = input('url');
                $data['ip'] = '';
                if ($data['url']) {
                    $web = webstatus($data['url']);
                    $data['ip'] = $web['ip'];
                    $data['code'] = $web['code'];
                    $data['head'] = $web['head'];
                }
                break;
            case 'whois':
                $data['url'] = input('whois');
                $data['whois'] = '';
                $data['domain'] = array();
                if($data['url']){
                    if (preg_match('/(http:\/\/|https:\/\/|)([\w.\x{4e00}-\x{9fa5}]*?)/iUu', $data['url'], $domain)) {
                        $data['url'] = $domain['2'];
                    }
                    $whois = whois_query($data['url']);
                    if (preg_match('/Registrar:\s+(.*)/', $whois, $domain)) {
                        $data['domain']['注册商']=$domain['1'];
                    }
                    if (preg_match('/Registrant[:]?\s+(.*)/', $whois, $domain)) {
                        $data['domain']['联系人']=$domain['1'];
                    }
                    if (preg_match('/(Registrar\s+Abuse|Registrant)\s+Contact\s+Email[:]?\s+(.*)/', $whois, $domain)) {
                        $data['domain']['联系邮箱']=$domain['2'];
                    }
                    if (preg_match('/(Registrar\s+Abuse|Registrant)\s+Contact\s+Phone[:]?\s+(.*)/', $whois, $domain)) {
                        $data['domain']['联系电话']=$domain['2'];
                    }
                    if (preg_match('/Updated\s+Date[:]?\s+(.*)/', $whois, $domain)) {
                        $data['domain']['更新时间']=$domain['1'];
                    }
                    if (preg_match('/(Registration\s+Time|Creation\s+Date)[:]?\s+(.*)/', $whois, $domain)) {
                        $data['domain']['创建时间']=$domain['2'];
                    }
                    if (preg_match('/(Expiration\s+Time|Registry\s+Expiry\s+Date)[:]?\s+(.*)/', $whois, $domain)) {
                        $data['domain']['过期时间']=$domain['2'];
                    }
                    if (preg_match('/Registrar\s+WHOIS\s+Server[:]?\s+(.*)/', $whois, $domain)) {
                        $data['domain']['域名服务器']=$domain['1'];
                    }
                    if (preg_match_all('/Name\s+Server?[:]\s+(.*)/', $whois, $domain)) {
                        $data['domain']['DNS']=$domain['1'];
                    }
                    if (preg_match('/Domain\s+Status[:]?\s+(.*)/', $whois, $domain)) {
                        $data['domain']['状态']=$domain['1'];
                    }
                    unset($domain);
                    $whois = "'".str_replace(["\r",'\'',"\n"], ['',"\'","'+\"\\n\"+\r'"],$whois).'\'';
                    $data['whois'] = $whois;
                }
                break;
            case 'chaicp':
                $data['url'] = input('icp');
                $data['icp'] = array();
                if($data['url']){
                    if (preg_match('/(http:\/\/|https:\/\/|)([\w.\x{4e00}-\x{9fa5}]*?)/iUu', $data['url'], $domain)) {
                        $data['url'] = $domain['2'];
                    }
                    $json = Fcurl('https://api.oick.cn/icp/api.php?url='.$data['url']);
                    $data['icp'] = json_decode($json, true);
                    $data['code'] = $data['icp']['code'];
                    unset($data['icp']['code']);
                }
                break;
            case 'lishishangdejintian':
                $lsjt = Fcurl('https://api.oick.cn/lishi/api.php');
                $data['list'] = array();
                if($lsjt){
                    $lsjt = str_replace('""', '"', $lsjt);
                    $lsjt = json_decode($lsjt, true);
                    $data['list'] = ($lsjt['code']==1)?$lsjt['result']:array();
                }
                break;
        }
        return $this->fetch($act, $data);
    }

    public function api()
    {
        // 创建桌面快捷方式
        $save_name = input('save_name');
        $save_url = input('save_url');
        if ($save_name && $save_url) {
            header("Content-Type: application/octet-stream");
            //$ua = $_SERVER["HTTP_USER_AGENT"];
            $filename = urldecode($save_name) . '.url';//生成的文件名
            $encoded_filename = urlencode($filename);
            $encoded_filename = str_replace("+", "%20", $encoded_filename);
            if (preg_match("/MSIE/", $_SERVER['HTTP_USER_AGENT'])) {
                header('Content-Disposition:  attachment; filename="' . $encoded_filename . '"');
            } elseif (preg_match("/Firefox/", $_SERVER['HTTP_USER_AGENT'])) {
                // header('Content-Disposition: attachment; filename*="utf8' .  $filename . '"');
                header('Content-Disposition: attachment; filename*="' . $filename . '"');
            } else {
                header('Content-Disposition: attachment; filename="' . $filename . '"');
            }
            return "
            [InternetShortcut]
            URL={$save_url}
            Prop3=19,2
            IconIndex=1
            ";
        }
        // 请求类型
        switch (input('type')) {
            case 'checkweixin':
                $txt_url = input('txt_url');
                if (!preg_match('/(http:\/\/)|(https:\/\/)/i', $txt_url)) {
                    $txt_url = 'http://' . $txt_url;
                }
                // 官方API接口
                $api = get_headers('http://mp.weixinbridge.com/mp/wapredirect?url=' . urlencode($txt_url), 1);
                if (isset($api['Location']['1'])) {
                    if ($api['Location']['1'] == $txt_url) {
                        $code = 0;
                        $msg = '域名正常！';
                    } else {
                        $code = 1;
                        $msg = '域名被拦截！';
                    }
                }
                return json(array(
                    'code' => $code,
                    'msg' => $msg,
                    'status' => 1
                ));
                break;
            case 'check_url':
                $page = input('page', 1);
                $url = input('url');
                $str = Fcurl($url);
                $count_str = '';
                $data = '';
                $list = array(array(), array(), 0);
                if ($str) {
                    preg_match_all('/<a .*?href="(.*?)".*?>/is', $str, $ahref);
                    $aLink = [];
                    $title = preg_replace("/.*<title>(.*?)<\/title>.*/is", '\\1', $str);
                    $url_p = 'http://' . preg_replace("/(http[s]?:)?(\/\/)?([\w.]+)[\w\/]*[\w.]*\??[\w=&\+\%]*/is", '\\3', $url);
                    $id = 1;
                    $aLink[] = array(
                        'url' => $url_p,
                        'title' => $title,
                        'id' => $id
                    );
                    $arr = array();
                    foreach ($ahref['1'] as $key => $vo) {
                        $qdiv = substr($vo, 0, 1) != '#' && $vo != '/' && substr($vo, 0, 11) != 'javascript:';
                        if ($qdiv && $vo != $url_p && !in_array($vo, $arr)) {
                            $arr[] = $vo;
                            if (substr($vo, 0, 2) == '//') {
                                ++$id;
                                $aLink[] = array(
                                    'url' => 'http:' . $vo,
                                    'title' => '',
                                    'id' => $id
                                );
                            } else
                                if (substr($vo, 0, 4) == 'http') {
                                    ++$id;
                                    $aLink[] = array(
                                        'url' => $vo,
                                        'title' => '',
                                        'id' => $id
                                    );
                                } else {
                                    if (substr($vo, 0, 1) == '/') {
                                        ++$id;
                                        $aLink[] = array(
                                            'url' => $url_p . $vo,
                                            'title' => '',
                                            'id' => $id
                                        );
                                    } else {
                                        ++$id;
                                        $aLink[] = array(
                                            'url' => $url_p . '/' . $vo,
                                            'title' => '',
                                            'id' => $id
                                        );
                                    }
                                }
                        }
                    }
                    $list = page($aLink, 20, $page);
                    for ($i = 1; $i <= $list['1']; $i++) {
                        $count_str .= '<li class="page-number "><a href="javascript:;" style="' . ($i == $page ? 'background:#ccc' : '') . '" onclick="get_data(' . $i . ')">' . $i . '</a></li>';
                    }
                    foreach ($list['0'] as $key => $vo) {
                        $data .= '<tr class=""><td class="order">' . $vo['id'] . '</td><td class="title" id="tr_title_' . $vo['id'] . '">' . ($vo['title'] ? $vo['title'] : ' - ') . '</td><td class="owner" style="text-overflow: ellipsis;white-space: nowrap;overflow: hidden;"><a class="green" href="' . $vo['url'] . '" target="_blank">' . $vo['url'] . '</a></td><td class="title" id="tr_' . $vo['id'] . '"> - </td></tr>';
                    }
                }
                return json(array(
                    'status' => $str ? 1 : 0,
                    'data' => $data,
                    'obj' => $list['0'],
                    'total_count' => $list['2'],
                    'count_str' => $count_str
                ));
                break;
            case 'single_url':
                $url = input('url');
                $str = '';
                if ($url) {
                    $str = urltitlecode($url);
                }
                return json($str);
                break;
            case 'camelcase':
                $id = input('id');
                $text = input('text');
                if ($id == 2) {
                    $text = preg_replace_callback('/([^a-zA-Z][a-z])/', function ($m) {
                        $str = str_replace('_', '', $m[0]);
                        return strtoupper($str);
                    }, ucfirst($text));
                } else {
                    $text = preg_replace_callback('/(([A-Z]).*?([A-Z]))/', function ($m) {
                        $str = str_replace($m['3'], '_' . $m['3'], $m[0]);
                        return $str;
                    }, ucfirst($text));
                    $text = strtolower($text);
                }
                $data = array();
                $data['status'] = $text ? 1 : 0;
                $data['msg'] = $text;
                return json($data);
                break;
            default:
                /*$ifpost = 0;
                $datafields = '';
                $post = input('post.');
                if ($post) {
                    $ifpost = 1;
                    $datafields = http_build_query($post);
                }
                $url = 'http://www.pcjson.com' . $_SERVER['REQUEST_URI'];
                $str = Fcurl($url, $ifpost, $datafields);
                return json_decode($str, true);*/
                return json(array(
                    'status' => 1,
                    'msg' => null
                ));
        }
    }
}
