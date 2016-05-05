<?php
    /**
     * @param $title
     *
     * @return string
     */
    function rutranslit($title)
    {
        $chars = [
            //rus
            'А' => 'A',
            'Б' => 'B',
            'В' => 'V',
            'Г' => 'G',
            'Д' => 'D',
            'Е' => 'E',
            'Ё' => 'YO',
            'Ж' => 'ZH',
            'З' => 'Z',
            'И' => 'I',
            'Й' => 'Y',
            'К' => 'K',
            'Л' => 'L',
            'М' => 'M',
            'Н' => 'N',
            'О' => 'O',
            'П' => 'P',
            'Р' => 'R',
            'С' => 'S',
            'Т' => 'T',
            'У' => 'U',
            'Ф' => 'F',
            'Х' => 'KH',
            'Ц' => 'C',
            'Ч' => 'CH',
            'Ш' => 'SH',
            'Щ' => 'SHH',
            'Ъ' => '',
            'Ы' => 'Y',
            'Ь' => '',
            'Э' => 'YE',
            'Ю' => 'YU',
            'Я' => 'YA',
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'g',
            'д' => 'd',
            'е' => 'e',
            'ё' => 'yo',
            'ж' => 'zh',
            'з' => 'z',
            'и' => 'i',
            'й' => 'y',
            'к' => 'k',
            'л' => 'l',
            'м' => 'm',
            'н' => 'n',
            'о' => 'o',
            'п' => 'p',
            'р' => 'r',
            'с' => 's',
            'т' => 't',
            'у' => 'u',
            'ф' => 'f',
            'х' => 'kh',
            'ц' => 'c',
            'ч' => 'ch',
            'ш' => 'sh',
            'щ' => 'shh',
            'ъ' => '',
            'ы' => 'y',
            'ь' => '',
            'э' => 'ye',
            'ю' => 'yu',
            'я' => 'ya',
            //spec
            '—' => '-',
            '«' => '',
            '»' => '',
            '…' => '',
            '№' => 'N',
            '—' => '-',
            '«' => '',
            '»' => '',
            '…' => '',
            '!' => '',
            '@' => '',
            '#' => '',
            '$' => '',
            '%' => '',
            '^' => '',
            '&' => '',
            //ukr
            'Ї' => 'Yi',
            'ї' => 'i',
            'Ґ' => 'G',
            'ґ' => 'g',
            'Є' => 'Ye',
            'є' => 'ie',
            'І' => 'I',
            'і' => 'i',
            //kazakh
            'Ә' => 'A',
            'Ғ' => 'G',
            'Қ' => 'K',
            'Ң' => 'N',
            'Ө' => 'O',
            'Ұ' => 'U',
            'Ү' => 'U',
            'H' => 'H',
            'ә' => 'a',
            'ғ' => 'g',
            'қ' => 'k',
            'ң' => 'n',
            'ө' => 'o',
            'ұ' => 'u',
            'h' => 'h'
        ];
        if (seems_utf8($title)) {
            $title = urldecode($title);
        }
        $title = preg_replace('/\.+/', '.', $title);

        return strtr($title, $chars);
    }

    add_filter('sanitize_file_name', 'rutranslit');
    add_filter('sanitize_title', 'rutranslit');
