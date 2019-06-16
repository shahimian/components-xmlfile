<?php

namespace app\components\xmlfile;
libxml_use_internal_errors(true);

class XMLFile {

    public static function load($url) {
        return simplexml_load_file($url);
    }

}
