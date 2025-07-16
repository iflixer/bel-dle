<?php

return array (
  'on' => 'on',
  'api' => 
  array (
    'token' => 'b7db8a2be83d0f4d5b0c4788a1627fa6',
    'domain' => '',
  ),
  'xfields' => 
  array (
    'search' => 
    array (
      'kinopoisk_id' => 'kinopoisk_id',
      'imdb_id' => 'imdb_id',
    ),
    'write' => 
    array (
      'source' => 'video_url',
      'quality' => 'quality',
      'translation' => 'translation',
      'translations' => 'translations',
      'season' => 'season_last',
      'episode' => 'episode_last',
      'custom_quality' => 'quality_custom',
      'custom_translation' => 'translation_custom',
      'custom_translations' => '',
      'format_season_type' => '1',
      'format_season' => 'season_pretty',
      'format_episode_type' => '1',
      'format_episode' => 'episode_pretty',
      'title_rus' => 'name_rus',
      'title_orig' => 'name_foreign',
      'slogan' => 'slogan',
      'description' => 'description',
      'year' => 'year',
      'duration' => 'movie_length',
      'genres' => 'genres',
      'countries' => 'country',
      'age' => 'age_rating',
      'poster' => 'poster_url',
    ),
    'npt_update' => 'not_update',
  ),
  'seo' => 
  array (
    'on' => 'on',
    'url' => '[title_rus]{title_rus}[/title_rus][year] {year}[/year][custom_translation] {custom_translation}[/custom_translation][custom_quality] {custom_quality}[/custom_quality][serial][season] {season} сезон[/season][episode] {episode} серия[/episode][/serial]',
    'title' => '[title_rus]{title_rus}[/title_rus]',
    'meta' => 
    array (
      'title' => '[title_rus]{title_rus}[/title_rus][year] {year}[/year][translation] {translation}[/translation][quality] {quality}[/quality][serial][format_season] {format_season}[/format_season][format_episode] {format_episode}[/format_episode][/serial]',
      'description' => '[title_rus]{title_rus}[/title_rus][year] {year}[/year][translation] {translation}[/translation][quality] {quality}[/quality][serial][season] {season} сезон[/season][episode] {episode} серия[/episode][/serial]',
    ),
  ),
  'update' => 
  array (
    'type' => '1',
    'interval' => '3h',
    'movies' => 
    array (
      'on' => 'on',
      'add' => '1',
    ),
    'serials' => 
    array (
      'on' => 'on',
      'up' => '1',
      'add' => '1',
      'priority' => '',
    ),
  ),
  'serials' => 
  array (
    'updates' => 
    array (
      'on' => 'on',
      'days' => '',
      'items' => '',
    ),
  ),
  'custom' => 
  array (
    'qualities' => 
    array (
      'webdl' => 'крутое',
    ),
    'translations' => 
    array (
    ),
  ),
  'translations' => 
  array (
    0 => 
    array (
      'id' => 1,
      'title' => 'English',
    ),
    1 => 
    array (
      'id' => 2,
      'title' => 'test',
    ),
    2 => 
    array (
      'id' => 3,
      'title' => 'AlisaDirilis',
    ),
    3 => 
    array (
      'id' => 4,
      'title' => 'Anika',
    ),
    4 => 
    array (
      'id' => 5,
      'title' => 'Bars MacAdams',
    ),
    5 => 
    array (
      'id' => 6,
      'title' => 'BeniAffet',
    ),
    6 => 
    array (
      'id' => 7,
      'title' => 'Berial',
    ),
    7 => 
    array (
      'id' => 8,
      'title' => 'Cuba77',
    ),
    8 => 
    array (
      'id' => 9,
      'title' => 'Jade',
    ),
    9 => 
    array (
      'id' => 10,
      'title' => 'JAM',
    ),
    10 => 
    array (
      'id' => 11,
      'title' => 'JeFerSon',
    ),
    11 => 
    array (
      'id' => 12,
      'title' => 'Kansai',
    ),
    12 => 
    array (
      'id' => 13,
      'title' => 'Kobayashi',
    ),
    13 => 
    array (
      'id' => 14,
      'title' => 'Lupin',
    ),
    14 => 
    array (
      'id' => 15,
      'title' => 'Nazel & Freya',
    ),
    15 => 
    array (
      'id' => 16,
      'title' => 'Oni',
    ),
    16 => 
    array (
      'id' => 17,
      'title' => 'OSLIKt',
    ),
    17 => 
    array (
      'id' => 18,
      'title' => 'RiZZ_fisher',
    ),
    18 => 
    array (
      'id' => 19,
      'title' => 'Ryc99',
    ),
    19 => 
    array (
      'id' => 20,
      'title' => 'Trina_D',
    ),
    20 => 
    array (
      'id' => 21,
      'title' => 'Vulpes Vulpes',
    ),
    21 => 
    array (
      'id' => 22,
      'title' => 'Алексеев Антон',
    ),
    22 => 
    array (
      'id' => 23,
      'title' => 'Багичев Алексей',
    ),
    23 => 
    array (
      'id' => 24,
      'title' => 'Белов Вадим',
    ),
    24 => 
    array (
      'id' => 25,
      'title' => 'Визгунов Сергей',
    ),
    25 => 
    array (
      'id' => 26,
      'title' => 'Володарский Леонид',
    ),
    26 => 
    array (
      'id' => 27,
      'title' => 'Доцент',
    ),
    27 => 
    array (
      'id' => 28,
      'title' => 'Воротилин Олег',
    ),
    28 => 
    array (
      'id' => 29,
      'title' => 'Гаврилов Андрей',
    ),
    29 => 
    array (
      'id' => 30,
      'title' => 'Гаевский Евгений',
    ),
    30 => 
    array (
      'id' => 31,
      'title' => 'Гланц',
    ),
    31 => 
    array (
      'id' => 32,
      'title' => 'Гоблин',
    ),
    32 => 
    array (
      'id' => 33,
      'title' => 'Горчаков Василий',
    ),
    33 => 
    array (
      'id' => 34,
      'title' => 'Готлиб Александр',
    ),
    34 => 
    array (
      'id' => 35,
      'title' => 'Гранкин Евгений',
    ),
    35 => 
    array (
      'id' => 36,
      'title' => 'Kenum',
    ),
    36 => 
    array (
      'id' => 37,
      'title' => 'Дасевич Александр',
    ),
    37 => 
    array (
      'id' => 38,
      'title' => 'Дольский Андрей',
    ),
    38 => 
    array (
      'id' => 39,
      'title' => 'Дохалов Вартан',
    ),
    39 => 
    array (
      'id' => 40,
      'title' => 'Дохалов Вартан',
    ),
    40 => 
    array (
      'id' => 41,
      'title' => 'Дубровин Владимир',
    ),
    41 => 
    array (
      'id' => 42,
      'title' => 'Дьяков Сергей',
    ),
    42 => 
    array (
      'id' => 43,
      'title' => 'Дьяконов Константин',
    ),
    43 => 
    array (
      'id' => 44,
      'title' => 'Есарев Дмитрий',
    ),
    44 => 
    array (
      'id' => 45,
      'title' => 'Живов Юрий',
    ),
    45 => 
    array (
      'id' => 46,
      'title' => 'Завгородний Владимир',
    ),
    46 => 
    array (
      'id' => 47,
      'title' => 'Золотухин Николай',
    ),
    47 => 
    array (
      'id' => 48,
      'title' => 'Иванов Михаил',
    ),
    48 => 
    array (
      'id' => 49,
      'title' => 'Карповский Антон',
    ),
    49 => 
    array (
      'id' => 50,
      'title' => 'Карцев Пётр',
    ),
    50 => 
    array (
      'id' => 51,
      'title' => 'Первомайский',
    ),
    51 => 
    array (
      'id' => 52,
      'title' => 'Киреев Антон',
    ),
    52 => 
    array (
      'id' => 53,
      'title' => 'Козлов Сергей',
    ),
    53 => 
    array (
      'id' => 54,
      'title' => 'Королёв Владимир',
    ),
    54 => 
    array (
      'id' => 55,
      'title' => 'Котов Вячеслав',
    ),
    55 => 
    array (
      'id' => 56,
      'title' => 'Котова Ирина',
    ),
    56 => 
    array (
      'id' => 57,
      'title' => 'Кошкин Василий',
    ),
    57 => 
    array (
      'id' => 58,
      'title' => 'Кузнецов Сергей',
    ),
    58 => 
    array (
      'id' => 59,
      'title' => 'Курдов Владимир',
    ),
    59 => 
    array (
      'id' => 60,
      'title' => 'Лагута Андрей',
    ),
    60 => 
    array (
      'id' => 61,
      'title' => 'CDV',
    ),
    61 => 
    array (
      'id' => 62,
      'title' => 'Леша-прапорщик',
    ),
    62 => 
    array (
      'id' => 63,
      'title' => 'Либергал Григорий',
    ),
    63 => 
    array (
      'id' => 64,
      'title' => 'Марченко Александр',
    ),
    64 => 
    array (
      'id' => 65,
      'title' => 'Doctor Joker',
    ),
    65 => 
    array (
      'id' => 66,
      'title' => 'Махонько Виктор',
    ),
    66 => 
    array (
      'id' => 67,
      'title' => 'Медведев Алексей',
    ),
    67 => 
    array (
      'id' => 68,
      'title' => 'Михалёв Алексей',
    ),
    68 => 
    array (
      'id' => 69,
      'title' => 'Морозов Павел',
    ),
    69 => 
    array (
      'id' => 70,
      'title' => 'Мудров Андрей',
    ),
    70 => 
    array (
      'id' => 71,
      'title' => 'Муравский Юрий',
    ),
    71 => 
    array (
      'id' => 72,
      'title' => 'Набиев Сергей',
    ),
    72 => 
    array (
      'id' => 73,
      'title' => 'Назаров Вадим',
    ),
    73 => 
    array (
      'id' => 74,
      'title' => 'Немахов Юрий',
    ),
    74 => 
    array (
      'id' => 75,
      'title' => 'Пронин Антон',
    ),
    75 => 
    array (
      'id' => 76,
      'title' => 'Прямостанов Павел',
    ),
    76 => 
    array (
      'id' => 77,
      'title' => 'Рудой Евгений',
    ),
    77 => 
    array (
      'id' => 78,
      'title' => 'Рутилов Виктор',
    ),
    78 => 
    array (
      'id' => 79,
      'title' => 'Рыбин',
    ),
    79 => 
    array (
      'id' => 80,
      'title' => 'Рябов Сергей',
    ),
    80 => 
    array (
      'id' => 81,
      'title' => 'Санаев Павел',
    ),
    81 => 
    array (
      'id' => 82,
      'title' => 'Сербин Юрий',
    ),
    82 => 
    array (
      'id' => 83,
      'title' => 'Смирнов Александр',
    ),
    83 => 
    array (
      'id' => 84,
      'title' => 'Сонькин Владимир',
    ),
    84 => 
    array (
      'id' => 85,
      'title' => 'Товбин Юрий',
    ),
    85 => 
    array (
      'id' => 86,
      'title' => 'Хрусталев Егор',
    ),
    86 => 
    array (
      'id' => 87,
      'title' => 'Чадов Михаил',
    ),
    87 => 
    array (
      'id' => 88,
      'title' => 'Штейн Владимир',
    ),
    88 => 
    array (
      'id' => 89,
      'title' => 'Яковлев Алексей',
    ),
    89 => 
    array (
      'id' => 90,
      'title' => 'Янкелевич Роман',
    ),
    90 => 
    array (
      'id' => 91,
      'title' => 'Kyberpunk',
    ),
    91 => 
    array (
      'id' => 92,
      'title' => 'Звук с CAMRip',
    ),
    92 => 
    array (
      'id' => 93,
      'title' => 'Любительский двухголосый',
    ),
    93 => 
    array (
      'id' => 94,
      'title' => '1001cinema',
    ),
    94 => 
    array (
      'id' => 95,
      'title' => '9й неизвестный',
    ),
    95 => 
    array (
      'id' => 96,
      'title' => 'Alternative Production',
    ),
    96 => 
    array (
      'id' => 97,
      'title' => 'Amazing Dubbing',
    ),
    97 => 
    array (
      'id' => 98,
      'title' => 'Ancord',
    ),
    98 => 
    array (
      'id' => 99,
      'title' => 'AniDUB',
    ),
    99 => 
    array (
      'id' => 100,
      'title' => 'Anifilm',
    ),
    100 => 
    array (
      'id' => 101,
      'title' => 'AniLibria.TV',
    ),
    101 => 
    array (
      'id' => 102,
      'title' => 'AniMedia',
    ),
    102 => 
    array (
      'id' => 103,
      'title' => 'AnimeReactor',
    ),
    103 => 
    array (
      'id' => 104,
      'title' => 'AniStar',
    ),
    104 => 
    array (
      'id' => 105,
      'title' => 'Asian Miracle Group',
    ),
    105 => 
    array (
      'id' => 106,
      'title' => 'AveBrasil',
    ),
    106 => 
    array (
      'id' => 107,
      'title' => 'AveDorama',
    ),
    107 => 
    array (
      'id' => 108,
      'title' => 'AveTurk',
    ),
    108 => 
    array (
      'id' => 109,
      'title' => 'Bonsai Studio',
    ),
    109 => 
    array (
      'id' => 110,
      'title' => 'ColdFilm',
    ),
    110 => 
    array (
      'id' => 111,
      'title' => 'Crazy Cat Studio',
    ),
    111 => 
    array (
      'id' => 112,
      'title' => 'CrezaStudio',
    ),
    112 => 
    array (
      'id' => 113,
      'title' => 'datynet & Galina Vasyukova',
    ),
    113 => 
    array (
      'id' => 114,
      'title' => 'datynet & Yuka_chan',
    ),
    114 => 
    array (
      'id' => 115,
      'title' => 'DeadLine Studio',
    ),
    115 => 
    array (
      'id' => 116,
      'title' => 'DeadSno & den904',
    ),
    116 => 
    array (
      'id' => 117,
      'title' => 'DeeAFilm Studio',
    ),
    117 => 
    array (
      'id' => 118,
      'title' => 'Dream Records',
    ),
    118 => 
    array (
      'id' => 119,
      'title' => 'East Dream',
    ),
    119 => 
    array (
      'id' => 120,
      'title' => 'Eladiel & Absurd',
    ),
    120 => 
    array (
      'id' => 121,
      'title' => 'Eladiel & JAM',
    ),
    121 => 
    array (
      'id' => 122,
      'title' => 'Elysium',
    ),
    122 => 
    array (
      'id' => 123,
      'title' => 'ETV+',
    ),
    123 => 
    array (
      'id' => 124,
      'title' => 'FilmPlay',
    ),
    124 => 
    array (
      'id' => 125,
      'title' => 'FireDub',
    ),
    125 => 
    array (
      'id' => 126,
      'title' => 'GoldTeam',
    ),
    126 => 
    array (
      'id' => 127,
      'title' => 'Gravi-TV',
    ),
    127 => 
    array (
      'id' => 128,
      'title' => 'GREEN TEA',
    ),
    128 => 
    array (
      'id' => 129,
      'title' => 'GreenРай Studio',
    ),
    129 => 
    array (
      'id' => 130,
      'title' => 'Hamster Studio',
    ),
    130 => 
    array (
      'id' => 131,
      'title' => 'HelloMickey Production',
    ),
    131 => 
    array (
      'id' => 132,
      'title' => 'HighHopes',
    ),
    132 => 
    array (
      'id' => 133,
      'title' => 'HiWayGrope',
    ),
    133 => 
    array (
      'id' => 134,
      'title' => 'Honey&Haseena',
    ),
    134 => 
    array (
      'id' => 135,
      'title' => 'Horizon Studio',
    ),
    135 => 
    array (
      'id' => 136,
      'title' => 'JAM',
    ),
    136 => 
    array (
      'id' => 137,
      'title' => 'Jetvis Studio',
    ),
    137 => 
    array (
      'id' => 138,
      'title' => 'Jimmy J.',
    ),
    138 => 
    array (
      'id' => 139,
      'title' => 'JoyStudio',
    ),
    139 => 
    array (
      'id' => 140,
      'title' => 'KerobTV',
    ),
    140 => 
    array (
      'id' => 141,
      'title' => 'Kiitos',
    ),
    141 => 
    array (
      'id' => 142,
      'title' => 'KinoGolos',
    ),
    142 => 
    array (
      'id' => 143,
      'title' => 'KosharaSerials',
    ),
    143 => 
    array (
      'id' => 144,
      'title' => 'LakeFilms',
    ),
    144 => 
    array (
      'id' => 145,
      'title' => 'LE-Production',
    ),
    145 => 
    array (
      'id' => 146,
      'title' => 'Levelin',
    ),
    146 => 
    array (
      'id' => 147,
      'title' => 'LevshaFilm',
    ),
    147 => 
    array (
      'id' => 148,
      'title' => 'Mallorn Studio',
    ),
    148 => 
    array (
      'id' => 149,
      'title' => 'Milvus',
    ),
    149 => 
    array (
      'id' => 150,
      'title' => 'MixFilm',
    ),
    150 => 
    array (
      'id' => 151,
      'title' => 'NEON Studio',
    ),
    151 => 
    array (
      'id' => 152,
      'title' => 'NewDub',
    ),
    152 => 
    array (
      'id' => 153,
      'title' => 'NewStation',
    ),
    153 => 
    array (
      'id' => 154,
      'title' => 'Nika Lenina',
    ),
    154 => 
    array (
      'id' => 155,
      'title' => 'Onibaku',
    ),
    155 => 
    array (
      'id' => 156,
      'title' => 'OnisFilms',
    ),
    156 => 
    array (
      'id' => 157,
      'title' => 'Persona99 & MaxDamage',
    ),
    157 => 
    array (
      'id' => 158,
      'title' => 'Project Web Mania',
    ),
    158 => 
    array (
      'id' => 159,
      'title' => 'RealFake',
    ),
    159 => 
    array (
      'id' => 160,
      'title' => 'RecentFilms',
    ),
    160 => 
    array (
      'id' => 161,
      'title' => 'RedDiamond Studio',
    ),
    161 => 
    array (
      'id' => 162,
      'title' => 'REFERO',
    ),
    162 => 
    array (
      'id' => 163,
      'title' => 'RG.Paravozik',
    ),
    163 => 
    array (
      'id' => 164,
      'title' => 'RusFilm',
    ),
    164 => 
    array (
      'id' => 165,
      'title' => 'SesDizi | DiziMania',
    ),
    165 => 
    array (
      'id' => 166,
      'title' => 'Shadow Dub Project',
    ),
    166 => 
    array (
      'id' => 167,
      'title' => 'ShinkaDan',
    ),
    167 => 
    array (
      'id' => 168,
      'title' => 'SHIZA Project',
    ),
    168 => 
    array (
      'id' => 169,
      'title' => 'SilverSnow',
    ),
    169 => 
    array (
      'id' => 170,
      'title' => 'SNK-TV',
    ),
    170 => 
    array (
      'id' => 171,
      'title' => 'SnowRecords',
    ),
    171 => 
    array (
      'id' => 172,
      'title' => 'SoftBox',
    ),
    172 => 
    array (
      'id' => 173,
      'title' => 'Sound-Group',
    ),
    173 => 
    array (
      'id' => 174,
      'title' => 'Stalk + Tofsla',
    ),
    174 => 
    array (
      'id' => 175,
      'title' => 'STEPonee',
    ),
    175 => 
    array (
      'id' => 176,
      'title' => 'StudioBand',
    ),
    176 => 
    array (
      'id' => 177,
      'title' => 'Sunshine Studio',
    ),
    177 => 
    array (
      'id' => 178,
      'title' => 'TatamiFilm',
    ),
    178 => 
    array (
      'id' => 179,
      'title' => 'TurkStar',
    ),
    179 => 
    array (
      'id' => 180,
      'title' => 'Unicorn',
    ),
    180 => 
    array (
      'id' => 181,
      'title' => 'Victory Аsia',
    ),
    181 => 
    array (
      'id' => 182,
      'title' => 'Victory-Films',
    ),
    182 => 
    array (
      'id' => 183,
      'title' => 'Voice Project Studio',
    ),
    183 => 
    array (
      'id' => 184,
      'title' => 'XDUB Dorama',
    ),
    184 => 
    array (
      'id' => 185,
      'title' => 'Анастасия Гайдаржи + Андрей Юрченко',
    ),
    185 => 
    array (
      'id' => 186,
      'title' => 'Анастасия Гайдаржи + Артём Борисов',
    ),
    186 => 
    array (
      'id' => 187,
      'title' => 'Анастасия Гайдаржи + Дмитрий Чепусов',
    ),
    187 => 
    array (
      'id' => 188,
      'title' => 'АрхиАзия',
    ),
    188 => 
    array (
      'id' => 189,
      'title' => 'АрхиТеатр',
    ),
    189 => 
    array (
      'id' => 190,
      'title' => 'Колобок',
    ),
    190 => 
    array (
      'id' => 191,
      'title' => 'Котова Ирина и Ахмеджанов Эльдор',
    ),
    191 => 
    array (
      'id' => 192,
      'title' => 'Макс Скит + Андрей Хахалев',
    ),
    192 => 
    array (
      'id' => 193,
      'title' => 'Микрофон Включен | OnAir',
    ),
    193 => 
    array (
      'id' => 194,
      'title' => 'Мир дорам',
    ),
    194 => 
    array (
      'id' => 195,
      'title' => 'Несмертельное оружие',
    ),
    195 => 
    array (
      'id' => 196,
      'title' => 'Ох! Студия',
    ),
    196 => 
    array (
      'id' => 197,
      'title' => 'Пиратская студия',
    ),
    197 => 
    array (
      'id' => 198,
      'title' => 'Причудики',
    ),
    198 => 
    array (
      'id' => 199,
      'title' => 'Студия Райдо',
    ),
    199 => 
    array (
      'id' => 200,
      'title' => 'Храм Дорам ТВ',
    ),
    200 => 
    array (
      'id' => 201,
      'title' => 'Храм тысячи струн',
    ),
    201 => 
    array (
      'id' => 202,
      'title' => 'Электричка',
    ),
    202 => 
    array (
      'id' => 203,
      'title' => 'Любительский',
    ),
    203 => 
    array (
      'id' => 204,
      'title' => '1001cinema',
    ),
    204 => 
    array (
      'id' => 205,
      'title' => '3df voice',
    ),
    205 => 
    array (
      'id' => 206,
      'title' => 'MUZOBOZ',
    ),
    206 => 
    array (
      'id' => 207,
      'title' => 'AimaksaLTV',
    ),
    207 => 
    array (
      'id' => 208,
      'title' => 'AlphaProject',
    ),
    208 => 
    array (
      'id' => 209,
      'title' => 'Alternative Production',
    ),
    209 => 
    array (
      'id' => 210,
      'title' => 'Amazing Dubbing',
    ),
    210 => 
    array (
      'id' => 211,
      'title' => 'AniDUB',
    ),
    211 => 
    array (
      'id' => 212,
      'title' => 'AniFilm',
    ),
    212 => 
    array (
      'id' => 213,
      'title' => 'AniLibria.TV',
    ),
    213 => 
    array (
      'id' => 214,
      'title' => 'AniMaunt',
    ),
    214 => 
    array (
      'id' => 215,
      'title' => 'AniMedia',
    ),
    215 => 
    array (
      'id' => 216,
      'title' => 'AniPLague',
    ),
    216 => 
    array (
      'id' => 217,
      'title' => 'AniStar',
    ),
    217 => 
    array (
      'id' => 218,
      'title' => 'AnyFilm',
    ),
    218 => 
    array (
      'id' => 219,
      'title' => 'ApofysTeam',
    ),
    219 => 
    array (
      'id' => 220,
      'title' => 'Banyan Studio',
    ),
    220 => 
    array (
      'id' => 221,
      'title' => 'Black Street Records',
    ),
    221 => 
    array (
      'id' => 222,
      'title' => 'Bonsai Studio',
    ),
    222 => 
    array (
      'id' => 223,
      'title' => 'BukeDub',
    ),
    223 => 
    array (
      'id' => 224,
      'title' => 'CactusTeam',
    ),
    224 => 
    array (
      'id' => 225,
      'title' => 'ColdFilm',
    ),
    225 => 
    array (
      'id' => 226,
      'title' => 'CoralMedia',
    ),
    226 => 
    array (
      'id' => 227,
      'title' => 'Cowabunga Studio',
    ),
    227 => 
    array (
      'id' => 228,
      'title' => 'Crazy Cat Studio',
    ),
    228 => 
    array (
      'id' => 229,
      'title' => 'Creative Sound',
    ),
    229 => 
    array (
      'id' => 230,
      'title' => 'D1',
    ),
    230 => 
    array (
      'id' => 231,
      'title' => 'Dream Records',
    ),
    231 => 
    array (
      'id' => 232,
      'title' => 'East Dream',
    ),
    232 => 
    array (
      'id' => 233,
      'title' => 'FanStudio',
    ),
    233 => 
    array (
      'id' => 234,
      'title' => 'FilmGate',
    ),
    234 => 
    array (
      'id' => 235,
      'title' => 'FilmPlay',
    ),
    235 => 
    array (
      'id' => 236,
      'title' => 'Flux-Team',
    ),
    236 => 
    array (
      'id' => 237,
      'title' => 'GladiolusTV',
    ),
    237 => 
    array (
      'id' => 238,
      'title' => 'GREEN TEA',
    ),
    238 => 
    array (
      'id' => 239,
      'title' => 'GreenРай Studio',
    ),
    239 => 
    array (
      'id' => 240,
      'title' => 'Gremlin Creative Studio',
    ),
    240 => 
    array (
      'id' => 241,
      'title' => 'Hamster Studio',
    ),
    241 => 
    array (
      'id' => 242,
      'title' => 'Honey&Haseena',
    ),
    242 => 
    array (
      'id' => 243,
      'title' => 'ICG + OnisFilms',
    ),
    243 => 
    array (
      'id' => 244,
      'title' => 'ICG',
    ),
    244 => 
    array (
      'id' => 245,
      'title' => 'Jetvis Studio',
    ),
    245 => 
    array (
      'id' => 246,
      'title' => 'KerobTV',
    ),
    246 => 
    array (
      'id' => 247,
      'title' => 'LE-Production',
    ),
    247 => 
    array (
      'id' => 248,
      'title' => 'LovelyVox',
    ),
    248 => 
    array (
      'id' => 249,
      'title' => 'Mallorn Studio',
    ),
    249 => 
    array (
      'id' => 250,
      'title' => 'Mystery Film',
    ),
    250 => 
    array (
      'id' => 251,
      'title' => 'Neo-Sound',
    ),
    251 => 
    array (
      'id' => 252,
      'title' => 'New Records',
    ),
    252 => 
    array (
      'id' => 253,
      'title' => 'NewStation',
    ),
    253 => 
    array (
      'id' => 254,
      'title' => 'Octopus',
    ),
    254 => 
    array (
      'id' => 255,
      'title' => 'Onibaku',
    ),
    255 => 
    array (
      'id' => 256,
      'title' => 'OnisFilms',
    ),
    256 => 
    array (
      'id' => 257,
      'title' => 'Parovoz Production',
    ),
    257 => 
    array (
      'id' => 258,
      'title' => 'Rainbow World',
    ),
    258 => 
    array (
      'id' => 259,
      'title' => 'RecentFilms',
    ),
    259 => 
    array (
      'id' => 260,
      'title' => 'RedDiamond Studio',
    ),
    260 => 
    array (
      'id' => 261,
      'title' => 'RG.Paravozik',
    ),
    261 => 
    array (
      'id' => 262,
      'title' => 'RusFilm',
    ),
    262 => 
    array (
      'id' => 263,
      'title' => 'SHIZA Project',
    ),
    263 => 
    array (
      'id' => 264,
      'title' => 'SkyeFilmTV',
    ),
    264 => 
    array (
      'id' => 265,
      'title' => 'SorzTeam',
    ),
    265 => 
    array (
      'id' => 266,
      'title' => 'Sound-Group',
    ),
    266 => 
    array (
      'id' => 267,
      'title' => 'SovetRomantica',
    ),
    267 => 
    array (
      'id' => 268,
      'title' => 'STEPonee',
    ),
    268 => 
    array (
      'id' => 269,
      'title' => 'To4ka',
    ),
    269 => 
    array (
      'id' => 270,
      'title' => 'Trdlo.studio',
    ),
    270 => 
    array (
      'id' => 271,
      'title' => 'Ultradox',
    ),
    271 => 
    array (
      'id' => 272,
      'title' => 'VGM Studio',
    ),
    272 => 
    array (
      'id' => 273,
      'title' => 'Victory-Films',
    ),
    273 => 
    array (
      'id' => 274,
      'title' => 'Voice Project Studio',
    ),
    274 => 
    array (
      'id' => 275,
      'title' => 'Volume-6 Studio',
    ),
    275 => 
    array (
      'id' => 276,
      'title' => 'WestFilm',
    ),
    276 => 
    array (
      'id' => 277,
      'title' => 'XDUB Dorama + Victory-Films',
    ),
    277 => 
    array (
      'id' => 278,
      'title' => 'XDUB Dorama + Колобок',
    ),
    278 => 
    array (
      'id' => 279,
      'title' => 'XDUB Dorama',
    ),
    279 => 
    array (
      'id' => 280,
      'title' => 'ZM-Show',
    ),
    280 => 
    array (
      'id' => 281,
      'title' => 'Колобок',
    ),
    281 => 
    array (
      'id' => 282,
      'title' => 'КураСгречей',
    ),
    282 => 
    array (
      'id' => 283,
      'title' => 'Несмертельное оружие',
    ),
    283 => 
    array (
      'id' => 284,
      'title' => 'Озвучено за бутылку',
    ),
    284 => 
    array (
      'id' => 285,
      'title' => 'Синема УС',
    ),
    285 => 
    array (
      'id' => 286,
      'title' => 'Студия Пиратского Дубляжа',
    ),
    286 => 
    array (
      'id' => 287,
      'title' => 'Студия Райдо',
    ),
    287 => 
    array (
      'id' => 288,
      'title' => 'Храм тысячи струн',
    ),
    288 => 
    array (
      'id' => 289,
      'title' => 'Четыре в квадрате',
    ),
    289 => 
    array (
      'id' => 290,
      'title' => 'Любительский одноголосый',
    ),
    290 => 
    array (
      'id' => 291,
      'title' => 'zamez',
    ),
    291 => 
    array (
      'id' => 292,
      'title' => '3df voice',
    ),
    292 => 
    array (
      'id' => 293,
      'title' => '@PD',
    ),
    293 => 
    array (
      'id' => 294,
      'title' => 'AA-Studio',
    ),
    294 => 
    array (
      'id' => 295,
      'title' => 'Ace34',
    ),
    295 => 
    array (
      'id' => 296,
      'title' => 'acolith',
    ),
    296 => 
    array (
      'id' => 297,
      'title' => 'aleksei80',
    ),
    297 => 
    array (
      'id' => 298,
      'title' => 'Alezan',
    ),
    298 => 
    array (
      'id' => 299,
      'title' => 'allecs2010',
    ),
    299 => 
    array (
      'id' => 300,
      'title' => 'Ancord',
    ),
    300 => 
    array (
      'id' => 301,
      'title' => 'Andi',
    ),
    301 => 
    array (
      'id' => 302,
      'title' => 'Andi999',
    ),
    302 => 
    array (
      'id' => 303,
      'title' => 'Andre1288',
    ),
    303 => 
    array (
      'id' => 304,
      'title' => 'Andy Green',
    ),
    304 => 
    array (
      'id' => 305,
      'title' => 'AniDUB',
    ),
    305 => 
    array (
      'id' => 306,
      'title' => 'AniFilm',
    ),
    306 => 
    array (
      'id' => 307,
      'title' => 'AniMaunt',
    ),
    307 => 
    array (
      'id' => 308,
      'title' => 'AniMedia',
    ),
    308 => 
    array (
      'id' => 309,
      'title' => 'Animedub',
    ),
    309 => 
    array (
      'id' => 310,
      'title' => 'Animegroup',
    ),
    310 => 
    array (
      'id' => 311,
      'title' => 'AnimeReactor',
    ),
    311 => 
    array (
      'id' => 312,
      'title' => 'AniStar',
    ),
    312 => 
    array (
      'id' => 313,
      'title' => 'Arisu',
    ),
    313 => 
    array (
      'id' => 314,
      'title' => 'Asian Miracle Group',
    ),
    314 => 
    array (
      'id' => 315,
      'title' => 'BadBajo',
    ),
    315 => 
    array (
      'id' => 316,
      'title' => 'BadCatStudio',
    ),
    316 => 
    array (
      'id' => 317,
      'title' => 'Barin101',
    ),
    317 => 
    array (
      'id' => 318,
      'title' => 'binjak',
    ),
    318 => 
    array (
      'id' => 319,
      'title' => 'CinemaSET',
    ),
    319 => 
    array (
      'id' => 320,
      'title' => 'ClubFATE',
    ),
    320 => 
    array (
      'id' => 321,
      'title' => 'Cmert',
    ),
    321 => 
    array (
      'id' => 322,
      'title' => 'Crazy Cat Studio',
    ),
    322 => 
    array (
      'id' => 323,
      'title' => 'cybervlad',
    ),
    323 => 
    array (
      'id' => 324,
      'title' => 'D.I.M.',
    ),
    324 => 
    array (
      'id' => 325,
      'title' => 'datynet',
    ),
    325 => 
    array (
      'id' => 326,
      'title' => 'DeMon',
    ),
    326 => 
    array (
      'id' => 327,
      'title' => 'den904',
    ),
    327 => 
    array (
      'id' => 328,
      'title' => 'Dervish',
    ),
    328 => 
    array (
      'id' => 329,
      'title' => 'DexterTV',
    ),
    329 => 
    array (
      'id' => 330,
      'title' => 'dimadima',
    ),
    330 => 
    array (
      'id' => 331,
      'title' => 'Dobryachok',
    ),
    331 => 
    array (
      'id' => 332,
      'title' => 'Emslie',
    ),
    332 => 
    array (
      'id' => 333,
      'title' => 'Eugene Greene',
    ),
    333 => 
    array (
      'id' => 334,
      'title' => 'feofanio',
    ),
    334 => 
    array (
      'id' => 335,
      'title' => 'fiendover',
    ),
    335 => 
    array (
      'id' => 336,
      'title' => 'FilmPlay',
    ),
    336 => 
    array (
      'id' => 337,
      'title' => 'Franek Monk',
    ),
    337 => 
    array (
      'id' => 338,
      'title' => 'funny77',
    ),
    338 => 
    array (
      'id' => 339,
      'title' => 'GalVid',
    ),
    339 => 
    array (
      'id' => 340,
      'title' => 'Ghostface',
    ),
    340 => 
    array (
      'id' => 341,
      'title' => 'GoldTeam',
    ),
    341 => 
    array (
      'id' => 342,
      'title' => 'Grampy',
    ),
    342 => 
    array (
      'id' => 343,
      'title' => 'Gravi-TV',
    ),
    343 => 
    array (
      'id' => 344,
      'title' => 'GREEN TEA',
    ),
    344 => 
    array (
      'id' => 345,
      'title' => 'GreenРай Studio',
    ),
    345 => 
    array (
      'id' => 346,
      'title' => 'Gynt',
    ),
    346 => 
    array (
      'id' => 347,
      'title' => 'Hamster',
    ),
    347 => 
    array (
      'id' => 348,
      'title' => 'HaseRiLLoPaW',
    ),
    348 => 
    array (
      'id' => 349,
      'title' => 'HighHopes',
    ),
    349 => 
    array (
      'id' => 350,
      'title' => 'HiWay Grope',
    ),
    350 => 
    array (
      'id' => 351,
      'title' => 'Horror Maker',
    ),
    351 => 
    array (
      'id' => 352,
      'title' => 'iDimo',
    ),
    352 => 
    array (
      'id' => 353,
      'title' => 'innokent33',
    ),
    353 => 
    array (
      'id' => 354,
      'title' => 'JAM',
    ),
    354 => 
    array (
      'id' => 355,
      'title' => 'Jimmy J.',
    ),
    355 => 
    array (
      'id' => 356,
      'title' => 'Joe30',
    ),
    356 => 
    array (
      'id' => 357,
      'title' => 'Julia Prosenuk',
    ),
    357 => 
    array (
      'id' => 358,
      'title' => 'Kerems13',
    ),
    358 => 
    array (
      'id' => 359,
      'title' => 'ko136',
    ),
    359 => 
    array (
      'id' => 360,
      'title' => 'Korean Craze',
    ),
    360 => 
    array (
      'id' => 361,
      'title' => 'LakeFilms',
    ),
    361 => 
    array (
      'id' => 362,
      'title' => 'LE-Production',
    ),
    362 => 
    array (
      'id' => 363,
      'title' => 'lehachuev',
    ),
    363 => 
    array (
      'id' => 364,
      'title' => 'Levelin',
    ),
    364 => 
    array (
      'id' => 365,
      'title' => 'LeXiKC',
    ),
    365 => 
    array (
      'id' => 366,
      'title' => 'liosaa',
    ),
    366 => 
    array (
      'id' => 367,
      'title' => 'Loginoff',
    ),
    367 => 
    array (
      'id' => 368,
      'title' => 'Lord32x',
    ),
    368 => 
    array (
      'id' => 369,
      'title' => 'lord666',
    ),
    369 => 
    array (
      'id' => 370,
      'title' => 'Madrid',
    ),
    370 => 
    array (
      'id' => 371,
      'title' => 'Max Nabokov',
    ),
    371 => 
    array (
      'id' => 372,
      'title' => 'MaxMeister',
    ),
    372 => 
    array (
      'id' => 373,
      'title' => 'mi24',
    ),
    373 => 
    array (
      'id' => 374,
      'title' => 'minyaev',
    ),
    374 => 
    array (
      'id' => 375,
      'title' => 'Mona Lisa',
    ),
    375 => 
    array (
      'id' => 376,
      'title' => 'Murzilka®',
    ),
    376 => 
    array (
      'id' => 377,
      'title' => 'Nastia',
    ),
    377 => 
    array (
      'id' => 378,
      'title' => 'neko64',
    ),
    378 => 
    array (
      'id' => 379,
      'title' => 'NEON Studio',
    ),
    379 => 
    array (
      'id' => 380,
      'title' => 'Oneinchnales',
    ),
    380 => 
    array (
      'id' => 381,
      'title' => 'Ozeon',
    ),
    381 => 
    array (
      'id' => 382,
      'title' => 'PashaUp',
    ),
    382 => 
    array (
      'id' => 383,
      'title' => 'Paul Bunyan',
    ),
    383 => 
    array (
      'id' => 384,
      'title' => 'Persona99',
    ),
    384 => 
    array (
      'id' => 385,
      'title' => 'PiterVV',
    ),
    385 => 
    array (
      'id' => 386,
      'title' => 'porcellus',
    ),
    386 => 
    array (
      'id' => 387,
      'title' => 'Project Web Mania',
    ),
    387 => 
    array (
      'id' => 388,
      'title' => 'Psychotronic',
    ),
    388 => 
    array (
      'id' => 389,
      'title' => 'RAIM',
    ),
    389 => 
    array (
      'id' => 390,
      'title' => 'Rain Death',
    ),
    390 => 
    array (
      'id' => 391,
      'title' => 'RealFake',
    ),
    391 => 
    array (
      'id' => 392,
      'title' => 'RedRussian1337',
    ),
    392 => 
    array (
      'id' => 393,
      'title' => 'renege79',
    ),
    393 => 
    array (
      'id' => 394,
      'title' => 'RiN',
    ),
    394 => 
    array (
      'id' => 395,
      'title' => 'rtys',
    ),
    395 => 
    array (
      'id' => 396,
      'title' => 'RusFilm',
    ),
    396 => 
    array (
      'id' => 397,
      'title' => 'RussianGuy27',
    ),
    397 => 
    array (
      'id' => 398,
      'title' => 'Sam2007',
    ),
    398 => 
    array (
      'id' => 399,
      'title' => 'Sanchez',
    ),
    399 => 
    array (
      'id' => 400,
      'title' => 'Satkur',
    ),
    400 => 
    array (
      'id' => 401,
      'title' => 'Sedorelli',
    ),
    401 => 
    array (
      'id' => 402,
      'title' => 'Selena',
    ),
    402 => 
    array (
      'id' => 403,
      'title' => 'Seoul Bay',
    ),
    403 => 
    array (
      'id' => 404,
      'title' => 'Sephiroth',
    ),
    404 => 
    array (
      'id' => 405,
      'title' => 'seqw0',
    ),
    405 => 
    array (
      'id' => 406,
      'title' => 'Shachiburi',
    ),
    406 => 
    array (
      'id' => 407,
      'title' => 'Shaman',
    ),
    407 => 
    array (
      'id' => 408,
      'title' => 'Slavnus',
    ),
    408 => 
    array (
      'id' => 409,
      'title' => 'Stalk',
    ),
    409 => 
    array (
      'id' => 410,
      'title' => 'STEPonee',
    ),
    410 => 
    array (
      'id' => 411,
      'title' => 'Stevie',
    ),
    411 => 
    array (
      'id' => 412,
      'title' => 'tornado',
    ),
    412 => 
    array (
      'id' => 413,
      'title' => 'TurkishTuz ',
    ),
    413 => 
    array (
      'id' => 414,
      'title' => 'turok1990',
    ),
    414 => 
    array (
      'id' => 415,
      'title' => 'Urasiko',
    ),
    415 => 
    array (
      'id' => 416,
      'title' => 'Vano',
    ),
    416 => 
    array (
      'id' => 417,
      'title' => 'VHSник',
    ),
    417 => 
    array (
      'id' => 418,
      'title' => 'viktor_2838',
    ),
    418 => 
    array (
      'id' => 419,
      'title' => 'visanti-vasaer',
    ),
    419 => 
    array (
      'id' => 420,
      'title' => 'VoicePower',
    ),
    420 => 
    array (
      'id' => 421,
      'title' => 'Voiz',
    ),
    421 => 
    array (
      'id' => 422,
      'title' => 'XDUB Dorama',
    ),
    422 => 
    array (
      'id' => 423,
      'title' => 'yamete',
    ),
    423 => 
    array (
      'id' => 424,
      'title' => 'Zerzia',
    ),
    424 => 
    array (
      'id' => 425,
      'title' => 'Агент Смит',
    ),
    425 => 
    array (
      'id' => 426,
      'title' => 'Акира',
    ),
    426 => 
    array (
      'id' => 427,
      'title' => 'Альтера Парс',
    ),
    427 => 
    array (
      'id' => 428,
      'title' => 'Антонов Николай',
    ),
    428 => 
    array (
      'id' => 429,
      'title' => 'Ашмарин Анатолий',
    ),
    429 => 
    array (
      'id' => 430,
      'title' => 'Бахурани',
    ),
    430 => 
    array (
      'id' => 431,
      'title' => 'Беллман Я.',
    ),
    431 => 
    array (
      'id' => 432,
      'title' => 'Белоконский Артём',
    ),
    432 => 
    array (
      'id' => 433,
      'title' => 'Jet',
    ),
    433 => 
    array (
      'id' => 434,
      'title' => 'Бессонов Андрей',
    ),
    434 => 
    array (
      'id' => 435,
      'title' => 'Бибиков Юрий',
    ),
    435 => 
    array (
      'id' => 436,
      'title' => 'Бирюков Михаил',
    ),
    436 => 
    array (
      'id' => 437,
      'title' => 'Бусов Глеб',
    ),
    437 => 
    array (
      'id' => 438,
      'title' => 'Васильев Андрей',
    ),
    438 => 
    array (
      'id' => 439,
      'title' => 'Васька Куролесов',
    ),
    439 => 
    array (
      'id' => 440,
      'title' => 'Ващенко Семён',
    ),
    440 => 
    array (
      'id' => 441,
      'title' => 'Витя-Говорун',
    ),
    441 => 
    array (
      'id' => 442,
      'title' => 'Водяной Александр',
    ),
    442 => 
    array (
      'id' => 443,
      'title' => 'Воленко Алексей',
    ),
    443 => 
    array (
      'id' => 444,
      'title' => 'Воробьев Сергей',
    ),
    444 => 
    array (
      'id' => 445,
      'title' => 'Ворон',
    ),
    445 => 
    array (
      'id' => 446,
      'title' => 'Воротилин Олег',
    ),
    446 => 
    array (
      'id' => 447,
      'title' => 'Гайдаржи Анастасия',
    ),
    447 => 
    array (
      'id' => 448,
      'title' => 'Герусов',
    ),
    448 => 
    array (
      'id' => 449,
      'title' => 'Говинда Рага',
    ),
    449 => 
    array (
      'id' => 450,
      'title' => 'Гумрал',
    ),
    450 => 
    array (
      'id' => 451,
      'title' => 'Гусев Анатолий',
    ),
    451 => 
    array (
      'id' => 452,
      'title' => 'Дидок Сергей',
    ),
    452 => 
    array (
      'id' => 453,
      'title' => 'ДиоНиК',
    ),
    453 => 
    array (
      'id' => 454,
      'title' => 'Жолобов Максим',
    ),
    454 => 
    array (
      'id' => 455,
      'title' => 'Журавлев Владимир',
    ),
    455 => 
    array (
      'id' => 456,
      'title' => 'Казаков Валерий',
    ),
    456 => 
    array (
      'id' => 457,
      'title' => 'antoniolagrande',
    ),
    457 => 
    array (
      'id' => 458,
      'title' => 'Кенс Матвей',
    ),
    458 => 
    array (
      'id' => 459,
      'title' => 'хромолка',
    ),
    459 => 
    array (
      'id' => 460,
      'title' => 'Князев Андрей',
    ),
    460 => 
    array (
      'id' => 461,
      'title' => 'Кудрявцев Антон',
    ),
    461 => 
    array (
      'id' => 462,
      'title' => 'Линда',
    ),
    462 => 
    array (
      'id' => 463,
      'title' => 'Логинофф Максим',
    ),
    463 => 
    array (
      'id' => 464,
      'title' => 'Лыдин Алексей',
    ),
    464 => 
    array (
      'id' => 465,
      'title' => 'Мадлен Дюваль',
    ),
    465 => 
    array (
      'id' => 466,
      'title' => 'Максимова Лидия',
    ),
    466 => 
    array (
      'id' => 467,
      'title' => 'Малиновский Сергей',
    ),
    467 => 
    array (
      'id' => 468,
      'title' => 'Машинский Леонид',
    ),
    468 => 
    array (
      'id' => 469,
      'title' => 'Медведев Юрий',
    ),
    469 => 
    array (
      'id' => 470,
      'title' => 'Мительман Галина',
    ),
    470 => 
    array (
      'id' => 471,
      'title' => 'Морозов Александр',
    ),
    471 => 
    array (
      'id' => 472,
      'title' => 'Мосин-Щепачев Артем',
    ),
    472 => 
    array (
      'id' => 473,
      'title' => 'Мусин Эрнест',
    ),
    473 => 
    array (
      'id' => 474,
      'title' => 'MrRose',
    ),
    474 => 
    array (
      'id' => 475,
      'title' => 'Никитин',
    ),
    475 => 
    array (
      'id' => 476,
      'title' => 'Нурмухаметов Денис',
    ),
    476 => 
    array (
      'id' => 477,
      'title' => 'Лектор',
    ),
    477 => 
    array (
      'id' => 478,
      'title' => 'Огородников Владислав',
    ),
    478 => 
    array (
      'id' => 479,
      'title' => 'Онищенко Юрий',
    ),
    479 => 
    array (
      'id' => 480,
      'title' => 'Ошурков Максим',
    ),
    480 => 
    array (
      'id' => 481,
      'title' => 'Пестриков Дмитрий',
    ),
    481 => 
    array (
      'id' => 482,
      'title' => 'Петербуржец',
    ),
    482 => 
    array (
      'id' => 483,
      'title' => 'Поздняков Константин',
    ),
    483 => 
    array (
      'id' => 484,
      'title' => 'Попов Алексей',
    ),
    484 => 
    array (
      'id' => 485,
      'title' => 'Прокс',
    ),
    485 => 
    array (
      'id' => 486,
      'title' => 'Slay73',
    ),
    486 => 
    array (
      'id' => 487,
      'title' => 'Rider',
    ),
    487 => 
    array (
      'id' => 488,
      'title' => 'Реальный перевод',
    ),
    488 => 
    array (
      'id' => 489,
      'title' => 'Роджерс Юлия',
    ),
    489 => 
    array (
      'id' => 490,
      'title' => 'Сагач Кирилл',
    ),
    490 => 
    array (
      'id' => 491,
      'title' => 'Саня Белый',
    ),
    491 => 
    array (
      'id' => 492,
      'title' => 'Jonathan',
    ),
    492 => 
    array (
      'id' => 493,
      'title' => 'Севастьянов Никита',
    ),
    493 => 
    array (
      'id' => 494,
      'title' => 'Семыкина Юлия',
    ),
    494 => 
    array (
      'id' => 495,
      'title' => 'Сибирский',
    ),
    495 => 
    array (
      'id' => 496,
      'title' => 'Синта Рурони',
    ),
    496 => 
    array (
      'id' => 497,
      'title' => 'Solod',
    ),
    497 => 
    array (
      'id' => 498,
      'title' => 'ССК+',
    ),
    498 => 
    array (
      'id' => 499,
      'title' => 'Старый Бильбо',
    ),
    499 => 
    array (
      'id' => 500,
      'title' => 'Стасюк Дмитрий',
    ),
    500 => 
    array (
      'id' => 501,
      'title' => 'Строев Денис',
    ),
    501 => 
    array (
      'id' => 502,
      'title' => 'Студия Райдо',
    ),
    502 => 
    array (
      'id' => 503,
      'title' => 'Т.О Друзей',
    ),
    503 => 
    array (
      'id' => 504,
      'title' => 'Тимофеев',
    ),
    504 => 
    array (
      'id' => 505,
      'title' => 'Трамвай-фильм',
    ),
    505 => 
    array (
      'id' => 506,
      'title' => 'Ужастик',
    ),
    506 => 
    array (
      'id' => 507,
      'title' => 'voxsolus',
    ),
    507 => 
    array (
      'id' => 508,
      'title' => 'Хихикающий доктор',
    ),
    508 => 
    array (
      'id' => 509,
      'title' => 'Хоррор Мэйкер',
    ),
    509 => 
    array (
      'id' => 510,
      'title' => 'Хуан Рохас',
    ),
    510 => 
    array (
      'id' => 511,
      'title' => 'Хэм',
    ),
    511 => 
    array (
      'id' => 512,
      'title' => 'Чумовая десятка',
    ),
    512 => 
    array (
      'id' => 513,
      'title' => 'Шадинский Денис',
    ),
    513 => 
    array (
      'id' => 514,
      'title' => 'sf@irat',
    ),
    514 => 
    array (
      'id' => 515,
      'title' => 'Original',
    ),
    515 => 
    array (
      'id' => 516,
      'title' => 'Полное дублирование',
    ),
    516 => 
    array (
      'id' => 517,
      'title' => '2x2',
    ),
    517 => 
    array (
      'id' => 518,
      'title' => 'AniLibria.TV',
    ),
    518 => 
    array (
      'id' => 519,
      'title' => 'Back Board Cinema',
    ),
    519 => 
    array (
      'id' => 520,
      'title' => 'Boomerang',
    ),
    520 => 
    array (
      'id' => 521,
      'title' => 'BTI Studios',
    ),
    521 => 
    array (
      'id' => 522,
      'title' => 'Burning Bush',
    ),
    522 => 
    array (
      'id' => 523,
      'title' => 'Cartoon Network',
    ),
    523 => 
    array (
      'id' => 524,
      'title' => 'Cinema Prestige',
    ),
    524 => 
    array (
      'id' => 525,
      'title' => 'CLS Media',
    ),
    525 => 
    array (
      'id' => 526,
      'title' => 'Discovery',
    ),
    526 => 
    array (
      'id' => 527,
      'title' => 'Disney Channel',
    ),
    527 => 
    array (
      'id' => 528,
      'title' => 'Flarrow Films',
    ),
    528 => 
    array (
      'id' => 529,
      'title' => 'Force Media',
    ),
    529 => 
    array (
      'id' => 530,
      'title' => 'Fox Life',
    ),
    530 => 
    array (
      'id' => 531,
      'title' => 'Greb&Creative',
    ),
    531 => 
    array (
      'id' => 532,
      'title' => 'iTunes',
    ),
    532 => 
    array (
      'id' => 533,
      'title' => 'IVI',
    ),
    533 => 
    array (
      'id' => 534,
      'title' => 'Jetix',
    ),
    534 => 
    array (
      'id' => 535,
      'title' => 'Lucky Production',
    ),
    535 => 
    array (
      'id' => 536,
      'title' => 'moygolos',
    ),
    536 => 
    array (
      'id' => 537,
      'title' => 'MTV',
    ),
    537 => 
    array (
      'id' => 538,
      'title' => 'Netflix',
    ),
    538 => 
    array (
      'id' => 539,
      'title' => 'Nickelodeon',
    ),
    539 => 
    array (
      'id' => 540,
      'title' => 'Novamedia',
    ),
    540 => 
    array (
      'id' => 541,
      'title' => 'Paramount Channel',
    ),
    541 => 
    array (
      'id' => 542,
      'title' => 'Paramount Comedy',
    ),
    542 => 
    array (
      'id' => 543,
      'title' => 'Reanimedia',
    ),
    543 => 
    array (
      'id' => 544,
      'title' => 'RuFilms',
    ),
    544 => 
    array (
      'id' => 545,
      'title' => 'SDI Media',
    ),
    545 => 
    array (
      'id' => 546,
      'title' => 'Selena International',
    ),
    546 => 
    array (
      'id' => 547,
      'title' => 'SET',
    ),
    547 => 
    array (
      'id' => 548,
      'title' => 'Sony Sci-Fi',
    ),
    548 => 
    array (
      'id' => 549,
      'title' => 'The Kitchen Russia',
    ),
    549 => 
    array (
      'id' => 550,
      'title' => 'True Dubbing Studio',
    ),
    550 => 
    array (
      'id' => 551,
      'title' => 'ViP Premiere',
    ),
    551 => 
    array (
      'id' => 552,
      'title' => 'VSI Moscow',
    ),
    552 => 
    array (
      'id' => 553,
      'title' => 'Wakanim',
    ),
    553 => 
    array (
      'id' => 554,
      'title' => 'West Video',
    ),
    554 => 
    array (
      'id' => 555,
      'title' => 'XL Media',
    ),
    555 => 
    array (
      'id' => 556,
      'title' => 'ZEE TV',
    ),
    556 => 
    array (
      'id' => 557,
      'title' => 'Zone Vision Studio',
    ),
    557 => 
    array (
      'id' => 558,
      'title' => 'АРК-ТВ Studio',
    ),
    558 => 
    array (
      'id' => 559,
      'title' => 'Варус-Видео',
    ),
    559 => 
    array (
      'id' => 560,
      'title' => 'Видеосервис',
    ),
    560 => 
    array (
      'id' => 561,
      'title' => 'Гемини',
    ),
    561 => 
    array (
      'id' => 562,
      'title' => 'Домашний',
    ),
    562 => 
    array (
      'id' => 563,
      'title' => 'Звук с TS',
    ),
    563 => 
    array (
      'id' => 564,
      'title' => 'Ист-Вест',
    ),
    564 => 
    array (
      'id' => 565,
      'title' => 'Киностудия им. Горького',
    ),
    565 => 
    array (
      'id' => 566,
      'title' => 'Кипарис',
    ),
    566 => 
    array (
      'id' => 567,
      'title' => 'Кириллица',
    ),
    567 => 
    array (
      'id' => 568,
      'title' => 'Кравец',
    ),
    568 => 
    array (
      'id' => 569,
      'title' => 'Лексикон',
    ),
    569 => 
    array (
      'id' => 570,
      'title' => 'Ленфильм',
    ),
    570 => 
    array (
      'id' => 571,
      'title' => 'Марафон',
    ),
    571 => 
    array (
      'id' => 572,
      'title' => 'Мега-Аниме',
    ),
    572 => 
    array (
      'id' => 573,
      'title' => 'Мост-Видео',
    ),
    573 => 
    array (
      'id' => 574,
      'title' => 'Мосфильм',
    ),
    574 => 
    array (
      'id' => 575,
      'title' => 'Нева-1',
    ),
    575 => 
    array (
      'id' => 576,
      'title' => 'Нота',
    ),
    576 => 
    array (
      'id' => 577,
      'title' => 'НТВ',
    ),
    577 => 
    array (
      'id' => 578,
      'title' => 'Останкино',
    ),
    578 => 
    array (
      'id' => 579,
      'title' => 'ОРТ',
    ),
    579 => 
    array (
      'id' => 580,
      'title' => 'Пилот',
    ),
    580 => 
    array (
      'id' => 581,
      'title' => 'Пифагор',
    ),
    581 => 
    array (
      'id' => 582,
      'title' => 'Премьер Видео Фильм',
    ),
    582 => 
    array (
      'id' => 583,
      'title' => 'РенТВ',
    ),
    583 => 
    array (
      'id' => 584,
      'title' => 'РТР ',
    ),
    584 => 
    array (
      'id' => 585,
      'title' => 'Русский дубляж',
    ),
    585 => 
    array (
      'id' => 586,
      'title' => 'СВ-Дубль',
    ),
    586 => 
    array (
      'id' => 587,
      'title' => 'Союзмультфильм',
    ),
    587 => 
    array (
      'id' => 588,
      'title' => 'СТС',
    ),
    588 => 
    array (
      'id' => 589,
      'title' => 'Студия им.Довженко',
    ),
    589 => 
    array (
      'id' => 590,
      'title' => 'ТВ3',
    ),
    590 => 
    array (
      'id' => 591,
      'title' => 'ТВЦ',
    ),
    591 => 
    array (
      'id' => 592,
      'title' => 'ТНТ',
    ),
    592 => 
    array (
      'id' => 593,
      'title' => 'Хлопушка',
    ),
    593 => 
    array (
      'id' => 594,
      'title' => 'Профессиональный двухголосый',
    ),
    594 => 
    array (
      'id' => 595,
      'title' => '2D',
    ),
    595 => 
    array (
      'id' => 596,
      'title' => '2x2',
    ),
    596 => 
    array (
      'id' => 597,
      'title' => '5-й канал СПб',
    ),
    597 => 
    array (
      'id' => 598,
      'title' => 'Agatha Studdio',
    ),
    598 => 
    array (
      'id' => 599,
      'title' => 'AlexFilm',
    ),
    599 => 
    array (
      'id' => 600,
      'title' => 'Amalgama',
    ),
    600 => 
    array (
      'id' => 601,
      'title' => 'ATV Studio',
    ),
    601 => 
    array (
      'id' => 602,
      'title' => 'BaibaKo',
    ),
    602 => 
    array (
      'id' => 603,
      'title' => 'BBC Saint-Petersburg',
    ),
    603 => 
    array (
      'id' => 604,
      'title' => 'Bollywood HD',
    ),
    604 => 
    array (
      'id' => 605,
      'title' => 'CBS Drama',
    ),
    605 => 
    array (
      'id' => 606,
      'title' => 'Cinema Prestige',
    ),
    606 => 
    array (
      'id' => 607,
      'title' => 'CP Digital',
    ),
    607 => 
    array (
      'id' => 608,
      'title' => 'D2Lab',
    ),
    608 => 
    array (
      'id' => 609,
      'title' => 'DDV',
    ),
    609 => 
    array (
      'id' => 610,
      'title' => 'Discovery',
    ),
    610 => 
    array (
      'id' => 611,
      'title' => 'DIVA Universal',
    ),
    611 => 
    array (
      'id' => 612,
      'title' => 'DoubleRec',
    ),
    612 => 
    array (
      'id' => 613,
      'title' => 'DVD Classic',
    ),
    613 => 
    array (
      'id' => 614,
      'title' => 'DVD Group',
    ),
    614 => 
    array (
      'id' => 615,
      'title' => 'DVD Магия',
    ),
    615 => 
    array (
      'id' => 616,
      'title' => 'Elrom',
    ),
    616 => 
    array (
      'id' => 617,
      'title' => 'FDV',
    ),
    617 => 
    array (
      'id' => 618,
      'title' => 'Film Prestige',
    ),
    618 => 
    array (
      'id' => 619,
      'title' => 'Fox Life',
    ),
    619 => 
    array (
      'id' => 620,
      'title' => 'Garsu Pasaulis',
    ),
    620 => 
    array (
      'id' => 621,
      'title' => 'Gears Media',
    ),
    621 => 
    array (
      'id' => 622,
      'title' => 'Good People',
    ),
    622 => 
    array (
      'id' => 623,
      'title' => 'GoodTime Media',
    ),
    623 => 
    array (
      'id' => 624,
      'title' => 'Greb&Creative',
    ),
    624 => 
    array (
      'id' => 625,
      'title' => 'Hallmark',
    ),
    625 => 
    array (
      'id' => 626,
      'title' => 'Hamster Studio',
    ),
    626 => 
    array (
      'id' => 627,
      'title' => 'IdeaFilm',
    ),
    627 => 
    array (
      'id' => 628,
      'title' => 'Inter Video',
    ),
    628 => 
    array (
      'id' => 629,
      'title' => 'iTunes',
    ),
    629 => 
    array (
      'id' => 630,
      'title' => 'Jaskier',
    ),
    630 => 
    array (
      'id' => 631,
      'title' => 'Lazer Video',
    ),
    631 => 
    array (
      'id' => 632,
      'title' => 'LDV',
    ),
    632 => 
    array (
      'id' => 633,
      'title' => 'LostFilm',
    ),
    633 => 
    array (
      'id' => 634,
      'title' => 'New Dream Media',
    ),
    634 => 
    array (
      'id' => 635,
      'title' => 'NewStudio',
    ),
    635 => 
    array (
      'id' => 636,
      'title' => 'NLS',
    ),
    636 => 
    array (
      'id' => 637,
      'title' => 'NovaFilm',
    ),
    637 => 
    array (
      'id' => 638,
      'title' => 'Novamedia',
    ),
    638 => 
    array (
      'id' => 639,
      'title' => 'Ozz.tv',
    ),
    639 => 
    array (
      'id' => 640,
      'title' => 'Paramount Channel',
    ),
    640 => 
    array (
      'id' => 641,
      'title' => 'Pazl Voice',
    ),
    641 => 
    array (
      'id' => 642,
      'title' => 'ProdMedia',
    ),
    642 => 
    array (
      'id' => 643,
      'title' => 'R5',
    ),
    643 => 
    array (
      'id' => 644,
      'title' => 'RecentFilms',
    ),
    644 => 
    array (
      'id' => 645,
      'title' => 'Red Media',
    ),
    645 => 
    array (
      'id' => 646,
      'title' => 'RUSCICO',
    ),
    646 => 
    array (
      'id' => 647,
      'title' => 'SDI Media',
    ),
    647 => 
    array (
      'id' => 648,
      'title' => 'Selena International',
    ),
    648 => 
    array (
      'id' => 649,
      'title' => 'Sony Sci-Fi',
    ),
    649 => 
    array (
      'id' => 650,
      'title' => 'Sony Turbo',
    ),
    650 => 
    array (
      'id' => 651,
      'title' => 'StudioFilms',
    ),
    651 => 
    array (
      'id' => 652,
      'title' => 'Sunshine Studio',
    ),
    652 => 
    array (
      'id' => 653,
      'title' => 'Superbit',
    ),
    653 => 
    array (
      'id' => 654,
      'title' => 'TLC Россия',
    ),
    654 => 
    array (
      'id' => 655,
      'title' => 'TUMBLER Studio',
    ),
    655 => 
    array (
      'id' => 656,
      'title' => 'TV Play Baltics',
    ),
    656 => 
    array (
      'id' => 657,
      'title' => 'TV1000',
    ),
    657 => 
    array (
      'id' => 658,
      'title' => 'Twister',
    ),
    658 => 
    array (
      'id' => 659,
      'title' => 'Tycoon',
    ),
    659 => 
    array (
      'id' => 660,
      'title' => 'UC',
    ),
    660 => 
    array (
      'id' => 661,
      'title' => 'Universal Channel',
    ),
    661 => 
    array (
      'id' => 662,
      'title' => 'Universal Russia',
    ),
    662 => 
    array (
      'id' => 663,
      'title' => 'ViruseProject',
    ),
    663 => 
    array (
      'id' => 664,
      'title' => 'VSI Moscow',
    ),
    664 => 
    array (
      'id' => 665,
      'title' => 'West Video',
    ),
    665 => 
    array (
      'id' => 666,
      'title' => 'Zone Vision Studio',
    ),
    666 => 
    array (
      'id' => 667,
      'title' => 'Акцент',
    ),
    667 => 
    array (
      'id' => 668,
      'title' => 'Арена',
    ),
    668 => 
    array (
      'id' => 669,
      'title' => 'Варус-Видео',
    ),
    669 => 
    array (
      'id' => 670,
      'title' => 'Видеоимпульс',
    ),
    670 => 
    array (
      'id' => 671,
      'title' => 'Видеосервис',
    ),
    671 => 
    array (
      'id' => 672,
      'title' => 'Видеофильм',
    ),
    672 => 
    array (
      'id' => 673,
      'title' => 'Визгунов + Нина',
    ),
    673 => 
    array (
      'id' => 674,
      'title' => 'Гемини',
    ),
    674 => 
    array (
      'id' => 675,
      'title' => 'Гланц + Казакова',
    ),
    675 => 
    array (
      'id' => 676,
      'title' => 'Гланц + Королёва',
    ),
    676 => 
    array (
      'id' => 677,
      'title' => 'Детский',
    ),
    677 => 
    array (
      'id' => 678,
      'title' => 'Другое кино',
    ),
    678 => 
    array (
      'id' => 679,
      'title' => 'ДТВ',
    ),
    679 => 
    array (
      'id' => 680,
      'title' => 'Еврокино',
    ),
    680 => 
    array (
      'id' => 681,
      'title' => 'Екатеринбург Арт',
    ),
    681 => 
    array (
      'id' => 682,
      'title' => 'Игмар',
    ),
    682 => 
    array (
      'id' => 683,
      'title' => 'Инис',
    ),
    683 => 
    array (
      'id' => 684,
      'title' => 'Интерфильм',
    ),
    684 => 
    array (
      'id' => 685,
      'title' => 'Инфофильм',
    ),
    685 => 
    array (
      'id' => 686,
      'title' => 'Кармен Видео',
    ),
    686 => 
    array (
      'id' => 687,
      'title' => 'Карусель',
    ),
    687 => 
    array (
      'id' => 688,
      'title' => 'Кино без границ',
    ),
    688 => 
    array (
      'id' => 689,
      'title' => 'Киномания',
    ),
    689 => 
    array (
      'id' => 690,
      'title' => 'Киноужас',
    ),
    690 => 
    array (
      'id' => 691,
      'title' => 'Кипарис',
    ),
    691 => 
    array (
      'id' => 692,
      'title' => 'КТК',
    ),
    692 => 
    array (
      'id' => 693,
      'title' => 'Кубик в Кубе',
    ),
    693 => 
    array (
      'id' => 694,
      'title' => 'Культура',
    ),
    694 => 
    array (
      'id' => 695,
      'title' => 'Лайко',
    ),
    695 => 
    array (
      'id' => 696,
      'title' => 'Мастер Тэйп',
    ),
    696 => 
    array (
      'id' => 697,
      'title' => 'Мобильное телевидение',
    ),
    697 => 
    array (
      'id' => 698,
      'title' => 'Мост-Видео',
    ),
    698 => 
    array (
      'id' => 699,
      'title' => 'Мьюзик-Трейд',
    ),
    699 => 
    array (
      'id' => 700,
      'title' => 'Нарышкин',
    ),
    700 => 
    array (
      'id' => 701,
      'title' => 'НСТ',
    ),
    701 => 
    array (
      'id' => 702,
      'title' => 'НТВ',
    ),
    702 => 
    array (
      'id' => 703,
      'title' => 'Омикрон',
    ),
    703 => 
    array (
      'id' => 704,
      'title' => 'Партнер Видео Фильм',
    ),
    704 => 
    array (
      'id' => 705,
      'title' => 'Первый канал',
    ),
    705 => 
    array (
      'id' => 706,
      'title' => 'Первый ТВЧ',
    ),
    706 => 
    array (
      'id' => 707,
      'title' => 'Пифагор',
    ),
    707 => 
    array (
      'id' => 708,
      'title' => 'Позитив',
    ),
    708 => 
    array (
      'id' => 709,
      'title' => 'Премьер Видео Фильм',
    ),
    709 => 
    array (
      'id' => 710,
      'title' => 'Ракурс',
    ),
    710 => 
    array (
      'id' => 711,
      'title' => 'РенТВ',
    ),
    711 => 
    array (
      'id' => 712,
      'title' => 'РТР',
    ),
    712 => 
    array (
      'id' => 713,
      'title' => 'СВ-Дубль',
    ),
    713 => 
    array (
      'id' => 714,
      'title' => 'СВ-Кадр',
    ),
    714 => 
    array (
      'id' => 715,
      'title' => 'Светла',
    ),
    715 => 
    array (
      'id' => 716,
      'title' => 'Синема-Престиж',
    ),
    716 => 
    array (
      'id' => 717,
      'title' => 'Союз Видео',
    ),
    717 => 
    array (
      'id' => 718,
      'title' => 'СТС',
    ),
    718 => 
    array (
      'id' => 719,
      'title' => 'ТВ3',
    ),
    719 => 
    array (
      'id' => 720,
      'title' => 'ТВ6',
    ),
    720 => 
    array (
      'id' => 721,
      'title' => 'ТВЦ',
    ),
    721 => 
    array (
      'id' => 722,
      'title' => 'Тивионика',
    ),
    722 => 
    array (
      'id' => 723,
      'title' => 'ТНТ',
    ),
    723 => 
    array (
      'id' => 724,
      'title' => 'Ульпаней Эльром',
    ),
    724 => 
    array (
      'id' => 725,
      'title' => 'Фортуна-Фильм',
    ),
    725 => 
    array (
      'id' => 726,
      'title' => 'ХИТ',
    ),
    726 => 
    array (
      'id' => 727,
      'title' => 'Элегия фильм',
    ),
    727 => 
    array (
      'id' => 728,
      'title' => 'Профессиональный многоголосый',
    ),
    728 => 
    array (
      'id' => 729,
      'title' => '100ТВ',
    ),
    729 => 
    array (
      'id' => 730,
      'title' => '20th Century Fox',
    ),
    730 => 
    array (
      'id' => 731,
      'title' => '2x2',
    ),
    731 => 
    array (
      'id' => 732,
      'title' => '5-й канал СПб',
    ),
    732 => 
    array (
      'id' => 733,
      'title' => '6-й канал СПб',
    ),
    733 => 
    array (
      'id' => 734,
      'title' => 'MUZOBOZ',
    ),
    734 => 
    array (
      'id' => 735,
      'title' => 'AB-Video',
    ),
    735 => 
    array (
      'id' => 736,
      'title' => 'Agatha Studdio',
    ),
    736 => 
    array (
      'id' => 737,
      'title' => 'AlexFilm',
    ),
    737 => 
    array (
      'id' => 738,
      'title' => 'AlphaProject',
    ),
    738 => 
    array (
      'id' => 739,
      'title' => 'Amalgama',
    ),
    739 => 
    array (
      'id' => 740,
      'title' => 'Amber',
    ),
    740 => 
    array (
      'id' => 741,
      'title' => 'Amedia',
    ),
    741 => 
    array (
      'id' => 742,
      'title' => 'AMS',
    ),
    742 => 
    array (
      'id' => 743,
      'title' => 'Ancord',
    ),
    743 => 
    array (
      'id' => 744,
      'title' => 'ANIvoice',
    ),
    744 => 
    array (
      'id' => 745,
      'title' => 'Astana TV',
    ),
    745 => 
    array (
      'id' => 746,
      'title' => 'AXN Sci-Fi',
    ),
    746 => 
    array (
      'id' => 747,
      'title' => 'AzOnFilm',
    ),
    747 => 
    array (
      'id' => 748,
      'title' => 'Back Board Cinema',
    ),
    748 => 
    array (
      'id' => 749,
      'title' => 'BaibaKo',
    ),
    749 => 
    array (
      'id' => 750,
      'title' => 'BBC Saint-Petersburg',
    ),
    750 => 
    array (
      'id' => 751,
      'title' => 'Bollywood HD',
    ),
    751 => 
    array (
      'id' => 752,
      'title' => 'BTI Studios',
    ),
    752 => 
    array (
      'id' => 753,
      'title' => 'CasStudio',
    ),
    753 => 
    array (
      'id' => 754,
      'title' => 'CBS Drama',
    ),
    754 => 
    array (
      'id' => 755,
      'title' => 'Cinema Prestige',
    ),
    755 => 
    array (
      'id' => 756,
      'title' => 'CLS Media',
    ),
    756 => 
    array (
      'id' => 757,
      'title' => 'ColdFilm',
    ),
    757 => 
    array (
      'id' => 758,
      'title' => 'Contentica',
    ),
    758 => 
    array (
      'id' => 759,
      'title' => 'CP Digital',
    ),
    759 => 
    array (
      'id' => 760,
      'title' => 'Crunchyroll',
    ),
    760 => 
    array (
      'id' => 761,
      'title' => 'D2Lab',
    ),
    761 => 
    array (
      'id' => 762,
      'title' => 'DDV',
    ),
    762 => 
    array (
      'id' => 763,
      'title' => 'Discovery',
    ),
    763 => 
    array (
      'id' => 764,
      'title' => 'DIVA Universal',
    ),
    764 => 
    array (
      'id' => 765,
      'title' => 'Dorama',
    ),
    765 => 
    array (
      'id' => 766,
      'title' => 'DoubleRec',
    ),
    766 => 
    array (
      'id' => 767,
      'title' => 'DVD Classic',
    ),
    767 => 
    array (
      'id' => 768,
      'title' => 'DVD Group',
    ),
    768 => 
    array (
      'id' => 769,
      'title' => 'DVD Магия',
    ),
    769 => 
    array (
      'id' => 770,
      'title' => 'Eurochannel',
    ),
    770 => 
    array (
      'id' => 771,
      'title' => 'Extrabit',
    ),
    771 => 
    array (
      'id' => 772,
      'title' => 'FDV',
    ),
    772 => 
    array (
      'id' => 773,
      'title' => 'Filiza Studio',
    ),
    773 => 
    array (
      'id' => 774,
      'title' => 'FilmsClub',
    ),
    774 => 
    array (
      'id' => 775,
      'title' => 'Flarrow Films',
    ),
    775 => 
    array (
      'id' => 776,
      'title' => 'FocusStudio',
    ),
    776 => 
    array (
      'id' => 777,
      'title' => 'FocusX',
    ),
    777 => 
    array (
      'id' => 778,
      'title' => 'Fortica',
    ),
    778 => 
    array (
      'id' => 779,
      'title' => 'Fox Crime',
    ),
    779 => 
    array (
      'id' => 780,
      'title' => 'Fox Life',
    ),
    780 => 
    array (
      'id' => 781,
      'title' => 'FOX',
    ),
    781 => 
    array (
      'id' => 782,
      'title' => 'Gears Media',
    ),
    782 => 
    array (
      'id' => 783,
      'title' => 'Gold Cinema',
    ),
    783 => 
    array (
      'id' => 784,
      'title' => 'Good People',
    ),
    784 => 
    array (
      'id' => 785,
      'title' => 'GoodTime Media',
    ),
    785 => 
    array (
      'id' => 786,
      'title' => 'GostFilm',
    ),
    786 => 
    array (
      'id' => 787,
      'title' => 'Greb&Creative',
    ),
    787 => 
    array (
      'id' => 788,
      'title' => 'GreenРай Studio',
    ),
    788 => 
    array (
      'id' => 789,
      'title' => 'Hallmark',
    ),
    789 => 
    array (
      'id' => 790,
      'title' => 'HDrezka Studio 18+',
    ),
    790 => 
    array (
      'id' => 791,
      'title' => 'HDrezka Studio',
    ),
    791 => 
    array (
      'id' => 792,
      'title' => 'IdeaFilm',
    ),
    792 => 
    array (
      'id' => 793,
      'title' => 'Intra Communications',
    ),
    793 => 
    array (
      'id' => 794,
      'title' => 'iTunes',
    ),
    794 => 
    array (
      'id' => 795,
      'title' => 'IVI',
    ),
    795 => 
    array (
      'id' => 796,
      'title' => 'Jaskier',
    ),
    796 => 
    array (
      'id' => 797,
      'title' => 'JWA Project',
    ),
    797 => 
    array (
      'id' => 798,
      'title' => 'Kansai',
    ),
    798 => 
    array (
      'id' => 799,
      'title' => 'KinoView',
    ),
    799 => 
    array (
      'id' => 800,
      'title' => 'kubik&ko',
    ),
    800 => 
    array (
      'id' => 801,
      'title' => 'Kulzvuk Studio',
    ),
    801 => 
    array (
      'id' => 802,
      'title' => 'Lazer Video',
    ),
    802 => 
    array (
      'id' => 803,
      'title' => 'LDV',
    ),
    803 => 
    array (
      'id' => 804,
      'title' => 'Liga HQ',
    ),
    804 => 
    array (
      'id' => 805,
      'title' => 'Lizard Cinema',
    ),
    805 => 
    array (
      'id' => 806,
      'title' => 'LostFilm',
    ),
    806 => 
    array (
      'id' => 807,
      'title' => 'Lucky Production',
    ),
    807 => 
    array (
      'id' => 808,
      'title' => 'MC Entertainment',
    ),
    808 => 
    array (
      'id' => 809,
      'title' => 'More TV',
    ),
    809 => 
    array (
      'id' => 810,
      'title' => 'moygolos',
    ),
    810 => 
    array (
      'id' => 811,
      'title' => 'MTV',
    ),
    811 => 
    array (
      'id' => 812,
      'title' => 'Netflix',
    ),
    812 => 
    array (
      'id' => 813,
      'title' => 'New Dream Media',
    ),
    813 => 
    array (
      'id' => 814,
      'title' => 'NewComers',
    ),
    814 => 
    array (
      'id' => 815,
      'title' => 'NewStudio',
    ),
    815 => 
    array (
      'id' => 816,
      'title' => 'Nord Videofilm',
    ),
    816 => 
    array (
      'id' => 817,
      'title' => 'NovaFilm & NewStudio',
    ),
    817 => 
    array (
      'id' => 818,
      'title' => 'NovaFilm',
    ),
    818 => 
    array (
      'id' => 819,
      'title' => 'Novamedia',
    ),
    819 => 
    array (
      'id' => 820,
      'title' => 'OMSKBIRD records',
    ),
    820 => 
    array (
      'id' => 821,
      'title' => 'Ozz.tv',
    ),
    821 => 
    array (
      'id' => 822,
      'title' => 'Paradox & Omskbird records',
    ),
    822 => 
    array (
      'id' => 823,
      'title' => 'Paramount Channel',
    ),
    823 => 
    array (
      'id' => 824,
      'title' => 'Paramount Comedy',
    ),
    824 => 
    array (
      'id' => 825,
      'title' => 'Pazl Voice',
    ),
    825 => 
    array (
      'id' => 826,
      'title' => 'Premier',
    ),
    826 => 
    array (
      'id' => 827,
      'title' => 'Profix Media',
    ),
    827 => 
    array (
      'id' => 828,
      'title' => 'Red Media',
    ),
    828 => 
    array (
      'id' => 829,
      'title' => 'RUSCICO',
    ),
    829 => 
    array (
      'id' => 830,
      'title' => 'SDI Media',
    ),
    830 => 
    array (
      'id' => 831,
      'title' => 'Selena International',
    ),
    831 => 
    array (
      'id' => 832,
      'title' => 'SET',
    ),
    832 => 
    array (
      'id' => 833,
      'title' => 'ShowJet',
    ),
    833 => 
    array (
      'id' => 834,
      'title' => 'SomeWax',
    ),
    834 => 
    array (
      'id' => 835,
      'title' => 'Sony Channel',
    ),
    835 => 
    array (
      'id' => 836,
      'title' => 'Sony Sci-Fi',
    ),
    836 => 
    array (
      'id' => 837,
      'title' => 'Sony Turbo',
    ),
    837 => 
    array (
      'id' => 838,
      'title' => 'Sound Film',
    ),
    838 => 
    array (
      'id' => 839,
      'title' => 'STEPonee',
    ),
    839 => 
    array (
      'id' => 840,
      'title' => 'StudioBand | Wakanim',
    ),
    840 => 
    array (
      'id' => 841,
      'title' => 'SunshineStudio (многоголосый)',
    ),
    841 => 
    array (
      'id' => 842,
      'title' => 'Superbit (многоголосый)',
    ),
    842 => 
    array (
      'id' => 843,
      'title' => 'Syfy Universal (многоголосый)',
    ),
    843 => 
    array (
      'id' => 844,
      'title' => 'The Kitchen Russia (многоголосый)',
    ),
    844 => 
    array (
      'id' => 845,
      'title' => 'Train Studio (многоголосый)',
    ),
    845 => 
    array (
      'id' => 846,
      'title' => 'True Dubbing Studio (многоголосый)',
    ),
    846 => 
    array (
      'id' => 847,
      'title' => 'TUMBLER Studio',
    ),
    847 => 
    array (
      'id' => 848,
      'title' => 'TV1000',
    ),
    848 => 
    array (
      'id' => 849,
      'title' => 'TVShows',
    ),
    849 => 
    array (
      'id' => 850,
      'title' => 'Twister',
    ),
    850 => 
    array (
      'id' => 851,
      'title' => 'Tycoon',
    ),
    851 => 
    array (
      'id' => 852,
      'title' => 'Universal Russia',
    ),
    852 => 
    array (
      'id' => 853,
      'title' => 'VideoBIZ',
    ),
    853 => 
    array (
      'id' => 854,
      'title' => 'Videogram',
    ),
    854 => 
    array (
      'id' => 855,
      'title' => 'ViP Premiere',
    ),
    855 => 
    array (
      'id' => 856,
      'title' => 'VIP Serial HD',
    ),
    856 => 
    array (
      'id' => 857,
      'title' => 'ViruseProject',
    ),
    857 => 
    array (
      'id' => 858,
      'title' => 'VO-Production',
    ),
    858 => 
    array (
      'id' => 859,
      'title' => 'VSI Moscow',
    ),
    859 => 
    array (
      'id' => 860,
      'title' => 'Wakanim',
    ),
    860 => 
    array (
      'id' => 861,
      'title' => 'West Media Group (многоголосый)',
    ),
    861 => 
    array (
      'id' => 862,
      'title' => 'West Video (многоголосый)',
    ),
    862 => 
    array (
      'id' => 863,
      'title' => 'ZEE TV (многоголосый)',
    ),
    863 => 
    array (
      'id' => 864,
      'title' => 'Zone Vision Studio (многоголосый)',
    ),
    864 => 
    array (
      'id' => 865,
      'title' => 'Zoomvision Studio (многоголосый)',
    ),
    865 => 
    array (
      'id' => 866,
      'title' => 'Акцент (многоголосый)',
    ),
    866 => 
    array (
      'id' => 867,
      'title' => 'АРК-ТВ & VSI (многоголосый)',
    ),
    867 => 
    array (
      'id' => 868,
      'title' => 'АРК-ТВ Studio (многоголосый)',
    ),
    868 => 
    array (
      'id' => 869,
      'title' => 'Варус-Видео (многоголосый)',
    ),
    869 => 
    array (
      'id' => 870,
      'title' => 'ВГТРК (многоголосый)',
    ),
    870 => 
    array (
      'id' => 871,
      'title' => 'Велес (многоголосый)',
    ),
    871 => 
    array (
      'id' => 872,
      'title' => 'Видеобаза (многоголосый)',
    ),
    872 => 
    array (
      'id' => 873,
      'title' => 'Видеоимпульс (многоголосый)',
    ),
    873 => 
    array (
      'id' => 874,
      'title' => 'Видеопродакшн (многоголосый)',
    ),
    874 => 
    array (
      'id' => 875,
      'title' => 'Видеосервис (многоголосый)',
    ),
    875 => 
    array (
      'id' => 876,
      'title' => 'Видеофильм (многоголосый)',
    ),
    876 => 
    array (
      'id' => 877,
      'title' => 'Вольга (многоголосый)',
    ),
    877 => 
    array (
      'id' => 878,
      'title' => 'Гемини (многоголосый)',
    ),
    878 => 
    array (
      'id' => 879,
      'title' => 'Домашний (многоголосый)',
    ),
    879 => 
    array (
      'id' => 880,
      'title' => 'Другое кино (многоголосый)',
    ),
    880 => 
    array (
      'id' => 881,
      'title' => 'ДТВ (многоголосый)',
    ),
    881 => 
    array (
      'id' => 882,
      'title' => 'Екатеринбург Арт (многоголосый)',
    ),
    882 => 
    array (
      'id' => 883,
      'title' => 'Живи! (многоголосый)',
    ),
    883 => 
    array (
      'id' => 884,
      'title' => 'Закон ТВ (многоголосый)',
    ),
    884 => 
    array (
      'id' => 885,
      'title' => 'Звезда (многоголосый)',
    ),
    885 => 
    array (
      'id' => 886,
      'title' => 'Звук с TS (многоголосый)',
    ),
    886 => 
    array (
      'id' => 887,
      'title' => 'Игмар (многоголосый)',
    ),
    887 => 
    array (
      'id' => 888,
      'title' => 'ИДДК (многоголосый)',
    ),
    888 => 
    array (
      'id' => 889,
      'title' => 'Индийское кино (многоголосый)',
    ),
    889 => 
    array (
      'id' => 890,
      'title' => 'Индия ТВ (многоголосый)',
    ),
    890 => 
    array (
      'id' => 891,
      'title' => 'Инис (многоголосый)',
    ),
    891 => 
    array (
      'id' => 892,
      'title' => 'Интер (многоголосый)',
    ),
    892 => 
    array (
      'id' => 893,
      'title' => 'Инфофильм (многоголосый)',
    ),
    893 => 
    array (
      'id' => 894,
      'title' => 'Кармен Видео (многоголосый)',
    ),
    894 => 
    array (
      'id' => 895,
      'title' => 'Карусель (многоголосый)',
    ),
    895 => 
    array (
      'id' => 896,
      'title' => 'Кинолюкс (многоголосый)',
    ),
    896 => 
    array (
      'id' => 897,
      'title' => 'Киномания (многоголосый)',
    ),
    897 => 
    array (
      'id' => 898,
      'title' => 'Кинопоказ (многоголосый)',
    ),
    898 => 
    array (
      'id' => 899,
      'title' => 'Кинопремьера (многоголосый)',
    ),
    899 => 
    array (
      'id' => 900,
      'title' => 'Киноужас (многоголосый)',
    ),
    900 => 
    array (
      'id' => 901,
      'title' => 'Кипарис (многоголосый)',
    ),
    901 => 
    array (
      'id' => 902,
      'title' => 'Кириллица (многоголосый)',
    ),
    902 => 
    array (
      'id' => 903,
      'title' => 'Колобок (многоголосый)',
    ),
    903 => 
    array (
      'id' => 904,
      'title' => 'Комедия ТВ (многоголосый)',
    ),
    904 => 
    array (
      'id' => 905,
      'title' => 'Кондор (многоголосый)',
    ),
    905 => 
    array (
      'id' => 906,
      'title' => 'КонтентикOFF (многоголосый)',
    ),
    906 => 
    array (
      'id' => 907,
      'title' => 'Кравец (многоголосый)',
    ),
    907 => 
    array (
      'id' => 908,
      'title' => 'Культура (многоголосый)',
    ),
    908 => 
    array (
      'id' => 909,
      'title' => 'Лексикон (многоголосый)',
    ),
    909 => 
    array (
      'id' => 910,
      'title' => 'М1 (многоголосый)',
    ),
    910 => 
    array (
      'id' => 911,
      'title' => 'Мастер Тэйп (многоголосый)',
    ),
    911 => 
    array (
      'id' => 912,
      'title' => 'Мельница (многоголосый)',
    ),
    912 => 
    array (
      'id' => 913,
      'title' => 'МИР (многоголосый)',
    ),
    913 => 
    array (
      'id' => 914,
      'title' => 'Мобильное телевидение (многоголосый)',
    ),
    914 => 
    array (
      'id' => 915,
      'title' => 'Монолит (многоголосый)',
    ),
    915 => 
    array (
      'id' => 916,
      'title' => 'Мост-Видео (многоголосый)',
    ),
    916 => 
    array (
      'id' => 917,
      'title' => 'Муз-ТВ (многоголосый)',
    ),
    917 => 
    array (
      'id' => 918,
      'title' => 'Мьюзик-трейд (многоголосый)',
    ),
    918 => 
    array (
      'id' => 919,
      'title' => 'Н-Кино (многоголосый)',
    ),
    919 => 
    array (
      'id' => 920,
      'title' => 'Невафильм (многоголосый)',
    ),
    920 => 
    array (
      'id' => 921,
      'title' => 'Неоклассика (многоголосый)',
    ),
    921 => 
    array (
      'id' => 922,
      'title' => 'Новый Диск (многоголосый)',
    ),
    922 => 
    array (
      'id' => 923,
      'title' => 'Нота (многоголосый)',
    ),
    923 => 
    array (
      'id' => 924,
      'title' => 'НСТ (многоголосый)',
    ),
    924 => 
    array (
      'id' => 925,
      'title' => 'НТВ (многоголосый)',
    ),
    925 => 
    array (
      'id' => 926,
      'title' => 'Омикрон (многоголосый)',
    ),
    926 => 
    array (
      'id' => 927,
      'title' => 'Останкино (многоголосый)',
    ),
    927 => 
    array (
      'id' => 928,
      'title' => 'Первый канал (многоголосый)',
    ),
    928 => 
    array (
      'id' => 929,
      'title' => 'Первый ТВЧ (многоголосый)',
    ),
    929 => 
    array (
      'id' => 930,
      'title' => 'Пирамида (многоголосый)',
    ),
    930 => 
    array (
      'id' => 931,
      'title' => 'Пифагор (многоголосый)',
    ),
    931 => 
    array (
      'id' => 932,
      'title' => 'Позитив (многоголосый)',
    ),
    932 => 
    array (
      'id' => 933,
      'title' => 'Прайм Продакшн (многоголосый)',
    ),
    933 => 
    array (
      'id' => 934,
      'title' => 'Премьер Видео Фильм (многоголосый)',
    ),
    934 => 
    array (
      'id' => 935,
      'title' => 'Пятница (многоголосый)',
    ),
    935 => 
    array (
      'id' => 936,
      'title' => 'РенТВ (многоголосый)',
    ),
    936 => 
    array (
      'id' => 937,
      'title' => 'Рост (многоголосый)',
    ),
    937 => 
    array (
      'id' => 938,
      'title' => 'РТР (многоголосый)',
    ),
    938 => 
    array (
      'id' => 939,
      'title' => 'Русский дубляж (многоголосый)',
    ),
    939 => 
    array (
      'id' => 940,
      'title' => 'Русский репортаж (многоголосый)',
    ),
    940 => 
    array (
      'id' => 941,
      'title' => 'РуФилмс (многоголосый)',
    ),
    941 => 
    array (
      'id' => 942,
      'title' => 'С.Р.И (многоголосый)',
    ),
    942 => 
    array (
      'id' => 943,
      'title' => 'СВ-Дубль (многоголосый)',
    ),
    943 => 
    array (
      'id' => 944,
      'title' => 'СВ-Студия (многоголосый)',
    ),
    944 => 
    array (
      'id' => 945,
      'title' => 'Светла (многоголосый)',
    ),
    945 => 
    array (
      'id' => 946,
      'title' => 'Сонотек (многоголосый)',
    ),
    946 => 
    array (
      'id' => 947,
      'title' => 'Союз Видео (многоголосый)',
    ),
    947 => 
    array (
      'id' => 948,
      'title' => 'СТС (многоголосый)',
    ),
    948 => 
    array (
      'id' => 949,
      'title' => 'ТВ3 (многоголосый)',
    ),
    949 => 
    array (
      'id' => 950,
      'title' => 'ТВ6 (многоголосый)',
    ),
    950 => 
    array (
      'id' => 951,
      'title' => 'Твин (многоголосый)',
    ),
    951 => 
    array (
      'id' => 952,
      'title' => 'ТВЦ (многоголосый)',
    ),
    952 => 
    array (
      'id' => 953,
      'title' => 'Тивионика (многоголосый)',
    ),
    953 => 
    array (
      'id' => 954,
      'title' => 'ТНТ (многоголосый)',
    ),
    954 => 
    array (
      'id' => 955,
      'title' => 'Тоникс Медиа (многоголосый)',
    ),
    955 => 
    array (
      'id' => 956,
      'title' => 'Фильм Престиж (многоголосый)',
    ),
    956 => 
    array (
      'id' => 957,
      'title' => 'Фильмэкспорт (многоголосый)',
    ),
    957 => 
    array (
      'id' => 958,
      'title' => 'Формат AB (многоголосый)',
    ),
    958 => 
    array (
      'id' => 959,
      'title' => 'Фортуна-Фильм (многоголосый)',
    ),
    959 => 
    array (
      'id' => 960,
      'title' => 'Хабар (многоголосый)',
    ),
    960 => 
    array (
      'id' => 961,
      'title' => 'Хлопушка (многоголосый)',
    ),
    961 => 
    array (
      'id' => 962,
      'title' => 'Че! (многоголосый)',
    ),
    962 => 
    array (
      'id' => 963,
      'title' => 'Эй Би Видео (многоголосый)',
    ),
    963 => 
    array (
      'id' => 964,
      'title' => 'Профессиональный многоголосый',
    ),
    964 => 
    array (
      'id' => 965,
      'title' => 'СПД (многоголосый)',
    ),
    965 => 
    array (
      'id' => 966,
      'title' => 'Профессиональный одноголосый',
    ),
    966 => 
    array (
      'id' => 967,
      'title' => 'BBC Saint-Petersburg (одноголосый)',
    ),
    967 => 
    array (
      'id' => 968,
      'title' => 'Discovery (одноголосый)',
    ),
    968 => 
    array (
      'id' => 969,
      'title' => 'IdeaFilm (одноголосый)',
    ),
    969 => 
    array (
      'id' => 970,
      'title' => 'Jaskier (одноголосый)',
    ),
    970 => 
    array (
      'id' => 971,
      'title' => 'LostFilm (одноголосый)',
    ),
    971 => 
    array (
      'id' => 972,
      'title' => 'MGM (одноголосый)',
    ),
    972 => 
    array (
      'id' => 973,
      'title' => 'Netflix (одноголосый)',
    ),
    973 => 
    array (
      'id' => 974,
      'title' => 'Ozz.tv (одноголосый)',
    ),
    974 => 
    array (
      'id' => 975,
      'title' => 'SDI Media (одноголосый)',
    ),
    975 => 
    array (
      'id' => 976,
      'title' => 'Selena International (одноголосый)',
    ),
    976 => 
    array (
      'id' => 977,
      'title' => 'Sound Film (одноголосый)',
    ),
    977 => 
    array (
      'id' => 978,
      'title' => 'Tycoon (одноголосый)',
    ),
    978 => 
    array (
      'id' => 979,
      'title' => 'Viasat History (одноголосый)',
    ),
    979 => 
    array (
      'id' => 980,
      'title' => 'АРК-ТВ Studio (одноголосый)',
    ),
    980 => 
    array (
      'id' => 981,
      'title' => 'Баритон (одноголосый)',
    ),
    981 => 
    array (
      'id' => 982,
      'title' => 'Велес (одноголосый)',
    ),
    982 => 
    array (
      'id' => 983,
      'title' => 'Видеофильм ТВ (одноголосый)',
    ),
    983 => 
    array (
      'id' => 984,
      'title' => 'Вихров Владимир (одноголосый)',
    ),
    984 => 
    array (
      'id' => 985,
      'title' => 'Деваль Видео (одноголосый)',
    ),
    985 => 
    array (
      'id' => 986,
      'title' => 'диктор CDV (одноголосый)',
    ),
    986 => 
    array (
      'id' => 987,
      'title' => 'диктор D.F.V (одноголосый)',
    ),
    987 => 
    array (
      'id' => 988,
      'title' => 'Дроздов Николай (одноголосый)',
    ),
    988 => 
    array (
      'id' => 989,
      'title' => 'Кипарис (одноголосый)',
    ),
    989 => 
    array (
      'id' => 990,
      'title' => 'Кравец (одноголосый)',
    ),
    990 => 
    array (
      'id' => 991,
      'title' => 'Кураж-Бамбей (одноголосый)',
    ),
    991 => 
    array (
      'id' => 992,
      'title' => 'Мосфильм (одноголосый)',
    ),
    992 => 
    array (
      'id' => 993,
      'title' => 'НТВ (одноголосый)',
    ),
    993 => 
    array (
      'id' => 994,
      'title' => 'Омикрон (одноголосый)',
    ),
    994 => 
    array (
      'id' => 995,
      'title' => 'Орбита (одноголосый)',
    ),
    995 => 
    array (
      'id' => 996,
      'title' => 'Пифагор (одноголосый)',
    ),
    996 => 
    array (
      'id' => 997,
      'title' => 'РенТВ (одноголосый)',
    ),
    997 => 
    array (
      'id' => 998,
      'title' => 'СВ-Дубль (одноголосый)',
    ),
    998 => 
    array (
      'id' => 999,
      'title' => 'Светла (одноголосый)',
    ),
    999 => 
    array (
      'id' => 1000,
      'title' => 'Сыендук (одноголосый)',
    ),
    1000 => 
    array (
      'id' => 1001,
      'title' => 'Advokat (одноголосый)',
    ),
    1001 => 
    array (
      'id' => 1002,
      'title' => 'Казаков Александр (одноголосый)',
    ),
    1002 => 
    array (
      'id' => 1003,
      'title' => 'BaibaKo',
    ),
    1003 => 
    array (
      'id' => 1004,
      'title' => 'Лаврова Н. (одноголосый)',
    ),
    1004 => 
    array (
      'id' => 1005,
      'title' => 'Кириллица (двухголосый)',
    ),
    1005 => 
    array (
      'id' => 1006,
      'title' => 'KidZone (одноголосый)',
    ),
    1006 => 
    array (
      'id' => 1007,
      'title' => 'AMC (многоголосый)',
    ),
    1007 => 
    array (
      'id' => 1008,
      'title' => 'CineLab SoundMix (двухголосый)',
    ),
    1008 => 
    array (
      'id' => 1009,
      'title' => 'Вольга (двухголосый)',
    ),
    1009 => 
    array (
      'id' => 1010,
      'title' => 'Ирэн (одноголосый)',
    ),
    1010 => 
    array (
      'id' => 1011,
      'title' => 'CineLab SoundMix',
    ),
    1011 => 
    array (
      'id' => 1012,
      'title' => 'Кураж-Бамбей (двухголосый)',
    ),
    1012 => 
    array (
      'id' => 1013,
      'title' => 'Slavnus Spacedust (одноголосый)',
    ),
    1013 => 
    array (
      'id' => 1014,
      'title' => 'Середа Александр (одноголосый)',
    ),
    1014 => 
    array (
      'id' => 1015,
      'title' => 'BigSinema (многоголосый)',
    ),
    1015 => 
    array (
      'id' => 1016,
      'title' => 'Head Pack Films (многоголосый)',
    ),
    1016 => 
    array (
      'id' => 1017,
      'title' => 'Yuri The Professional (одноголосый)',
    ),
    1017 => 
    array (
      'id' => 1018,
      'title' => 'Сладкая парочка (двухголосый)',
    ),
    1018 => 
    array (
      'id' => 1019,
      'title' => 'АРК-ТВ Studio (двухголосый)',
    ),
    1019 => 
    array (
      'id' => 1020,
      'title' => 'Перец (многоголосый)',
    ),
    1020 => 
    array (
      'id' => 1021,
      'title' => 'ДТВ',
    ),
    1021 => 
    array (
      'id' => 1022,
      'title' => 'Smart\'s Studios (многоголосый)',
    ),
    1022 => 
    array (
      'id' => 1023,
      'title' => 'YoYo ТВ (двухголосый)',
    ),
    1023 => 
    array (
      'id' => 1024,
      'title' => 'ТВ5 (многоголосый)',
    ),
    1024 => 
    array (
      'id' => 1025,
      'title' => 'Okko (многоголосый)',
    ),
    1025 => 
    array (
      'id' => 1026,
      'title' => 'Ракурс (многоголосый)',
    ),
    1026 => 
    array (
      'id' => 1027,
      'title' => 'Парадиз (двухголосый)',
    ),
    1027 => 
    array (
      'id' => 1028,
      'title' => 'Лебедев Сергей (одноголосый)',
    ),
    1028 => 
    array (
      'id' => 1029,
      'title' => 'Ivnet Cinema & Elmago (многоголосый)',
    ),
    1029 => 
    array (
      'id' => 1030,
      'title' => 'Мельница',
    ),
    1030 => 
    array (
      'id' => 1031,
      'title' => 'Живаго Николай (одноголосый)',
    ),
    1031 => 
    array (
      'id' => 1032,
      'title' => 'AXN Sci-Fi (двухголосый)',
    ),
    1032 => 
    array (
      'id' => 1033,
      'title' => 'Формат А (многоголосый)',
    ),
    1033 => 
    array (
      'id' => 1034,
      'title' => 'AlisaDirilis (двухголосый)',
    ),
    1034 => 
    array (
      'id' => 1035,
      'title' => 'Ворон + SOVA (двухголосый)',
    ),
    1035 => 
    array (
      'id' => 1036,
      'title' => '1001cinema (одноголосый)',
    ),
    1036 => 
    array (
      'id' => 1037,
      'title' => '8 канал (многоголосый)',
    ),
    1037 => 
    array (
      'id' => 1038,
      'title' => 'Drunk As Fuck (одноголосый)',
    ),
    1038 => 
    array (
      'id' => 1039,
      'title' => 'Перец (двухголосый)',
    ),
    1039 => 
    array (
      'id' => 1040,
      'title' => 'Dentsu (многоголосый)',
    ),
    1040 => 
    array (
      'id' => 1041,
      'title' => 'Arkadiy (одноголосый)',
    ),
    1041 => 
    array (
      'id' => 1042,
      'title' => 'zaswer5 (одноголосый)',
    ),
    1042 => 
    array (
      'id' => 1043,
      'title' => 'Странные миры (двухголосый)',
    ),
    1043 => 
    array (
      'id' => 1044,
      'title' => 'Синица Сергей (одноголосый)',
    ),
    1044 => 
    array (
      'id' => 1045,
      'title' => 'Полное дублирование',
    ),
    1045 => 
    array (
      'id' => 1046,
      'title' => 'ГКГ (одноголосый)',
    ),
    1046 => 
    array (
      'id' => 1047,
      'title' => 'КиноПоиск HD (многоголосый)',
    ),
    1047 => 
    array (
      'id' => 1048,
      'title' => 'Yulia Rodger (одноголосый)',
    ),
    1048 => 
    array (
      'id' => 1049,
      'title' => 'mictemnoff (одноголосый)',
    ),
    1049 => 
    array (
      'id' => 1050,
      'title' => 'Любительский (одноголосый закадровый) (Fainna Deeva)',
    ),
    1050 => 
    array (
      'id' => 1051,
      'title' => 'Любительский (многоголосый закадровый) (АрхиAsia)',
    ),
    1051 => 
    array (
      'id' => 1052,
      'title' => 'Полное дублирование (CPI Films | СиПиАй Филмз)',
    ),
    1052 => 
    array (
      'id' => 1053,
      'title' => 'Профессиональный (многоголосый закадровый) (Online Movies)',
    ),
    1053 => 
    array (
      'id' => 1054,
      'title' => 'Любительский (двухголосый закадровый) (Pus\'ki Production)',
    ),
    1054 => 
    array (
      'id' => 1055,
      'title' => 'Полное дублирование (Парадиз)',
    ),
    1055 => 
    array (
      'id' => 1056,
      'title' => 'Полное дублирование (Сонотек)',
    ),
    1056 => 
    array (
      'id' => 1057,
      'title' => 'Любительский (одноголосый закадровый) (Иоселиани Отар)',
    ),
    1057 => 
    array (
      'id' => 1058,
      'title' => 'Профессиональный (многоголосый закадровый) (Шпиль-Груп)',
    ),
    1058 => 
    array (
      'id' => 1059,
      'title' => 'Полное дублирование (Велес)',
    ),
    1059 => 
    array (
      'id' => 1060,
      'title' => 'Полное дублирование (КиноПоиск HD)',
    ),
    1060 => 
    array (
      'id' => 1061,
      'title' => 'Профессиональный (многоголосый закадровый) (Парадиз)',
    ),
    1061 => 
    array (
      'id' => 1062,
      'title' => 'Любительский (двухголосый закадровый) (Head Pack Films)',
    ),
    1062 => 
    array (
      'id' => 1063,
      'title' => 'Полное дублирование (Pride Production)',
    ),
    1063 => 
    array (
      'id' => 1064,
      'title' => 'Любительский (одноголосый закадровый) (Horror Club)',
    ),
    1064 => 
    array (
      'id' => 1065,
      'title' => 'Профессиональный (многоголосый закадровый) (TVXXI)',
    ),
    1065 => 
    array (
      'id' => 1066,
      'title' => 'Полное дублирование (Позитив)',
    ),
    1066 => 
    array (
      'id' => 1067,
      'title' => 'Любительский (одноголосый закадровый) (R1shpil)',
    ),
    1067 => 
    array (
      'id' => 1068,
      'title' => 'Профессиональный (двухголосый закадровый) (SyFy)',
    ),
    1068 => 
    array (
      'id' => 1069,
      'title' => 'Любительский (одноголосый закадровый) (Мельников Константин)',
    ),
    1069 => 
    array (
      'id' => 1070,
      'title' => 'Профессиональный (двухголосый закадровый) (Фильмэкспорт)',
    ),
    1070 => 
    array (
      'id' => 1071,
      'title' => 'Любительский (одноголосый закадровый) (Клерик)',
    ),
    1071 => 
    array (
      'id' => 1072,
      'title' => 'Любительский (одноголосый закадровый) (Столяров Алекс)',
    ),
    1072 => 
    array (
      'id' => 1073,
      'title' => 'Любительский (одноголосый закадровый) (Kolobroad)',
    ),
    1073 => 
    array (
      'id' => 1074,
      'title' => 'Профессиональный (двухголосый закадровый) (Велес)',
    ),
    1074 => 
    array (
      'id' => 1075,
      'title' => 'Профессиональный (многоголосый закадровый) (Tonic Media)',
    ),
    1075 => 
    array (
      'id' => 1076,
      'title' => 'Профессиональный (двухголосый закадровый) (Videogram)',
    ),
    1076 => 
    array (
      'id' => 1077,
      'title' => 'Любительский (двухголосый закадровый) (Студия Пиратского Дубляжа)',
    ),
    1077 => 
    array (
      'id' => 1078,
      'title' => 'Полное дублирование (DA Records)',
    ),
    1078 => 
    array (
      'id' => 1079,
      'title' => 'Авторский (одноголосый закадровый) (Белов / Зереницын Сергей)',
    ),
    1079 => 
    array (
      'id' => 1080,
      'title' => 'Любительский (одноголосый закадровый) (Chesterfield)',
    ),
    1080 => 
    array (
      'id' => 1081,
      'title' => 'Профессиональный (многоголосый закадровый) (Force Media)',
    ),
    1081 => 
    array (
      'id' => 1082,
      'title' => 'Профессиональный (двухголосый закадровый) (ДиБи)',
    ),
    1082 => 
    array (
      'id' => 1083,
      'title' => 'Любительский (многоголосый закадровый) (Ivnet Cinema)',
    ),
    1083 => 
    array (
      'id' => 1084,
      'title' => 'Любительский (многоголосый закадровый) (Gramalant)',
    ),
    1084 => 
    array (
      'id' => 1085,
      'title' => 'Любительский (одноголосый закадровый) (Палата №6 | knopf)',
    ),
    1085 => 
    array (
      'id' => 1086,
      'title' => 'Профессиональный (многоголосый закадровый) (Рыжий пёс)',
    ),
    1086 => 
    array (
      'id' => 1087,
      'title' => 'Полное дублирование (Apple TV+)',
    ),
    1087 => 
    array (
      'id' => 1088,
      'title' => 'Полное дублирование (Akimbo Production)',
    ),
    1088 => 
    array (
      'id' => 1089,
      'title' => 'Профессиональный (многоголосый закадровый) (Сыендук)',
    ),
    1089 => 
    array (
      'id' => 1090,
      'title' => 'Любительский (двухголосый закадровый) (ССГ Озвучка)',
    ),
    1090 => 
    array (
      'id' => 1091,
      'title' => 'Полное дублирование (Фортуна-Фильм)',
    ),
    1091 => 
    array (
      'id' => 1092,
      'title' => 'Профессиональный (многоголосый закадровый) (Premier Digital)',
    ),
    1092 => 
    array (
      'id' => 1093,
      'title' => 'Любительский (двухголосый закадровый) (W³: voices)',
    ),
    1093 => 
    array (
      'id' => 1094,
      'title' => 'Любительский (одноголосый закадровый) (mangeim)',
    ),
    1094 => 
    array (
      'id' => 1095,
      'title' => 'Любительский (двухголосый закадровый) (FSG Phoenixes)',
    ),
    1095 => 
    array (
      'id' => 1096,
      'title' => 'Профессиональный (одноголосый закадровый) (Инис)',
    ),
    1096 => 
    array (
      'id' => 1097,
      'title' => 'Профессиональный (многоголосый закадровый) (DabLab)',
    ),
    1097 => 
    array (
      'id' => 1098,
      'title' => 'Любительский (двухголосый закадровый) (Синема УС)',
    ),
    1098 => 
    array (
      'id' => 1099,
      'title' => 'Любительский (многоголосый закадровый) (Точка Zрения)',
    ),
    1099 => 
    array (
      'id' => 1100,
      'title' => 'Любительский (одноголосый закадровый) (Ч.Б.)',
    ),
    1100 => 
    array (
      'id' => 1101,
      'title' => 'Любительский (одноголосый закадровый) (Apofys)',
    ),
    1101 => 
    array (
      'id' => 1102,
      'title' => 'Любительский (двухголосый закадровый) (Tomas&Minami)',
    ),
    1102 => 
    array (
      'id' => 1103,
      'title' => 'Профессиональный (многоголосый закадровый) (Прайд Продакшн | Pride Production)',
    ),
    1103 => 
    array (
      'id' => 1104,
      'title' => 'Любительский (одноголосый закадровый) (W³: voices)',
    ),
    1104 => 
    array (
      'id' => 1105,
      'title' => 'Любительский (двухголосый закадровый) (WeTV Russian)',
    ),
    1105 => 
    array (
      'id' => 1106,
      'title' => 'Любительский (одноголосый закадровый) (Харченко Александр)',
    ),
    1106 => 
    array (
      'id' => 1107,
      'title' => 'Полное дублирование (ТО Дия)',
    ),
    1107 => 
    array (
      'id' => 1108,
      'title' => 'Профессиональный (многоголосый закадровый) (Гланц и компания)',
    ),
    1108 => 
    array (
      'id' => 1109,
      'title' => 'Полное дублирование (SoulPro)',
    ),
    1109 => 
    array (
      'id' => 1110,
      'title' => 'Любительский (одноголосый закадровый) (Химеров Вадим)',
    ),
    1110 => 
    array (
      'id' => 1111,
      'title' => 'Любительский (двухголосый закадровый) (Huace TV)',
    ),
    1111 => 
    array (
      'id' => 1112,
      'title' => 'Профессиональный (многоголосый закадровый) (Нарышкин)',
    ),
    1112 => 
    array (
      'id' => 1113,
      'title' => 'Профессиональный (многоголосый закадровый) (Амир)',
    ),
    1113 => 
    array (
      'id' => 1114,
      'title' => 'Полное дублирование (Инис)',
    ),
    1114 => 
    array (
      'id' => 1115,
      'title' => 'Любительский (одноголосый закадровый) (Степанов Игорь)',
    ),
    1115 => 
    array (
      'id' => 1116,
      'title' => 'Профессиональный (многоголосый закадровый) (Disney Channel)',
    ),
    1116 => 
    array (
      'id' => 1117,
      'title' => 'Любительский (многоголосый закадровый) (Rattlebox)',
    ),
    1117 => 
    array (
      'id' => 1118,
      'title' => 'Полное дублирование (CPIG | Central Production International Group)',
    ),
    1118 => 
    array (
      'id' => 1119,
      'title' => 'Любительский (двухголосый закадровый) (NewTV Russian)',
    ),
    1119 => 
    array (
      'id' => 1120,
      'title' => 'Любительский (одноголосый закадровый) (Гейкиногид)',
    ),
    1120 => 
    array (
      'id' => 1121,
      'title' => 'Любительский (одноголосый закадровый) (WeTV Russian)',
    ),
    1121 => 
    array (
      'id' => 1122,
      'title' => 'Любительский (одноголосый закадровый) (vasaer-visanti)',
    ),
    1122 => 
    array (
      'id' => 1123,
      'title' => 'Профессиональный (двухголосый закадровый) (ИДДК)',
    ),
    1123 => 
    array (
      'id' => 1124,
      'title' => 'Любительский (многоголосый закадровый) (Pus\'ki Production)',
    ),
    1124 => 
    array (
      'id' => 1125,
      'title' => 'Профессиональный (многоголосый закадровый) (Камер-Тон)',
    ),
    1125 => 
    array (
      'id' => 1126,
      'title' => 'Любительский (одноголосый закадровый) (КетчупТВ)',
    ),
    1126 => 
    array (
      'id' => 1127,
      'title' => 'Любительский (одноголосый закадровый) (Osbe)',
    ),
    1127 => 
    array (
      'id' => 1128,
      'title' => 'Любительский (многоголосый закадровый) (Flux-Team и Tomas&Minami)',
    ),
    1128 => 
    array (
      'id' => 1129,
      'title' => 'Любительский (одноголосый закадровый) (Sonata)',
    ),
    1129 => 
    array (
      'id' => 1130,
      'title' => 'Любительский (двухголосый закадровый) (Kedra & Hydra)',
    ),
    1130 => 
    array (
      'id' => 1131,
      'title' => 'Любительский (одноголосый закадровый) (Yuki.Stereo)',
    ),
    1131 => 
    array (
      'id' => 1132,
      'title' => 'Профессиональный (двухголосый закадровый) (Настроение Видео)',
    ),
    1132 => 
    array (
      'id' => 1133,
      'title' => 'Любительский (многоголосый закадровый) (Fronda Studio)',
    ),
    1133 => 
    array (
      'id' => 1134,
      'title' => 'Профессиональный (двухголосый закадровый) (SomeWax)',
    ),
    1134 => 
    array (
      'id' => 1135,
      'title' => 'Любительский (одноголосый закадровый) (Screadow)',
    ),
    1135 => 
    array (
      'id' => 1136,
      'title' => 'Любительский (двухголосый закадровый) (Дораманутая и NSYNC)',
    ),
    1136 => 
    array (
      'id' => 1137,
      'title' => 'Любительский (многоголосый закадровый) (HMP Production)',
    ),
    1137 => 
    array (
      'id' => 1138,
      'title' => '[PT] Полное дублирование (Portugues)',
    ),
    1138 => 
    array (
      'id' => 1139,
      'title' => 'Любительский (многоголосый закадровый) (MIN-Dub Studio)',
    ),
    1139 => 
    array (
      'id' => 1140,
      'title' => 'Профессиональный (многоголосый закадровый) (Image Art)',
    ),
    1140 => 
    array (
      'id' => 1141,
      'title' => 'Любительский (многоголосый закадровый) (Shadow Dub Project)',
    ),
    1141 => 
    array (
      'id' => 1142,
      'title' => 'Любительский (многоголосый закадровый) (W³: voices)',
    ),
    1142 => 
    array (
      'id' => 1143,
      'title' => 'Любительский (одноголосый закадровый) (Тим Вагнер)',
    ),
    1143 => 
    array (
      'id' => 1144,
      'title' => 'Любительский (двухголосый закадровый) (Студия актуального кино)',
    ),
    1144 => 
    array (
      'id' => 1145,
      'title' => 'Профессиональный (многоголосый закадровый) (Матч)',
    ),
    1145 => 
    array (
      'id' => 1146,
      'title' => 'Любительский (одноголосый закадровый) (ИндивИдуалист)',
    ),
    1146 => 
    array (
      'id' => 1147,
      'title' => 'Профессиональный (двухголосый закадровый) (Петербург ТРК)',
    ),
    1147 => 
    array (
      'id' => 1148,
      'title' => 'Любительский (одноголосый закадровый) (Shangu)',
    ),
    1148 => 
    array (
      'id' => 1149,
      'title' => '[PT] Original (Portugues)',
    ),
    1149 => 
    array (
      'id' => 1150,
      'title' => 'Профессиональный (двухголосый закадровый) (Неоклассика)',
    ),
    1150 => 
    array (
      'id' => 1151,
      'title' => 'Профессиональный (двухголосый закадровый) (НТН)',
    ),
    1151 => 
    array (
      'id' => 1152,
      'title' => 'Любительский (двухголосый закадровый) (XDUB Dorama + Колобок)',
    ),
    1152 => 
    array (
      'id' => 1153,
      'title' => 'Любительский (двухголосый закадровый) (Гейкиногид)',
    ),
    1153 => 
    array (
      'id' => 1154,
      'title' => 'Любительский (одноголосый закадровый) (JustDub)',
    ),
    1154 => 
    array (
      'id' => 1155,
      'title' => 'Любительский (многоголосый закадровый) (FSG Phoenixes)',
    ),
    1155 => 
    array (
      'id' => 1156,
      'title' => 'Полное дублирование (BTI Studios + Нота)',
    ),
    1156 => 
    array (
      'id' => 1157,
      'title' => 'Профессиональный (двухголосый закадровый) (Триада-фильм)',
    ),
    1157 => 
    array (
      'id' => 1158,
      'title' => 'Любительский (двухголосый закадровый) (Twix)',
    ),
    1158 => 
    array (
      'id' => 1159,
      'title' => 'Полное дублирование (KION)',
    ),
    1159 => 
    array (
      'id' => 1160,
      'title' => 'Любительский (одноголосый закадровый) (Paul B. | Павлов Ф.)',
    ),
    1160 => 
    array (
      'id' => 1161,
      'title' => 'Любительский (двухголосый закадровый) (X-Voice Studio)',
    ),
    1161 => 
    array (
      'id' => 1162,
      'title' => 'Профессиональный (многоголосый закадровый) (Марафон)',
    ),
    1162 => 
    array (
      'id' => 1163,
      'title' => 'Профессиональный (двухголосый закадровый) (Netflix)',
    ),
    1163 => 
    array (
      'id' => 1164,
      'title' => 'Любительский (многоголосый закадровый) (GoLTFilm)',
    ),
    1164 => 
    array (
      'id' => 1165,
      'title' => 'Любительский (двухголосый закадровый) (Ворон + Элейн)',
    ),
    1165 => 
    array (
      'id' => 1166,
      'title' => 'Любительский (двухголосый закадровый) (Arasi Project)',
    ),
    1166 => 
    array (
      'id' => 1167,
      'title' => 'Профессиональный (двухголосый закадровый) (Пирамида | Pyramid)',
    ),
    1167 => 
    array (
      'id' => 1168,
      'title' => 'Любительский (одноголосый закадровый) (Delonnn)',
    ),
    1168 => 
    array (
      'id' => 1169,
      'title' => 'Любительский (одноголосый закадровый) (Perevodman | Переводман)',
    ),
    1169 => 
    array (
      'id' => 1170,
      'title' => 'Профессиональный (многоголосый закадровый) (Triumph Video)',
    ),
    1170 => 
    array (
      'id' => 1171,
      'title' => 'Профессиональный (двухголосый закадровый) (Сыендук Дима и Чабан Лиза)',
    ),
    1171 => 
    array (
      'id' => 1172,
      'title' => 'Полное дублирование (Синхрон)',
    ),
    1172 => 
    array (
      'id' => 1173,
      'title' => 'Полное дублирование (Союз работников дубляжа)',
    ),
    1173 => 
    array (
      'id' => 1174,
      'title' => 'Любительский (одноголосый закадровый) (Дораманутая)',
    ),
    1174 => 
    array (
      'id' => 1175,
      'title' => 'Любительский (одноголосый закадровый) (YoYo ТВ)',
    ),
    1175 => 
    array (
      'id' => 1176,
      'title' => 'Профессиональный (многоголосый закадровый) (Баритон)',
    ),
    1176 => 
    array (
      'id' => 1177,
      'title' => 'Любительский (двухголосый закадровый) (Exa)',
    ),
    1177 => 
    array (
      'id' => 1178,
      'title' => 'Профессиональный (двухголосый закадровый) (IVI)',
    ),
    1178 => 
    array (
      'id' => 1179,
      'title' => 'Любительский (многоголосый закадровый) (Albion Studio)',
    ),
    1179 => 
    array (
      'id' => 1180,
      'title' => 'Полное дублирование (Plan B)',
    ),
    1180 => 
    array (
      'id' => 1181,
      'title' => '[JP] Original (Japanese)',
    ),
    1181 => 
    array (
      'id' => 1182,
      'title' => 'Профессиональный (многоголосый закадровый) (Shot TV)',
    ),
    1182 => 
    array (
      'id' => 1183,
      'title' => '[UA] Профессиональный (многоголосый закадровый) (Украинский) (HDrezka Studio)',
    ),
    1183 => 
    array (
      'id' => 1184,
      'title' => 'Любительский (многоголосый закадровый) (KiraiMedia)',
    ),
    1184 => 
    array (
      'id' => 1185,
      'title' => '[FR] Original (French)',
    ),
    1185 => 
    array (
      'id' => 1186,
      'title' => '[ES] Original (Spanish)',
    ),
    1186 => 
    array (
      'id' => 1187,
      'title' => 'Любительский (одноголосый закадровый) (Гирон Виталий | kinoman88)',
    ),
    1187 => 
    array (
      'id' => 1188,
      'title' => 'Любительский (двухголосый закадровый) (Kumao Group)',
    ),
    1188 => 
    array (
      'id' => 1189,
      'title' => 'Любительский (одноголосый закадровый) (pandoctor)',
    ),
    1189 => 
    array (
      'id' => 1190,
      'title' => 'Любительский (двухголосый закадровый) (HMP Production)',
    ),
    1190 => 
    array (
      'id' => 1191,
      'title' => 'Любительский (одноголосый закадровый) (Мыльные оперы Турции)',
    ),
    1191 => 
    array (
      'id' => 1192,
      'title' => 'Любительский (одноголосый закадровый) (АрхиAsia)',
    ),
    1192 => 
    array (
      'id' => 1193,
      'title' => 'Любительский (многоголосый закадровый) (TeslaRec)',
    ),
    1193 => 
    array (
      'id' => 1194,
      'title' => 'Любительский (двухголосый закадровый) (Anything Group)',
    ),
    1194 => 
    array (
      'id' => 1195,
      'title' => 'Профессиональный (одноголосый закадровый) (Киностудия им. Горького)',
    ),
    1195 => 
    array (
      'id' => 1196,
      'title' => 'Профессиональный (двухголосый закадровый) (Paramount Comedy)',
    ),
    1196 => 
    array (
      'id' => 1197,
      'title' => 'Любительский (одноголосый закадровый) (uhtyshk)',
    ),
    1197 => 
    array (
      'id' => 1198,
      'title' => 'Полное дублирование (Vox Records)',
    ),
    1198 => 
    array (
      'id' => 1199,
      'title' => '[UA] Профессиональный (многоголосый закадровый) (Украинский)',
    ),
    1199 => 
    array (
      'id' => 1200,
      'title' => 'Полное дублирование (Баритон)',
    ),
    1200 => 
    array (
      'id' => 1201,
      'title' => 'Любительский (одноголосый закадровый) (Мария Аскольта)',
    ),
    1201 => 
    array (
      'id' => 1202,
      'title' => 'Любительский (многоголосый закадровый) (ZeroVoice)',
    ),
    1202 => 
    array (
      'id' => 1203,
      'title' => 'Любительский (одноголосый закадровый) (MixFilm)',
    ),
    1203 => 
    array (
      'id' => 1204,
      'title' => 'Профессиональный (многоголосый закадровый) (Иллюзион+)',
    ),
    1204 => 
    array (
      'id' => 1205,
      'title' => 'Любительский (двухголосый закадровый) (Чип и Дейл)',
    ),
    1205 => 
    array (
      'id' => 1206,
      'title' => 'Любительский (двухголосый закадровый) (MIN-Dub Studio)',
    ),
    1206 => 
    array (
      'id' => 1207,
      'title' => 'Профессиональный (двухголосый закадровый) (Кинопоказ)',
    ),
    1207 => 
    array (
      'id' => 1208,
      'title' => 'Профессиональный (одноголосый закадровый) (Другое кино)',
    ),
    1208 => 
    array (
      'id' => 1209,
      'title' => '[DE] Original (German)',
    ),
    1209 => 
    array (
      'id' => 1210,
      'title' => 'Профессиональный (одноголосый закадровый) (ViruseProject)',
    ),
    1210 => 
    array (
      'id' => 1211,
      'title' => 'Любительский (двухголосый закадровый) (Your Dream)',
    ),
    1211 => 
    array (
      'id' => 1212,
      'title' => 'Полное дублирование (Арт-Дубляж)',
    ),
    1212 => 
    array (
      'id' => 1213,
      'title' => 'Любительский (одноголосый закадровый) (GreatGroup)',
    ),
    1213 => 
    array (
      'id' => 1214,
      'title' => 'Любительский (двухголосый закадровый) (Savetig Studios)',
    ),
    1214 => 
    array (
      'id' => 1215,
      'title' => 'Любительский (одноголосый закадровый) (Гончаренко Сергей)',
    ),
    1215 => 
    array (
      'id' => 1216,
      'title' => 'Любительский (одноголосый закадровый) (Kiriana)',
    ),
    1216 => 
    array (
      'id' => 1217,
      'title' => 'Профессиональный (многоголосый закадровый) (LineFilm)',
    ),
    1217 => 
    array (
      'id' => 1218,
      'title' => 'Полное дублирование (DVD Group)',
    ),
    1218 => 
    array (
      'id' => 1219,
      'title' => 'Полное дублирование (UMP/GFS)',
    ),
    1219 => 
    array (
      'id' => 1220,
      'title' => 'Профессиональный (двухголосый закадровый) (Норд видеофильм | Nord Videofilm)',
    ),
    1220 => 
    array (
      'id' => 1221,
      'title' => 'Любительский (двухголосый закадровый) (Дораманутая)',
    ),
    1221 => 
    array (
      'id' => 1222,
      'title' => 'Любительский (двухголосый закадровый) (AniMaunt)',
    ),
    1222 => 
    array (
      'id' => 1223,
      'title' => 'Полное дублирование (okko)',
    ),
    1223 => 
    array (
      'id' => 1224,
      'title' => 'Любительский (двухголосый закадровый) (Точка Zрения)',
    ),
    1224 => 
    array (
      'id' => 1225,
      'title' => 'Любительский (одноголосый закадровый) (Neko)',
    ),
    1225 => 
    array (
      'id' => 1226,
      'title' => 'Профессиональный (многоголосый закадровый) (СВ-Кадр)',
    ),
    1226 => 
    array (
      'id' => 1227,
      'title' => 'Любительский (одноголосый закадровый) (ProjektorShow)',
    ),
    1227 => 
    array (
      'id' => 1228,
      'title' => 'Профессиональный (многоголосый закадровый) (Rvision)',
    ),
    1228 => 
    array (
      'id' => 1229,
      'title' => 'Любительский (одноголосый закадровый) (Myau myau)',
    ),
    1229 => 
    array (
      'id' => 1230,
      'title' => 'Профессиональный (двухголосый закадровый) (Сезам видео)',
    ),
    1230 => 
    array (
      'id' => 1231,
      'title' => 'Любительский (двухголосый закадровый) (To4ka)',
    ),
    1231 => 
    array (
      'id' => 1232,
      'title' => 'Профессиональный (многоголосый закадровый) (Белый слон)',
    ),
    1232 => 
    array (
      'id' => 1233,
      'title' => '[UA] Полное дублирование (Украинский)',
    ),
    1233 => 
    array (
      'id' => 1234,
      'title' => 'Профессиональный (многоголосый закадровый) (Прим)',
    ),
    1234 => 
    array (
      'id' => 1235,
      'title' => 'Любительский (двухголосый закадровый) (Паровоз Продакшн | Parovoz Production)',
    ),
    1235 => 
    array (
      'id' => 1236,
      'title' => '[KR] Original (Korean)',
    ),
    1236 => 
    array (
      'id' => 1237,
      'title' => 'Профессиональный (многоголосый закадровый) (Феникс-клуб)',
    ),
    1237 => 
    array (
      'id' => 1238,
      'title' => '[IT] Original (Italian)',
    ),
    1238 => 
    array (
      'id' => 1239,
      'title' => 'Профессиональный (многоголосый закадровый) (In-Voice)',
    ),
    1239 => 
    array (
      'id' => 1240,
      'title' => '[CN] Original (Chinese)',
    ),
    1240 => 
    array (
      'id' => 1241,
      'title' => 'Профессиональный (многоголосый закадровый) (24ДОК | 24DOC)',
    ),
    1241 => 
    array (
      'id' => 1242,
      'title' => '[EN] Полное дублирование (English)',
    ),
    1242 => 
    array (
      'id' => 1243,
      'title' => 'Полное дублирование (Red Head Sound)',
    ),
    1243 => 
    array (
      'id' => 1244,
      'title' => '[PL] Любительский (двухголосый закадровый) (Polish)',
    ),
    1244 => 
    array (
      'id' => 1245,
      'title' => '[PL] Полное дублирование (Polish)',
    ),
    1245 => 
    array (
      'id' => 1246,
      'title' => 'Любительский (одноголосый закадровый) (Открытый космос)',
    ),
    1246 => 
    array (
      'id' => 1247,
      'title' => 'Любительский (двухголосый закадровый) (RAIM & NASTR)',
    ),
    1247 => 
    array (
      'id' => 1248,
      'title' => 'Любительский (одноголосый закадровый) (Jetvis Studio)',
    ),
    1248 => 
    array (
      'id' => 1249,
      'title' => 'Любительский (одноголосый закадровый) (DiO Production)',
    ),
    1249 => 
    array (
      'id' => 1250,
      'title' => 'Любительский (двухголосый закадровый) (Q-Media)',
    ),
    1250 => 
    array (
      'id' => 1251,
      'title' => 'Полное дублирование (Нарышкин)',
    ),
    1251 => 
    array (
      'id' => 1252,
      'title' => 'Любительский (одноголосый закадровый) (Заводной Пёс)',
    ),
    1252 => 
    array (
      'id' => 1253,
      'title' => 'Профессиональный (одноголосый закадровый) (Союз Видео)',
    ),
    1253 => 
    array (
      'id' => 1254,
      'title' => 'Любительский (многоголосый закадровый) (RealFake)',
    ),
    1254 => 
    array (
      'id' => 1255,
      'title' => 'Любительский (одноголосый закадровый) (Cyrmaran)',
    ),
    1255 => 
    array (
      'id' => 1256,
      'title' => 'Любительский (многоголосый закадровый) (Home Studio)',
    ),
    1256 => 
    array (
      'id' => 1257,
      'title' => 'Полное дублирование (Voize)',
    ),
    1257 => 
    array (
      'id' => 1258,
      'title' => 'Любительский (двухголосый закадровый) (Данилов Владислав + Гаврилова Екатерина)',
    ),
    1258 => 
    array (
      'id' => 1259,
      'title' => 'Любительский (многоголосый закадровый) (F-TRAIN)',
    ),
    1259 => 
    array (
      'id' => 1260,
      'title' => 'Профессиональный (одноголосый закадровый) (Кириллица)',
    ),
    1260 => 
    array (
      'id' => 1261,
      'title' => 'Профессиональный (одноголосый закадровый) (Арена)',
    ),
    1261 => 
    array (
      'id' => 1262,
      'title' => 'Любительский (одноголосый закадровый) (BraveSound)',
    ),
    1262 => 
    array (
      'id' => 1263,
      'title' => 'Профессиональный (многоголосый закадровый) (RuDub)',
    ),
    1263 => 
    array (
      'id' => 1264,
      'title' => 'Любительский (одноголосый закадровый) (Light Breeze)',
    ),
    1264 => 
    array (
      'id' => 1265,
      'title' => 'Любительский (одноголосый закадровый) (FSG Phoenixes)',
    ),
    1265 => 
    array (
      'id' => 1266,
      'title' => 'Любительский (одноголосый закадровый) (Daniel Jackson)',
    ),
    1266 => 
    array (
      'id' => 1267,
      'title' => 'Любительский (одноголосый закадровый) (Толмачев Алексей)',
    ),
    1267 => 
    array (
      'id' => 1268,
      'title' => '[PL] Original (Polish)',
    ),
    1268 => 
    array (
      'id' => 1269,
      'title' => 'Любительский (одноголосый закадровый) (Arasi Project)',
    ),
    1269 => 
    array (
      'id' => 1270,
      'title' => 'Любительский (одноголосый закадровый) (Персанов Владислав)',
    ),
    1270 => 
    array (
      'id' => 1271,
      'title' => 'Профессиональный (двухголосый закадровый) (Новый диск)',
    ),
    1271 => 
    array (
      'id' => 1272,
      'title' => 'Полное дублирование (АРК-ТВ & VSI Moscow)',
    ),
    1272 => 
    array (
      'id' => 1273,
      'title' => 'Любительский (одноголосый закадровый) (Your Dream)',
    ),
    1273 => 
    array (
      'id' => 1274,
      'title' => 'Профессиональный (многоголосый закадровый) (Викинг видео | Viking Video)',
    ),
    1274 => 
    array (
      'id' => 1275,
      'title' => 'Любительский (двухголосый закадровый) (Jade Studio)',
    ),
    1275 => 
    array (
      'id' => 1276,
      'title' => 'Профессиональный (многоголосый закадровый) (MGM Russia)',
    ),
    1276 => 
    array (
      'id' => 1277,
      'title' => 'Профессиональный (многоголосый закадровый) (ТонВокс | ToneVox)',
    ),
    1277 => 
    array (
      'id' => 1278,
      'title' => 'Любительский (одноголосый закадровый) (Суслин Дмитрий)',
    ),
    1278 => 
    array (
      'id' => 1279,
      'title' => 'Профессиональный (многоголосый закадровый) (Промо-Кино)',
    ),
    1279 => 
    array (
      'id' => 1280,
      'title' => 'Любительский (одноголосый закадровый) (Sound-Group)',
    ),
    1280 => 
    array (
      'id' => 1281,
      'title' => 'Любительский (одноголосый закадровый) (Mantis)',
    ),
    1281 => 
    array (
      'id' => 1282,
      'title' => 'Любительский (двухголосый закадровый) (AniPlay Studio)',
    ),
    1282 => 
    array (
      'id' => 1283,
      'title' => 'Профессиональный (многоголосый закадровый) (SoulPro)',
    ),
    1283 => 
    array (
      'id' => 1284,
      'title' => 'Любительский (одноголосый закадровый) (Петербургский видеосалон)',
    ),
    1284 => 
    array (
      'id' => 1285,
      'title' => 'Любительский (многоголосый закадровый) (JustDub)',
    ),
    1285 => 
    array (
      'id' => 1286,
      'title' => 'Любительский (одноголосый закадровый) (Омега)',
    ),
    1286 => 
    array (
      'id' => 1287,
      'title' => 'Любительский (двухголосый закадровый) (AniDUB + Sound-Group)',
    ),
    1287 => 
    array (
      'id' => 1288,
      'title' => '[IN] Original (Hindi)',
    ),
    1288 => 
    array (
      'id' => 1289,
      'title' => 'Любительский (одноголосый закадровый) (ZeroVoice)',
    ),
    1289 => 
    array (
      'id' => 1290,
      'title' => 'Любительский (одноголосый закадровый) (giveaway)',
    ),
    1290 => 
    array (
      'id' => 1291,
      'title' => 'Полное дублирование (CGTN Русский)',
    ),
    1291 => 
    array (
      'id' => 1292,
      'title' => 'Любительский (двухголосый закадровый) (datynet & Мия)',
    ),
    1292 => 
    array (
      'id' => 1293,
      'title' => 'Профессиональный (двухголосый закадровый) (Lizard Cinema)',
    ),
    1293 => 
    array (
      'id' => 1294,
      'title' => 'Полное дублирование (ZeroVoice)',
    ),
    1294 => 
    array (
      'id' => 1295,
      'title' => 'Любительский (одноголосый закадровый) (Гундос)',
    ),
    1295 => 
    array (
      'id' => 1296,
      'title' => 'Профессиональный (одноголосый закадровый) (Тэкс Сергей)',
    ),
    1296 => 
    array (
      'id' => 1297,
      'title' => 'Профессиональный (двухголосый закадровый) (Комедия ТВ)',
    ),
    1297 => 
    array (
      'id' => 1298,
      'title' => 'Любительский (двухголосый закадровый) (SagiTtarius)',
    ),
    1298 => 
    array (
      'id' => 1299,
      'title' => 'Профессиональный (многоголосый закадровый) (Lion\'s Studio)',
    ),
    1299 => 
    array (
      'id' => 1300,
      'title' => 'Профессиональный (двухголосый закадровый) (Синема Трейд | Cinema Trade)',
    ),
    1300 => 
    array (
      'id' => 1301,
      'title' => 'Любительский (одноголосый закадровый) (Studio Imran)',
    ),
    1301 => 
    array (
      'id' => 1302,
      'title' => 'Профессиональный (многоголосый закадровый) (31 канал)',
    ),
    1302 => 
    array (
      'id' => 1303,
      'title' => 'Профессиональный (многоголосый закадровый) (Элегия фильм)',
    ),
    1303 => 
    array (
      'id' => 1304,
      'title' => 'Профессиональный (многоголосый закадровый) (Futuroom | Футурум)',
    ),
    1304 => 
    array (
      'id' => 1305,
      'title' => 'Профессиональный (одноголосый закадровый) (Невафильм | Нева-1)',
    ),
    1305 => 
    array (
      'id' => 1306,
      'title' => 'Любительский (одноголосый закадровый) (BMIRussian)',
    ),
    1306 => 
    array (
      'id' => 1307,
      'title' => 'Профессиональный (многоголосый закадровый) (Paradise Digital)',
    ),
    1307 => 
    array (
      'id' => 1308,
      'title' => 'Профессиональный (двухголосый закадровый) (Лексикон)',
    ),
    1308 => 
    array (
      'id' => 1309,
      'title' => 'Профессиональный (многоголосый закадровый) (ТК Хузур)',
    ),
    1309 => 
    array (
      'id' => 1310,
      'title' => 'Любительский (многоголосый закадровый) (J&N Union)',
    ),
    1310 => 
    array (
      'id' => 1311,
      'title' => 'Любительский (одноголосый закадровый) (Ганичев Ростислав)',
    ),
    1311 => 
    array (
      'id' => 1312,
      'title' => 'Любительский (многоголосый закадровый) (DeadLine Studio)',
    ),
    1312 => 
    array (
      'id' => 1313,
      'title' => 'Любительский (двухголосый закадровый) (CactusTeam)',
    ),
    1313 => 
    array (
      'id' => 1314,
      'title' => 'Любительский (одноголосый закадровый) (Перлов Александр)',
    ),
    1314 => 
    array (
      'id' => 1315,
      'title' => 'Профессиональный (многоголосый закадровый) (Еврокино)',
    ),
    1315 => 
    array (
      'id' => 1316,
      'title' => 'Полное дублирование (Shot TV)',
    ),
    1316 => 
    array (
      'id' => 1317,
      'title' => 'Профессиональный (двухголосый закадровый) (Эстет-ТВ)',
    ),
    1317 => 
    array (
      'id' => 1318,
      'title' => 'Любительский (одноголосый закадровый) (Rattlebox)',
    ),
    1318 => 
    array (
      'id' => 1319,
      'title' => 'Профессиональный (двухголосый закадровый) (АСГ Видео)',
    ),
    1319 => 
    array (
      'id' => 1320,
      'title' => 'Профессиональный (двухголосый закадровый) (Эгоист ТВ)',
    ),
    1320 => 
    array (
      'id' => 1321,
      'title' => 'Профессиональный (одноголосый закадровый) (Эстет-ТВ)',
    ),
    1321 => 
    array (
      'id' => 1322,
      'title' => 'Профессиональный (одноголосый закадровый) (Cinema Prestige)',
    ),
    1322 => 
    array (
      'id' => 1323,
      'title' => 'Профессиональный (двухголосый закадровый) (Kino Polska)',
    ),
    1323 => 
    array (
      'id' => 1324,
      'title' => 'Любительский (одноголосый закадровый) (Войнер Григорий)',
    ),
    1324 => 
    array (
      'id' => 1325,
      'title' => 'Профессиональный (двухголосый закадровый) (Shot TV)',
    ),
    1325 => 
    array (
      'id' => 1326,
      'title' => 'Любительский (двухголосый закадровый) (Водяной Александр + Лысенчук Богдан)',
    ),
    1326 => 
    array (
      'id' => 1327,
      'title' => 'Любительский (одноголосый закадровый) (ralf124c41+)',
    ),
    1327 => 
    array (
      'id' => 1328,
      'title' => 'Полное дублирование (Пекин)',
    ),
    1328 => 
    array (
      'id' => 1329,
      'title' => 'Профессиональный (многоголосый закадровый) (UMP/GFS)',
    ),
    1329 => 
    array (
      'id' => 1330,
      'title' => 'Профессиональный (одноголосый закадровый) (Shot TV)',
    ),
    1330 => 
    array (
      'id' => 1331,
      'title' => 'Профессиональный (двухголосый закадровый) (SET Russia | Sony Entertainment Television)',
    ),
    1331 => 
    array (
      'id' => 1332,
      'title' => 'Профессиональный (многоголосый закадровый) (Red Head Sound)',
    ),
    1332 => 
    array (
      'id' => 1333,
      'title' => 'Профессиональный (двухголосый закадровый) (М1 | Первый Московский)',
    ),
    1333 => 
    array (
      'id' => 1334,
      'title' => 'Любительский (одноголосый закадровый) (ALEKS KV)',
    ),
    1334 => 
    array (
      'id' => 1335,
      'title' => 'Полное дублирование (6-й канал СПб)',
    ),
    1335 => 
    array (
      'id' => 1336,
      'title' => 'Профессиональный (двухголосый закадровый) (Omskbird records)',
    ),
    1336 => 
    array (
      'id' => 1337,
      'title' => 'Любительский (многоголосый закадровый) (In Voice inc.)',
    ),
    1337 => 
    array (
      'id' => 1338,
      'title' => 'Любительский (одноголосый закадровый) (Kirill Ivanov)',
    ),
    1338 => 
    array (
      'id' => 1339,
      'title' => 'Профессиональный (двухголосый закадровый) (Кубик в Кубе | Kubik³ 18+)',
    ),
    1339 => 
    array (
      'id' => 1340,
      'title' => 'Любительский (многоголосый закадровый) (Причудики)',
    ),
    1340 => 
    array (
      'id' => 1341,
      'title' => 'Любительский (одноголосый закадровый) (kosmos87)',
    ),
    1341 => 
    array (
      'id' => 1342,
      'title' => 'Любительский (двухголосый закадровый) (RedProlet)',
    ),
    1342 => 
    array (
      'id' => 1343,
      'title' => 'Любительский (одноголосый закадровый) (humbert sound studio)',
    ),
    1343 => 
    array (
      'id' => 1344,
      'title' => 'Любительский (одноголосый закадровый) (beni_birakma)',
    ),
    1344 => 
    array (
      'id' => 1345,
      'title' => 'Полное дублирование (Русский Бестселлер)',
    ),
    1345 => 
    array (
      'id' => 1346,
      'title' => 'Профессиональный (многоголосый закадровый) (Time Media Group)',
    ),
    1346 => 
    array (
      'id' => 1347,
      'title' => 'Любительский (двухголосый закадровый) (GoldFilm)',
    ),
    1347 => 
    array (
      'id' => 1348,
      'title' => 'Полное дублирование (Bravo Records Georgia)',
    ),
    1348 => 
    array (
      'id' => 1349,
      'title' => 'Любительский (одноголосый закадровый) (almoner)',
    ),
    1349 => 
    array (
      'id' => 1350,
      'title' => 'Полное дублирование (Суббота!)',
    ),
    1350 => 
    array (
      'id' => 1351,
      'title' => 'Любительский (двухголосый закадровый) (Soderling + HeavyBlozar)',
    ),
    1351 => 
    array (
      'id' => 1352,
      'title' => 'Любительский (многоголосый закадровый) (Sunny-Films)',
    ),
    1352 => 
    array (
      'id' => 1353,
      'title' => 'Любительский (двухголосый закадровый) (shachter58 + Лидия Максимова)',
    ),
    1353 => 
    array (
      'id' => 1354,
      'title' => 'Полное дублирование (Саунд МФ)',
    ),
    1354 => 
    array (
      'id' => 1355,
      'title' => 'Любительский (одноголосый закадровый) (ilyas2551)',
    ),
    1355 => 
    array (
      'id' => 1356,
      'title' => 'Любительский (одноголосый закадровый) (shachter58)',
    ),
    1356 => 
    array (
      'id' => 1357,
      'title' => 'Профессиональный (одноголосый закадровый) (Триада-фильм)',
    ),
    1357 => 
    array (
      'id' => 1358,
      'title' => 'Любительский (одноголосый закадровый) (Папсуев Валентин | Нигериец)',
    ),
    1358 => 
    array (
      'id' => 1359,
      'title' => 'Профессиональный (двухголосый закадровый) (Нота)',
    ),
    1359 => 
    array (
      'id' => 1360,
      'title' => 'Профессиональный (одноголосый закадровый) (DVD Магия)',
    ),
    1360 => 
    array (
      'id' => 1361,
      'title' => 'Любительский (многоголосый закадровый) (Sound-Group + BTT-Team)',
    ),
    1361 => 
    array (
      'id' => 1362,
      'title' => 'Профессиональный (многоголосый закадровый) (Киносвидание)',
    ),
    1362 => 
    array (
      'id' => 1363,
      'title' => 'Любительский (двухголосый закадровый) (Robiris)',
    ),
    1363 => 
    array (
      'id' => 1364,
      'title' => 'Полное дублирование (Канон)',
    ),
    1364 => 
    array (
      'id' => 1365,
      'title' => 'Любительский (одноголосый закадровый) (Титов Пётр)',
    ),
    1365 => 
    array (
      'id' => 1366,
      'title' => 'Профессиональный (многоголосый закадровый) (Точка ТВ)',
    ),
    1366 => 
    array (
      'id' => 1367,
      'title' => '[JP] Полное дублирование (Japanese)',
    ),
    1367 => 
    array (
      'id' => 1368,
      'title' => 'Любительский (одноголосый закадровый) (schemer)',
    ),
    1368 => 
    array (
      'id' => 1369,
      'title' => 'Полное дублирование (DoubleRec)',
    ),
    1369 => 
    array (
      'id' => 1370,
      'title' => 'Профессиональный (двухголосый закадровый) (SD Media)',
    ),
    1370 => 
    array (
      'id' => 1371,
      'title' => 'Любительский (одноголосый закадровый) (Infinite Jest Studio)',
    ),
    1371 => 
    array (
      'id' => 1372,
      'title' => 'Любительский (двухголосый закадровый) (Fronda Studio)',
    ),
    1372 => 
    array (
      'id' => 1373,
      'title' => 'Любительский (одноголосый закадровый) (Миллиган)',
    ),
    1373 => 
    array (
      'id' => 1374,
      'title' => 'Любительский (двухголосый закадровый) (Узы Гименея)',
    ),
    1374 => 
    array (
      'id' => 1375,
      'title' => 'Любительский (двухголосый закадровый) (Batafurai team + Sound-Group)',
    ),
    1375 => 
    array (
      'id' => 1376,
      'title' => 'Любительский (одноголосый закадровый) (ХёнНим)',
    ),
    1376 => 
    array (
      'id' => 1377,
      'title' => 'Любительский (одноголосый закадровый) (Феодосов Валерий)',
    ),
    1377 => 
    array (
      'id' => 1378,
      'title' => 'Профессиональный (одноголосый закадровый) (Диктор студии Диона)',
    ),
    1378 => 
    array (
      'id' => 1379,
      'title' => 'Любительский (одноголосый закадровый) (Ромашкин Дмитрий)',
    ),
    1379 => 
    array (
      'id' => 1380,
      'title' => 'Любительский (многоголосый закадровый) (DeeAFilm Studio)',
    ),
    1380 => 
    array (
      'id' => 1381,
      'title' => 'Любительский (одноголосый закадровый) (maksciganov)',
    ),
    1381 => 
    array (
      'id' => 1382,
      'title' => 'Профессиональный (многоголосый закадровый) (Эстет-ТВ)',
    ),
    1382 => 
    array (
      'id' => 1383,
      'title' => 'Любительский (одноголосый закадровый) (DeeAFilm Studio)',
    ),
    1383 => 
    array (
      'id' => 1384,
      'title' => 'Профессиональный (двухголосый закадровый) (ОТВ HD)',
    ),
    1384 => 
    array (
      'id' => 1385,
      'title' => 'Любительский (двухголосый закадровый) (TeslaRec)',
    ),
    1385 => 
    array (
      'id' => 1386,
      'title' => 'Любительский (двухголосый закадровый) (Ворон + Wenlana)',
    ),
    1386 => 
    array (
      'id' => 1387,
      'title' => 'Полное дублирование (Jask)',
    ),
    1387 => 
    array (
      'id' => 1388,
      'title' => 'Любительский (одноголосый закадровый) (Ustas Alexis)',
    ),
    1388 => 
    array (
      'id' => 1389,
      'title' => 'Любительский (многоголосый закадровый) (Держава)',
    ),
    1389 => 
    array (
      'id' => 1390,
      'title' => 'Любительский (одноголосый закадровый) (Kerob)',
    ),
    1390 => 
    array (
      'id' => 1391,
      'title' => 'Оригинальная дорожка (18+)',
    ),
    1391 => 
    array (
      'id' => 1392,
      'title' => 'Профессиональный (двухголосый закадровый) (Русский репортаж)',
    ),
    1392 => 
    array (
      'id' => 1393,
      'title' => 'Полное дублирование (Leiunium Voices)',
    ),
    1393 => 
    array (
      'id' => 1394,
      'title' => 'Полное дублирование (Paragraph Media)',
    ),
    1394 => 
    array (
      'id' => 1395,
      'title' => 'Любительский (одноголосый закадровый) (Деньщиков Дмитрий | Пять плюх)',
    ),
    1395 => 
    array (
      'id' => 1396,
      'title' => 'Любительский (двухголосый закадровый) (LuckyStrike)',
    ),
    1396 => 
    array (
      'id' => 1397,
      'title' => 'Полное дублирование (RUSCICO | Руссико)',
    ),
    1397 => 
    array (
      'id' => 1398,
      'title' => 'Профессиональный (многоголосый закадровый) (Total DVD)',
    ),
    1398 => 
    array (
      'id' => 1399,
      'title' => 'Любительский (одноголосый закадровый) (Мазур)',
    ),
    1399 => 
    array (
      'id' => 1400,
      'title' => 'Любительский (одноголосый закадровый) (Tim Wagner)',
    ),
    1400 => 
    array (
      'id' => 1401,
      'title' => 'Любительский (одноголосый закадровый) (P.S.Energy)',
    ),
    1401 => 
    array (
      'id' => 1402,
      'title' => 'Профессиональный (одноголосый закадровый) (Кубик в Кубе | Kubik³)',
    ),
    1402 => 
    array (
      'id' => 1403,
      'title' => 'Любительский (одноголосый закадровый) (American Video)',
    ),
    1403 => 
    array (
      'id' => 1404,
      'title' => 'Профессиональный (многоголосый закадровый) (Киносерия)',
    ),
    1404 => 
    array (
      'id' => 1405,
      'title' => 'Любительский (одноголосый закадровый) (protsifer)',
    ),
    1405 => 
    array (
      'id' => 1406,
      'title' => 'Любительский (одноголосый закадровый) (viare)',
    ),
    1406 => 
    array (
      'id' => 1407,
      'title' => 'Профессиональный (многоголосый закадровый) (Настроение Видео)',
    ),
    1407 => 
    array (
      'id' => 1408,
      'title' => 'Любительский (одноголосый закадровый) (F-Train)',
    ),
    1408 => 
    array (
      'id' => 1409,
      'title' => 'Любительский (одноголосый закадровый) (Жучков)',
    ),
    1409 => 
    array (
      'id' => 1410,
      'title' => 'Профессиональный (двухголосый закадровый) (Astana TV)',
    ),
    1410 => 
    array (
      'id' => 1411,
      'title' => 'Любительский (одноголосый закадровый) (Стилан-видео)',
    ),
    1411 => 
    array (
      'id' => 1412,
      'title' => 'Профессиональный (двухголосый закадровый) (Автор Студия)',
    ),
    1412 => 
    array (
      'id' => 1413,
      'title' => 'Любительский (одноголосый закадровый) (Lenape)',
    ),
    1413 => 
    array (
      'id' => 1414,
      'title' => 'Профессиональный (многоголосый закадровый) (ТК Да Винчи | Da Vinci)',
    ),
    1414 => 
    array (
      'id' => 1415,
      'title' => 'Любительский (одноголосый закадровый) (AdiSound)',
    ),
    1415 => 
    array (
      'id' => 1416,
      'title' => 'Любительский (одноголосый закадровый) (Kandeli)',
    ),
    1416 => 
    array (
      'id' => 1417,
      'title' => 'Любительский (одноголосый закадровый) (Urasik | Александров Юрий)',
    ),
    1417 => 
    array (
      'id' => 1418,
      'title' => 'Профессиональный (двухголосый закадровый) (Интерсинема | Inercinema Art)',
    ),
    1418 => 
    array (
      'id' => 1419,
      'title' => 'Любительский (одноголосый закадровый) (NezPerce)',
    ),
    1419 => 
    array (
      'id' => 1420,
      'title' => 'Любительский (двухголосый закадровый) (Kukan Drama Russian)',
    ),
    1420 => 
    array (
      'id' => 1421,
      'title' => 'Любительский (одноголосый закадровый) (meltyblood | Melty Blood)',
    ),
    1421 => 
    array (
      'id' => 1422,
      'title' => 'Любительский (одноголосый закадровый) (Артвидео)',
    ),
    1422 => 
    array (
      'id' => 1423,
      'title' => 'Любительский (одноголосый закадровый) (Немец)',
    ),
    1423 => 
    array (
      'id' => 1424,
      'title' => 'Полное дублирование (SoundMoon)',
    ),
    1424 => 
    array (
      'id' => 1425,
      'title' => 'Любительский (одноголосый закадровый) (Дама)',
    ),
    1425 => 
    array (
      'id' => 1426,
      'title' => 'Любительский (одноголосый закадровый) (ETV+)',
    ),
    1426 => 
    array (
      'id' => 1427,
      'title' => 'Полное дублирование (LE-Production)',
    ),
    1427 => 
    array (
      'id' => 1428,
      'title' => 'Любительский (многоголосый закадровый) (TurkLovers)',
    ),
    1428 => 
    array (
      'id' => 1429,
      'title' => 'Профессиональный (многоголосый закадровый) (Интер-Фильм)',
    ),
    1429 => 
    array (
      'id' => 1430,
      'title' => 'Любительский (одноголосый закадровый) (MiSu)',
    ),
    1430 => 
    array (
      'id' => 1431,
      'title' => 'Профессиональный (одноголосый закадровый) (ТВ6)',
    ),
    1431 => 
    array (
      'id' => 1432,
      'title' => 'Профессиональный (многоголосый закадровый) (ТВ+)',
    ),
    1432 => 
    array (
      'id' => 1433,
      'title' => 'Профессиональный (многоголосый закадровый) (Конфетти)',
    ),
    1433 => 
    array (
      'id' => 1434,
      'title' => 'Профессиональный (одноголосый закадровый) (Акцент)',
    ),
    1434 => 
    array (
      'id' => 1435,
      'title' => 'Любительский (двухголосый закадровый) (Lynx студия)',
    ),
    1435 => 
    array (
      'id' => 1436,
      'title' => 'Профессиональный (многоголосый закадровый) (Тиллит Стайл)',
    ),
    1436 => 
    array (
      'id' => 1437,
      'title' => 'Любительский (двухголосый закадровый) (LovelyVox)',
    ),
    1437 => 
    array (
      'id' => 1438,
      'title' => 'Любительский (многоголосый закадровый) (DublikTV)',
    ),
    1438 => 
    array (
      'id' => 1439,
      'title' => 'Любительский (многоголосый закадровый) (SoulStudio)',
    ),
    1439 => 
    array (
      'id' => 1440,
      'title' => 'Профессиональный (многоголосый закадровый) (Москва. Доверие)',
    ),
    1440 => 
    array (
      'id' => 1441,
      'title' => 'Полное дублирование (Progovory Band)',
    ),
    1441 => 
    array (
      'id' => 1442,
      'title' => 'Любительский (одноголосый закадровый) (Love is)',
    ),
    1442 => 
    array (
      'id' => 1443,
      'title' => 'Любительский (одноголосый закадровый) (Shinigami)',
    ),
    1443 => 
    array (
      'id' => 1444,
      'title' => 'Любительский (двухголосый закадровый) (Karipso + Адриан)',
    ),
    1444 => 
    array (
      'id' => 1445,
      'title' => 'Любительский (одноголосый закадровый) (Hunter26)',
    ),
    1445 => 
    array (
      'id' => 1446,
      'title' => 'Профессиональный (многоголосый закадровый) (Мега-Видео)',
    ),
    1446 => 
    array (
      'id' => 1447,
      'title' => 'Полное дублирование (Iron Voice)',
    ),
    1447 => 
    array (
      'id' => 1448,
      'title' => 'Любительский (многоголосый закадровый) (New-Team)',
    ),
    1448 => 
    array (
      'id' => 1449,
      'title' => 'Любительский (двухголосый закадровый) (Фан Фан Дорам)',
    ),
    1449 => 
    array (
      'id' => 1450,
      'title' => 'Профессиональный (двухголосый закадровый) (Стартрек | Стар трек)',
    ),
    1450 => 
    array (
      'id' => 1451,
      'title' => 'Профессиональный (многоголосый закадровый) (World Pictures)',
    ),
    1451 => 
    array (
      'id' => 1452,
      'title' => 'Любительский (двухголосый закадровый) (КэП)',
    ),
    1452 => 
    array (
      'id' => 1453,
      'title' => 'Любительский (многоголосый закадровый) (kidarts)',
    ),
    1453 => 
    array (
      'id' => 1454,
      'title' => 'Полное дублирование (Третьякофф продакшн | Tretyakoff production)',
    ),
    1454 => 
    array (
      'id' => 1455,
      'title' => 'Любительский (одноголосый закадровый) (Avrail87)',
    ),
    1455 => 
    array (
      'id' => 1456,
      'title' => 'Профессиональный (одноголосый закадровый) (Plan B)',
    ),
    1456 => 
    array (
      'id' => 1457,
      'title' => 'Профессиональный (многоголосый закадровый) (RuFilms)',
    ),
    1457 => 
    array (
      'id' => 1458,
      'title' => 'Любительский (одноголосый закадровый) (Аверин Владимир)',
    ),
    1458 => 
    array (
      'id' => 1459,
      'title' => 'Полное дублирование (TitraFilm)',
    ),
    1459 => 
    array (
      'id' => 1460,
      'title' => 'Полное дублирование (DeeaFilm Studio | Диафильм студио)',
    ),
    1460 => 
    array (
      'id' => 1461,
      'title' => 'Профессиональный (многоголосый закадровый) (Syncmer)',
    ),
    1461 => 
    array (
      'id' => 1462,
      'title' => 'Любительский (двухголосый закадровый) (Gingercat)',
    ),
    1462 => 
    array (
      'id' => 1463,
      'title' => 'Любительский (многоголосый закадровый) (1WIN Studio)',
    ),
    1463 => 
    array (
      'id' => 1464,
      'title' => 'Немое кино (Музыка)',
    ),
    1464 => 
    array (
      'id' => 1465,
      'title' => 'Полное дублирование (Leff Sound)',
    ),
    1465 => 
    array (
      'id' => 1466,
      'title' => 'Профессиональный (многоголосый закадровый) (Продубляж)',
    ),
    1466 => 
    array (
      'id' => 1467,
      'title' => 'Любительский (двухголосый закадровый) (DubLik TV)',
    ),
    1467 => 
    array (
      'id' => 1468,
      'title' => 'Профессиональный (многоголосый закадровый) (Sunnysiders)',
    ),
    1468 => 
    array (
      'id' => 1469,
      'title' => 'Профессиональный (многоголосый закадровый) (РуАниме | DEEP)',
    ),
    1469 => 
    array (
      'id' => 1470,
      'title' => 'Полное дублирование (Видео Продакшн | Видеопродакшн)',
    ),
    1470 => 
    array (
      'id' => 1471,
      'title' => 'Любительский (двухголосый закадровый) (RedTail)',
    ),
    1471 => 
    array (
      'id' => 1472,
      'title' => 'Любительский (многоголосый закадровый) (Delta Dubbing)',
    ),
    1472 => 
    array (
      'id' => 1473,
      'title' => 'Профессиональный (одноголосый закадровый) (DigiMedia)',
    ),
    1473 => 
    array (
      'id' => 1474,
      'title' => 'Профессиональный (двухголосый закадровый) (DigiMedia)',
    ),
    1474 => 
    array (
      'id' => 1475,
      'title' => '[UA] Оригинальная дорожка (Украинский)',
    ),
    1475 => 
    array (
      'id' => 1476,
      'title' => 'Полное дублирование (Dubляж)',
    ),
    1476 => 
    array (
      'id' => 1477,
      'title' => 'Любительский (многоголосый закадровый) (заКАДРЫ)',
    ),
    1477 => 
    array (
      'id' => 1478,
      'title' => 'Любительский (двухголосый закадровый) (Light Breeze)',
    ),
    1478 => 
    array (
      'id' => 1479,
      'title' => 'Профессиональный (двухголосый закадровый) (Видеобаза)',
    ),
    1479 => 
    array (
      'id' => 1480,
      'title' => 'Любительский (одноголосый закадровый) (AnimeVost)',
    ),
    1480 => 
    array (
      'id' => 1481,
      'title' => 'Любительский (одноголосый закадровый) (jgor1)',
    ),
    1481 => 
    array (
      'id' => 1482,
      'title' => 'Полное дублирование (Видеофильм ТВ)',
    ),
    1482 => 
    array (
      'id' => 1483,
      'title' => 'Любительский (одноголосый закадровый) (Orthdx/Orlov)',
    ),
    1483 => 
    array (
      'id' => 1484,
      'title' => 'Профессиональный (одноголосый закадровый) (Центрнаучфильм)',
    ),
    1484 => 
    array (
      'id' => 1485,
      'title' => 'Любительский (одноголосый закадровый) (erogg)',
    ),
    1485 => 
    array (
      'id' => 1486,
      'title' => 'Любительский (одноголосый закадровый) (Черницкий Андрей | duckling-by2)',
    ),
    1486 => 
    array (
      'id' => 1487,
      'title' => 'Любительский (одноголосый закадровый) (Бакеев Адиль)',
    ),
    1487 => 
    array (
      'id' => 1488,
      'title' => 'Профессиональный (многоголосый закадровый) (Рег-ТВ СПб)',
    ),
    1488 => 
    array (
      'id' => 1489,
      'title' => 'Любительский (одноголосый закадровый) (Serg Tex)',
    ),
    1489 => 
    array (
      'id' => 1490,
      'title' => 'Любительский (многоголосый закадровый) (AniVersal)',
    ),
    1490 => 
    array (
      'id' => 1491,
      'title' => 'Любительский (многоголосый закадровый) (Anything Group)',
    ),
    1491 => 
    array (
      'id' => 1492,
      'title' => 'Любительский (многоголосый закадровый) (DreamCast)',
    ),
    1492 => 
    array (
      'id' => 1493,
      'title' => 'Профессиональный (одноголосый закадровый) (Red Media)',
    ),
    1493 => 
    array (
      'id' => 1494,
      'title' => 'Профессиональный (двухголосый закадровый) (MTV)',
    ),
    1494 => 
    array (
      'id' => 1495,
      'title' => 'Любительский (одноголосый закадровый) (SHIZA Project)',
    ),
    1495 => 
    array (
      'id' => 1496,
      'title' => 'Любительский (одноголосый закадровый) (Lord Alukart)',
    ),
    1496 => 
    array (
      'id' => 1497,
      'title' => 'Профессиональный (многоголосый закадровый) (Akimbo Production)',
    ),
    1497 => 
    array (
      'id' => 1498,
      'title' => '[DE] Полное дублирование (German)',
    ),
    1498 => 
    array (
      'id' => 1499,
      'title' => 'Полное дублирование (Держава)',
    ),
    1499 => 
    array (
      'id' => 1500,
      'title' => 'Любительский (многоголосый закадровый) (MultPlay)',
    ),
    1500 => 
    array (
      'id' => 1501,
      'title' => 'Любительский (многоголосый закадровый) (TheDoctor Team)',
    ),
    1501 => 
    array (
      'id' => 1502,
      'title' => 'Любительский (одноголосый закадровый) (LevshaFilm)',
    ),
    1502 => 
    array (
      'id' => 1503,
      'title' => 'Профессиональный (многоголосый закадровый) (ROOM13)',
    ),
    1503 => 
    array (
      'id' => 1504,
      'title' => 'Авторский (одноголосый закадровый) (Заугаров Михаил)',
    ),
    1504 => 
    array (
      'id' => 1505,
      'title' => 'Профессиональный (многоголосый закадровый) (Spike)',
    ),
    1505 => 
    array (
      'id' => 1506,
      'title' => 'Любительский (одноголосый закадровый) (Pokanikak)',
    ),
    1506 => 
    array (
      'id' => 1507,
      'title' => 'Любительский (одноголосый закадровый) (Иванов Валерий)',
    ),
    1507 => 
    array (
      'id' => 1508,
      'title' => 'Профессиональный (двухголосый закадровый) (Гланц + Лютая)',
    ),
    1508 => 
    array (
      'id' => 1509,
      'title' => 'Любительский (двухголосый закадровый) (DoraCinema)',
    ),
    1509 => 
    array (
      'id' => 1510,
      'title' => 'Любительский (двухголосый закадровый) (OpenDUB)',
    ),
    1510 => 
    array (
      'id' => 1511,
      'title' => 'Любительский (одноголосый закадровый) (RG Genshiken)',
    ),
    1511 => 
    array (
      'id' => 1512,
      'title' => 'Любительский (одноголосый закадровый) (Лурье Евгения)',
    ),
    1512 => 
    array (
      'id' => 1513,
      'title' => 'Любительский (двухголосый закадровый) (RG Genshiken)',
    ),
    1513 => 
    array (
      'id' => 1514,
      'title' => 'Любительский (двухголосый закадровый) (Gramalant)',
    ),
    1514 => 
    array (
      'id' => 1515,
      'title' => 'Профессиональный (двухголосый закадровый) (Кондор)',
    ),
    1515 => 
    array (
      'id' => 1516,
      'title' => 'Любительский (двухголосый закадровый) (Paradox)',
    ),
    1516 => 
    array (
      'id' => 1517,
      'title' => 'Любительский (одноголосый закадровый) (Дмитриева Светлана)',
    ),
    1517 => 
    array (
      'id' => 1518,
      'title' => 'Любительский (одноголосый закадровый) (WSmit60)',
    ),
    1518 => 
    array (
      'id' => 1519,
      'title' => 'Любительский (одноголосый закадровый) (RelizLab)',
    ),
    1519 => 
    array (
      'id' => 1520,
      'title' => 'Полное дублирование (Cinema Tone Production)',
    ),
    1520 => 
    array (
      'id' => 1521,
      'title' => 'Немое кино (Без звука)',
    ),
    1521 => 
    array (
      'id' => 1522,
      'title' => 'Любительский (многоголосый закадровый) (BadCatStudio)',
    ),
    1522 => 
    array (
      'id' => 1523,
      'title' => 'Любительский (одноголосый закадровый) (LetEatBee)',
    ),
    1523 => 
    array (
      'id' => 1524,
      'title' => 'Профессиональный (двухголосый закадровый) (365 дней ТВ)',
    ),
    1524 => 
    array (
      'id' => 1525,
      'title' => 'Любительский (двухголосый закадровый) (ТО Немое кино)',
    ),
    1525 => 
    array (
      'id' => 1526,
      'title' => 'Любительский (многоголосый закадровый) (Renegade Team)',
    ),
    1526 => 
    array (
      'id' => 1527,
      'title' => 'Любительский (одноголосый закадровый) (13viking)',
    ),
    1527 => 
    array (
      'id' => 1528,
      'title' => '[PL] Профессиональный (одноголосый закадровый) (Polish)',
    ),
    1528 => 
    array (
      'id' => 1529,
      'title' => 'Полное дублирование (Overtook Studio)',
    ),
    1529 => 
    array (
      'id' => 1530,
      'title' => 'Профессиональный (одноголосый закадровый) (NewComers)',
    ),
    1530 => 
    array (
      'id' => 1531,
      'title' => 'Любительский (двухголосый закадровый) (Sunny-Films)',
    ),
    1531 => 
    array (
      'id' => 1532,
      'title' => 'Профессиональный (одноголосый закадровый) (Первый ТВЧ)',
    ),
    1532 => 
    array (
      'id' => 1533,
      'title' => 'Полное дублирование (Сапфир)',
    ),
    1533 => 
    array (
      'id' => 1534,
      'title' => 'Любительский (одноголосый закадровый) (magnumst)',
    ),
    1534 => 
    array (
      'id' => 1535,
      'title' => 'Полное дублирование (ТК Дождь)',
    ),
    1535 => 
    array (
      'id' => 1536,
      'title' => 'Любительский (многоголосый закадровый) (LampStudio)',
    ),
    1536 => 
    array (
      'id' => 1537,
      'title' => 'Профессиональный (многоголосый закадровый) (Kino Polska)',
    ),
    1537 => 
    array (
      'id' => 1538,
      'title' => 'Профессиональный (двухголосый закадровый) (Мельница)',
    ),
    1538 => 
    array (
      'id' => 1539,
      'title' => 'Профессиональный (одноголосый закадровый) (NovaFilm)',
    ),
    1539 => 
    array (
      'id' => 1540,
      'title' => 'Любительский (многоголосый закадровый) (Paradox & Recent Films)',
    ),
    1540 => 
    array (
      'id' => 1541,
      'title' => 'Профессиональный (многоголосый закадровый) (ТО Дия)',
    ),
    1541 => 
    array (
      'id' => 1542,
      'title' => 'Полное дублирование (Time Media Group | Тайм Медиа Групп)',
    ),
    1542 => 
    array (
      'id' => 1543,
      'title' => 'Любительский (многоголосый закадровый) (datynet & Yuka_chan & Мия)',
    ),
    1543 => 
    array (
      'id' => 1544,
      'title' => 'Профессиональный (двухголосый закадровый) (Back Board Cinema)',
    ),
    1544 => 
    array (
      'id' => 1545,
      'title' => 'Любительский (многоголосый закадровый) (TOKSiN)',
    ),
    1545 => 
    array (
      'id' => 1546,
      'title' => 'Любительский (одноголосый закадровый) (Жданов Владимир)',
    ),
    1546 => 
    array (
      'id' => 1547,
      'title' => 'Полное дублирование (Вольга)',
    ),
    1547 => 
    array (
      'id' => 1548,
      'title' => 'Любительский (двухголосый закадровый) (RealFake + Exa)',
    ),
    1548 => 
    array (
      'id' => 1549,
      'title' => 'Любительский (двухголосый закадровый) (Данилов Владислав + Чинцова Анна)',
    ),
    1549 => 
    array (
      'id' => 1550,
      'title' => 'Профессиональный (двухголосый закадровый) (Ленфильм)',
    ),
    1550 => 
    array (
      'id' => 1551,
      'title' => 'Любительский (двухголосый закадровый) (Ворон + Misa)',
    ),
    1551 => 
    array (
      'id' => 1552,
      'title' => 'Профессиональный (многоголосый закадровый) (CPI Films | СиПиАй Филмз)',
    ),
    1552 => 
    array (
      'id' => 1553,
      'title' => 'Любительский (одноголосый закадровый) (Anubis)',
    ),
    1553 => 
    array (
      'id' => 1554,
      'title' => 'Профессиональный (многоголосый закадровый) (1 НТК Беларусь)',
    ),
    1554 => 
    array (
      'id' => 1555,
      'title' => 'Полное дублирование (Акцент)',
    ),
    1555 => 
    array (
      'id' => 1556,
      'title' => 'Любительский (многоголосый закадровый) (Yet Another Studio)',
    ),
    1556 => 
    array (
      'id' => 1557,
      'title' => 'Любительский (многоголосый закадровый) (PoKazh Studios)',
    ),
    1557 => 
    array (
      'id' => 1558,
      'title' => 'Полное дублирование (AniDUB)',
    ),
    1558 => 
    array (
      'id' => 1559,
      'title' => 'Любительский (одноголосый закадровый) (Montana | efremaka)',
    ),
    1559 => 
    array (
      'id' => 1560,
      'title' => 'Любительский (двухголосый закадровый) (Zetflix)',
    ),
    1560 => 
    array (
      'id' => 1561,
      'title' => 'Любительский (двухголосый закадровый) (3NOK)',
    ),
    1561 => 
    array (
      'id' => 1562,
      'title' => 'Любительский (двухголосый закадровый) (Light Fox)',
    ),
    1562 => 
    array (
      'id' => 1563,
      'title' => 'Любительский (многоголосый закадровый) (MKStudio)',
    ),
    1563 => 
    array (
      'id' => 1564,
      'title' => 'Любительский (одноголосый закадровый) (Head Pack Films)',
    ),
    1564 => 
    array (
      'id' => 1565,
      'title' => 'Профессиональный (многоголосый закадровый) (plan_B)',
    ),
    1565 => 
    array (
      'id' => 1566,
      'title' => 'Любительский (одноголосый закадровый) (DreamWarrior)',
    ),
    1566 => 
    array (
      'id' => 1567,
      'title' => 'Любительский (двухголосый закадровый) (datynet & Марчук Михаил)',
    ),
    1567 => 
    array (
      'id' => 1568,
      'title' => 'Любительский (одноголосый закадровый) (Unveless)',
    ),
    1568 => 
    array (
      'id' => 1569,
      'title' => 'Любительский (одноголосый закадровый) (nikdjo)',
    ),
    1569 => 
    array (
      'id' => 1570,
      'title' => 'Любительский (многоголосый закадровый) (MixFilm)',
    ),
    1570 => 
    array (
      'id' => 1571,
      'title' => 'Любительский (двухголосый закадровый) (Alternative Media Voice: Duet F)',
    ),
    1571 => 
    array (
      'id' => 1572,
      'title' => 'Профессиональный (одноголосый закадровый) (2x2)',
    ),
    1572 => 
    array (
      'id' => 1573,
      'title' => 'Любительский (одноголосый закадровый) (Рапсодов Сергей)',
    ),
    1573 => 
    array (
      'id' => 1574,
      'title' => 'Полное дублирование (Эй Би Видео | AB-Video)',
    ),
    1574 => 
    array (
      'id' => 1575,
      'title' => 'Авторский (одноголосый закадровый) (Корсаков А. | Kendzin)',
    ),
    1575 => 
    array (
      'id' => 1576,
      'title' => 'Профессиональный (многоголосый закадровый) (Чемоданов Продакшн | Chemodanov Production)',
    ),
    1576 => 
    array (
      'id' => 1577,
      'title' => 'Полное дублирование (Cinema Sound Production)',
    ),
    1577 => 
    array (
      'id' => 1578,
      'title' => 'Любительский (одноголосый закадровый) (MYDIMKA)',
    ),
    1578 => 
    array (
      'id' => 1579,
      'title' => 'Профессиональный (многоголосый закадровый) (ТК Киноман)',
    ),
    1579 => 
    array (
      'id' => 1580,
      'title' => 'Любительский (одноголосый закадровый) (Old Prapor)',
    ),
    1580 => 
    array (
      'id' => 1581,
      'title' => 'Полное дублирование (TV1000)',
    ),
    1581 => 
    array (
      'id' => 1582,
      'title' => 'Любительский (многоголосый закадровый) (KVARCEVANIE)',
    ),
    1582 => 
    array (
      'id' => 1583,
      'title' => 'Любительский (двухголосый закадровый) (LR-Project)',
    ),
    1583 => 
    array (
      'id' => 1584,
      'title' => 'Полное дублирование (KVARCEVANIE)',
    ),
    1584 => 
    array (
      'id' => 1585,
      'title' => 'Профессиональный (одноголосый закадровый) (Sony Turbo)',
    ),
    1585 => 
    array (
      'id' => 1586,
      'title' => 'Любительский (одноголосый закадровый) (Арсеньев Виталий)',
    ),
    1586 => 
    array (
      'id' => 1587,
      'title' => 'Любительский (одноголосый закадровый) (OpenDUB)',
    ),
    1587 => 
    array (
      'id' => 1588,
      'title' => 'Профессиональный (многоголосый закадровый) (Домашнее видео)',
    ),
    1588 => 
    array (
      'id' => 1589,
      'title' => 'Любительский (многоголосый закадровый) (GoASound)',
    ),
    1589 => 
    array (
      'id' => 1590,
      'title' => 'Профессиональный (одноголосый закадровый) (Pazl Voice)',
    ),
    1590 => 
    array (
      'id' => 1591,
      'title' => 'Полное дублирование (AlexFilm)',
    ),
    1591 => 
    array (
      'id' => 1592,
      'title' => 'Профессиональный (одноголосый закадровый) (VO-Production)',
    ),
    1592 => 
    array (
      'id' => 1593,
      'title' => 'Любительский (двухголосый закадровый) (Яроцкий и Соколова)',
    ),
    1593 => 
    array (
      'id' => 1594,
      'title' => 'Профессиональный (двухголосый закадровый) (Инес)',
    ),
    1594 => 
    array (
      'id' => 1595,
      'title' => 'Любительский (одноголосый закадровый) (Храм тысячи струн)',
    ),
    1595 => 
    array (
      'id' => 1596,
      'title' => 'Любительский (многоголосый закадровый) (Paradox)',
    ),
    1596 => 
    array (
      'id' => 1597,
      'title' => 'Полное дублирование (MovieDalen)',
    ),
    1597 => 
    array (
      'id' => 1598,
      'title' => 'Любительский (двухголосый закадровый) (Uniongang + Vano)',
    ),
    1598 => 
    array (
      'id' => 1599,
      'title' => 'Любительский (одноголосый закадровый) (Мика Бондарик | Mika Bondarik)',
    ),
    1599 => 
    array (
      'id' => 1600,
      'title' => 'Любительский (одноголосый закадровый) (Coleus)',
    ),
    1600 => 
    array (
      'id' => 1601,
      'title' => 'Любительский (многоголосый закадровый) (Saint-Sound)',
    ),
    1601 => 
    array (
      'id' => 1602,
      'title' => 'Любительский (двухголосый закадровый) (Ворон + Tess)',
    ),
    1602 => 
    array (
      'id' => 1603,
      'title' => 'Любительский (одноголосый закадровый) (Яблоков A. | Уновец)',
    ),
    1603 => 
    array (
      'id' => 1604,
      'title' => 'Любительский (многоголосый закадровый) (Etvox Film)',
    ),
    1604 => 
    array (
      'id' => 1605,
      'title' => 'Полное дублирование (CP Digital | CP Дистрибуция )',
    ),
    1605 => 
    array (
      'id' => 1606,
      'title' => 'Любительский (двухголосый закадровый) (DoramaLIFE)',
    ),
    1606 => 
    array (
      'id' => 1607,
      'title' => 'Профессиональный (двухголосый закадровый) (Видео Продакшн | Видеопродакшн)',
    ),
    1607 => 
    array (
      'id' => 1608,
      'title' => 'Любительский (двухголосый закадровый) (TOKSiN)',
    ),
    1608 => 
    array (
      'id' => 1609,
      'title' => 'Полное дублирование (РБО | Российское Библейское общество)',
    ),
    1609 => 
    array (
      'id' => 1610,
      'title' => 'Профессиональный (одноголосый закадровый) (DUO 6)',
    ),
    1610 => 
    array (
      'id' => 1611,
      'title' => 'Любительский (двухголосый закадровый) (OTHfilm)',
    ),
    1611 => 
    array (
      'id' => 1612,
      'title' => 'Любительский (многоголосый закадровый) (Light Breeze)',
    ),
    1612 => 
    array (
      'id' => 1613,
      'title' => 'Профессиональный (многоголосый закадровый) (Персей)',
    ),
    1613 => 
    array (
      'id' => 1614,
      'title' => 'Полное дублирование (20th Century Fox)',
    ),
    1614 => 
    array (
      'id' => 1615,
      'title' => 'Профессиональный (многоголосый закадровый) (Филолог)',
    ),
    1615 => 
    array (
      'id' => 1616,
      'title' => 'Профессиональный (двухголосый закадровый) (КиноПоиск HD)',
    ),
    1616 => 
    array (
      'id' => 1617,
      'title' => 'Профессиональный (двухголосый закадровый) (RuFilms)',
    ),
    1617 => 
    array (
      'id' => 1618,
      'title' => 'Полное дублирование (Head Pack Films)',
    ),
    1618 => 
    array (
      'id' => 1619,
      'title' => 'Любительский (двухголосый закадровый) (datynet & Anastasiya Snyackaya)',
    ),
    1619 => 
    array (
      'id' => 1620,
      'title' => 'Полное дублирование (ROOM13)',
    ),
    1620 => 
    array (
      'id' => 1621,
      'title' => 'Любительский (многоголосый закадровый) (Batafurai team + AniDUB)',
    ),
    1621 => 
    array (
      'id' => 1622,
      'title' => 'Любительский (двухголосый закадровый) (ZM-Show)',
    ),
    1622 => 
    array (
      'id' => 1623,
      'title' => 'Любительский (двухголосый закадровый) (816 DVD Team)',
    ),
    1623 => 
    array (
      'id' => 1624,
      'title' => 'Любительский (двухголосый закадровый) (Franek Monk & Filkons)',
    ),
    1624 => 
    array (
      'id' => 1625,
      'title' => 'Любительский (одноголосый закадровый) (Liquid92)',
    ),
    1625 => 
    array (
      'id' => 1626,
      'title' => 'Профессиональный (многоголосый закадровый) (Dubbing-Pro & Deluxe Media)',
    ),
    1626 => 
    array (
      'id' => 1627,
      'title' => 'Любительский (двухголосый закадровый) (Turkish Oasis)',
    ),
    1627 => 
    array (
      'id' => 1628,
      'title' => 'Любительский (одноголосый закадровый) (Récitant | Балякин Юрий)',
    ),
    1628 => 
    array (
      'id' => 1629,
      'title' => 'Полное дублирование (Кинеко)',
    ),
    1629 => 
    array (
      'id' => 1630,
      'title' => 'Полное дублирование (.black HD)',
    ),
    1630 => 
    array (
      'id' => 1631,
      'title' => 'Любительский (одноголосый закадровый) (GoldenSerials)',
    ),
    1631 => 
    array (
      'id' => 1632,
      'title' => 'Полное дублирование (TigerSound)',
    ),
    1632 => 
    array (
      'id' => 1633,
      'title' => 'Профессиональный (многоголосый закадровый) (Киностудия им. Горького)',
    ),
    1633 => 
    array (
      'id' => 1634,
      'title' => 'Профессиональный (двухголосый закадровый) (Эй Би Видео | AB-Video)',
    ),
    1634 => 
    array (
      'id' => 1635,
      'title' => 'Профессиональный (многоголосый закадровый) (viju | viaplay)',
    ),
    1635 => 
    array (
      'id' => 1636,
      'title' => 'Профессиональный (двухголосый закадровый) (MaxMeister & diamond38)',
    ),
    1636 => 
    array (
      'id' => 1637,
      'title' => 'Профессиональный (многоголосый закадровый) (black HD)',
    ),
    1637 => 
    array (
      'id' => 1638,
      'title' => 'Любительский (многоголосый закадровый) (Всёпочесноку)',
    ),
    1638 => 
    array (
      'id' => 1639,
      'title' => 'Профессиональный (двухголосый закадровый) (RTVi)',
    ),
    1639 => 
    array (
      'id' => 1640,
      'title' => 'Любительский (двухголосый закадровый) (Marie & Veler)',
    ),
    1640 => 
    array (
      'id' => 1641,
      'title' => 'Любительский (одноголосый закадровый) (ITLM)',
    ),
    1641 => 
    array (
      'id' => 1642,
      'title' => 'Профессиональный (многоголосый закадровый) (Мариус Фильм)',
    ),
    1642 => 
    array (
      'id' => 1643,
      'title' => 'Любительский (многоголосый закадровый) (Iron Sound)',
    ),
    1643 => 
    array (
      'id' => 1644,
      'title' => 'Профессиональный (одноголосый закадровый) (Континент СП)',
    ),
    1644 => 
    array (
      'id' => 1645,
      'title' => 'Любительский (двухголосый закадровый) (FanStudio)',
    ),
    1645 => 
    array (
      'id' => 1646,
      'title' => 'Профессиональный (многоголосый закадровый) (Русское счастье)',
    ),
    1646 => 
    array (
      'id' => 1647,
      'title' => 'Любительский (двухголосый закадровый) (LineFilm)',
    ),
    1647 => 
    array (
      'id' => 1648,
      'title' => 'Любительский (двухголосый закадровый) (RIOK Films)',
    ),
    1648 => 
    array (
      'id' => 1649,
      'title' => 'Профессиональный (двухголосый закадровый) (Спайр)',
    ),
    1649 => 
    array (
      'id' => 1650,
      'title' => 'Профессиональный (двухголосый закадровый) (Монолит)',
    ),
    1650 => 
    array (
      'id' => 1651,
      'title' => 'Любительский (одноголосый закадровый) (A-XES | ProjectX | AngelX | Fudoh)',
    ),
    1651 => 
    array (
      'id' => 1652,
      'title' => 'Любительский (одноголосый закадровый) (Гусева Ирина)',
    ),
    1652 => 
    array (
      'id' => 1653,
      'title' => 'Любительский (одноголосый закадровый) (TOKSiN)',
    ),
    1653 => 
    array (
      'id' => 1654,
      'title' => 'Профессиональный (многоголосый закадровый) (Кубик в Кубе | Kubik³ + Бяко Рекордс)',
    ),
    1654 => 
    array (
      'id' => 1655,
      'title' => 'Любительский (двухголосый закадровый) (GoLTFilm)',
    ),
    1655 => 
    array (
      'id' => 1656,
      'title' => 'Профессиональный (двухголосый закадровый) (Страшное HD)',
    ),
    1656 => 
    array (
      'id' => 1657,
      'title' => 'Профессиональный (двухголосый закадровый) (20th Century Fox)',
    ),
    1657 => 
    array (
      'id' => 1658,
      'title' => 'Любительский (одноголосый закадровый) (ColdFilm)',
    ),
    1658 => 
    array (
      'id' => 1659,
      'title' => 'Любительский (одноголосый закадровый) (4u2ges)',
    ),
    1659 => 
    array (
      'id' => 1660,
      'title' => 'Любительский (двухголосый закадровый) (Котова Ирина и Стариков Евгений)',
    ),
    1660 => 
    array (
      'id' => 1661,
      'title' => 'Любительский (двухголосый закадровый) (TheAngelOfDeath & SweetySacrifice)',
    ),
    1661 => 
    array (
      'id' => 1662,
      'title' => 'Любительский (одноголосый закадровый) (MIN-Dub Studio)',
    ),
    1662 => 
    array (
      'id' => 1663,
      'title' => 'Профессиональный (многоголосый закадровый) (Автор-студия)',
    ),
    1663 => 
    array (
      'id' => 1664,
      'title' => 'Любительский (одноголосый закадровый) (Малиновский Евгений)',
    ),
    1664 => 
    array (
      'id' => 1665,
      'title' => 'Полное дублирование (BTi Studios + Пифагор)',
    ),
    1665 => 
    array (
      'id' => 1666,
      'title' => 'Профессиональный (многоголосый закадровый) (Много ТВ)',
    ),
    1666 => 
    array (
      'id' => 1667,
      'title' => 'Профессиональный (двухголосый закадровый) (Сонотэк)',
    ),
    1667 => 
    array (
      'id' => 1668,
      'title' => 'Любительский (многоголосый закадровый) (Agata Filin | Агата Филин)',
    ),
    1668 => 
    array (
      'id' => 1669,
      'title' => 'Профессиональный (многоголосый закадровый) (Wink)',
    ),
    1669 => 
    array (
      'id' => 1670,
      'title' => 'Любительский (одноголосый закадровый) (хламвидео)',
    ),
    1670 => 
    array (
      'id' => 1671,
      'title' => 'Полное дублирование (Сиджел)',
    ),
    1671 => 
    array (
      'id' => 1672,
      'title' => 'Любительский (многоголосый закадровый) (Selena)',
    ),
    1672 => 
    array (
      'id' => 1673,
      'title' => 'Профессиональный (одноголосый закадровый) (Industrial Production)',
    ),
    1673 => 
    array (
      'id' => 1674,
      'title' => 'Любительский (одноголосый закадровый) (asp_id)',
    ),
    1674 => 
    array (
      'id' => 1675,
      'title' => 'Любительский (одноголосый закадровый) (Томан Эдуард)',
    ),
    1675 => 
    array (
      'id' => 1676,
      'title' => 'Профессиональный (многоголосый закадровый) (Lyco | Лайко)',
    ),
    1676 => 
    array (
      'id' => 1677,
      'title' => 'Любительский (одноголосый закадровый) (Шандро Дмитрий)',
    ),
    1677 => 
    array (
      'id' => 1678,
      'title' => 'Профессиональный (одноголосый закадровый) (студия им.Довженко)',
    ),
    1678 => 
    array (
      'id' => 1679,
      'title' => 'Любительский (одноголосый закадровый) (Зверев Андрей)',
    ),
    1679 => 
    array (
      'id' => 1680,
      'title' => 'Любительский (одноголосый закадровый) (Симбад)',
    ),
    1680 => 
    array (
      'id' => 1681,
      'title' => 'Любительский (двухголосый закадровый) (datynet & Selena)',
    ),
    1681 => 
    array (
      'id' => 1682,
      'title' => 'Полное дублирование (Тренд Медиа Сервис)',
    ),
    1682 => 
    array (
      'id' => 1683,
      'title' => 'Любительский (многоголосый закадровый) (Cyber Cat Studio)',
    ),
    1683 => 
    array (
      'id' => 1684,
      'title' => 'Любительский (двухголосый закадровый) (Selena)',
    ),
    1684 => 
    array (
      'id' => 1685,
      'title' => 'Профессиональный (многоголосый закадровый) (Блокбастер HD)',
    ),
    1685 => 
    array (
      'id' => 1686,
      'title' => 'Любительский (одноголосый закадровый) (RedDiamond Studio)',
    ),
    1686 => 
    array (
      'id' => 1687,
      'title' => 'Профессиональный (многоголосый закадровый) (Кравец + FarGate)',
    ),
    1687 => 
    array (
      'id' => 1688,
      'title' => 'Любительский (многоголосый закадровый) (AniBaza)',
    ),
    1688 => 
    array (
      'id' => 1689,
      'title' => 'Полное дублирование (Shadow Dub Project)',
    ),
    1689 => 
    array (
      'id' => 1690,
      'title' => 'Любительский (одноголосый закадровый) (Экшн-студия "Ленинград")',
    ),
    1690 => 
    array (
      'id' => 1691,
      'title' => 'Любительский (одноголосый закадровый) (ZM)',
    ),
    1691 => 
    array (
      'id' => 1692,
      'title' => 'Любительский (одноголосый закадровый) (eraserheads)',
    ),
    1692 => 
    array (
      'id' => 1693,
      'title' => 'Профессиональный (двухголосый закадровый) (Кинопремьера)',
    ),
    1693 => 
    array (
      'id' => 1694,
      'title' => 'Любительский (двухголосый закадровый) (SlothSound)',
    ),
    1694 => 
    array (
      'id' => 1695,
      'title' => 'Любительский (одноголосый закадровый) (azazel)',
    ),
    1695 => 
    array (
      'id' => 1696,
      'title' => 'Любительский (многоголосый закадровый) (Arasi Project)',
    ),
    1696 => 
    array (
      'id' => 1697,
      'title' => 'Полное дублирование (Nexus)',
    ),
    1697 => 
    array (
      'id' => 1698,
      'title' => 'Любительский (одноголосый закадровый) (Воронов Александр)',
    ),
    1698 => 
    array (
      'id' => 1699,
      'title' => 'Любительский (одноголосый закадровый) (Влад Дорф | Vlad Dorf)',
    ),
    1699 => 
    array (
      'id' => 1700,
      'title' => 'Любительский (одноголосый закадровый) (Иосиф)',
    ),
    1700 => 
    array (
      'id' => 1701,
      'title' => 'Полное дублирование (Электрошок)',
    ),
    1701 => 
    array (
      'id' => 1702,
      'title' => 'Любительский (многоголосый закадровый) (Колобок + XDUB Dorama + Victory-Films)',
    ),
    1702 => 
    array (
      'id' => 1703,
      'title' => 'Полное дублирование (РуАниме | DEEP)',
    ),
    1703 => 
    array (
      'id' => 1704,
      'title' => 'Любительский (многоголосый закадровый) (Zetflix)',
    ),
    1704 => 
    array (
      'id' => 1705,
      'title' => 'Любительский (многоголосый закадровый) (Iron Voice)',
    ),
    1705 => 
    array (
      'id' => 1706,
      'title' => 'Полное дублирование (Condor Films)',
    ),
    1706 => 
    array (
      'id' => 1707,
      'title' => 'Профессиональный (многоголосый закадровый) (Creative Arts Media)',
    ),
    1707 => 
    array (
      'id' => 1708,
      'title' => 'Любительский (многоголосый закадровый) (FRT Sora)',
    ),
    1708 => 
    array (
      'id' => 1709,
      'title' => 'Профессиональный (многоголосый закадровый) (Vox Records)',
    ),
    1709 => 
    array (
      'id' => 1710,
      'title' => 'Любительский (одноголосый закадровый) (Самоделкин | Буданов Александр)',
    ),
    1710 => 
    array (
      'id' => 1711,
      'title' => 'Любительский (многоголосый закадровый) (Колобок + Victory-Films)',
    ),
    1711 => 
    array (
      'id' => 1712,
      'title' => 'Полное дублирование (HotVoice 41)',
    ),
    1712 => 
    array (
      'id' => 1713,
      'title' => 'Полное дублирование (Киноужас)',
    ),
    1713 => 
    array (
      'id' => 1714,
      'title' => 'Любительский (двухголосый закадровый) (AniZone.TV + Unicorn)',
    ),
    1714 => 
    array (
      'id' => 1715,
      'title' => 'Любительский (многоголосый закадровый) (BzekE)',
    ),
    1715 => 
    array (
      'id' => 1716,
      'title' => 'Любительский (многоголосый закадровый) (DuBDraG ProJECT)',
    ),
    1716 => 
    array (
      'id' => 1717,
      'title' => 'Профессиональный (многоголосый закадровый) (Gulli)',
    ),
    1717 => 
    array (
      'id' => 1718,
      'title' => 'Любительский (многоголосый закадровый) (SHIZA Project + Kansai + DJ Bionicl)',
    ),
    1718 => 
    array (
      'id' => 1719,
      'title' => 'Любительский (многоголосый закадровый) (TVHUB)',
    ),
    1719 => 
    array (
      'id' => 1720,
      'title' => 'Профессиональный (многоголосый закадровый) (Gut Media)',
    ),
    1720 => 
    array (
      'id' => 1721,
      'title' => 'Любительский (многоголосый закадровый) (NikiStudio Records)',
    ),
    1721 => 
    array (
      'id' => 1722,
      'title' => 'Полное дублирование (.red)',
    ),
    1722 => 
    array (
      'id' => 1723,
      'title' => 'Профессиональный (многоголосый закадровый) (Мосфильм)',
    ),
    1723 => 
    array (
      'id' => 1724,
      'title' => 'Любительский (одноголосый закадровый) (Kass)',
    ),
    1724 => 
    array (
      'id' => 1725,
      'title' => 'Профессиональный (одноголосый закадровый) (RUSCICO | Руссико)',
    ),
    1725 => 
    array (
      'id' => 1726,
      'title' => 'Полное дублирование (Gulli)',
    ),
    1726 => 
    array (
      'id' => 1727,
      'title' => 'Любительский (одноголосый закадровый) (Erretik)',
    ),
    1727 => 
    array (
      'id' => 1728,
      'title' => 'Полное дублирование (Wink)',
    ),
    1728 => 
    array (
      'id' => 1729,
      'title' => 'Полное дублирование (Мобильное телевидение)',
    ),
    1729 => 
    array (
      'id' => 1730,
      'title' => 'Любительский (двухголосый закадровый) (Takeover Project)',
    ),
    1730 => 
    array (
      'id' => 1731,
      'title' => 'Любительский (многоголосый закадровый) (Kapets\'s Studios & SkyeFilmTV)',
    ),
    1731 => 
    array (
      'id' => 1732,
      'title' => 'Любительский (многоголосый закадровый) (CCK Media Production & NesTea)',
    ),
    1732 => 
    array (
      'id' => 1733,
      'title' => 'Профессиональный (многоголосый закадровый) (Интерсинема | Inercinema Art)',
    ),
    1733 => 
    array (
      'id' => 1734,
      'title' => 'Любительский (двухголосый закадровый) (rtys & Гульнара Бевз)',
    ),
    1734 => 
    array (
      'id' => 1735,
      'title' => 'Профессиональный (одноголосый закадровый) (SoulPro)',
    ),
    1735 => 
    array (
      'id' => 1736,
      'title' => 'Полное дублирование (Bravo Records Georgia / Movie Dubbing)',
    ),
    1736 => 
    array (
      'id' => 1737,
      'title' => 'Профессиональный (двухголосый закадровый) (ТВ+ | ТВ плюс)',
    ),
    1737 => 
    array (
      'id' => 1738,
      'title' => 'Профессиональный (двухголосый закадровый) (Эра-ТВ)',
    ),
    1738 => 
    array (
      'id' => 1739,
      'title' => 'Полное дублирование (Беларусьфильм)',
    ),
    1739 => 
    array (
      'id' => 1740,
      'title' => 'Профессиональный (двухголосый закадровый) (ВГТРК)',
    ),
    1740 => 
    array (
      'id' => 1741,
      'title' => 'Любительский (одноголосый закадровый) (1967)',
    ),
    1741 => 
    array (
      'id' => 1742,
      'title' => 'Любительский (двухголосый закадровый) (Khushi Khiladi)',
    ),
    1742 => 
    array (
      'id' => 1743,
      'title' => 'Любительский (одноголосый закадровый) (Игорь Первый)',
    ),
    1743 => 
    array (
      'id' => 1744,
      'title' => 'Профессиональный (многоголосый закадровый) (CB Studio)',
    ),
    1744 => 
    array (
      'id' => 1745,
      'title' => 'Профессиональный (двухголосый закадровый) (Филолог)',
    ),
    1745 => 
    array (
      'id' => 1746,
      'title' => 'Любительский (одноголосый закадровый) (Akuli)',
    ),
    1746 => 
    array (
      'id' => 1747,
      'title' => 'Профессиональный (двухголосый закадровый) (Кравец)',
    ),
    1747 => 
    array (
      'id' => 1748,
      'title' => 'Полное дублирование (TVHUB)',
    ),
    1748 => 
    array (
      'id' => 1749,
      'title' => 'Профессиональный (одноголосый закадровый) (Ленфильм)',
    ),
    1749 => 
    array (
      'id' => 1750,
      'title' => 'Любительский (двухголосый закадровый) (Всё сведено)',
    ),
    1750 => 
    array (
      'id' => 1751,
      'title' => 'Любительский (одноголосый закадровый) (krutetz)',
    ),
    1751 => 
    array (
      'id' => 1752,
      'title' => 'Любительский (двухголосый закадровый) (Simon & Christina)',
    ),
    1752 => 
    array (
      'id' => 1753,
      'title' => 'Полное дублирование (ТВ Новости)',
    ),
    1753 => 
    array (
      'id' => 1754,
      'title' => 'Любительский (одноголосый закадровый) (студия «Святослав»)',
    ),
    1754 => 
    array (
      'id' => 1755,
      'title' => 'Любительский (многоголосый закадровый) (MCA | Moscow City AnimeGroup)',
    ),
    1755 => 
    array (
      'id' => 1756,
      'title' => 'Любительский (многоголосый закадровый) (Kazoku Project)',
    ),
    1756 => 
    array (
      'id' => 1757,
      'title' => 'Любительский (одноголосый закадровый) (FassaD)',
    ),
    1757 => 
    array (
      'id' => 1758,
      'title' => 'Профессиональный (двухголосый закадровый) (Погодаев Константин и Тух Анна)',
    ),
    1758 => 
    array (
      'id' => 1759,
      'title' => 'Профессиональный (многоголосый закадровый) (JRC Video)',
    ),
    1759 => 
    array (
      'id' => 1760,
      'title' => 'Любительский (многоголосый закадровый) (Cake Studio)',
    ),
    1760 => 
    array (
      'id' => 1761,
      'title' => 'Профессиональный (двухголосый закадровый) (студия «Джельсомино»)',
    ),
    1761 => 
    array (
      'id' => 1762,
      'title' => 'Любительский (многоголосый закадровый) (NemFilm + Filiza Studio + Glanzru)',
    ),
    1762 => 
    array (
      'id' => 1763,
      'title' => 'Профессиональный (двухголосый закадровый) (Занавес)',
    ),
    1763 => 
    array (
      'id' => 1764,
      'title' => 'Любительский (одноголосый закадровый) (Беляков Михаил)',
    ),
    1764 => 
    array (
      'id' => 1765,
      'title' => 'Любительский (одноголосый закадровый) (TatamiFilm)',
    ),
    1765 => 
    array (
      'id' => 1766,
      'title' => 'Профессиональный (многоголосый закадровый) (Исламский Мир)',
    ),
    1766 => 
    array (
      'id' => 1767,
      'title' => 'Профессиональный (многоголосый закадровый) (now.ru)',
    ),
    1767 => 
    array (
      'id' => 1768,
      'title' => 'Профессиональный (двухголосый закадровый) (КСС)',
    ),
    1768 => 
    array (
      'id' => 1769,
      'title' => 'Профессиональный (двухголосый закадровый) (Premier Digital)',
    ),
    1769 => 
    array (
      'id' => 1770,
      'title' => 'Любительский (одноголосый закадровый) (Казанцев Александр | nightfall75)',
    ),
    1770 => 
    array (
      'id' => 1771,
      'title' => 'Профессиональный (одноголосый закадровый) (Мартынов Сергей)',
    ),
    1771 => 
    array (
      'id' => 1772,
      'title' => 'Любительский (многоголосый закадровый) (Progovory Band)',
    ),
    1772 => 
    array (
      'id' => 1773,
      'title' => 'Полное дублирование (Пирамида | Pyramid)',
    ),
    1773 => 
    array (
      'id' => 1774,
      'title' => 'Профессиональный (многоголосый закадровый) (FilmBox)',
    ),
    1774 => 
    array (
      'id' => 1775,
      'title' => 'Профессиональный (двухголосый закадровый) (FilmBox)',
    ),
    1775 => 
    array (
      'id' => 1776,
      'title' => 'Любительский (двухголосый закадровый) (Марчук Михаил & Yuka_chan)',
    ),
    1776 => 
    array (
      'id' => 1777,
      'title' => 'Профессиональный (многоголосый закадровый) (АртМедиа Групп)',
    ),
    1777 => 
    array (
      'id' => 1778,
      'title' => 'Профессиональный (многоголосый закадровый) (MEGOGO)',
    ),
    1778 => 
    array (
      'id' => 1779,
      'title' => 'Профессиональный (многоголосый закадровый) (студия «Звукорежиссёр»)',
    ),
    1779 => 
    array (
      'id' => 1780,
      'title' => 'Любительский (двухголосый закадровый) (Fi.Re. & K8)',
    ),
    1780 => 
    array (
      'id' => 1781,
      'title' => 'Профессиональный (двухголосый закадровый) (Жастар-1)',
    ),
    1781 => 
    array (
      'id' => 1782,
      'title' => 'Профессиональный (многоголосый закадровый) (DriveFM | ДрайвФМ)',
    ),
    1782 => 
    array (
      'id' => 1783,
      'title' => 'Профессиональный (двухголосый закадровый) (Мужское кино)',
    ),
    1783 => 
    array (
      'id' => 1784,
      'title' => 'Профессиональный (двухголосый закадровый) (tomitoot)',
    ),
    1784 => 
    array (
      'id' => 1785,
      'title' => 'Любительский (одноголосый закадровый) (Usher)',
    ),
    1785 => 
    array (
      'id' => 1786,
      'title' => 'Любительский (одноголосый закадровый) (Скуч Герман)',
    ),
    1786 => 
    array (
      'id' => 1787,
      'title' => 'Любительский (одноголосый закадровый) (soso4eg)',
    ),
    1787 => 
    array (
      'id' => 1788,
      'title' => 'Профессиональный (двухголосый закадровый) (Интервидео)',
    ),
    1788 => 
    array (
      'id' => 1789,
      'title' => 'Любительский (одноголосый закадровый) (DXS | Dynamic Studio)',
    ),
    1789 => 
    array (
      'id' => 1790,
      'title' => 'Любительский (одноголосый закадровый) (capusha)',
    ),
    1790 => 
    array (
      'id' => 1791,
      'title' => 'Профессиональный (многоголосый закадровый) (Кино без границ)',
    ),
    1791 => 
    array (
      'id' => 1792,
      'title' => 'Любительский (одноголосый закадровый) (Байков Евгений | Бойков)',
    ),
    1792 => 
    array (
      'id' => 1793,
      'title' => 'Профессиональный (многоголосый закадровый) (Товарищество 110/17)',
    ),
    1793 => 
    array (
      'id' => 1794,
      'title' => 'Любительский (одноголосый закадровый) (Рахленко Александр)',
    ),
    1794 => 
    array (
      'id' => 1795,
      'title' => 'Профессиональный (одноголосый закадровый) (CLS Media)',
    ),
    1795 => 
    array (
      'id' => 1796,
      'title' => 'Любительский (одноголосый закадровый) (Пушкарева Наташа | DoramaStar)',
    ),
    1796 => 
    array (
      'id' => 1797,
      'title' => 'Профессиональный (многоголосый закадровый) (nerds)',
    ),
    1797 => 
    array (
      'id' => 1798,
      'title' => 'Полное дублирование (Омикрон)',
    ),
    1798 => 
    array (
      'id' => 1799,
      'title' => 'Любительский (двухголосый закадровый) (Katerina & Laids)',
    ),
    1799 => 
    array (
      'id' => 1800,
      'title' => 'Профессиональный (одноголосый закадровый) (Видеосервис)',
    ),
    1800 => 
    array (
      'id' => 1801,
      'title' => 'Любительский (одноголосый закадровый) (Мистер Индия | Mr. India)',
    ),
    1801 => 
    array (
      'id' => 1802,
      'title' => 'Любительский (одноголосый закадровый) (wad)',
    ),
    1802 => 
    array (
      'id' => 1803,
      'title' => 'Полное дублирование (Мультиландия)',
    ),
    1803 => 
    array (
      'id' => 1804,
      'title' => 'Любительский (одноголосый закадровый) (Иванов Павел | eraserhead)',
    ),
    1804 => 
    array (
      'id' => 1805,
      'title' => 'Профессиональный (многоголосый закадровый) (CineLab SoundMix | СинеЛаб СаундМикс)',
    ),
    1805 => 
    array (
      'id' => 1806,
      'title' => 'Любительский (многоголосый закадровый) (Гараж Дубляж)',
    ),
    1806 => 
    array (
      'id' => 1807,
      'title' => 'Любительский (одноголосый закадровый) (edos1965)',
    ),
    1807 => 
    array (
      'id' => 1808,
      'title' => 'Профессиональный (двухголосый закадровый) (Бяко Рекордс)',
    ),
    1808 => 
    array (
      'id' => 1809,
      'title' => 'Любительский (многоголосый закадровый) (Soroka)',
    ),
    1809 => 
    array (
      'id' => 1810,
      'title' => 'Любительский (многоголосый закадровый) (jesus-torrent)',
    ),
    1810 => 
    array (
      'id' => 1811,
      'title' => '[KZ] Original (Kazakh)',
    ),
    1811 => 
    array (
      'id' => 1812,
      'title' => 'Полное дублирование (Movie Dubbing)',
    ),
    1812 => 
    array (
      'id' => 1813,
      'title' => 'Любительский (многоголосый закадровый) (VPStudio)',
    ),
    1813 => 
    array (
      'id' => 1814,
      'title' => 'Профессиональный (многоголосый закадровый) (Сиджел)',
    ),
    1814 => 
    array (
      'id' => 1815,
      'title' => 'Полное дублирование (RStudio)',
    ),
    1815 => 
    array (
      'id' => 1816,
      'title' => 'Любительский (одноголосый закадровый) (Олвот Ювонт)',
    ),
    1816 => 
    array (
      'id' => 1817,
      'title' => 'Профессиональный (одноголосый закадровый) (Белявский Александр)',
    ),
    1817 => 
    array (
      'id' => 1818,
      'title' => 'Любительский (одноголосый закадровый) (Киноспец)',
    ),
    1818 => 
    array (
      'id' => 1819,
      'title' => 'Любительский (двухголосый закадровый) (Мания)',
    ),
    1819 => 
    array (
      'id' => 1820,
      'title' => 'Профессиональный (многоголосый закадровый) (НТК)',
    ),
    1820 => 
    array (
      'id' => 1821,
      'title' => 'Профессиональный (многоголосый закадровый) (Камертон)',
    ),
    1821 => 
    array (
      'id' => 1822,
      'title' => 'Профессиональный (многоголосый закадровый) (Так Треба Продакшн)',
    ),
    1822 => 
    array (
      'id' => 1823,
      'title' => 'Любительский (одноголосый закадровый) (JBond)',
    ),
    1823 => 
    array (
      'id' => 1824,
      'title' => 'Любительский (одноголосый закадровый) (ryhlen)',
    ),
    1824 => 
    array (
      'id' => 1825,
      'title' => 'Любительский (одноголосый закадровый) (Elegra)',
    ),
    1825 => 
    array (
      'id' => 1826,
      'title' => 'Профессиональный (многоголосый закадровый) (Новый канал | Новий канал)',
    ),
    1826 => 
    array (
      'id' => 1827,
      'title' => 'Любительский (многоголосый закадровый) (Переулок Переводмана)',
    ),
    1827 => 
    array (
      'id' => 1828,
      'title' => 'Любительский (одноголосый закадровый) (bitubat)',
    ),
    1828 => 
    array (
      'id' => 1829,
      'title' => 'Любительский (одноголосый закадровый) (Eladiel)',
    ),
    1829 => 
    array (
      'id' => 1830,
      'title' => 'Любительский (одноголосый закадровый) (foxlight)',
    ),
    1830 => 
    array (
      'id' => 1831,
      'title' => 'Профессиональный (многоголосый закадровый) (Universal Channel)',
    ),
    1831 => 
    array (
      'id' => 1832,
      'title' => 'Любительский (двухголосый закадровый) (Чезаре)',
    ),
    1832 => 
    array (
      'id' => 1833,
      'title' => 'Полное дублирование (Фильмэкспорт)',
    ),
    1833 => 
    array (
      'id' => 1834,
      'title' => 'Профессиональный (двухголосый закадровый) (Камертон)',
    ),
    1834 => 
    array (
      'id' => 1835,
      'title' => 'Полное дублирование (5-й канал СПб)',
    ),
    1835 => 
    array (
      'id' => 1836,
      'title' => 'Любительский (одноголосый закадровый) (Narцissa)',
    ),
    1836 => 
    array (
      'id' => 1837,
      'title' => 'Полное дублирование (SC Produb)',
    ),
    1837 => 
    array (
      'id' => 1838,
      'title' => 'Любительский (одноголосый закадровый) (Suzaku)',
    ),
    1838 => 
    array (
      'id' => 1839,
      'title' => 'Любительский (одноголосый закадровый) (Tina)',
    ),
    1839 => 
    array (
      'id' => 1840,
      'title' => 'Любительский (двухголосый закадровый) (Enilou & Eladiel)',
    ),
    1840 => 
    array (
      'id' => 1841,
      'title' => 'Любительский (двухголосый закадровый) (Zetsubou & Matilda)',
    ),
    1841 => 
    array (
      'id' => 1842,
      'title' => 'Профессиональный (многоголосый закадровый) (Мега-Аниме | Mega Anime)',
    ),
    1842 => 
    array (
      'id' => 1843,
      'title' => 'Полное дублирование (НД Плэй)',
    ),
    1843 => 
    array (
      'id' => 1844,
      'title' => 'Любительский (одноголосый закадровый) (VORBIS)',
    ),
    1844 => 
    array (
      'id' => 1845,
      'title' => 'Любительский (двухголосый закадровый) (Valkrist & Keneretta)',
    ),
    1845 => 
    array (
      'id' => 1846,
      'title' => 'Профессиональный (многоголосый закадровый) (Союз работников дубляжа)',
    ),
    1846 => 
    array (
      'id' => 1847,
      'title' => 'Любительский (одноголосый закадровый) (Егоров Сергей)',
    ),
    1847 => 
    array (
      'id' => 1848,
      'title' => 'Любительский (одноголосый закадровый) (adrenal_in)',
    ),
    1848 => 
    array (
      'id' => 1849,
      'title' => 'Профессиональный (многоголосый закадровый) (Кубик в Кубе | Kubik³)',
    ),
    1849 => 
    array (
      'id' => 1850,
      'title' => 'Любительский (одноголосый закадровый) (Pr0peLLer)',
    ),
    1850 => 
    array (
      'id' => 1851,
      'title' => 'Любительский (одноголосый закадровый) (Bezkartuza)',
    ),
    1851 => 
    array (
      'id' => 1852,
      'title' => 'Любительский (двухголосый закадровый) (Molo Molo)',
    ),
    1852 => 
    array (
      'id' => 1853,
      'title' => 'Профессиональный (одноголосый закадровый) (Первый канал | ОРТ)',
    ),
    1853 => 
    array (
      'id' => 1854,
      'title' => 'Любительский (одноголосый закадровый) (Filipp)',
    ),
    1854 => 
    array (
      'id' => 1855,
      'title' => 'Профессиональный (двухголосый закадровый) (Кинолюкс)',
    ),
    1855 => 
    array (
      'id' => 1856,
      'title' => 'Любительский (двухголосый закадровый) (Amway + Elmа_)',
    ),
    1856 => 
    array (
      'id' => 1857,
      'title' => 'Профессиональный (двухголосый закадровый) (ERR)',
    ),
    1857 => 
    array (
      'id' => 1858,
      'title' => 'Любительский (одноголосый закадровый) (Акопян Акоп)',
    ),
    1858 => 
    array (
      'id' => 1859,
      'title' => 'Профессиональный (многоголосый закадровый) (Ростов-Папа)',
    ),
    1859 => 
    array (
      'id' => 1860,
      'title' => 'Любительский (многоголосый закадровый) (ArtSound)',
    ),
    1860 => 
    array (
      'id' => 1861,
      'title' => 'Любительский (одноголосый закадровый) (Максим Ибрагимов | amadeus160179)',
    ),
    1861 => 
    array (
      'id' => 1862,
      'title' => 'Любительский (многоголосый закадровый) (Asian Miracle Group)',
    ),
    1862 => 
    array (
      'id' => 1863,
      'title' => 'Любительский (одноголосый закадровый) (Laids)',
    ),
    1863 => 
    array (
      'id' => 1864,
      'title' => 'Профессиональный (двухголосый закадровый) (Sci-Fi Россия)',
    ),
    1864 => 
    array (
      'id' => 1865,
      'title' => 'Полное дублирование (Videofilm Int.)',
    ),
    1865 => 
    array (
      'id' => 1866,
      'title' => 'Профессиональный (многоголосый закадровый) (Arna Media)',
    ),
    1866 => 
    array (
      'id' => 1867,
      'title' => 'Любительский (одноголосый закадровый) (Maloi-1505)',
    ),
    1867 => 
    array (
      'id' => 1868,
      'title' => 'Любительский (двухголосый закадровый) (Chinese Movies)',
    ),
    1868 => 
    array (
      'id' => 1869,
      'title' => 'Любительский (многоголосый закадровый) (Студия 56)',
    ),
    1869 => 
    array (
      'id' => 1870,
      'title' => 'Любительский (двухголосый закадровый) (FanFilm)',
    ),
    1870 => 
    array (
      'id' => 1871,
      'title' => 'Полное дублирование (White Crow Sound)',
    ),
    1871 => 
    array (
      'id' => 1872,
      'title' => 'Любительский (одноголосый закадровый) (Anthill)',
    ),
    1872 => 
    array (
      'id' => 1873,
      'title' => 'Любительский (двухголосый закадровый) ( Shinigami & leburs)',
    ),
    1873 => 
    array (
      'id' => 1874,
      'title' => 'Любительский (одноголосый закадровый) (loster01)',
    ),
    1874 => 
    array (
      'id' => 1875,
      'title' => 'Любительский (одноголосый закадровый) (Miori)',
    ),
    1875 => 
    array (
      'id' => 1876,
      'title' => 'Любительский (одноголосый закадровый) (Valkrist)',
    ),
    1876 => 
    array (
      'id' => 1877,
      'title' => 'Любительский (многоголосый закадровый) (ПВА Шоу)',
    ),
    1877 => 
    array (
      'id' => 1878,
      'title' => 'Любительский (одноголосый закадровый) (stalker8181)',
    ),
    1878 => 
    array (
      'id' => 1879,
      'title' => 'Любительский (одноголосый закадровый) (KrisTee)',
    ),
    1879 => 
    array (
      'id' => 1880,
      'title' => 'Полное дублирование (Ronis AVI)',
    ),
    1880 => 
    array (
      'id' => 1881,
      'title' => 'Любительский (двухголосый закадровый) (MiatriSs & Rissy)',
    ),
    1881 => 
    array (
      'id' => 1882,
      'title' => 'Любительский (одноголосый закадровый) (Shizik)',
    ),
    1882 => 
    array (
      'id' => 1883,
      'title' => 'Любительский (одноголосый закадровый) (TheAngelOfDeath & SweetySacrifice)',
    ),
    1883 => 
    array (
      'id' => 1884,
      'title' => 'Любительский (одноголосый закадровый) (Иванов Олег)',
    ),
    1884 => 
    array (
      'id' => 1885,
      'title' => 'Любительский (многоголосый закадровый) (Dragon Voice | Horizon)',
    ),
    1885 => 
    array (
      'id' => 1886,
      'title' => 'Полное дублирование (Sigil)',
    ),
    1886 => 
    array (
      'id' => 1887,
      'title' => 'Профессиональный (двухголосый закадровый) (Lucky Production)',
    ),
    1887 => 
    array (
      'id' => 1888,
      'title' => 'Полное дублирование (КТК)',
    ),
    1888 => 
    array (
      'id' => 1889,
      'title' => 'Профессиональный (одноголосый закадровый) (Бурунов Сергей)',
    ),
    1889 => 
    array (
      'id' => 1890,
      'title' => 'Любительский (двухголосый закадровый) (Никитин Антон и Макеева Инга)',
    ),
    1890 => 
    array (
      'id' => 1891,
      'title' => 'Профессиональный (многоголосый закадровый) (Партнер Видео Фильм)',
    ),
    1891 => 
    array (
      'id' => 1892,
      'title' => 'Любительский (одноголосый закадровый) (Kedra)',
    ),
    1892 => 
    array (
      'id' => 1893,
      'title' => 'Любительский (одноголосый закадровый) (Кузин)',
    ),
    1893 => 
    array (
      'id' => 1894,
      'title' => 'Профессиональный (двухголосый закадровый) (Формат А)',
    ),
    1894 => 
    array (
      'id' => 1895,
      'title' => 'Профессиональный (двухголосый закадровый) (Сигма фильм)',
    ),
    1895 => 
    array (
      'id' => 1896,
      'title' => 'Любительский (двухголосый закадровый) (Данилов Владислав + Kedra)',
    ),
    1896 => 
    array (
      'id' => 1897,
      'title' => 'Любительский (одноголосый закадровый) (Дмитриев Кир)',
    ),
    1897 => 
    array (
      'id' => 1898,
      'title' => 'Любительский (многоголосый закадровый) (Paper Pirates)',
    ),
    1898 => 
    array (
      'id' => 1899,
      'title' => 'Полное дублирование (Postmodern)',
    ),
    1899 => 
    array (
      'id' => 1900,
      'title' => 'Полное дублирование (Студия 616)',
    ),
    1900 => 
    array (
      'id' => 1901,
      'title' => 'Любительский (одноголосый закадровый) (ShezzyPaw)',
    ),
    1901 => 
    array (
      'id' => 1902,
      'title' => 'Профессиональный (одноголосый закадровый) (Екатеринбург Арт)',
    ),
    1902 => 
    array (
      'id' => 1903,
      'title' => 'Любительский (многоголосый закадровый) (Dars Group)',
    ),
    1903 => 
    array (
      'id' => 1904,
      'title' => 'Любительский (одноголосый закадровый) (Свен Железнов)',
    ),
    1904 => 
    array (
      'id' => 1905,
      'title' => 'Любительский (двухголосый закадровый) (RelizLab)',
    ),
    1905 => 
    array (
      'id' => 1906,
      'title' => 'Профессиональный (многоголосый закадровый) (KION)',
    ),
    1906 => 
    array (
      'id' => 1907,
      'title' => 'Любительский (одноголосый закадровый) (Мельников Виталий | Дохаловоподобный)',
    ),
    1907 => 
    array (
      'id' => 1908,
      'title' => 'Профессиональный (двухголосый закадровый) (SAN Media)',
    ),
    1908 => 
    array (
      'id' => 1909,
      'title' => 'Любительский (одноголосый закадровый) (TimaMan)',
    ),
    1909 => 
    array (
      'id' => 1910,
      'title' => 'Любительский (двухголосый закадровый) (Anton Shanteau & Женька Пипец)',
    ),
    1910 => 
    array (
      'id' => 1911,
      'title' => 'Полное дублирование (HDrezka Studio)',
    ),
    1911 => 
    array (
      'id' => 1912,
      'title' => 'Любительский (двухголосый закадровый) (Dragon Voice | Horizon)',
    ),
    1912 => 
    array (
      'id' => 1913,
      'title' => 'Любительский (одноголосый закадровый) (INGVAR55)',
    ),
    1913 => 
    array (
      'id' => 1914,
      'title' => 'Полное дублирование (TVShows)',
    ),
    1914 => 
    array (
      'id' => 1915,
      'title' => 'Любительский (одноголосый закадровый) (napaBo3uk)',
    ),
    1915 => 
    array (
      'id' => 1916,
      'title' => 'Любительский (двухголосый закадровый) (Sakura)',
    ),
    1916 => 
    array (
      'id' => 1917,
      'title' => 'Любительский (многоголосый закадровый) (SerGoLeOne)',
    ),
    1917 => 
    array (
      'id' => 1918,
      'title' => 'Любительский (одноголосый закадровый) (The LEXX | Григорьев Андрей)',
    ),
    1918 => 
    array (
      'id' => 1919,
      'title' => 'Любительский (одноголосый закадровый) (Soer)',
    ),
    1919 => 
    array (
      'id' => 1920,
      'title' => 'Профессиональный (многоголосый закадровый) (Cartoon Network)',
    ),
    1920 => 
    array (
      'id' => 1921,
      'title' => 'Любительский (одноголосый закадровый) (FDN80)',
    ),
    1921 => 
    array (
      'id' => 1922,
      'title' => 'Авторский (одноголосый закадровый) (Dr.Lemon)',
    ),
    1922 => 
    array (
      'id' => 1923,
      'title' => 'Профессиональный (многоголосый закадровый) (ТВ-21 М)',
    ),
    1923 => 
    array (
      'id' => 1924,
      'title' => 'Любительский (многоголосый закадровый) (Всё сведено)',
    ),
    1924 => 
    array (
      'id' => 1925,
      'title' => 'Любительский (многоголосый закадровый) (F666R)',
    ),
    1925 => 
    array (
      'id' => 1926,
      'title' => 'Полное дублирование (Творческий технопарк Свердловской киностудии)',
    ),
    1926 => 
    array (
      'id' => 1927,
      'title' => 'Любительский (многоголосый закадровый) (Домик Сумасшедших Дабберов | ДСД)',
    ),
    1927 => 
    array (
      'id' => 1928,
      'title' => 'Профессиональный (многоголосый закадровый) (Play-Star)',
    ),
    1928 => 
    array (
      'id' => 1929,
      'title' => 'Любительский (двухголосый закадровый) (BTT-Team)',
    ),
    1929 => 
    array (
      'id' => 1930,
      'title' => 'Полное дублирование (Futuroom | Футурум)',
    ),
    1930 => 
    array (
      'id' => 1931,
      'title' => 'Любительский (одноголосый закадровый) (Little)',
    ),
    1931 => 
    array (
      'id' => 1932,
      'title' => 'Профессиональный (многоголосый закадровый) (Newstudio & Кубик в Кубе & БЯКО Рекордс)',
    ),
    1932 => 
    array (
      'id' => 1933,
      'title' => 'Любительский (одноголосый закадровый) (Головин Игорь)',
    ),
    1933 => 
    array (
      'id' => 1934,
      'title' => 'Любительский (многоголосый закадровый) (Храм тысячи струн + Байки Лаовая)',
    ),
    1934 => 
    array (
      'id' => 1935,
      'title' => 'Любительский (одноголосый закадровый) (Ивановский Владислав)',
    ),
    1935 => 
    array (
      'id' => 1936,
      'title' => 'Любительский (многоголосый закадровый) (Vasantsena)',
    ),
    1936 => 
    array (
      'id' => 1937,
      'title' => 'Любительский (двухголосый закадровый) (SkyeFilmTV)',
    ),
    1937 => 
    array (
      'id' => 1938,
      'title' => 'Любительский (многоголосый закадровый) (OnWave)',
    ),
    1938 => 
    array (
      'id' => 1939,
      'title' => 'Любительский (одноголосый закадровый) (Юки Нацуи)',
    ),
    1939 => 
    array (
      'id' => 1940,
      'title' => 'Полное дублирование (Cake Studio)',
    ),
    1940 => 
    array (
      'id' => 1941,
      'title' => 'Любительский (одноголосый закадровый) (Ash61)',
    ),
    1941 => 
    array (
      'id' => 1942,
      'title' => 'Любительский (одноголосый закадровый) (Kiiko Room)',
    ),
    1942 => 
    array (
      'id' => 1943,
      'title' => 'Профессиональный (двухголосый закадровый) (Байрам | Bayram)',
    ),
    1943 => 
    array (
      'id' => 1944,
      'title' => 'Любительский (одноголосый закадровый) (Кириллов Роман)',
    ),
    1944 => 
    array (
      'id' => 1945,
      'title' => 'Полное дублирование (HDrezka Studio 18+)',
    ),
    1945 => 
    array (
      'id' => 1946,
      'title' => 'Полное дублирование (Myn Yrgaq)',
    ),
    1946 => 
    array (
      'id' => 1947,
      'title' => 'Любительский (двухголосый закадровый) (AniMy)',
    ),
    1947 => 
    array (
      'id' => 1948,
      'title' => 'Любительский (одноголосый закадровый) (Milirina)',
    ),
    1948 => 
    array (
      'id' => 1949,
      'title' => 'Профессиональный (многоголосый закадровый) (Триада-фильм)',
    ),
    1949 => 
    array (
      'id' => 1950,
      'title' => 'Любительский (двухголосый закадровый) (Саня Белый & Marina Ri)',
    ),
    1950 => 
    array (
      'id' => 1951,
      'title' => 'Любительский (одноголосый закадровый) (L0cDoG)',
    ),
    1951 => 
    array (
      'id' => 1952,
      'title' => 'Профессиональный (одноголосый закадровый) (NewStudio)',
    ),
    1952 => 
    array (
      'id' => 1953,
      'title' => 'Любительский (одноголосый закадровый) (Ze6ypo)',
    ),
    1953 => 
    array (
      'id' => 1954,
      'title' => 'Полное дублирование (Straight.Pro)',
    ),
    1954 => 
    array (
      'id' => 1955,
      'title' => 'Любительский (многоголосый закадровый) (ViruseProject & DreamRecords & Xixidok)',
    ),
    1955 => 
    array (
      'id' => 1956,
      'title' => 'Любительский (одноголосый закадровый) (Пожилой Ксеноморф)',
    ),
    1956 => 
    array (
      'id' => 1957,
      'title' => 'Любительский (одноголосый закадровый) (Силин Александр)',
    ),
    1957 => 
    array (
      'id' => 1958,
      'title' => 'Любительский (двухголосый закадровый) (Interfilm)',
    ),
    1958 => 
    array (
      'id' => 1959,
      'title' => 'Профессиональный (одноголосый закадровый) (Герасимов Владимир)',
    ),
    1959 => 
    array (
      'id' => 1960,
      'title' => 'Профессиональный (двухголосый закадровый) (Тоникс Медиа)',
    ),
    1960 => 
    array (
      'id' => 1961,
      'title' => 'Любительский (одноголосый закадровый) (Itsazombie)',
    ),
    1961 => 
    array (
      'id' => 1962,
      'title' => 'Любительский (одноголосый закадровый) (Unicorn)',
    ),
    1962 => 
    array (
      'id' => 1963,
      'title' => 'Любительский (многоголосый закадровый) (AvePremier)',
    ),
    1963 => 
    array (
      'id' => 1964,
      'title' => 'Любительский (одноголосый закадровый) (Elma_)',
    ),
    1964 => 
    array (
      'id' => 1965,
      'title' => 'Любительский (одноголосый закадровый) (Amway)',
    ),
    1965 => 
    array (
      'id' => 1966,
      'title' => 'Любительский (одноголосый закадровый) (lik-lik)',
    ),
    1966 => 
    array (
      'id' => 1967,
      'title' => 'Любительский (одноголосый закадровый) (Macross)',
    ),
    1967 => 
    array (
      'id' => 1968,
      'title' => 'Профессиональный (многоголосый закадровый) (Voize)',
    ),
    1968 => 
    array (
      'id' => 1969,
      'title' => 'Любительский (одноголосый закадровый) (КураСгречей)',
    ),
    1969 => 
    array (
      'id' => 1970,
      'title' => 'Любительский (одноголосый закадровый) (Семенов Александр)',
    ),
    1970 => 
    array (
      'id' => 1971,
      'title' => 'Любительский (одноголосый закадровый) (Нимар Дамма)',
    ),
    1971 => 
    array (
      'id' => 1972,
      'title' => 'Любительский (одноголосый закадровый) (Shoker)',
    ),
    1972 => 
    array (
      'id' => 1973,
      'title' => 'Любительский (одноголосый закадровый) (micola777)',
    ),
    1973 => 
    array (
      'id' => 1974,
      'title' => 'Любительский (одноголосый закадровый) (djons2008)',
    ),
    1974 => 
    array (
      'id' => 1975,
      'title' => 'Любительский (одноголосый закадровый) (AsetKeyZet)',
    ),
    1975 => 
    array (
      'id' => 1976,
      'title' => 'Профессиональный (многоголосый закадровый) (Cineticle Films)',
    ),
    1976 => 
    array (
      'id' => 1977,
      'title' => 'Любительский (двухголосый закадровый) (ФСГ Альянс)',
    ),
    1977 => 
    array (
      'id' => 1978,
      'title' => 'Любительский (двухголосый закадровый) (Edson80 & miroshU)',
    ),
    1978 => 
    array (
      'id' => 1979,
      'title' => 'Любительский (многоголосый закадровый) (Fantasy\'s Group)',
    ),
    1979 => 
    array (
      'id' => 1980,
      'title' => 'Любительский (одноголосый закадровый) (Саммо)',
    ),
    1980 => 
    array (
      'id' => 1981,
      'title' => 'Любительский (двухголосый закадровый) (ПВА Шоу)',
    ),
    1981 => 
    array (
      'id' => 1982,
      'title' => 'Профессиональный (многоголосый закадровый) (Мистерия звука)',
    ),
    1982 => 
    array (
      'id' => 1983,
      'title' => 'Профессиональный (одноголосый закадровый) (Карин Ламсон | Smartzone)',
    ),
    1983 => 
    array (
      'id' => 1984,
      'title' => 'Профессиональный (одноголосый закадровый) (Репетур Борис)',
    ),
    1984 => 
    array (
      'id' => 1985,
      'title' => 'Профессиональный (двухголосый закадровый) (24ДОК | 24DOC)',
    ),
    1985 => 
    array (
      'id' => 1986,
      'title' => 'Профессиональный (многоголосый закадровый) (Юпикс)',
    ),
    1986 => 
    array (
      'id' => 1987,
      'title' => 'Любительский (двухголосый закадровый) (Ivnet Cinema)',
    ),
    1987 => 
    array (
      'id' => 1988,
      'title' => '[IN] Полное дублирование (Hindi)',
    ),
    1988 => 
    array (
      'id' => 1989,
      'title' => 'Любительский (двухголосый закадровый) (azazel & Лизавета)',
    ),
    1989 => 
    array (
      'id' => 1990,
      'title' => 'Любительский (двухголосый закадровый) (rost05 & Мая)',
    ),
    1990 => 
    array (
      'id' => 1991,
      'title' => 'Любительский (одноголосый закадровый) (SkomoroX)',
    ),
    1991 => 
    array (
      'id' => 1992,
      'title' => 'Любительский (одноголосый закадровый) (Joy)',
    ),
    1992 => 
    array (
      'id' => 1993,
      'title' => 'Любительский (одноголосый закадровый) (Rise)',
    ),
    1993 => 
    array (
      'id' => 1994,
      'title' => 'Любительский (двухголосый закадровый) (ВольТворц)',
    ),
    1994 => 
    array (
      'id' => 1995,
      'title' => 'Любительский (одноголосый закадровый) (Dorofeev)',
    ),
    1995 => 
    array (
      'id' => 1996,
      'title' => 'Любительский (двухголосый закадровый) (Ze6ypo)',
    ),
    1996 => 
    array (
      'id' => 1997,
      'title' => 'Любительский (многоголосый закадровый) (Batafurai team + Sound-Group)',
    ),
    1997 => 
    array (
      'id' => 1998,
      'title' => 'Любительский (двухголосый закадровый) (Ворон + Sandairina)',
    ),
    1998 => 
    array (
      'id' => 1999,
      'title' => 'Полное дублирование (Contentica)',
    ),
    1999 => 
    array (
      'id' => 2000,
      'title' => 'Любительский (двухголосый закадровый) (Paper Pirates)',
    ),
    2000 => 
    array (
      'id' => 2001,
      'title' => 'Полное дублирование (Swimming cat)',
    ),
    2001 => 
    array (
      'id' => 2002,
      'title' => 'Любительский (многоголосый закадровый) (EVA-Epic Voice Anime)',
    ),
    2002 => 
    array (
      'id' => 2003,
      'title' => 'Любительский (одноголосый закадровый) (Насыров Артур)',
    ),
    2003 => 
    array (
      'id' => 2004,
      'title' => 'Профессиональный (двухголосый закадровый) (MasterCo | МастерКо)',
    ),
    2004 => 
    array (
      'id' => 2005,
      'title' => 'Профессиональный (многоголосый закадровый) (Epic)',
    ),
    2005 => 
    array (
      'id' => 2006,
      'title' => 'Полное дублирование (RuDub)',
    ),
    2006 => 
    array (
      'id' => 2007,
      'title' => 'Любительский (одноголосый закадровый) (matros)',
    ),
    2007 => 
    array (
      'id' => 2008,
      'title' => 'Любительский (многоголосый закадровый) (Trivor)',
    ),
    2008 => 
    array (
      'id' => 2009,
      'title' => 'Любительский (двухголосый закадровый) (HistorY - Pus\'ki Production | H Puski Production)',
    ),
    2009 => 
    array (
      'id' => 2010,
      'title' => 'Полное дублирование (ZeroVoice & Watchman Voice)',
    ),
    2010 => 
    array (
      'id' => 2011,
      'title' => 'Полное дублирование (TMS | Trend Media Service)',
    ),
    2011 => 
    array (
      'id' => 2012,
      'title' => 'Любительский (одноголосый закадровый) (Den Pash)',
    ),
    2012 => 
    array (
      'id' => 2013,
      'title' => 'Любительский (одноголосый закадровый) (hammerklavier)',
    ),
    2013 => 
    array (
      'id' => 2014,
      'title' => 'Профессиональный (многоголосый закадровый) (Comedy Central)',
    ),
    2014 => 
    array (
      'id' => 2015,
      'title' => 'Полное дублирование (ВПодполье)',
    ),
    2015 => 
    array (
      'id' => 2016,
      'title' => 'Любительский (двухголосый закадровый) (AnPro)',
    ),
    2016 => 
    array (
      'id' => 2017,
      'title' => 'Любительский (многоголосый закадровый) (ВПодполье)',
    ),
    2017 => 
    array (
      'id' => 2018,
      'title' => 'Профессиональный (многоголосый закадровый) (Paragraph Media)',
    ),
    2018 => 
    array (
      'id' => 2019,
      'title' => 'Любительский (одноголосый закадровый) (Anton Shanteau)',
    ),
    2019 => 
    array (
      'id' => 2020,
      'title' => 'Профессиональный (двухголосый закадровый) (Твин)',
    ),
    2020 => 
    array (
      'id' => 2021,
      'title' => 'Любительский (многоголосый закадровый) (Izanami & DeadSno & den904)',
    ),
    2021 => 
    array (
      'id' => 2022,
      'title' => 'Полное дублирование (Something Cool)',
    ),
    2022 => 
    array (
      'id' => 2023,
      'title' => 'Любительский (двухголосый закадровый) (LanFan)',
    ),
    2023 => 
    array (
      'id' => 2024,
      'title' => 'Профессиональный (многоголосый закадровый) (Intercommunication)',
    ),
    2024 => 
    array (
      'id' => 2025,
      'title' => 'Профессиональный (многоголосый закадровый) (WinMedia)',
    ),
    2025 => 
    array (
      'id' => 2026,
      'title' => 'Любительский (одноголосый закадровый) (Агма)',
    ),
    2026 => 
    array (
      'id' => 2027,
      'title' => 'Полное дублирование (Екатеринбург Арт)',
    ),
    2027 => 
    array (
      'id' => 2028,
      'title' => 'Полное дублирование (MIN-Dub Studio)',
    ),
    2028 => 
    array (
      'id' => 2029,
      'title' => 'Полное дублирование (Дубляжная)',
    ),
    2029 => 
    array (
      'id' => 2030,
      'title' => 'Любительский (одноголосый закадровый) (Redar)',
    ),
    2030 => 
    array (
      'id' => 2031,
      'title' => 'Профессиональный (многоголосый закадровый) (Jibek Joly)',
    ),
    2031 => 
    array (
      'id' => 2032,
      'title' => 'Любительский (многоголосый закадровый) (ТО Радио)',
    ),
    2032 => 
    array (
      'id' => 2033,
      'title' => 'Любительский (одноголосый закадровый) (@zer)',
    ),
    2033 => 
    array (
      'id' => 2034,
      'title' => 'Профессиональный (многоголосый закадровый) (Каре видео)',
    ),
    2034 => 
    array (
      'id' => 2035,
      'title' => 'Профессиональный (многоголосый закадровый) (ТРК Петербург)',
    ),
    2035 => 
    array (
      'id' => 2036,
      'title' => 'Любительский (одноголосый закадровый) (Творческий центр Лестница)',
    ),
    2036 => 
    array (
      'id' => 2037,
      'title' => 'Любительский (одноголосый закадровый) (Воронцов Р. | VremeniNet)',
    ),
    2037 => 
    array (
      'id' => 2038,
      'title' => 'Любительский (одноголосый закадровый) (sMUGENom)',
    ),
    2038 => 
    array (
      'id' => 2039,
      'title' => 'Любительский (двухголосый закадровый) (Ворон + Лана)',
    ),
    2039 => 
    array (
      'id' => 2040,
      'title' => 'Любительский (одноголосый закадровый) (Kagura Ent.)',
    ),
    2040 => 
    array (
      'id' => 2041,
      'title' => 'Любительский (двухголосый закадровый) (FumoDub)',
    ),
    2041 => 
    array (
      'id' => 2042,
      'title' => 'Любительский (одноголосый закадровый) (Трина Дубовицкая)',
    ),
    2042 => 
    array (
      'id' => 2043,
      'title' => 'Любительский (одноголосый закадровый) (Jacko6000)',
    ),
    2043 => 
    array (
      'id' => 2044,
      'title' => 'Профессиональный (многоголосый закадровый) (НТН)',
    ),
    2044 => 
    array (
      'id' => 2045,
      'title' => 'Любительский (многоголосый закадровый) (OpenDUB)',
    ),
    2045 => 
    array (
      'id' => 2046,
      'title' => 'Любительский (одноголосый закадровый) (Sumire)',
    ),
    2046 => 
    array (
      'id' => 2047,
      'title' => 'Любительский (одноголосый закадровый) (Крюков Алексей | Alassea)',
    ),
    2047 => 
    array (
      'id' => 2048,
      'title' => 'Любительский (многоголосый закадровый) (Yuka_chan & DeadSno & den904)',
    ),
    2048 => 
    array (
      'id' => 2049,
      'title' => 'Любительский (двухголосый закадровый) (Rustorrents Production)',
    ),
    2049 => 
    array (
      'id' => 2050,
      'title' => 'Профессиональный (многоголосый закадровый) (Zакадр)',
    ),
    2050 => 
    array (
      'id' => 2051,
      'title' => 'Любительский (двухголосый закадровый) (GREEN TEA & КиНаТаН)',
    ),
    2051 => 
    array (
      'id' => 2052,
      'title' => 'Любительский (одноголосый закадровый) (Максимук Роман)',
    ),
    2052 => 
    array (
      'id' => 2053,
      'title' => 'Любительский (одноголосый закадровый) (xaros)',
    ),
    2053 => 
    array (
      'id' => 2054,
      'title' => 'Любительский (одноголосый закадровый) (Verum)',
    ),
    2054 => 
    array (
      'id' => 2055,
      'title' => 'Любительский (многоголосый закадровый) (Davoices)',
    ),
    2055 => 
    array (
      'id' => 2056,
      'title' => 'Профессиональный (многоголосый закадровый) (Sci-Fi Россия)',
    ),
    2056 => 
    array (
      'id' => 2057,
      'title' => 'Любительский (многоголосый закадровый) (Agent Smit & DeadSno & den904)',
    ),
    2057 => 
    array (
      'id' => 2058,
      'title' => 'Профессиональный (двухголосый закадровый) (ТонВокс | ToneVox)',
    ),
    2058 => 
    array (
      'id' => 2059,
      'title' => 'Любительский (двухголосый закадровый) (Rudolf & Оксана)',
    ),
    2059 => 
    array (
      'id' => 2060,
      'title' => 'Полное дублирование (WinMedia)',
    ),
    2060 => 
    array (
      'id' => 2061,
      'title' => 'Любительский (двухголосый закадровый) (Космические переводчики из 90-ых)',
    ),
    2061 => 
    array (
      'id' => 2062,
      'title' => 'Любительский (многоголосый закадровый) (FavaidMedia)',
    ),
    2062 => 
    array (
      'id' => 2063,
      'title' => 'Любительский (двухголосый закадровый) (oleksus)',
    ),
    2063 => 
    array (
      'id' => 2064,
      'title' => 'Любительский (двухголосый закадровый) (Юлия Баскова и Александр К.)',
    ),
    2064 => 
    array (
      'id' => 2065,
      'title' => 'Профессиональный (многоголосый закадровый) (Проект Продакшн)',
    ),
    2065 => 
    array (
      'id' => 2066,
      'title' => 'Любительский (одноголосый закадровый) (NHK47)',
    ),
    2066 => 
    array (
      'id' => 2067,
      'title' => 'Полное дублирование (Русский репортаж)',
    ),
    2067 => 
    array (
      'id' => 2068,
      'title' => 'Любительский (многоголосый закадровый) (Underground voice)',
    ),
    2068 => 
    array (
      'id' => 2069,
      'title' => 'Любительский (одноголосый закадровый) (Utgella)',
    ),
    2069 => 
    array (
      'id' => 2070,
      'title' => 'Любительский (одноголосый закадровый) (Пейсти Ярл)',
    ),
    2070 => 
    array (
      'id' => 2071,
      'title' => 'Любительский (многоголосый закадровый) (clubmiaandme)',
    ),
    2071 => 
    array (
      'id' => 2072,
      'title' => 'Любительский (одноголосый закадровый) (Эльфика Эльфийская)',
    ),
    2072 => 
    array (
      'id' => 2073,
      'title' => 'Любительский (двухголосый закадровый) (Воронов Александр и Макеева Инга)',
    ),
    2073 => 
    array (
      'id' => 2074,
      'title' => 'Полное дублирование (Lazer Video | Лазер видео)',
    ),
    2074 => 
    array (
      'id' => 2075,
      'title' => 'Любительский (одноголосый закадровый) (Вадим Звонков)',
    ),
    2075 => 
    array (
      'id' => 2076,
      'title' => 'Любительский (многоголосый закадровый) (Seven Media)',
    ),
    2076 => 
    array (
      'id' => 2077,
      'title' => 'Любительский (многоголосый закадровый) (Nice Media)',
    ),
    2077 => 
    array (
      'id' => 2078,
      'title' => 'Любительский (двухголосый закадровый) (Kiriana & strOgg)',
    ),
    2078 => 
    array (
      'id' => 2079,
      'title' => 'Профессиональный (многоголосый закадровый) (DVD Land)',
    ),
    2079 => 
    array (
      'id' => 2080,
      'title' => 'Любительский (одноголосый закадровый) (Tony)',
    ),
    2080 => 
    array (
      'id' => 2081,
      'title' => 'Любительский (одноголосый закадровый) (Рыбакова Ланна | LiriaDouleur)',
    ),
    2081 => 
    array (
      'id' => 2082,
      'title' => 'Любительский (двухголосый закадровый) (Vasantsena + Joy)',
    ),
    2082 => 
    array (
      'id' => 2083,
      'title' => 'Любительский (одноголосый закадровый) (Пименов Дмитрий | gnidozzz)',
    ),
    2083 => 
    array (
      'id' => 2084,
      'title' => 'Полное дублирование (НеаДекват Records)',
    ),
    2084 => 
    array (
      'id' => 2085,
      'title' => 'Авторский (одноголосый закадровый) (Королёв Виктор)',
    ),
    2085 => 
    array (
      'id' => 2086,
      'title' => 'Профессиональный (многоголосый закадровый) (SAI Studio)',
    ),
    2086 => 
    array (
      'id' => 2087,
      'title' => 'Любительский (двухголосый закадровый) (Nastia + Aleksgreek)',
    ),
    2087 => 
    array (
      'id' => 2088,
      'title' => 'Любительский (одноголосый закадровый) (MCShamaN)',
    ),
    2088 => 
    array (
      'id' => 2089,
      'title' => 'Профессиональный (многоголосый закадровый) (Soundmasters)',
    ),
    2089 => 
    array (
      'id' => 2090,
      'title' => 'Любительский (одноголосый закадровый) (Эндшпиль)',
    ),
    2090 => 
    array (
      'id' => 2091,
      'title' => 'Любительский (многоголосый закадровый) (DisneyJazz)',
    ),
    2091 => 
    array (
      'id' => 2092,
      'title' => 'Профессиональный (двухголосый закадровый) (Zinko)',
    ),
    2092 => 
    array (
      'id' => 2093,
      'title' => 'Полное дублирование (Soundmasters)',
    ),
    2093 => 
    array (
      'id' => 2094,
      'title' => 'Профессиональный (одноголосый закадровый) (Студия Дубль)',
    ),
    2094 => 
    array (
      'id' => 2095,
      'title' => 'Любительский (многоголосый закадровый) (Дубляжная)',
    ),
    2095 => 
    array (
      'id' => 2096,
      'title' => 'Любительский (многоголосый закадровый) (Saint-Sound + ViruseProject)',
    ),
    2096 => 
    array (
      'id' => 2097,
      'title' => 'Профессиональный (одноголосый закадровый) (RuDub)',
    ),
    2097 => 
    array (
      'id' => 2098,
      'title' => 'Профессиональный (двухголосый закадровый) (SoulPro)',
    ),
    2098 => 
    array (
      'id' => 2099,
      'title' => 'Профессиональный (двухголосый закадровый) (Пилот)',
    ),
    2099 => 
    array (
      'id' => 2100,
      'title' => 'Полное дублирование (Исида)',
    ),
    2100 => 
    array (
      'id' => 2101,
      'title' => 'Профессиональный (двухголосый закадровый) (Телеканал "АСТ")',
    ),
    2101 => 
    array (
      'id' => 2102,
      'title' => 'Любительский (одноголосый закадровый) (Алекс Килька)',
    ),
    2102 => 
    array (
      'id' => 2103,
      'title' => 'Любительский (одноголосый закадровый) (Балтик Видеосервис)',
    ),
    2103 => 
    array (
      'id' => 2104,
      'title' => 'Любительский (многоголосый закадровый) (AniVis Group & XDUB Dorama)',
    ),
    2104 => 
    array (
      'id' => 2105,
      'title' => 'Любительский (одноголосый закадровый) (Unmei)',
    ),
    2105 => 
    array (
      'id' => 2106,
      'title' => 'Любительский (двухголосый закадровый) (Cowabanga Studio & STEPonee)',
    ),
    2106 => 
    array (
      'id' => 2107,
      'title' => 'Профессиональный (многоголосый закадровый) (AAA-Sound)',
    ),
    2107 => 
    array (
      'id' => 2108,
      'title' => 'Любительский (одноголосый закадровый) (Вересков Андрей)',
    ),
    2108 => 
    array (
      'id' => 2109,
      'title' => 'Любительский (одноголосый закадровый) (Яшодарани даси)',
    ),
    2109 => 
    array (
      'id' => 2110,
      'title' => 'Любительский (одноголосый закадровый) (Хануманов Дмитрий)',
    ),
    2110 => 
    array (
      'id' => 2111,
      'title' => 'Профессиональный (двухголосый закадровый) (Мосфильм)',
    ),
    2111 => 
    array (
      'id' => 2112,
      'title' => 'Профессиональный (двухголосый закадровый) (Дивайс)',
    ),
    2112 => 
    array (
      'id' => 2113,
      'title' => 'Любительский (одноголосый закадровый) (Диман_MF)',
    ),
    2113 => 
    array (
      'id' => 2114,
      'title' => 'Любительский (одноголосый закадровый) (Radamant)',
    ),
    2114 => 
    array (
      'id' => 2115,
      'title' => 'Профессиональный (многоголосый закадровый) (Naked Science)',
    ),
    2115 => 
    array (
      'id' => 2116,
      'title' => 'Любительский (двухголосый закадровый) (ALEKS KV & May)',
    ),
    2116 => 
    array (
      'id' => 2117,
      'title' => 'Любительский (одноголосый закадровый) (Yuka_chan)',
    ),
    2117 => 
    array (
      'id' => 2118,
      'title' => 'Любительский (двухголосый закадровый) (Sound Film)',
    ),
    2118 => 
    array (
      'id' => 2119,
      'title' => 'Любительский (двухголосый закадровый) (GREEN TEA & ViruseProject)',
    ),
    2119 => 
    array (
      'id' => 2120,
      'title' => 'Любительский (одноголосый закадровый) (Бочаров Андрей)',
    ),
    2120 => 
    array (
      'id' => 2121,
      'title' => 'Профессиональный (двухголосый закадровый) (CLS Media)',
    ),
    2121 => 
    array (
      'id' => 2122,
      'title' => 'Любительский (одноголосый закадровый) (Лана)',
    ),
    2122 => 
    array (
      'id' => 2123,
      'title' => 'Любительский (одноголосый закадровый) (GYOZARAMA)',
    ),
    2123 => 
    array (
      'id' => 2124,
      'title' => 'Профессиональный (многоголосый закадровый) (ТО Радуга)',
    ),
    2124 => 
    array (
      'id' => 2125,
      'title' => 'Любительский (двухголосый закадровый) (Tsunami voice)',
    ),
    2125 => 
    array (
      'id' => 2126,
      'title' => 'Полное дублирование (Кинопремьера)',
    ),
    2126 => 
    array (
      'id' => 2127,
      'title' => 'Любительский (многоголосый закадровый) (Трина Дубовицкая, Jade & ALEKS KV)',
    ),
    2127 => 
    array (
      'id' => 2128,
      'title' => 'Профессиональный (многоголосый закадровый) (Пеликан)',
    ),
    2128 => 
    array (
      'id' => 2129,
      'title' => 'Профессиональный (многоголосый закадровый) (Nova)',
    ),
    2129 => 
    array (
      'id' => 2130,
      'title' => 'Профессиональный (одноголосый закадровый) (Союз работников дубляжа)',
    ),
    2130 => 
    array (
      'id' => 2131,
      'title' => 'Любительский (двухголосый закадровый) (Ворон + Milirina)',
    ),
    2131 => 
    array (
      'id' => 2132,
      'title' => 'Профессиональный (многоголосый закадровый) (Seipris | Сейприс)',
    ),
    2132 => 
    array (
      'id' => 2133,
      'title' => 'Полное дублирование (Ялтинская киностудия)',
    ),
    2133 => 
    array (
      'id' => 2134,
      'title' => 'Любительский (двухголосый закадровый) (denisblek & Tanya)',
    ),
    2134 => 
    array (
      'id' => 2135,
      'title' => 'Полное дублирование (DigiMedia)',
    ),
    2135 => 
    array (
      'id' => 2136,
      'title' => 'Любительский (двухголосый закадровый) (JuiceTime)',
    ),
    2136 => 
    array (
      'id' => 2137,
      'title' => 'Любительский (одноголосый закадровый) (Сука-падла)',
    ),
    2137 => 
    array (
      'id' => 2138,
      'title' => 'Любительский (двухголосый закадровый) (Ник Ганфайтер и Катя Неодим)',
    ),
    2138 => 
    array (
      'id' => 2139,
      'title' => 'Любительский (одноголосый закадровый) (russ)',
    ),
    2139 => 
    array (
      'id' => 2140,
      'title' => 'Любительский (двухголосый закадровый) (GREEN TEA & HonDub)',
    ),
    2140 => 
    array (
      'id' => 2141,
      'title' => 'Любительский (одноголосый закадровый) (svta3)',
    ),
    2141 => 
    array (
      'id' => 2142,
      'title' => 'Профессиональный (двухголосый закадровый) (автоматический перевод Яндекс)',
    ),
    2142 => 
    array (
      'id' => 2143,
      'title' => 'Любительский (двухголосый закадровый) (Tarahb + Khushinka)',
    ),
    2143 => 
    array (
      'id' => 2144,
      'title' => 'Любительский (многоголосый закадровый) (MiraiDuB)',
    ),
    2144 => 
    array (
      'id' => 2145,
      'title' => 'Профессиональный (многоголосый закадровый) (15КЗ)',
    ),
    2145 => 
    array (
      'id' => 2146,
      'title' => 'Полное дублирование (Рисалат)',
    ),
    2146 => 
    array (
      'id' => 2147,
      'title' => 'Любительский (многоголосый закадровый) (Храм Дорам ТВ)',
    ),
    2147 => 
    array (
      'id' => 2148,
      'title' => 'Профессиональный (многоголосый закадровый) (RGB)',
    ),
    2148 => 
    array (
      'id' => 2149,
      'title' => 'Любительский (двухголосый закадровый) (TURKserial)',
    ),
    2149 => 
    array (
      'id' => 2150,
      'title' => 'Любительский (двухголосый закадровый) (Davoices)',
    ),
    2150 => 
    array (
      'id' => 2151,
      'title' => 'Любительский (одноголосый закадровый) (Нордер | Norder)',
    ),
    2151 => 
    array (
      'id' => 2152,
      'title' => 'Любительский (одноголосый закадровый) (Миханоша Геннадий | Нигериец)',
    ),
    2152 => 
    array (
      'id' => 2153,
      'title' => 'Полное дублирование (infinity)',
    ),
    2153 => 
    array (
      'id' => 2154,
      'title' => 'Профессиональный (двухголосый закадровый) (Гутта Медиа)',
    ),
    2154 => 
    array (
      'id' => 2155,
      'title' => 'Профессиональный (двухголосый закадровый) (Киностудия им. Горького)',
    ),
    2155 => 
    array (
      'id' => 2156,
      'title' => 'Любительский (одноголосый закадровый) (STAR-TREK)',
    ),
    2156 => 
    array (
      'id' => 2157,
      'title' => 'Полное дублирование (Реанимедиа)',
    ),
    2157 => 
    array (
      'id' => 2158,
      'title' => 'Любительский (одноголосый закадровый) (eto-ile)',
    ),
    2158 => 
    array (
      'id' => 2159,
      'title' => 'Любительский (одноголосый закадровый) (Hank)',
    ),
    2159 => 
    array (
      'id' => 2160,
      'title' => 'Любительский (многоголосый закадровый) (Ушастая озвучка)',
    ),
    2160 => 
    array (
      'id' => 2161,
      'title' => 'Профессиональный (многоголосый закадровый) (kinoa)',
    ),
    2161 => 
    array (
      'id' => 2162,
      'title' => 'Любительский (двухголосый закадровый) (Asian Miracle Group & Exa)',
    ),
    2162 => 
    array (
      'id' => 2163,
      'title' => 'Любительский (одноголосый закадровый) (Высокая Азия)',
    ),
    2163 => 
    array (
      'id' => 2164,
      'title' => 'Любительский (одноголосый закадровый) (profesor1975)',
    ),
    2164 => 
    array (
      'id' => 2165,
      'title' => 'Профессиональный (многоголосый закадровый) (Кинохит)',
    ),
    2165 => 
    array (
      'id' => 2166,
      'title' => 'Полное дублирование (BrainDead Project)',
    ),
    2166 => 
    array (
      'id' => 2167,
      'title' => 'Любительский (одноголосый закадровый) (Империя комиксов)',
    ),
    2167 => 
    array (
      'id' => 2168,
      'title' => 'Любительский (одноголосый закадровый) (Сэм Квинта)',
    ),
    2168 => 
    array (
      'id' => 2169,
      'title' => 'Любительский (многоголосый закадровый) (Cat in Box)',
    ),
    2169 => 
    array (
      'id' => 2170,
      'title' => 'Любительский (одноголосый закадровый) (Do_cent1996)',
    ),
    2170 => 
    array (
      'id' => 2171,
      'title' => 'Профессиональный (одноголосый закадровый) (Тоникс Медиа)',
    ),
    2171 => 
    array (
      'id' => 2172,
      'title' => 'Любительский (одноголосый закадровый) (Мегапыхарь)',
    ),
    2172 => 
    array (
      'id' => 2173,
      'title' => 'Полное дублирование (APhoenixVoice)',
    ),
    2173 => 
    array (
      'id' => 2174,
      'title' => 'Любительский (многоголосый закадровый) (To4ka + Kiitos)',
    ),
    2174 => 
    array (
      'id' => 2175,
      'title' => 'Любительский (одноголосый закадровый) (Molodoy)',
    ),
    2175 => 
    array (
      'id' => 2176,
      'title' => 'Полное дублирование (ILD Studio)',
    ),
    2176 => 
    array (
      'id' => 2177,
      'title' => 'Любительский (многоголосый закадровый) (RG Evolution)',
    ),
    2177 => 
    array (
      'id' => 2178,
      'title' => 'Любительский (одноголосый закадровый) (Kallaider)',
    ),
    2178 => 
    array (
      'id' => 2179,
      'title' => 'Любительский (многоголосый закадровый) (Невинный кружок)',
    ),
    2179 => 
    array (
      'id' => 2180,
      'title' => 'Профессиональный (двухголосый закадровый) (Мультимания)',
    ),
    2180 => 
    array (
      'id' => 2181,
      'title' => 'Любительский (двухголосый закадровый) (Urasiko + Линда)',
    ),
    2181 => 
    array (
      'id' => 2182,
      'title' => 'Профессиональный (одноголосый закадровый) (Кураж-Бамбей 18+)',
    ),
    2182 => 
    array (
      'id' => 2183,
      'title' => 'Любительский (двухголосый закадровый) (ДК & Антонина Конева)',
    ),
    2183 => 
    array (
      'id' => 2184,
      'title' => 'Любительский (многоголосый закадровый) (Khushi Khiladi)',
    ),
    2184 => 
    array (
      'id' => 2185,
      'title' => 'Полное дублирование (Контент Студио)',
    ),
    2185 => 
    array (
      'id' => 2186,
      'title' => 'Профессиональный (одноголосый закадровый) (Стрелков Дмитрий)',
    ),
    2186 => 
    array (
      'id' => 2187,
      'title' => 'Любительский (двухголосый закадровый) (EvilBee)',
    ),
    2187 => 
    array (
      'id' => 2188,
      'title' => 'Профессиональный (двухголосый закадровый) (Comedy Central)',
    ),
    2188 => 
    array (
      'id' => 2189,
      'title' => 'Любительский (двухголосый закадровый) (Храм тысячи струн + Красота и сказка)',
    ),
    2189 => 
    array (
      'id' => 2190,
      'title' => 'Полное дублирование (Comedy Central)',
    ),
    2190 => 
    array (
      'id' => 2191,
      'title' => 'Профессиональный (многоголосый закадровый) (Viasat Kino World)',
    ),
    2191 => 
    array (
      'id' => 2192,
      'title' => 'Любительский (одноголосый закадровый) (Pucs)',
    ),
    2192 => 
    array (
      'id' => 2193,
      'title' => 'Любительский (одноголосый закадровый) (Кузьмичев Сергей)',
    ),
    2193 => 
    array (
      'id' => 2194,
      'title' => 'Любительский (двухголосый закадровый) (Шлыков Владимир и Шлыкова Елена)',
    ),
    2194 => 
    array (
      'id' => 2195,
      'title' => 'Любительский (многоголосый закадровый) (JimboTeam)',
    ),
    2195 => 
    array (
      'id' => 2196,
      'title' => 'Профессиональный (многоголосый закадровый) (Блэкбёрд Саунд | Blackbird Sound)',
    ),
    2196 => 
    array (
      'id' => 2197,
      'title' => 'Любительский (одноголосый закадровый) (Кауфман Ольга)',
    ),
    2197 => 
    array (
      'id' => 2198,
      'title' => 'Авторский (одноголосый закадровый) (Красов Леонид | Весельчак)',
    ),
    2198 => 
    array (
      'id' => 2199,
      'title' => 'Любительский (одноголосый закадровый) (Vova Mnemic)',
    ),
    2199 => 
    array (
      'id' => 2200,
      'title' => 'Полное дублирование (ВГТРК)',
    ),
    2200 => 
    array (
      'id' => 2201,
      'title' => 'Любительский (двухголосый закадровый) (ТО Синека)',
    ),
    2201 => 
    array (
      'id' => 2202,
      'title' => 'Любительский (одноголосый закадровый) (VadimNaz)',
    ),
    2202 => 
    array (
      'id' => 2203,
      'title' => 'Любительский (двухголосый закадровый) (Dragon\'s Lair)',
    ),
    2203 => 
    array (
      'id' => 2204,
      'title' => 'Полное дублирование (BandFilms | SB+FF)',
    ),
    2204 => 
    array (
      'id' => 2205,
      'title' => 'Любительский (многоголосый закадровый) (DubClub)',
    ),
    2205 => 
    array (
      'id' => 2206,
      'title' => 'Полное дублирование (НТК)',
    ),
    2206 => 
    array (
      'id' => 2207,
      'title' => 'Любительский (одноголосый закадровый) (MKStudio)',
    ),
    2207 => 
    array (
      'id' => 2208,
      'title' => 'Полное дублирование (CN RSEE)',
    ),
    2208 => 
    array (
      'id' => 2209,
      'title' => 'Любительский (одноголосый закадровый) (Iggy Peters)',
    ),
    2209 => 
    array (
      'id' => 2210,
      'title' => 'Профессиональный (многоголосый закадровый) (infinity)',
    ),
    2210 => 
    array (
      'id' => 2211,
      'title' => 'Профессиональный (многоголосый закадровый) (Спайр)',
    ),
    2211 => 
    array (
      'id' => 2212,
      'title' => 'Полное дублирование (студия Диван)',
    ),
    2212 => 
    array (
      'id' => 2213,
      'title' => 'Любительский (одноголосый закадровый) (Hammer1978)',
    ),
    2213 => 
    array (
      'id' => 2214,
      'title' => 'Полное дублирование (КупиГолос)',
    ),
    2214 => 
    array (
      'id' => 2215,
      'title' => 'Любительский (одноголосый закадровый) (Hige)',
    ),
    2215 => 
    array (
      'id' => 2216,
      'title' => 'Любительский (многоголосый закадровый) (NemFilm)',
    ),
    2216 => 
    array (
      'id' => 2217,
      'title' => 'Любительский (многоголосый закадровый) (Epic Team)',
    ),
    2217 => 
    array (
      'id' => 2218,
      'title' => 'Любительский (двухголосый закадровый) (Saint-Sound)',
    ),
    2218 => 
    array (
      'id' => 2219,
      'title' => 'Любительский (одноголосый закадровый) (диктор DFV)',
    ),
    2219 => 
    array (
      'id' => 2220,
      'title' => 'Любительский (одноголосый закадровый) (sergik1)',
    ),
    2220 => 
    array (
      'id' => 2221,
      'title' => 'Любительский (двухголосый закадровый) (Ruben Mendez & Луичень)',
    ),
    2221 => 
    array (
      'id' => 2222,
      'title' => 'Любительский (двухголосый закадровый) (Белоконский Артём и Истомина Кристина)',
    ),
    2222 => 
    array (
      'id' => 2223,
      'title' => 'Любительский (одноголосый закадровый) (Дворцов Василий)',
    ),
    2223 => 
    array (
      'id' => 2224,
      'title' => 'Полное дублирование (Tone Town)',
    ),
    2224 => 
    array (
      'id' => 2225,
      'title' => 'Любительский (двухголосый закадровый) (FilmGate)',
    ),
    2225 => 
    array (
      'id' => 2226,
      'title' => 'Любительский (одноголосый закадровый) (MUGEN)',
    ),
    2226 => 
    array (
      'id' => 2227,
      'title' => 'Любительский (одноголосый закадровый) (jugin)',
    ),
    2227 => 
    array (
      'id' => 2228,
      'title' => 'Полное дублирование (Warm Sound)',
    ),
    2228 => 
    array (
      'id' => 2229,
      'title' => 'Любительский (многоголосый закадровый) (SAFARI SOUND)',
    ),
    2229 => 
    array (
      'id' => 2230,
      'title' => 'Профессиональный (многоголосый закадровый) (ХИТ)',
    ),
    2230 => 
    array (
      'id' => 2231,
      'title' => 'Любительский (одноголосый закадровый) (Cruel Dez)',
    ),
    2231 => 
    array (
      'id' => 2232,
      'title' => 'Любительский (одноголосый закадровый) (Tet TV+)',
    ),
    2232 => 
    array (
      'id' => 2233,
      'title' => 'Любительский (двухголосый закадровый) (DeziDenizi)',
    ),
    2233 => 
    array (
      'id' => 2234,
      'title' => 'Полное дублирование (Петербургский дубляж)',
    ),
    2234 => 
    array (
      'id' => 2235,
      'title' => 'Любительский (одноголосый закадровый) (Key Key | apravdin01)',
    ),
    2235 => 
    array (
      'id' => 2236,
      'title' => 'Любительский (одноголосый закадровый) (kagaku SPEC)',
    ),
    2236 => 
    array (
      'id' => 2237,
      'title' => 'Полное дублирование (Ракурс)',
    ),
    2237 => 
    array (
      'id' => 2238,
      'title' => 'Профессиональный (двухголосый закадровый) (AMC)',
    ),
    2238 => 
    array (
      'id' => 2239,
      'title' => 'Любительский (одноголосый закадровый) (JuiceTime)',
    ),
    2239 => 
    array (
      'id' => 2240,
      'title' => 'Любительский (одноголосый закадровый) (Syntet)',
    ),
    2240 => 
    array (
      'id' => 2241,
      'title' => 'Профессиональный (одноголосый закадровый) (Ярославцев Андрей)',
    ),
    2241 => 
    array (
      'id' => 2242,
      'title' => 'Полное дублирование (Enjoy Movies)',
    ),
    2242 => 
    array (
      'id' => 2243,
      'title' => 'Любительский (многоголосый закадровый) (Гремлины)',
    ),
    2243 => 
    array (
      'id' => 2244,
      'title' => 'Любительский (одноголосый закадровый) (Жевелюк Иван | vannike79)',
    ),
    2244 => 
    array (
      'id' => 2245,
      'title' => 'Полное дублирование (New Media)',
    ),
    2245 => 
    array (
      'id' => 2246,
      'title' => 'Профессиональный (многоголосый закадровый) (Союзмультфильм)',
    ),
    2246 => 
    array (
      'id' => 2247,
      'title' => 'Авторский (одноголосый закадровый) (Данилов Булат | Corvin)',
    ),
    2247 => 
    array (
      'id' => 2248,
      'title' => 'Любительский (одноголосый закадровый) (Alex White)',
    ),
    2248 => 
    array (
      'id' => 2249,
      'title' => 'Полное дублирование (HeatSound)',
    ),
    2249 => 
    array (
      'id' => 2250,
      'title' => 'Любительский (многоголосый закадровый) (Selena & LovelyVox)',
    ),
    2250 => 
    array (
      'id' => 2251,
      'title' => 'Любительский (двухголосый закадровый) (Joe30 & Julia)',
    ),
    2251 => 
    array (
      'id' => 2252,
      'title' => 'Любительский (одноголосый закадровый) (Наталия Ник)',
    ),
    2252 => 
    array (
      'id' => 2253,
      'title' => 'Полное дублирование (Whiskey Sound)',
    ),
    2253 => 
    array (
      'id' => 2254,
      'title' => 'Любительский (одноголосый закадровый) (Rico Santos)',
    ),
    2254 => 
    array (
      'id' => 2255,
      'title' => 'Любительский (одноголосый закадровый) (shkafstulovich)',
    ),
    2255 => 
    array (
      'id' => 2256,
      'title' => 'Полное дублирование (Всёпочесноку)',
    ),
    2256 => 
    array (
      'id' => 2257,
      'title' => 'Профессиональный (одноголосый закадровый) (Тарадайкин Игорь)',
    ),
    2257 => 
    array (
      'id' => 2258,
      'title' => 'Любительский (двухголосый закадровый) (Ох! Студия + Ворон)',
    ),
    2258 => 
    array (
      'id' => 2259,
      'title' => 'Любительский (многоголосый закадровый) (Озвучкотопия)',
    ),
    2259 => 
    array (
      'id' => 2260,
      'title' => 'Любительский (одноголосый закадровый) (Клуб Артхауз)',
    ),
    2260 => 
    array (
      'id' => 2261,
      'title' => 'Профессиональный (одноголосый закадровый) (Спиридонов Вадим)',
    ),
    2261 => 
    array (
      'id' => 2262,
      'title' => 'Любительский (двухголосый закадровый)  (Воротилин Олег и Nastia)',
    ),
    2262 => 
    array (
      'id' => 2263,
      'title' => 'Любительский (одноголосый закадровый) (Carrier88)',
    ),
    2263 => 
    array (
      'id' => 2264,
      'title' => 'Полное дублирование (On Add)',
    ),
    2264 => 
    array (
      'id' => 2265,
      'title' => 'Полное дублирование (TransPerfect Studios)',
    ),
    2265 => 
    array (
      'id' => 2266,
      'title' => 'Профессиональный (двухголосый закадровый) (R-Vision)',
    ),
    2266 => 
    array (
      'id' => 2267,
      'title' => 'Любительский (одноголосый закадровый) (Anything Group)',
    ),
    2267 => 
    array (
      'id' => 2268,
      'title' => 'Полное дублирование (Film Lines Int.)',
    ),
    2268 => 
    array (
      'id' => 2269,
      'title' => 'Профессиональный (двухголосый закадровый) (Фобос С)',
    ),
    2269 => 
    array (
      'id' => 2270,
      'title' => 'Профессиональный (одноголосый закадровый) (Мобильное телевидение)',
    ),
    2270 => 
    array (
      'id' => 2271,
      'title' => 'Полное дублирование (NDRecords Production)',
    ),
    2271 => 
    array (
      'id' => 2272,
      'title' => 'Любительский (одноголосый закадровый) (ЛанселаП)',
    ),
    2272 => 
    array (
      'id' => 2273,
      'title' => 'Полное дублирование (Nova)',
    ),
    2273 => 
    array (
      'id' => 2274,
      'title' => 'Любительский (одноголосый закадровый) (Kofka)',
    ),
    2274 => 
    array (
      'id' => 2275,
      'title' => 'Любительский (одноголосый закадровый) (Scary Records)',
    ),
    2275 => 
    array (
      'id' => 2276,
      'title' => 'Любительский (многоголосый закадровый) (CGInfo)',
    ),
    2276 => 
    array (
      'id' => 2277,
      'title' => 'Любительский (двухголосый закадровый) (Хмурая Тучка & Волжская Чайка)',
    ),
    2277 => 
    array (
      'id' => 2278,
      'title' => 'Любительский (многоголосый закадровый) (Кошкин & Кубрина + Гаврюша)',
    ),
    2278 => 
    array (
      'id' => 2279,
      'title' => 'Полное дублирование (viju | viaplay)',
    ),
    2279 => 
    array (
      'id' => 2280,
      'title' => 'Любительский (многоголосый закадровый) (Dream Wings & Sound Lotus)',
    ),
    2280 => 
    array (
      'id' => 2281,
      'title' => 'Профессиональный (одноголосый закадровый) (RGB)',
    ),
    2281 => 
    array (
      'id' => 2282,
      'title' => 'Любительский (двухголосый закадровый) (Автобубняж & ICG)',
    ),
    2282 => 
    array (
      'id' => 2283,
      'title' => 'Полное дублирование (Блэкбёрд Саунд | Blackbird Sound)',
    ),
    2283 => 
    array (
      'id' => 2284,
      'title' => 'Любительский (одноголосый закадровый) (МладоКашкин)',
    ),
    2284 => 
    array (
      'id' => 2285,
      'title' => 'Любительский (двухголосый закадровый) (Duetfilm)',
    ),
    2285 => 
    array (
      'id' => 2286,
      'title' => 'Профессиональный (двухголосый закадровый) (Гланц + Артёмова)',
    ),
    2286 => 
    array (
      'id' => 2287,
      'title' => 'Любительский (многоголосый закадровый) (HoneyBee)',
    ),
    2287 => 
    array (
      'id' => 2288,
      'title' => 'Авторский (одноголосый закадровый) (Михайлов Григорий)',
    ),
    2288 => 
    array (
      'id' => 2289,
      'title' => 'Любительский (двухголосый закадровый) (HoneyBee)',
    ),
    2289 => 
    array (
      'id' => 2290,
      'title' => 'Профессиональный (двухголосый закадровый) (MovieDalen)',
    ),
    2290 => 
    array (
      'id' => 2291,
      'title' => 'Полное дублирование (Romance Channel)',
    ),
    2291 => 
    array (
      'id' => 2292,
      'title' => 'Любительский (одноголосый закадровый) (Шишкин Николай)',
    ),
    2292 => 
    array (
      'id' => 2293,
      'title' => 'Профессиональный (многоголосый закадровый) (Пилот)',
    ),
    2293 => 
    array (
      'id' => 2294,
      'title' => 'Профессиональный (двухголосый закадровый) (Синхрон)',
    ),
    2294 => 
    array (
      'id' => 2295,
      'title' => 'Авторский (одноголосый закадровый) (Мишин Алексей)',
    ),
    2295 => 
    array (
      'id' => 2296,
      'title' => 'Профессиональный (двухголосый закадровый) (ТО Лидер)',
    ),
    2296 => 
    array (
      'id' => 2297,
      'title' => 'Профессиональный (одноголосый закадровый) (FocusX)',
    ),
    2297 => 
    array (
      'id' => 2298,
      'title' => 'Полное дублирование (Echo Voice)',
    ),
    2298 => 
    array (
      'id' => 2299,
      'title' => 'Профессиональный (многоголосый закадровый) (Turbo)',
    ),
    2299 => 
    array (
      'id' => 2300,
      'title' => 'Любительский (многоголосый закадровый) (WiaDub)',
    ),
    2300 => 
    array (
      'id' => 2301,
      'title' => 'Любительский (многоголосый закадровый) (micola777 & Nariko)',
    ),
    2301 => 
    array (
      'id' => 2302,
      'title' => 'Любительский (двухголосый закадровый) (Say & Lupin)',
    ),
    2302 => 
    array (
      'id' => 2303,
      'title' => 'Любительский (одноголосый закадровый) (Андрей Фернатий)',
    ),
    2303 => 
    array (
      'id' => 2304,
      'title' => 'Любительский (многоголосый закадровый) (ХендМейдСаунд)',
    ),
    2304 => 
    array (
      'id' => 2305,
      'title' => 'Любительский (многоголосый закадровый) (JAMCLUB)',
    ),
    2305 => 
    array (
      'id' => 2306,
      'title' => 'Любительский (одноголосый закадровый) (TF-AniGroup)',
    ),
    2306 => 
    array (
      'id' => 2307,
      'title' => 'Любительский (двухголосый закадровый) (maxzer & Tinda)',
    ),
    2307 => 
    array (
      'id' => 2308,
      'title' => 'Полное дублирование (Japan Foundation)',
    ),
    2308 => 
    array (
      'id' => 2309,
      'title' => 'Любительский (одноголосый закадровый) (KisSick)',
    ),
    2309 => 
    array (
      'id' => 2310,
      'title' => 'Профессиональный (двухголосый закадровый) (Wink)',
    ),
    2310 => 
    array (
      'id' => 2311,
      'title' => 'Любительский (одноголосый закадровый) (Хикару)',
    ),
    2311 => 
    array (
      'id' => 2312,
      'title' => 'Любительский (одноголосый закадровый) (Mustadio)',
    ),
    2312 => 
    array (
      'id' => 2313,
      'title' => 'Профессиональный (многоголосый закадровый) (КТК)',
    ),
    2313 => 
    array (
      'id' => 2314,
      'title' => 'Любительский (многоголосый закадровый) (Храм тысячи струн + Shangu)',
    ),
    2314 => 
    array (
      'id' => 2315,
      'title' => 'Любительский (одноголосый закадровый) (Дорошенко Дмитрий)',
    ),
    2315 => 
    array (
      'id' => 2316,
      'title' => 'Полное дублирование (Iguana Studios)',
    ),
    2316 => 
    array (
      'id' => 2317,
      'title' => 'Любительский (одноголосый закадровый) (Воронина Ксения)',
    ),
    2317 => 
    array (
      'id' => 2318,
      'title' => 'Профессиональный (двухголосый закадровый) (Мега-Видео)',
    ),
    2318 => 
    array (
      'id' => 2319,
      'title' => 'Профессиональный (многоголосый закадровый) (Аскот)',
    ),
    2319 => 
    array (
      'id' => 2320,
      'title' => 'Полное дублирование (Точка ТВ)',
    ),
    2320 => 
    array (
      'id' => 2321,
      'title' => 'Любительский (многоголосый закадровый) (DAблин)',
    ),
    2321 => 
    array (
      'id' => 2322,
      'title' => 'Любительский (одноголосый закадровый) (Mitchel)',
    ),
    2322 => 
    array (
      'id' => 2323,
      'title' => 'Любительский (двухголосый закадровый) (ЛанселаП и С Причудами)',
    ),
    2323 => 
    array (
      'id' => 2324,
      'title' => 'Профессиональный (двухголосый закадровый) (Vox Records)',
    ),
    2324 => 
    array (
      'id' => 2325,
      'title' => 'Полное дублирование (Syncmer)',
    ),
    2325 => 
    array (
      'id' => 2326,
      'title' => 'Любительский (многоголосый закадровый) (The Slashuur)',
    ),
    2326 => 
    array (
      'id' => 2327,
      'title' => 'Полное дублирование (GoodTime Media)',
    ),
    2327 => 
    array (
      'id' => 2328,
      'title' => 'Любительский (одноголосый закадровый) (7879)',
    ),
    2328 => 
    array (
      'id' => 2329,
      'title' => 'Профессиональный (многоголосый закадровый) (FlameVoice)',
    ),
    2329 => 
    array (
      'id' => 2330,
      'title' => 'Профессиональный (многоголосый закадровый) (ТК Шокирующее HD)',
    ),
    2330 => 
    array (
      'id' => 2331,
      'title' => 'Полное дублирование (HATE Studio)',
    ),
    2331 => 
    array (
      'id' => 2332,
      'title' => 'Полное дублирование (Intra)',
    ),
    2332 => 
    array (
      'id' => 2333,
      'title' => 'Профессиональный (двухголосый закадровый) (Карэ-видео)',
    ),
    2333 => 
    array (
      'id' => 2334,
      'title' => 'Любительский (двухголосый закадровый) (Диапазон)',
    ),
    2334 => 
    array (
      'id' => 2335,
      'title' => 'Любительский (многоголосый закадровый) (BuzzDubbing)',
    ),
    2335 => 
    array (
      'id' => 2336,
      'title' => 'Профессиональный (многоголосый закадровый) (JPS Latvia | Jura Podnieka Studija)',
    ),
    2336 => 
    array (
      'id' => 2337,
      'title' => 'Любительский (одноголосый закадровый) (kot.karakot)',
    ),
    2337 => 
    array (
      'id' => 2338,
      'title' => 'Авторский (одноголосый закадровый) (Чернышев Михаил)',
    ),
    2338 => 
    array (
      'id' => 2339,
      'title' => 'Полное дублирование (Rec Media Group)',
    ),
    2339 => 
    array (
      'id' => 2340,
      'title' => 'Профессиональный (многоголосый закадровый) (АДИК)',
    ),
    2340 => 
    array (
      'id' => 2341,
      'title' => 'Любительский (двухголосый закадровый) (Andi999 + Бахурани)',
    ),
    2341 => 
    array (
      'id' => 2342,
      'title' => 'Профессиональный (двухголосый закадровый) (ТК Дождь)',
    ),
    2342 => 
    array (
      'id' => 2343,
      'title' => 'Любительский (многоголосый закадровый) (Whiskey Sound)',
    ),
    2343 => 
    array (
      'id' => 2344,
      'title' => 'Профессиональный (одноголосый закадровый) (Клуб путешественников)',
    ),
    2344 => 
    array (
      'id' => 2345,
      'title' => 'Любительский (одноголосый закадровый) (Толмачев Дмитрий)',
    ),
    2345 => 
    array (
      'id' => 2346,
      'title' => 'Профессиональный (одноголосый закадровый) (Щербаков Борис)',
    ),
    2346 => 
    array (
      'id' => 2347,
      'title' => 'Любительский (многоголосый закадровый) (Selena & Geely & Function Vol)',
    ),
    2347 => 
    array (
      'id' => 2348,
      'title' => 'Любительский (одноголосый закадровый) (Letric)',
    ),
    2348 => 
    array (
      'id' => 2349,
      'title' => 'Профессиональный (одноголосый закадровый) (Time Media Group | Тайм Медиа Групп)',
    ),
    2349 => 
    array (
      'id' => 2350,
      'title' => 'Любительский (одноголосый закадровый) (Александр Никсон)',
    ),
    2350 => 
    array (
      'id' => 2351,
      'title' => 'Полное дублирование (Freedom Media)',
    ),
    2351 => 
    array (
      'id' => 2352,
      'title' => 'Любительский (одноголосый закадровый) (Tauri141)',
    ),
    2352 => 
    array (
      'id' => 2353,
      'title' => 'Профессиональный (многоголосый закадровый) (Dragon Studio)',
    ),
    2353 => 
    array (
      'id' => 2354,
      'title' => 'Любительский (многоголосый закадровый) (Ананас)',
    ),
    2354 => 
    array (
      'id' => 2355,
      'title' => 'Профессиональный (многоголосый закадровый) (OPRUS)',
    ),
    2355 => 
    array (
      'id' => 2356,
      'title' => 'Любительский (многоголосый закадровый) (VF-Studio)',
    ),
    2356 => 
    array (
      'id' => 2357,
      'title' => 'Любительский (одноголосый закадровый) (Венгеровский Евгений)',
    ),
    2357 => 
    array (
      'id' => 2358,
      'title' => 'Полное дублирование (Crunchyroll)',
    ),
    2358 => 
    array (
      'id' => 2359,
      'title' => 'Любительский (одноголосый закадровый) (Mastak | А. Боровиков)',
    ),
    2359 => 
    array (
      'id' => 2360,
      'title' => 'Профессиональный (двухголосый закадровый) (Viasat Kino World)',
    ),
    2360 => 
    array (
      'id' => 2361,
      'title' => 'Любительский (многоголосый закадровый) (BeeVoice)',
    ),
    2361 => 
    array (
      'id' => 2362,
      'title' => 'Любительский (одноголосый закадровый) (Диколон Делон)',
    ),
    2362 => 
    array (
      'id' => 2363,
      'title' => 'Полное дублирование (Gold Cinema Group)',
    ),
    2363 => 
    array (
      'id' => 2364,
      'title' => 'Полное дублирование (Lucky Production & Novamedia)',
    ),
    2364 => 
    array (
      'id' => 2365,
      'title' => 'Профессиональный (многоголосый закадровый) (Идмар)',
    ),
    2365 => 
    array (
      'id' => 2366,
      'title' => 'Любительский (одноголосый закадровый) (Max Shellenberg)',
    ),
    2366 => 
    array (
      'id' => 2367,
      'title' => 'Любительский (одноголосый закадровый) (Za-Cadrom)',
    ),
    2367 => 
    array (
      'id' => 2368,
      'title' => 'Любительский (многоголосый закадровый) (DiO Production)',
    ),
    2368 => 
    array (
      'id' => 2369,
      'title' => 'Любительский (одноголосый закадровый) (NoNamed)',
    ),
    2369 => 
    array (
      'id' => 2370,
      'title' => 'Любительский (двухголосый закадровый) (datynet & Anna Di)',
    ),
    2370 => 
    array (
      'id' => 2371,
      'title' => 'Любительский (одноголосый закадровый) (Raters Sanitary Cleaner)',
    ),
    2371 => 
    array (
      'id' => 2372,
      'title' => 'Профессиональный (двухголосый закадровый) (Союз работников дубляжа)',
    ),
    2372 => 
    array (
      'id' => 2373,
      'title' => 'Любительский (одноголосый закадровый) (denisblek)',
    ),
    2373 => 
    array (
      'id' => 2374,
      'title' => 'Любительский (одноголосый закадровый) (OldHren)',
    ),
    2374 => 
    array (
      'id' => 2375,
      'title' => 'Профессиональный (двухголосый закадровый) (Amedia)',
    ),
    2375 => 
    array (
      'id' => 2376,
      'title' => 'Профессиональный (двухголосый закадровый) (Contentica)',
    ),
    2376 => 
    array (
      'id' => 2377,
      'title' => 'Профессиональный (двухголосый закадровый) (Ника ТВ)',
    ),
    2377 => 
    array (
      'id' => 2378,
      'title' => 'Полное дублирование (Dragon Studio)',
    ),
    2378 => 
    array (
      'id' => 2379,
      'title' => 'Полное дублирование (KinoВау)',
    ),
    2379 => 
    array (
      'id' => 2380,
      'title' => 'Профессиональный (многоголосый закадровый) (DVDXpert)',
    ),
    2380 => 
    array (
      'id' => 2381,
      'title' => 'Любительский (двухголосый закадровый) (Ghostface & LaVanda)',
    ),
    2381 => 
    array (
      'id' => 2382,
      'title' => 'Полное дублирование (ПроДубляж)',
    ),
    2382 => 
    array (
      'id' => 2383,
      'title' => 'Любительский (многоголосый закадровый) (Light Family)',
    ),
    2383 => 
    array (
      'id' => 2384,
      'title' => 'Любительский (одноголосый закадровый) (Epic)',
    ),
    2384 => 
    array (
      'id' => 2385,
      'title' => 'Профессиональный (одноголосый закадровый) (Лексикон)',
    ),
    2385 => 
    array (
      'id' => 2386,
      'title' => 'Профессиональный (одноголосый закадровый) (Студия ТВ Альвина)',
    ),
    2386 => 
    array (
      'id' => 2387,
      'title' => 'Любительский (одноголосый закадровый) (Jonne)',
    ),
    2387 => 
    array (
      'id' => 2388,
      'title' => 'Любительский (многоголосый закадровый) (Renegade Team & AniLibria.TV)',
    ),
    2388 => 
    array (
      'id' => 2389,
      'title' => 'Любительский (многоголосый закадровый) (Yandex AI)',
    ),
    2389 => 
    array (
      'id' => 2390,
      'title' => 'Полное дублирование (Orhei TV)',
    ),
    2390 => 
    array (
      'id' => 2391,
      'title' => 'Профессиональный (одноголосый закадровый) (Estinfilm)',
    ),
    2391 => 
    array (
      'id' => 2392,
      'title' => 'Полное дублирование (АЛВИ Studio)',
    ),
  ),
  'cronkey' => '7a67b8d987fbbc750cb1b84f55793aa7',
);