<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

$words = array(
	'AFAIK',
	'ako',
	'ali',
	'bez',
	'bi',
	'bice',
	'biće',
	'bila',
	'bili',
	'bilo gde',
	'bilo ko',
	'bilo koja',
	'bilo koji',
	'bilo',
	'bio',
	'biti',
	'biva',
	'blizu',
	'bolja',
	'bolje',
	'bolji',
	'cak',
	'ce',
	'cemo',
	'cesto',
	'cete',
	'citat',
	'cu',
	'čak',
	'često',
	'će',
	'ćemo',
	'ćete',
	'ću',
	'da',
	'daleko',
	'dan',
	'dana',
	'dani',
	'do',
	'dobar',
	'dobijen',
	'dobijena',
	'dobijeno',
	'dobila',
	'dobilo',
	'dobio',
	'dobra',
	'dobri',
	'dobro',
	'doci',
	'doći',
	'dok',
	'dole',
	'druge',
	'drugi',
	'drugo',
	'gde',
	'gleda',
	'gore',
	'gori',
	'href',
	'hvala',
	'i',
	'ide',
	'idi',
	'IIRC',
	'ikad',
	'ikada',
	'ili',
	'ima',
	'imala',
	'imalo',
	'imanje',
	'imao',
	'imati',
	'in',
	'ini',
	'iskljucen',
	'iskljucena',
	'iskljuceno',
	'isključen',
	'isključena',
	'isključeno',
	'ista',
	'isti',
	'istina',
	'isto',
	'itd',
	'izgleda',
	'izmedju',
	'između',
	'iznad',
	'ja',
	'je',
	'jednom',
	'jer',
	'jesi',
	'jesu',
	'jos',
	'još',
	'ka',
	'kad',
	'kako',
	'kao',
	'kaze',
	'kaže',
	'ko',
	'kod',
	'koga',
	'koja',
	'koje',
	'koji',
	'kome',
	'korisnici',
	'korisnik',
	'korisnika',
	'korist',
	'kroz',
	'laz',
	'laž',
	'lici',
	'liči',
	'LOL',
	'looking',
	'los',
	'losa',
	'lose',
	'loš',
	'loša',
	'loše',
	'mada',
	'malo',
	'manja',
	'manje',
	'mene',
	'meni',
	'mi',
	'mnoga',
	'mnoge',
	'mnogi',
	'mnogo',
	'mogao',
	'moj',
	'moja',
	'moje',
	'molim',
	'mora',
	'mozda',
	'moze',
	'možda',
	'može',
	'na',
	'nacin',
	'način',
	'nad',
	'nadjen',
	'nadji',
	'nađen',
	'nađi',
	'najbolji',
	'najgori',
	'nas',
	'nasi',
	'naš',
	'naši',
	'ne bi mogao',
	'ne moze',
	'ne može',
	'ne sme',
	'ne',
	'nece',
	'neće',
	'negde',
	'neka',
	'nekad',
	'nekada',
	'neke',
	'neki',
	'neko',
	'nema',
	'nesta',
	'nesto',
	'nešta',
	'nešto',
	'nigde',
	'nije uradio',
	'nije',
	'nijedan',
	'nijedna',
	'nijedno',
	'nika',
	'nikada',
	'niko',
	'nikoja',
	'nista',
	'nisu',
	'ništa',
	'novi',
	'njega',
	'njegov',
	'njen',
	'njeno',
	'njih',
	'njihov',
	'njihova',
	'njihove',
	'njihovi',
	'o',
	'od',
	'odgovor',
	'oko',
	'ona',
	'onda',
	'one',
	'oni ce',
	'oni će',
	'oni su',
	'oni',
	'ono je',
	'ono',
	'opa',
	'otisao',
	'otisla',
	'otislo',
	'otišao',
	'otišla',
	'otišlo',
	'ova',
	'ovaj',
	'ovde',
	'ove',
	'ovi',
	'ovo',
	'pa',
	'pise',
	'piše',
	'pita',
	'pitam',
	'pitano',
	'pitanja',
	'pitanje',
	'pitanjem',
	'pitanju',
	'pocetna',
	'početna',
	'pod',
	'pored',
	'posle',
	'potom',
	'pre',
	'preko',
	'prica',
	'priča',
	'radije',
	'reci',
	'reći',
	'ROTF',
	'ROTFLMAO',
	's',
	'sa',
	'sad',
	'sajt',
	'sam',
	'sama',
	'samo',
	'sirom',
	'skoro',
	'sta',
	'star',
	'stavi',
	'sto',
	'stoga',
	'strana',
	'stvarno',
	'su',
	'sva',
	'svaka',
	'svaki',
	'svako',
	'sve',
	'svet',
	'svi',
	'širom',
	'šta',
	'što',
	'ta',
	'taj',
	'takodje',
	'takođe',
	'tamo',
	'te',
	'ti',
	'to',
	'trazi',
	'traži',
	'treba',
	'trebalo',
	'u',
	'uglavnom',
	'ukljucen',
	'ukljucena',
	'ukljuceno',
	'uključen',
	'uključena',
	'uključeno',
	'unutra',
	'uradio',
	'uraditi',
	'uskoro',
	'usput',
	'uzmi',
	'vam',
	'vama',
	'van',
	'vas',
	'vas',
	'vaš',
	'vecina',
	'većina',
	'velika',
	'veliki',
	'veliko',
	'veoma',
	'verzija',
	'vest',
	'vi',
	'videla',
	'videlo',
	'video',
	'vidi',
	'visa',
	'vise',
	'viša',
	'više',
	'vreme',
	'vremena',
	'vrlo',
	'www',
	'YMMV',
	'za',
	'zasta',
	'zasto',
	'zašta',
	'zašto',
	'zeli',
	'zna',
	'želi',
	'а',
	'ако',
	'али',
	'без',
	'би',
	'бива',
	'била',
	'били',
	'било где',
	'било ко',
	'било која',
	'било који',
	'било',
	'био',
	'бити',
	'биће',
	'близу',
	'боља',
	'боље',
	'бољи',
	'вам',
	'вама',
	'ван',
	'вас',
	'ваш',
	'велика',
	'велики',
	'велико',
	'веома',
	'верзија',
	'вест',
	'већина',
	'ви',
	'видела',
	'видело',
	'видео',
	'види',
	'виша',
	'више',
	'време',
	'времена',
	'врло',
	'где',
	'гледа',
	'горе',
	'гори',
	'да',
	'далеко',
	'дан',
	'дана',
	'дани',
	'до',
	'добар',
	'добијен',
	'добијена',
	'добијено',
	'добила',
	'добило',
	'добио',
	'добра',
	'добри',
	'добро',
	'док',
	'доле',
	'доћи',
	'друге',
	'други',
	'друго',
	'жели',
	'за',
	'зашта',
	'зашто',
	'зна',
	'и',
	'иде',
	'иди',
	'изгледа',
	'између',
	'изнад',
	'икад',
	'икада',
	'или',
	'има',
	'имала',
	'имало',
	'имање',
	'имао',
	'имати',
	'искључен',
	'иста',
	'истина',
	'исто',
	'итд',
	'ја',
	'је',
	'једном',
	'јер',
	'јеси',
	'јесу',
	'још',
	'ка',
	'кад',
	'каже',
	'како',
	'као',
	'ко',
	'кога',
	'код',
	'која',
	'које',
	'који',
	'коме',
	'корисник',
	'корисника',
	'корисници',
	'корист',
	'кроз',
	'лаж',
	'личи',
	'лош',
	'мада',
	'мало',
	'мања',
	'мање',
	'мене',
	'мени',
	'ми',
	'многа',
	'многе',
	'многи',
	'много',
	'могао',
	'можда',
	'може',
	'мој',
	'моја',
	'моје',
	'молим',
	'мора',
	'на',
	'над',
	'нађен',
	'нађи',
	'најбољи',
	'најгори',
	'начин',
	'наш',
	'наши',
	'не би могао',
	'не може',
	'не сме',
	'не',
	'негде',
	'нека',
	'некад',
	'некада',
	'неке',
	'неки',
	'неко',
	'нема',
	'неће',
	'нешта',
	'нешто',
	'нигде',
	'није урадио',
	'није',
	'ниједан',
	'ниједна',
	'ниједно',
	'ника',
	'никада',
	'нико',
	'никоја',
	'нису',
	'ништа',
	'нови',
	'њега',
	'његов',
	'њен',
	'њено',
	'њих',
	'њихов',
	'њихова',
	'њихове',
	'њихови',
	'о',
	'ова',
	'овај',
	'овде',
	'ове',
	'ови',
	'ово',
	'од',
	'одговор',
	'око',
	'она',
	'онда',
	'оне',
	'они су',
	'они ће',
	'они',
	'оно је',
	'оно',
	'опа',
	'отишао',
	'отишла',
	'отишло',
	'па',
	'пита',
	'питам',
	'питано',
	'питања',
	'питање',
	'питањем',
	'питању',
	'пише',
	'под',
	'поред',
	'после',
	'потом',
	'почетна',
	'пре',
	'преко',
	'прича',
	'радије',
	'рећи',
	'с',
	'са',
	'сад',
	'сајт',
	'сам',
	'сама',
	'само',
	'сва',
	'свака',
	'сваки',
	'свако',
	'све',
	'свет',
	'сви',
	'скоро',
	'стави',
	'стар',
	'стварно',
	'стога',
	'страна',
	'су',
	'та',
	'тај',
	'такође',
	'тамо',
	'те',
	'ти',
	'то',
	'тражи',
	'треба',
	'требало',
	'ће',
	'ћемо',
	'ћете',
	'ћу',
	'у',
	'углавном',
	'узми',
	'укључен',
	'унутра',
	'урадио',
	'урадити',
	'ускоро',
	'успут',
	'хвала',
	'цитат',
	'чак',
	'често',
	'широм',
	'штo',
	'шта',
);
