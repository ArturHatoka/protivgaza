
DROP TABLE IF EXISTS `viz192_additional`;
CREATE TABLE `viz192_additional` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

INSERT INTO `viz192_additional` VALUES ('1', 'gh5dtnbr'),('2', '«Название Фирмы»'),('3', 'Порошковая покраска металлоизделий и отделочные работы'),('4', '+7(8332) 42-08-58\r\n+7(8332) 42-08-68'),('5', 'admin/uploads/3583613165.png'),('6', '<link rel=\"icon\" href=\"/admin/uploads/5154722900.ICO\" type=\"image/x-icon\" />'),('7', '<link rel=\"icon\" href=\"/admin/uploads/2085813420.png\" type=\"image/png\" />'),('8', '#84b75a'),('21', '#ffffff'),('9', '#ffffff'),('10', '0'),('11', 'mail@art-kirov.ru'),('12', '© 2010-2015 «Название Фирмы» - \r\nпорошковая покраска металлоизделий\r\nи отделочные работы'),('13', 'admin/uploads/2541179132.jpg'),('14', '<a href=\"#\"><img src=\"/admin/img/cnt.png\" border=\"0\" /></a>'),('15', 'Создание сайта<br/>Веб-студия «Art-Kirov»,http://art-kirov.ru/'),('34', '1'),('35', '0'),('41', '1'),('42', '4000'),('16', '#ffffff'),('17', '#ffffff'),('18', '#452'),('19', '#6F4582'),('20', '#ADD8E6'),('25', '#262626'),('22', '#ADD8E6'),('23', '250'),('24', '#6FB436'),('26', '#FF9000'),('27', 'admin/uploads/6480813357.png'),('28', '0'),('29', '0'),('30', '0'),('31', '0'),('32', '0'),('33', '0'),('39', '1'),('40', 'admin/uploads/1823524035.png'),('54', '1'),('38', 'admin/uploads/9978497405.png'),('37', 'Левое меню'),('36', '2'),('43', '#000000');

DROP TABLE IF EXISTS `viz192_admins`;
CREATE TABLE `viz192_admins` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `access_rules` varchar(36) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO `viz192_admins` VALUES ('-1', 'admin', '3bd682843c382ac0588743dcd8c413ea', 'gh5dtnbr', '0|1|2|3|4|5|6|7|8|9|10|11|12', ''),('8', 'and107', 'e9982ec5ca981bd365603623cf4b2277', '31415926', '0|1|2|3|6|9|8', ''),('9', 'meneger', '5cdb6cb3040178bb57389319b83fe53e', '69696969', '0|1|2|3|6|9|4|8', '');

DROP TABLE IF EXISTS `viz192_anons`;
CREATE TABLE `viz192_anons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `h1` varchar(256) NOT NULL,
  `comment` text NOT NULL,
  `pic` text NOT NULL,
  `title` varchar(512) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `keywords` varchar(512) NOT NULL,
  `date_create` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO `viz192_anons` VALUES ('7', 'Текст анонса', '<p>Текст анонса</p>', '', 'Текст анонса', 'Текст анонса', 'Текст анонса', '06-06-2013');

DROP TABLE IF EXISTS `viz192_cities`;
CREATE TABLE `viz192_cities` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `namer` varchar(256) NOT NULL,
  `url` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=523 DEFAULT CHARSET=utf8;

INSERT INTO `viz192_cities` VALUES ('1', 'Москва', 'в Москве', 'moskva'),('2', 'Санкт-Петербург', 'в Санкт-Петербурге', 'sankt-peterburg'),('376', 'Краснодар', 'в Краснодаре', 'krasnodar'),('377', 'Тольятти', 'в Тольятти', 'tolyatti'),('378', 'Тюмень', 'в Тюмени', 'tumen'),('379', 'Ижевск', 'в Ижевске', 'ighevsk'),('380', 'Барнаул', 'в Барнауле', 'barnaul'),('381', 'Ульяновск', 'в Ульяновске', 'ulyanovsk'),('382', 'Иркутск', 'в Иркутске', 'irkutsk'),('383', 'Владивосток', 'во Владивостоке', 'vladivostok'),('384', 'Ярославль', 'в Ярославле', 'yaroslavl'),('385', 'Хабаровск', 'в Хабаровске', 'habarovsk'),('386', 'Махачкала', 'в Махачкале', 'mahachkala'),('387', 'Оренбург', 'в Оренбурге', 'orenburg'),('388', 'Томск', 'в Томске', 'tomsk'),('389', 'Новокузнецк', 'в Новокузнецке', 'novokuzneck'),('390', 'Кемерово', 'в Кемерово', 'kemerovo'),('391', 'Астрахань', 'в Астрахани', 'astrahan'),('392', 'Рязань', 'в Рязани', 'ryazan'),('362', 'Новосибирск', 'в Новосибирске', 'novosibirsk'),('363', 'Екатеринбург', 'в Екатеринбурге', 'ekaterinburg'),('364', 'Нижний Новгород', 'в Нижнем Новгороде', 'nighnij-novgorod'),('365', 'Казань', 'в Казани', 'kazan'),('366', 'Самара', 'в Самаре', 'samara'),('367', 'Челябинск', 'в Челябинске', 'chelyabinsk'),('368', 'Омск', 'в Омске', 'omsk'),('369', 'Ростов-на-Дону', 'в Ростове-на-Дону', 'rostov-na-donu'),('370', 'Уфа', 'в Уфе', 'ufa'),('371', 'Красноярск', 'в Красноярске', 'krasnoyarsk'),('372', 'Пермь', 'в Перми', 'perm'),('373', 'Волгоград', 'в Волгограде', 'volgograd'),('374', 'Воронеж', 'в Воронеже', 'voronegh'),('375', 'Саратов', 'в Саратове', 'saratov'),('393', 'Набережные Челны', ' в Набережных челнах', 'nabereghnie-chelni'),('394', 'Пенза', ' в Пензе', 'penza'),('395', 'Липецк', ' в Липецке', 'lipeck'),('396', 'Тула', 'в Туле', 'tula'),('397', 'Чебоксары', ' в Чебоксарах', 'cheboksari'),('398', 'Калининград', ' в Калининграде', 'kaliningrad'),('399', 'Курск', ' в Курске', 'kursk'),('400', 'Улан-Удэ', ' в Улан-Удэ', 'ulan-ude'),('401', 'Ставрополь', ' в Ставрополе', 'stavropol'),('402', 'Магнитогорск', ' в Магнитогорске', 'magnitogorsk'),('403', 'Тверь', ' в Твери', 'tver'),('404', 'Иваново', ' в Иваново', 'ivanovo'),('405', 'Брянск', ' в Брянске', 'bryansk'),('406', 'Сочи', ' в Сочи', 'sochi'),('407', 'Севастополь', ' в Севастополе', 'sevastopol'),('408', 'Белгород', ' в Белгороде', 'belgorod'),('409', 'Симферополь', ' в Симферополе', 'simferopol');
INSERT INTO `viz192_cities` VALUES ('410', 'Нижний Тагил', ' в Нижнем Тагиле', 'nighnij-tagil'),('411', 'Архангельск', ' в Архангельске', 'arhangelsk'),('412', 'Владимир', ' в Владимире', 'vladimir'),('413', 'Чита', ' в Чите', 'chita'),('414', 'Калуга', ' в Калуге', 'kaluga'),('415', 'Сургут', ' в Сургуте', 'surgut'),('416', 'Смоленск', ' в Смоленске', 'smolensk'),('417', 'Волжский', ' в Волжском', 'volghskij'),('418', 'Курган', ' в Кургане', 'kurgan'),('419', 'Орел', ' в Орле', 'orel'),('420', 'Череповец', ' в Череповце', 'cherepovec'),('421', 'Вологда', ' в Вологде', 'vologda'),('422', 'Владикавказ', ' в Владикавказе', 'vladikavkaz'),('423', 'Саранск', ' в Саранске', 'saransk'),('424', 'Мурманск', ' в Мурманске', 'murmansk'),('425', 'Якутск', ' в Якутске', 'yakutsk'),('426', 'Тамбов', ' в Тамбове', 'tambov'),('427', 'Грозный', ' в Грозном', 'groznij'),('428', 'Стерлитамак', ' в Стерлитамаке', 'sterlitamak'),('429', 'Кострома', ' в Костроме', 'kostroma'),('430', 'Петрозаводск', ' в Петрозаводстке', 'petrozavodsk'),('431', 'Нижневартовск', ' в Нижневартовске', 'nighnevartovsk'),('432', 'Йошкар-Ола', ' в Йошкар-Оле', 'joshkar-ola'),('433', 'Новороссийск', ' в Новороссийске', 'novorossijsk'),('434', 'Таганрог', ' в Таганроге', 'taganrog'),('435', 'Балашиха', ' в Балашихе', 'balashiha'),('436', 'Сыктывкар', ' в Сыктывкаре', 'siktivkar'),('437', 'Братск', ' в Братске', 'bratsk'),('438', 'Нальчик', ' в Нальчике', 'nalchik'),('439', 'Шахты', ' в Шахтах', 'shahti'),('440', 'Дхержинск', ' в Дзержинске', 'dherghinsk'),('441', 'Нижнекамск', ' в Нижнекамске', 'nighnekamsk'),('442', 'Орск', ' в Орске', 'orsk'),('443', 'Ангарск', ' в Ангарске', 'angarsk'),('444', 'Химки', ' в Химках', 'himki'),('445', 'Старый Оскол', ' в Старом Осколе', 'starij-oskol'),('446', 'Великий Новгород', ' в Великом Новгороде', 'velikij-novgorod'),('447', 'Подольск', ' в Подольске', 'podolsk'),('448', 'Энгельс', ' в Энгельсе', 'engels'),('449', 'Псков', ' в Пскове', 'pskov'),('450', 'Бийск', ' в Бийске', 'bijsk'),('451', 'Прокопьевск', ' в Прокопьевске', 'prokopevsk'),('452', 'Рыбинск', ' в Рыбинске', 'ribinsk'),('453', 'Балаково', ' в Балаково', 'balakovo'),('454', 'Армавир', ' в Армавире', 'armavir'),('455', 'Королев', ' в Королеве', 'korolev'),('456', 'Сверодвинск', ' в Северодвинске', 'sverodvinsk'),('457', 'Люберцы', ' в Люберцах', 'luberci'),('458', 'Мытищи', ' в Мытищах', 'mitishi'),('459', 'Норильск', ' в Норильске', 'norilsk');
INSERT INTO `viz192_cities` VALUES ('460', 'Сызрань', ' в Сызрани', 'sizran'),('461', 'Абакан', ' в Абакане', 'abakan'),('462', 'Каменск-Уральский', ' в Каменск-Уральском', 'kamensk-uralskij'),('464', 'Волгодонск', ' в Волгодонске', 'volgodonsk'),('465', 'Уссурийск', ' в Уссурийске', 'ussurijsk'),('466', 'Электросталь', ' в Электростали', 'elektrostal'),('467', 'Находка', ' в Находке', 'nahodka'),('468', 'Салават', ' в Салавате', 'salavat'),('469', 'Миасс', ' в Миассе', 'miass'),('470', 'Березники', ' в Березниках', 'berezniki'),('471', 'Альметьевск', ' в Альметьевске', 'almetevsk'),('472', 'Рубцовск', ' в Рубцовске', 'rubcovsk'),('473', 'Железнодорожный', ' в Железнодорожном', 'gheleznodoroghnij'),('474', 'Пятигорск', ' в Пятигорске', 'pyatigorsk'),('475', 'Майкоп', ' в Майкопе', 'majkop'),('476', 'Коломна', ' в Коломне', 'kolomna'),('477', 'Керчь', ' в Керчи', 'kerch'),('478', 'Копейск', ' в Копейске', 'kopejsk'),('479', 'Ковров', ' в Коврове', 'kovrov'),('480', 'Одинцово', ' в Одинцово', 'odincovo'),('481', 'Хасавюрт', ' в Хасавюрте', 'hasavurt'),('482', 'Красногорск', ' в Красногорске', 'krasnogorsk'),('483', 'Кисловодск', ' в Кисловодске', 'kislovodsk'),('484', 'Новомосковск', ' в Новомосковске', 'novomoskovsk'),('485', 'Серпухов', ' в Серпухове', 'serpuhov'),('486', 'Нефтеюганск', ' в Нефтеюганске', 'nefteugansk'),('487', 'Первоуральск', ' в Перворальске', 'pervouralsk'),('488', 'Черкесск', ' в Черкесске', 'cherkessk'),('489', 'Нефтекамск', ' в Нефтекамске', 'neftekamsk'),('490', 'Новочебоксарск', ' в Новочебоксарске', 'novocheboksarsk'),('491', 'Орехово-Зуево', ' в Орехово-Зуево', 'orehovo-zuevo'),('492', 'Дербент', ' в Дербенте', 'derbent'),('493', 'Димитровград', ' в Димитровграде', 'dimitrovgrad'),('494', 'Невинномысск', ' в Невинномысске', 'nevinnomissk'),('495', 'Батайск', ' в Батайске', 'batajsk'),('496', 'Щелково', ' в Щелково', 'shelkovo'),('497', 'Новый Уренгой', ' в Новом Уренгое', 'novij-urengoj'),('498', 'Камышин', ' в Камышине', 'kamishin'),('499', 'Кызыл', ' в Кызыле', 'kizil'),('500', 'Октябрьский', ' в Октябрьском', 'oktyabrskij'),('501', 'Муром', ' в Муроме', 'murom'),('502', 'Новошахтинск', ' в Новошахтинске', 'novoshahtinsk'),('503', 'Северск', ' в Северске', 'seversk'),('504', 'Домодедово', ' в Домодедово', 'domodedovo'),('505', 'Жуковский', ' в Жуковском', 'ghukovskij'),('506', 'Ноябрьск', ' в Ноябрьском', 'noyabrsk'),('507', 'Обнинск', ' в Обнинске', 'obninsk'),('508', 'Сергиев Посад', ' в Сегриев Посаде', 'sergiev-posad'),('509', 'Ачинск', ' в Ачинске', 'achinsk'),('510', 'Елец', ' в Ельце', 'elec');
INSERT INTO `viz192_cities` VALUES ('511', 'Пушкино', ' в Пушкино', 'pushkino'),('512', 'Новокуйбышевск', ' в Новокуйбышевске', 'novokujbishevsk'),('513', 'Назрань', ' в Назрани', 'nazran'),('514', 'Евпатория', ' в Епатории', 'evpatoriya'),('515', 'Каспийск', ' в Каспийске', 'kaspijsk'),('516', 'Арзамас', ' в Арзамасе', 'arzamas'),('517', 'Элиста', ' в Элисте', 'elista'),('518', 'Ессентуки', ' в Ессентуках', 'essentuki'),('519', 'Раменское', ' в Раменском', 'ramenskoe'),('520', 'Артем', ' в Артеме', 'artem'),('521', 'Ногинск', ' в Ногинске', 'noginsk'),('522', 'Бердск', ' в Бердске', 'berdsk');

DROP TABLE IF EXISTS `viz192_faq`;
CREATE TABLE `viz192_faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `st` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=202 DEFAULT CHARSET=utf8;

INSERT INTO `viz192_faq` VALUES ('196', 'Сергей Викторович', 'Сергей Викторович отзыв (вопрос): Осенью купил у вас теплицу, претензий нет, отстояла зиму, ураган тоже выдержала. Но сейчас у вас уже теплицы, я смотрю с 5 усилениями. Это огромный плюс, ведь эта зима была без снега, а если снега навалит, то бока может продавить. Можно ли мою теплицу Усовершенствовать под вашу новую?', '<p>\r\n	Сергей Викторович -Спасибо за вопрос: Теоретически это возможно, но для этого вам придется снять поликарбонат, просверлить дырки в дугах симметрично и купить у нас дополнительные усиления, в зависимости от размеров вашей теплицы. Более подробно можем рассказать, если вы подойдете в офис или позвоните нам.&nbsp;</p>\r\n', '2'),('197', 'Павел', 'Павел оставил отзыв (вопрос):Огромное спасибо, мы рады, что в Великом Новгороде изготавливаются такие качественные теплицы.', '', '1'),('201', 'Максимова Анна Вячеславовн', 'ва пывап ывп ывап апр ыар ывап ыва рвпо вапрыва пывар ывап ывапва пывап ывп ывап апр ыар ывап ыва рвпо вапрыва пывар ывап ывапва пывап ывп ывап апр ыар ывап ыва рвпо вапрыва пывар ывап ывапва пывап ывп ывап апр ыар ывап ыва рвпо вапрыва пывар ывап ывапва пывап ывп ывап апр ыар ывап ыва рвпо вапрыва пывар ывап ывапва пывап ывп ывап апр ыар ывап ыва рвпо вапрыва пывар ывап ывап', '', '0'),('199', 'Татьяна', 'Татьяна оставила отзыв (вопрос):Все понравилось, спасибо. Будем советовать знакомым.', '', '1');

DROP TABLE IF EXISTS `viz192_goods`;
CREATE TABLE `viz192_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(256) NOT NULL,
  `logo` varchar(256) NOT NULL,
  `desc_full` mediumtext NOT NULL,
  `title` varchar(512) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `keywords` varchar(512) NOT NULL,
  `date_create` datetime NOT NULL,
  `price` varchar(20) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1051 DEFAULT CHARSET=utf8;

INSERT INTO `viz192_goods` VALUES ('1050', '1083', 'Печь полимеризации', 'admin/uploads/1604904530.jpg|admin/uploads/2716049181.jpg|admin/uploads/1069947447.jpg|admin/uploads/2099745925.jpg', '<p>\r\n	<strong>Печь полимеризации</strong> &mdash; это модульная камера со стенками из сендвич-панелей и базальтового волокна для теплоизоляции. Воздух нагревается ТЭНами и нагнетается вентиляторами по системе воздуховодов со скоростью 4 метра в секунду. Такая конструкция обеспечивает равномерный нагрев внутреннего пространства камеры и избежать брака на создаваемом полимерном покрытии. А стенки печи долго сохраняют достигнутую температуру, не допуская в то же время чрезмерного нагрева наружных стенок.</p>\r\n<p>\r\n	<strong>Печь полимеризации</strong> (или <strong>камера полимеризации</strong>) &mdash; основа стандартного комплекса порошковой покраски. В ней порошковая краска, нанесенная на изделие в <strong>камере напыления</strong>, под воздействием высокой температуры плавится и буквально прикипает к окрашиваемой поверхности. Температура &mdash; от 120 до 220 градусов &mdash; выбирается в зависимости от типа краски</p>\r\n<p>\r\n	Печи полимеризации бывают <em>тупиковыми</em> и <em>проходными</em>.<br />\r\n	В <strong>тупиковой камере полимеризации</strong> изделие по <strong>транспортной системе</strong> загружается и выгружается по одному и тому же пути. Такой тип печей подходит для линий невысокой производительности.<br />\r\n	<strong>Проходная камера полимеризации</strong> предназначена для линий с высокой производительностью. Изделие выкатывается с противоположной стороны по конвейерному типу. Рекомендуется, чтобы изделия подавались в такую печь бесперебойно.</p>\r\n', 'Печь полимеризации', 'Печь полимеризации', 'Печь полимеризации', '2014-02-13 14:27:02', '500000', '1');

DROP TABLE IF EXISTS `viz192_mypages`;
CREATE TABLE `viz192_mypages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL DEFAULT '0',
  `shows` int(1) NOT NULL DEFAULT '1',
  `place` varchar(4) NOT NULL DEFAULT 'top',
  `url` varchar(512) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `h1` varchar(256) NOT NULL,
  `title` varchar(512) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `keywords` varchar(512) NOT NULL,
  `text` mediumtext NOT NULL,
  `sort_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

INSERT INTO `viz192_mypages` VALUES ('1', '0', '1', 'top', 'main', 'Главная', 'Добро пожаловать на сайт компании «Название Фирмы»', '«Название Фирмы»', '', '', '<p>\r\n	Услуги по нанесению полимерно-порошковых покрытий на металлоизделия. Порошковая покраска автомобильных дисков. Металлоиздел<strong>ия на заказ: ворота, заборы, оградки и друг</strong>ие изделия. Производство и продажа стальных дверей. Тамбурные и подъездные двери. Консультации, замеры бесплатно. <em>Строительно-отделочные работы.</em></p>\r\n<h2>\r\n	Преимущества нашей компании</h2>\r\n<p>\r\n	Для помещений с автономным радиаторным отоплением прекрасно п<u>одойдут отопительные котлы. </u>Они просты и удобны в использовании, быстро монтируются и позволят Вам избежать лишних затрат на центральное отопление. К тому же, обеспечивают полную независимость от сезонных отключений, ставших уже традиционными прорывов теплотрасс. Ваши батареи всегда будут такими горячими, как Вы того пожелаете!</p>\r\n<h3>\r\n	Почему клиенты выбирают нас</h3>\r\n<ul>\r\n	<li>\r\n		Прозрачный расчет: Вы точно знаете, сколько и за что платите.</li>\r\n	<li>\r\n		Мы принимаем оплату в рублях. Вам не надо думать о курсах валют.</li>\r\n	<li>\r\n		С нами Вы успеете на распродажу: мы не ждем зачисления денег на наш счет.</li>\r\n</ul>\r\n<p>\r\n	Как видите, обеспечить себе комфортные условия жизни, отдыха и работы весьма не сложно. Нужно просто однажды захотеть позаботиться о собственном уюте, а наша фирма всегда рада помочь Вам в этом!</p>\r\n<ol>\r\n	<li>\r\n		Свыше 6000 человек по всей России уже выбрали нас в качестве своего посредника.</li>\r\n	<li>\r\n		Вы надежно защищены законодательством. Договор-оферта при каждом заказе.</li>\r\n</ol>\r\n', '1'),('56', '0', '1', 'top', 'news', 'Новости', 'Новости', 'Новости', '', '', '', '66'),('41', '0', '1', 'top', 'kontakti', 'Контакты', 'Контакты', 'Контакты', 'Контакты', 'Контакты', '', '69'),('64', '0', '1', 'top', 'galery', 'Галерея', 'Галерея', 'Галерея', 'Галерея', 'Галерея', '', '41'),('69', '0', '1', 'top', 'nashi-uslugi', 'Наши услуги', 'Наши услуги', 'Наши услуги', 'Наши услуги', 'Наши услуги', '', '39'),('71', '0', '1', 'top', 'ceni', 'Цены', 'Цены', 'Цены', 'Цены', 'Цены', '', '64'),('78', '74', '1', 'left', 'punkt-levogo-menu', 'Пункт левого меню', 'Пункт левого меню', 'Пункт левого меню', 'Пункт левого меню', 'Пункт левого меню', '', '78'),('73', '0', '1', 'top', 'vashi-otzivi-i-voprosi', 'Ваши отзывы и вопросы', 'Ваши отзывы и вопросы', 'Ваши отзывы и вопросы', 'Ваши отзывы и вопросы', 'Ваши отзывы и вопросы', '', '67'),('74', '0', '1', 'left', 'punkt-1', 'Пункт левого меню', 'Пункт левого меню', 'Пункт левого меню', 'Пункт левого меню', 'Пункт левого меню', '', '74'),('75', '0', '1', 'left', 'punkt-2', 'Пункт левого меню', 'Пункт левого меню', 'Пункт левого меню', 'Пункт левого меню', 'Пункт левого меню', '', '75'),('77', '0', '0', 'top', 'vsya-rossiya', 'Вся Россия', 'Вся Россия', 'Вся Россия', 'Вся Россия', 'Вся Россия', '', '77');

DROP TABLE IF EXISTS `viz192_news`;
CREATE TABLE `viz192_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(512) NOT NULL,
  `h1` varchar(256) NOT NULL,
  `comment` text NOT NULL,
  `pic` text NOT NULL,
  `title` varchar(512) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `keywords` varchar(512) NOT NULL,
  `date_create` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

INSERT INTO `viz192_news` VALUES ('7', 'Пример новости для размещения', 'Пример новости для размещения', '<p>\r\n	Примерный текст для тестовой новости!</p>\r\n', '', 'Пример новости для размещения', 'Пример новости для размещения', 'Пример новости для размещения', '2015-02-16 12:00:00'),('10', 'Пример новости для размещения на сайте', 'Пример новости для размещения на сайте', '<p>\r\n	Примерный текст для тестовой новости</p>\r\n', 'admin/uploads/1436894173.8123.jpg||', 'Пример новости для размещения на сайте', '', '', '2015-02-02 12:00:00');

DROP TABLE IF EXISTS `viz192_partners`;
CREATE TABLE `viz192_partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(512) NOT NULL,
  `url` varchar(256) NOT NULL,
  `name` varchar(128) NOT NULL,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `viz192_photoalb`;
CREATE TABLE `viz192_photoalb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sort_id` int(2) NOT NULL DEFAULT '0',
  `logo` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

INSERT INTO `viz192_photoalb` VALUES ('29', '29', 'admin/uploads/379292246839.jpeg', 'Покраска');

DROP TABLE IF EXISTS `viz192_photogal`;
CREATE TABLE `viz192_photogal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL DEFAULT '0',
  `sort_id` int(2) NOT NULL DEFAULT '0',
  `logo` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=452 DEFAULT CHARSET=utf8;

INSERT INTO `viz192_photogal` VALUES ('450', '29', '450', 'admin/uploads/1437478026.2812.jpg', 'Вторая'),('451', '29', '451', 'admin/uploads/1437478053.6128.jpeg', 'Третья'),('449', '29', '449', 'admin/uploads/1437477998.9788.jpg', 'Первая покраска'),('448', '0', '448', 'admin/uploads/1437477958.5707.jpg', '');

DROP TABLE IF EXISTS `viz192_production`;
CREATE TABLE `viz192_production` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `logo` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `text` mediumtext NOT NULL,
  `title` varchar(512) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `keywords` varchar(512) NOT NULL,
  `child_cnt` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1084 DEFAULT CHARSET=utf8;

INSERT INTO `viz192_production` VALUES ('1080', '0', 'admin/uploads/4257592867.png', 'Раздел каталога 1', '', 'Раздел каталога 1', 'Раздел каталога 1', 'Раздел каталога 1', '0'),('1081', '0', 'admin/uploads/4162870480.png', 'Раздел каталога 2', '', 'Раздел каталога 2', 'Раздел каталога 2', 'Раздел каталога 2', '0'),('1082', '0', 'admin/uploads/9808375616.png', 'Раздел каталога 3', '', 'Раздел каталога 3', 'Раздел каталога 3', 'Раздел каталога 3', '0'),('1083', '1080', 'admin/uploads/2601076128.png', 'Подраздел 1', '', 'Подраздел 1', 'Подраздел 1', 'Подраздел 1', '0');

DROP TABLE IF EXISTS `viz192_slides`;
CREATE TABLE `viz192_slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(256) NOT NULL,
  `logo` varchar(256) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

INSERT INTO `viz192_slides` VALUES ('30', '0', '', 'admin/uploads/slides/98260204778052.jpg', '<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<span style=\"font-size:24px;color:#fff;text-shadow:0 0 2px #6FB436\">СпецСтройПокрас -</span></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p style=\"text-align: center;\">\r\n	<span style=\"font-size:24px;color:#fff;text-shadow:0 0 2px #6FB436\">Построй!</span></p>\r\n<p style=\"text-align: center;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: center;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: center;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: right;\">\r\n	<span style=\"font-size:24px;color:#fff;text-shadow:0 0 2px #6FB436\">Покрась!</span></p>\r\n'),('31', '0', '', 'admin/uploads/slides/53347126077860.jpg', '<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<span style=\"font-size:24px;color:#fff;text-shadow:0 0 2px #6FB436\">Во все цвета<br />\r\n	</span></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p style=\"text-align: center;\">\r\n	<span style=\"font-size:24px;color:#fff;text-shadow:0 0 2px #6FB436\">Весь <a href=\"/\" style=\"font-size:24px;color:#fff;text-shadow:0 0 2px #6FB436\">мир</a> ты<br />\r\n	</span></p>\r\n<p style=\"text-align: center;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: center;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: center;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: right;\">\r\n	<span style=\"font-size:24px;color:#fff;text-shadow:0 0 2px #6FB436\">Разукрась!</span></p>\r\n');

DROP TABLE IF EXISTS `viz192_soc`;
CREATE TABLE `viz192_soc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sort_id` int(11) NOT NULL DEFAULT '0',
  `pic` varchar(256) NOT NULL,
  `link` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO `viz192_soc` VALUES ('1', '1', 'admin/uploads/soc-vk.png', '#'),('2', '2', 'admin/uploads/soc-fb.png', '#'),('3', '3', 'admin/uploads/soc-tw.png', '#'),('4', '4', 'admin/uploads/soc-ok.png', '#'),('5', '5', 'admin/uploads/650572047615.gif', '#'),('6', '6', 'admin/uploads/231308378838.png', '#'),('7', '7', 'admin/uploads/552615011716.png', '#'),('8', '8', 'admin/uploads/906380120804.png', '#');

DROP TABLE IF EXISTS `viz192_urls`;
CREATE TABLE `viz192_urls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(512) NOT NULL,
  `target_type` varchar(20) NOT NULL,
  `target_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

INSERT INTO `viz192_urls` VALUES ('20', 'news', 'all_news', '0'),('17', 'galery', 'photogal', '0'),('27', 'karta-sajta', 'mypages', '38'),('30', 'kontakti', 'mypages', '41'),('41', 'all_news', 'all_news', '0'),('43', 'all_anons', 'mypages', '42'),('61', 'primer-novosti-dlya-razmesheniya', 'news', '7'),('79', 'nashi-uslugi', 'mypages', '69'),('72', 'katalog', 'production', '0'),('73', 'klienti', 'mypages', '67'),('74', 'zakaz', 'mypages', '68'),('76', 'photos', 'photoalb', '0'),('78', 'goods', 'goods', '0'),('81', 'ceni', 'mypages', '71'),('87', 'vashi-otzivi-i-voprosi', 'faq', '0'),('85', 'primer-novosti-dlya-razmesheniya-na-sajte', 'news', '10'),('88', 'punkt-1', 'mypages', '74'),('89', 'punkt-2', 'mypages', '75'),('92', 'punkt-levogo-menu', 'mypages', '78'),('91', 'vsya-rossiya', 'mypages', '77');
