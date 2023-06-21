@extends('layouts.app')

@section('title')
    <title>ДКЦ XI - София | Ценоразпис</title>
@endsection

@section('vendor-styles')
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/layout-2-efh5kh0gx9.css">
@endsection

@section('content')

    <div class="main-content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('welcome') }}">Начало</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    <a href="{{ route('price-list') }}">Ценоразпис</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 section-title">Ценоразпис</div>
            </div>

            <div class="row">
                <div class="col-md-8">

                    <div class="card collapse-icon accordion-icon-rotate service-description">
                        <div id="headingCollapse01" class="card-header">
                            <a data-toggle="collapse" href="#collapse01" aria-expanded="false" aria-controls="collapse01" class="card-title lead">Клинична лаборатория</a>
                        </div>
                        <div id="collapse01" role="tabpanel" aria-labelledby="headingCollapse01" class="collapse" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">

                                    <table class="table table-striped price-table laboratory">
                                        <thead>
                                            <tr><th colspan="2" scope="col">Основни изследвания</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>ПАКЕТ-Субстрати:глюкоза, креатинин, урея, билирубин-общ и директен, пикочна к-на, холестерол, триглицериди, HDL-хол., LDL, общ белтък, албумин;</td><td>30.00 лв.</td></tr>
                                            <tr><td>ПАКЕТ-Ензими: АСАТ, АЛАТ, алкална фосфатаза, ГГТ, LDH, алфа НВДН, СРК, алфа амилаза</td><td>20.00 лв.</td></tr>
                                            <tr><td>ПАКЕТ-Желязо, ЖСК</td><td>15.00 лв.</td></tr>
                                            <tr><td>ПАКЕТ-Натрий, Калий, Хлор</td><td>10.00 лв.</td></tr>
                                            <tr><td>Кръвна картина: Хемоглобин, хематокрит, еритроцити, левкоцити, тромбоцити; за всеки по:</td><td>5.00 лв.</td></tr>
                                            <tr><td>Диференциално броене на левкоцити и морфология на еритроцитите, ретикулоцити</td><td>3.00 лв.</td></tr>
                                            <tr><td>Скорост на утаяване на еритроцитите (РУЕ)</td><td>4.00 лв.</td></tr>
                                            <tr><td>Време на кървене</td><td>4.00 лв.</td></tr>
                                            <tr><td>Време на съсирване</td><td>3.00 лв.</td></tr>
                                            <tr><td>Протромбиново време</td><td>4.00 лв.</td></tr>
                                            <tr><td>Фибриноген</td><td>3.50 лв.</td></tr>
                                            <tr><td>Химическо изследване на урина със сухи тестове - рН, специфично тегло, белтък, глюкоза, кетони, билирубин, уробилиноген, кръв, левкоцити, нитрити (комплексно); за всеки по:</td><td>3.00 лв.</td></tr>
                                            <tr><td>Седимент</td><td>3.00 лв.</td></tr>
                                            <tr><td>Субстрати: глюкоза, креатинин, урея, билирубин - общ и директен, пикочна к-на, холестерол, триглицериди, HDL - хол., LDL, общ белтък, албумин; за всеки по:</td><td>4.00 лв.</td></tr>
                                            <tr><td>Ензими: АСАТ, АЛАТ, алкална фосфатаза, ГГТ: за всеки по:</td><td>3.00 лв.</td></tr>
                                            <tr><td>Ензими: LDH, алфа НВДН, СРК, алфа-амилаза: за всеки по:</td><td>3.00 лв.</td></tr>
                                            <tr><td>Калций, фосфор, желязо, ЖСК: за всеки по:</td><td>4.00 лв.</td></tr>
                                            <tr><td>Йонизиран калций</td><td>3.50 лв.</td></tr>
                                            <tr><td>Натрий, калий, хлор: за всеки по</td><td>4.00 лв.</td></tr>
                                            <tr><td>Хеликобактер пилори (количествен тест във фецес)</td><td>14.00 лв.</td></tr>
                                            <tr><td>Хеликобактер пилори (качествен тест във фецес)</td><td>10.00 лв.</td></tr>
                                            <tr><td>Кръвнозахарен профил (трикратен)</td><td>10.00 лв.</td></tr>
                                            <tr><td>С-реактивен протеин</td><td>10.00 лв.</td></tr>
                                            <tr><td>Липиден профил (холестерол, HDL, LDL, триглицериди)</td><td>15.00 лв.</td></tr>
                                            <tr><td>ОГГТ (Орален глюкозо толерантен тест)</td><td>9.00 лв.</td></tr>
                                            <tr><td>Васерман</td><td>12.00 лв.</td></tr>
                                            <tr><td>Кръвни групи</td><td>12.00 лв.</td></tr>
                                            <tr><td>Гликиран Hb (HbA1C)</td><td>16.00 лв.</td></tr>
                                            <tr><td>Микроалбуминурия</td><td>15.00 лв.</td></tr>
                                            <tr><td>AST, RF: за всеки по:</td><td>9.00 лв.</td></tr>
                                            <tr><td>СПИН</td><td>16.00 лв.</td></tr>
                                            <tr><td>Хепатит В (HBsAg)</td><td>10.00 лв.</td></tr>
                                            <tr><td>Хепатит С (HCV)</td><td>16.00 лв.</td></tr>
                                            <tr><td>Влагалищен секрет</td><td>15.00 лв.</td></tr>
                                            <tr><td>Цитонамазка</td><td>14.00 лв.</td></tr>
                                            <tr><td>Гърлен секрет</td><td>15.00 лв.</td></tr>
                                            <tr><td>D-dimer</td><td>20.00 лв.</td></tr>
                                            <tr><td>Фибриноген</td><td>3.50 лв.</td></tr>
                                        </tbody>
                                    </table>

                                    <table class="table table-striped price-table laboratory">
                                        <thead>
                                            <tr><th colspan="2" scope="col">Високоспециализирани изследвания - Тиреоидни хормони</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>TSH</td><td>16.50 лв.</td></tr>
                                            <tr><td>FT4</td><td>16.50 лв.</td></tr>
                                            <tr><td>FT3</td><td>16.50 лв.</td></tr>
                                            <tr><td>TgAb (TAT)</td><td>18.50 лв.</td></tr>
                                            <tr><td>Anti-TPO (MAT)</td><td>18.50 лв.</td></tr>
                                            <tr><td>TSHR-Ab (TSH-рецепторни антитела)</td><td>35.00 лв.</td></tr>
                                            <tr><td>TgAb + TPOAb</td><td>27.00 лв.</td></tr>
                                            <tr><td>FT3 + FT4 + TSH - (малък пакет)</td><td>39.00 лв.</td></tr>
                                            <tr><td>FT3 + FT4F + TSH + TPOAb + Tg-Ab - (разширен пакет)</td><td>54.00 лв.</td></tr>
                                            <tr><td>ПАКЕТ-TSH, FT4, FT3, TAT и MAT</td><td>65.00 лв.</td></tr>
                                        </tbody>
                                    </table>

                                    <table class="table table-striped price-table laboratory">
                                        <thead>
                                            <tr><th colspan="2" scope="col">Високоспециализирани изследвания - Репродуктивни хормони</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>FSH</td><td>16.00 лв.</td></tr>
                                            <tr><td>LH</td><td>16.00 лв.</td></tr>
                                            <tr><td>Estradiol</td><td>16.00 лв.</td></tr>
                                            <tr><td>Progesteron</td><td>16.00 лв.</td></tr>
                                            <tr><td>Testosteron</td><td>16.00 лв.</td></tr>
                                            <tr><td>Prolactin</td><td>16.00 лв.</td></tr>
                                            <tr><td>Калцитонин</td><td>30.00 лв.</td></tr>
                                            <tr><td>ПАКЕТ-FSH, LH, Estradiol, Progesteron, Testosteron, Prolactin</td><td>86.00 лв.</td></tr>
                                        </tbody>
                                    </table>

                                    <table class="table table-striped price-table laboratory">
                                        <thead>
                                            <tr><th colspan="2" scope="col">Високоспециализирани изследвания - Туморни маркери</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>tPSA</td><td>16.00 лв.</td></tr>
                                            <tr><td>CA 19-9</td><td>18.00 лв.</td></tr>
                                            <tr><td>CA 15-3</td><td>18.00 лв.</td></tr>
                                            <tr><td>CA 125</td><td>18.00 лв.</td></tr>
                                            <tr><td>CEA</td><td>17.00 лв.</td></tr>
                                        </tbody>
                                    </table>

                                    <table class="table table-striped price-table laboratory">
                                        <thead>
                                            <tr><th colspan="2" scope="col">Високоспециализирани изследвания - Инфекциозна мононуклеоза</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>EB VCA IgM</td><td>19.00 лв.</td></tr>
                                            <tr><td>EB VCA IgG</td><td>19.00 лв.</td></tr>
                                            <tr><td>EB VCA IgM + EB VCA IgG</td><td>33.00 лв.</td></tr>
                                            <tr><td>Пакет инфекциозна мононуклеоза:<br>ПКК + ДКК + EB VCA IgM</td><td>27.00 лв.</td></tr>
                                        </tbody>
                                    </table>

                                    <table class="table table-striped price-table">
                                        <thead>
                                            <tr><th colspan="2" scope="col">Високоспециализирани изследвания - Метаболити</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>Инсулинов глюкозотолерантен тест (трикратен)</td><td>39.00 лв.</td></tr>
                                            <tr><td>НОМА (индекс инсулинова резистентност)</td><td>16.50 лв.</td></tr>
                                            <tr><td>25-OH Vitamin D</td><td>20.00 лв.</td></tr>
                                            <tr><td>Osteocalcin (BGP)</td><td>25.00 лв.</td></tr>
                                            <tr><td>Procalcitonin (PCT)</td><td>20.00 лв.</td></tr>
                                            <tr><td>Инсулинов растежен фактор</td><td>48.00 лв.</td></tr>
                                            <tr><td>Vitamin B12</td><td>20.00 лв.</td></tr>
                                        </tbody>
                                    </table>

                                    <table class="table table-striped price-table laboratory">
                                        <thead>
                                            <tr><th colspan="2" scope="col">Covid изследвания</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>Covid-19-бърз антигенен тест</td><td>15.00 лв.</td></tr>
                                            <tr><td>анти SARS-COV-2 IgM/IgG QUANTITATIVE (количествен тест)</td><td>30.00 лв.</td></tr>
                                            <tr><td>анти SARS-COV-2 PCR тест</td><td>80.00 лв.</td></tr>
                                            <tr><td>Бърз тест за грип- Инфлуенца вирус-А/В</td><td>25.00 лв.</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="headingCollapse02" class="card-header">
                            <a data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02" class="card-title lead">Медицински удостоверения</a>
                        </div>
                        <div id="collapse02" role="tabpanel" aria-labelledby="headingCollapse02" class="collapse">
                            <div class="card-content">
                                <div class="card-body">
                                    <table class="table table-striped price-table">
                                        <tbody>
                                            <tr><td>Медицинско за чужбина</td><td>55.00 лв.</td></tr>
                                            <tr><td>Медицинско за шофьори кат."В"</td><td>30.00 лв.</td></tr>
                                            <tr><td>Медицинско за шофьори кат."С"</td><td>40.00 лв.</td></tr>
                                            <tr><td>Медицинско за студент</td><td>15.00 лв.</td></tr>
                                            <tr><td>Медицинско за деца 16-18г.</td><td>12.00 лв.</td></tr>
                                            <tr><td>Медицинско за граждански брак</td><td>40.00 лв.</td></tr>
                                            <tr><td>Медицинско за работа</td><td>25.00 лв.</td></tr>
                                            <tr><td>Медицинско за българско гражданство</td><td>130.00 лв.</td></tr>
                                            <tr><td>Медицински услуги ЛКК: (Интернист, Невролог, Хирург)</td><td>40.00 лв.</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="headingCollapse03" class="card-header">
                            <a data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03" class="card-title lead">Кабинет по пневмология и фтизиатрия</a>
                        </div>
                        <div id="collapse03" role="tabpanel" aria-labelledby="headingCollapse03" class="collapse" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <table class="table table-striped price-table">
                                        <tbody>
                                            <tr><td>Амбулаторен първичен преглед</td><td>55.00 лв.</td></tr>
                                            <tr><td>Амбулаторен вторичен преглед</td><td>45.00 лв.</td></tr>
                                            <tr><td>Домашен медицински преглед</td><td>70.00 лв.</td></tr>
                                            <tr><td>ФИД</td><td>15.00 лв.</td></tr>
                                            <tr><td>Консултация по документи</td><td>30.00 лв.</td></tr>
                                            <tr><td></td><td>30.00 лв.</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="headingCollapse04" class="card-header">
                            <a data-toggle="collapse" href="#collapse04" aria-expanded="false" aria-controls="collapse04" class="card-title lead">Кабинет по хирургия</a>
                        </div>
                        <div id="collapse04" role="tabpanel" aria-labelledby="headingCollapse04" class="collapse" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <table class="table table-striped price-table">
                                        <tbody>
                                            <tr><td>Първичен преглед</td><td>55.00 лв.</td></tr>
                                            <tr><td>Вторичен преглед</td><td>45.00 лв.</td></tr>
                                            <tr><td>Консултация по документи</td><td>30.00 лв.</td></tr>
                                            <tr><td>Първична обработка на рана</td><td>35.00 лв.</td></tr>
                                            <tr><td>Вторична обработка на рана</td><td>20.00 лв.</td></tr>
                                            <tr><td>Отстраняване на чужди тела</td><td>40.00 лв.</td></tr>
                                            <tr><td>Имобилизация</td><td>25.00 лв.</td></tr>
                                            <tr><td>Сутура на рана</td><td>35.00 лв.</td></tr>
                                            <tr><td>Инцезия на абсцес</td><td>35.00 лв.</td></tr>
                                            <tr><td>Противотетаничен анатоксин</td><td>10.00 лв.</td></tr>
                                            <tr><td>Катетеризация</td><td>30.00 лв.</td></tr>
                                            <tr><td>Превръзка/ суха</td><td>20.00 лв.</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="headingCollapse05" class="card-header">
                            <a data-toggle="collapse" href="#collapse05" aria-expanded="false" aria-controls="collapse05" class="card-title lead">Кабинет по кардиология</a>
                        </div>
                        <div id="collapse05" role="tabpanel" aria-labelledby="headingCollapse05" class="collapse" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <table class="table table-striped price-table">
                                        <tbody>
                                            <tr><td>Амбулаторен първичен преглед</td><td>55.00 лв.</td></tr>
                                            <tr><td>Амбулаторен вторичен преглед</td><td>45.00 лв.</td></tr>
                                            <tr><td>Домашен медицински преглед</td><td>70.00 лв.</td></tr>
                                            <tr><td>Консултация по документи</td><td>30.00 лв.</td></tr>
                                            <tr><td>Ехокардиография</td><td>55.00 лв.</td></tr>
                                            <!-- <tr><td>ЕКГ без разчитане</td><td>5.00 лв.</td></tr>
                                            <tr><td>ЕКГ с разчитане</td><td>10.00 лв.</td></tr>
                                            <tr><td>Измерване на кръвно налягане</td><td>5.00 лв.</td></tr> -->
                                            <tr><td>Холтер ЕКГ- 24 часа</td><td>60.00 лв.</td></tr>
                                            <tr><td>Холтер ЕКГ- 48 часа</td><td>70.00 лв.</td></tr>
                                            <tr><td>Холтер ЕКГ- 72 часа</td><td>75.00 лв.</td></tr>
                                            <!-- <tr><td>Холтер АН</td><td>30.00 лв.</td></tr> -->
                                            <tr><td>Амбулаторен преглед с ехограф</td><td>90.00 лв.</td></tr>
                                            <tr><td>RR  Холтер</td><td>70.00 лв.</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="headingCollapse06" class="card-header">
                            <a data-toggle="collapse" href="#collapse06" aria-expanded="false" aria-controls="collapse06" class="card-title lead">Кабинет по акушерство и гинекология</a>
                        </div>
                        <div id="collapse06" role="tabpanel" aria-labelledby="headingCollapse06" class="collapse" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <table class="table table-striped price-table">
                                        <tbody>
                                            <tr><td>Амбулаторен първичен преглед</td><td>55.00 лв.</td></tr>
                                            <tr><td>Амбулаторен вторичен преглед</td><td>45.00 лв.</td></tr>
                                            <tr><td>Ултразвуков преглед</td><td>55.00 лв.</td></tr>
                                            <tr><td>Превръзка след хирургична обработка на рана</td><td>15.00 лв.</td></tr>
                                            <tr><td>Цитонамазка, биологичен материал</td><td>15.00 лв.</td></tr>
                                            <tr><td>Вземане на биологичен материал – влагалищен секрет, цитонамазка, тест за хламидии – за всяко по отделно единична цена</td><td>15.00 лв.</td></tr>
                                            <tr><td>Преглед и поставяне на влагалищен песар</td><td>45.00 лв.</td></tr>
                                            <tr><td>Преглед с поставяне на вътрематочна спирала</td><td>90.00 лв.</td></tr>
                                            <tr><td>Преглед и екстракция на вътрематочна спирала</td><td>70.00 лв.</td></tr>
                                            <tr><td>Инцизия на фурункул (с лидокаин + 10.00 лв.)</td><td>120.00 лв.</td></tr>

                                            <tr><td>Отстраняване на хирургически шевове</td><td>30.00 лв.</td></tr>
                                            <tr><td>Преглед и колпоскопия</td><td>90.00 лв.</td></tr>

                                            <tr><td>Електрокоагулация</td><td>40.00 лв.</td></tr>
                                            <tr><td>Превръзка суха</td><td>15.00 лв.</td></tr>
                                            <tr><td>Преглед с вземане на цитонамазка</td><td>60.00 лв.</td></tr>
                                            <tr><td>Женска консултация – първичен преглед ехограф</td><td>80.00 лв.</td></tr>
                                            <tr><td>Женска консултация – вторичен преглед</td><td>55.00 лв.</td></tr>
                                            <tr><td>Женска консултация – УЗИ</td><td>40.00 лв.</td></tr>
                                            <tr><td>Инцезия на абсцес</td><td>15.00 лв.</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="headingCollapse07" class="card-header">
                            <a data-toggle="collapse" href="#collapse07" aria-expanded="false" aria-controls="collapse07" class="card-title lead">Кабинет по нервни болести</a>
                        </div>
                        <div id="collapse07" role="tabpanel" aria-labelledby="headingCollapse07" class="collapse" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <table class="table table-striped price-table">
                                        <tbody>
                                            <tr><td>Амбулаторен първичен преглед</td><td>55.00 лв.</td></tr>
                                            <tr><td>Амбулаторен вторичен преглед</td><td>45.00 лв.</td></tr>
                                            <tr><td>Домашни  прегледи</td><td>70.00 лв.</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="headingCollapse08" class="card-header">
                            <a data-toggle="collapse" href="#collapse08" aria-expanded="false" aria-controls="collapse08" class="card-title lead">Кабинет по ендокринология и болести на обмяната</a>
                        </div>
                        <div id="collapse08" role="tabpanel" aria-labelledby="headingCollapse08" class="collapse" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <table class="table table-striped price-table">
                                        <tbody>
                                            <tr><td>Амбулаторен първичен преглед</td><td>55.00 лв.</td></tr>
                                            <tr><td>Амбулаторен вторичен преглед</td><td>45.00 лв.</td></tr>
                                            <tr><td>Домашен медицински преглед</td><td>70.00 лв.</td></tr>

                                            <tr><td>Клинико – инструментални изследвания на болни с диабетна невропатия</td><td>20.00 лв.</td></tr>
                                            <tr><td>Интерпретация на остеодензитометрия</td><td>30.00 лв.</td></tr>
                                            <tr><td>Ултразвук на щитовидна жлеза</td><td>55.00 лв.</td></tr>

                                            <tr><td>Обучение на диабетно болни</td><td>30.00 лв.</td></tr>
                                            <tr><td>Амбулаторен преглед с ехограф</td><td>90.00 лв.</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="headingCollapse09" class="card-header">
                            <a data-toggle="collapse" href="#collapse09" aria-expanded="false" aria-controls="collapse09" class="card-title lead">Кабинет по урология</a>
                        </div>
                        <div id="collapse09" role="tabpanel" aria-labelledby="headingCollapse09" class="collapse" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <table class="table table-striped price-table">
                                        <tbody>
                                            <tr><td>Амбулаторен първичен преглед</td><td>55.00 лв.</td></tr>
                                            <tr><td>Амбулаторен вторичен преглед</td><td>45.00 лв.</td></tr>
                                            <tr><td>Домашен медицински преглед</td><td>70.00 лв.</td></tr>

                                            <tr><td>Платен преглед с УЗД</td><td>50.00 лв.</td></tr>
                                            <tr><td>Поставяне (подмяна) на катетър</td><td>35.00 лв.</td></tr>
                                            <tr><td>Амбулаторен преглед с ехограф</td><td>90.00 лв.</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="headingCollapse10" class="card-header">
                            <a data-toggle="collapse" href="#collapse10" aria-expanded="false" aria-controls="collapse10" class="card-title lead">Кабинет по педиатрия</a>
                        </div>
                        <div id="collapse10" role="tabpanel" aria-labelledby="headingCollapse10" class="collapse" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <table class="table table-striped price-table">
                                        <tbody>
                                            <tr><td>Амбулаторен първичен преглед</td><td>55.00 лв.</td></tr>
                                            <tr><td>Амбулаторен вторичен преглед</td><td>45.00 лв.</td></tr>
                                            <tr><td>Домашен медицински преглед</td><td>70.00 лв.</td></tr>

                                            <tr><td>Ултразвукова  диагностика</td><td>40.00 лв.</td></tr>
                                            <tr><td>Тест за стрептококи</td><td>20.00 лв.</td></tr>
                                            <tr><td>Амбулаторен преглед с ехограф</td><td>70.00 лв.</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="headingCollapse11" class="card-header">
                            <a data-toggle="collapse" href="#collapse11" aria-expanded="false" aria-controls="collapse11" class="card-title lead">Кабинет по кожни и венерически болести</a>
                        </div>
                        <div id="collapse11" role="tabpanel" aria-labelledby="headingCollapse11" class="collapse" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <table class="table table-striped price-table">
                                        <tbody>
                                            <tr><td>Амбулаторен първичен преглед</td><td>55.00 лв.</td></tr>
                                            <tr><td>Амбулаторен вторичен преглед</td><td>45.00 лв.</td></tr>
                                            <tr><td>Домашен медицински преглед</td><td>70.00 лв.</td></tr>

                                            <tr><td>Консултация без преглед (по документи)</td><td>30.00 лв.</td></tr>
                                            <tr><td>Дерматоскопии</td><td>50.00 лв.</td></tr>
                                            <tr><td>Вземане на биологичен материал за изследване</td><td>20.00 лв.</td></tr>

                                            <tr><td>Премахване на молуски (кюретиране) 1бр.</td><td>15.00 лв.</td></tr>
                                            <tr><td>Криотерапия на доброкачествени кожни тумори – до 5  бр., лезии</td><td>40.00 лв.</td></tr>
                                            <tr><td>Криотерапия на доброкачествени кожни тумори – до 10 бр., лезии</td><td>60.00 лв.</td></tr>

                                            <tr><td>Криотерапия на доброкачествени кожни тумори – над 10 бр. лезии по 5.00 лв. бр.</td><td></td></tr>
                                            <tr><td>Криотерапия на доброкачествени кожни тумори – до 5 лезии</td><td></td></tr>
                                            <tr><td>Премахване на доброкачествени образувания - среден размер</td><td>70.00 лв.</td></tr>
                                            <tr><td>Премахване на доброкачествени образувания - голям размер</td><td>100.00 лв.</td></tr>

                                            <tr><td>Интердермално тестване или скарификация с един  медикамент</td><td>20.00 лв.</td></tr>
                                            <tr><td>Локална анестезия</td><td>20.00 лв.</td></tr>
                                            <tr><td>Електрокоагулация на фиброми до 5 бр.</td><td>40.00 лв.</td></tr>
                                            <tr><td>Електрокоагулация на фиброми до 10 бр.</td><td>60.00 лв.</td></tr>
                                            <tr><td>Електрокоагулация на фиброми над 10 бр. по 5.00 лв. броя</td><td></td></tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- <div id="headingCollapse12" class="card-header">
                            <a data-toggle="collapse" href="#collapse12" aria-expanded="false" aria-controls="collapse12" class="card-title lead">Кабинет по ортопедия и травматология</a>
                        </div>
                        <div id="collapse12" role="tabpanel" aria-labelledby="headingCollapse12" class="collapse" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <table class="table table-striped price-table">
                                        <tbody>
                                            <tr><td>Амбулаторен първичен преглед</td><td>40.00 лв.</td></tr>
                                            <tr><td>Амбулаторен вторичен преглед</td><td>32.00 лв.</td></tr>
                                            <tr><td>Домашен медицински преглед</td><td>60.00 лв.</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> -->

                        <div id="headingCollapse13" class="card-header">
                            <a data-toggle="collapse" href="#collapse13" aria-expanded="false" aria-controls="collapse13" class="card-title lead">Кабинет по очни болести</a>
                        </div>
                        <div id="collapse13" role="tabpanel" aria-labelledby="headingCollapse13" class="collapse" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <table class="table table-striped price-table">
                                        <tbody>
                                            <tr><td>Амбулаторен първичен преглед</td><td>55.00 лв.</td></tr>
                                            <tr><td>Амбулаторен вторичен преглед</td><td>45.00 лв.</td></tr>
                                            <tr><td>Консултация / по документи</td><td>30.00 лв.</td></tr>

                                            <tr><td>Eкстракция на чуждо тяло</td><td>50.00 лв.</td></tr>
                                            <tr><td>Авторефрактометрия с предписание на очила</td><td>50.00 лв.</td></tr>
                                            <tr><td>Изследване на заден очен сегмент – офталмоскопия</td><td>20.00 лв.</td></tr>
                                            <tr><td>Тонометрия</td><td>20.00 лв.</td></tr>

                                            <tr><td>Денонощна крива на ВОН (вътреочно налягане)</td><td>20.00 лв.</td></tr>
                                            <tr><td>Екзофталмометрия</td><td>20.00 лв.</td></tr>
                                            <tr><td>Изследване на цветното зрение</td><td>20.00 лв.</td></tr>
                                            <tr><td>Изследване с триогледално стъкло на Голдман</td><td>45.00 лв.</td></tr>
                                            <tr><td>Гониоскопия</td><td>45.00 лв.</td></tr>

                                            <tr><td>Изследване на зрителна острота без изписване на очила</td><td>25.00 лв.</td></tr>
                                            <tr><td>Изследване на зрителна острота с изписване на очила</td><td>25.00 лв.</td></tr>

                                            <tr><td>Рефрактометрия</td><td>30.00 лв.</td></tr>
                                            <tr><td>Директна офталмоскопия</td><td>30.00 лв.</td></tr>

                                            <tr><td>Индиректна офталмоскопия с 90 диоптр. леща</td><td>35.00 лв.</td></tr>
                                            <tr><td>Биомикроскопия</td><td>35.00 лв.</td></tr>
                                            <tr><td>Изследване с решетка на Амслер</td><td>20.00 лв.</td></tr>
                                            <tr><td>Отстраняване на мигли</td><td>20.00 лв.</td></tr>

                                            <tr><td>Конюнктивална парабулбарна инжекция</td><td>30.00 лв.</td></tr>
                                            <tr><td>Сваляне на контактни лещи и промивка</td><td>30.00 лв.</td></tr>
                                            <tr><td>Промивка на конюнктивален сак</td><td>30.00 лв.</td></tr>
                                            <tr><td>Проба на Ширмер</td><td>20.00 лв.</td></tr>

                                            <tr><td>Отстраняване на шевове</td><td>40.00 лв.</td></tr>
                                            <tr><td>Отстраняване на чуждо тяло</td><td>50.00 лв.</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="headingCollapse14" class="card-header">
                            <a data-toggle="collapse" href="#collapse14" aria-expanded="false" aria-controls="collapse14" class="card-title lead">Кабинет по гастроентерология</a>
                        </div>
                        <div id="collapse14" role="tabpanel" aria-labelledby="headingCollapse14" class="collapse" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <table class="table table-striped price-table">
                                        <tbody>
                                            <tr><td>Амбулаторен първичен преглед</td><td>48.00 лв.</td></tr>
                                            <tr><td>Амбулаторен вторичен преглед</td><td>55.00 лв.</td></tr>
                                            <tr><td>Домашен медицински преглед</td><td>60.00 лв.</td></tr>
                                            <tr><td>Ехографски преглед</td><td>70.00 лв.</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="headingCollapse15" class="card-header">
                            <a data-toggle="collapse" href="#collapse15" aria-expanded="false" aria-controls="collapse15" class="card-title lead">Кабинет по вътрешни болести</a>
                        </div>
                        <div id="collapse15" role="tabpanel" aria-labelledby="headingCollapse15" class="collapse" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <table class="table table-striped price-table">
                                        <tbody>
                                            <tr><td>Амбулаторен първичен преглед</td><td>55.00 лв.</td></tr>
                                            <tr><td>Амбулаторен вторичен преглед</td><td>45.00 лв.</td></tr>
                                            <tr><td>Домашен медицински преглед</td><td>70.00 лв.</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="headingCollapse16" class="card-header">
                            <a data-toggle="collapse" href="#collapse16" aria-expanded="false" aria-controls="collapse16" class="card-title lead">Кабинет по ушно-носно-гърлени болести</a>
                        </div>
                        <div id="collapse16" role="tabpanel" aria-labelledby="headingCollapse16" class="collapse" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <table class="table table-striped price-table">
                                        <tbody>
                                            <tr><td>Амбулаторен първичен преглед</td><td>55.00 лв.</td></tr>
                                            <tr><td>Амбулаторен вторичен преглед</td><td>45.00 лв.</td></tr>
                                            <tr><td>Домашен медицински преглед</td><td>70.00 лв.</td></tr>
                                            <tr><td>Консултация по документи</td><td>30.00 лв.</td></tr>
                                            <tr><td>Отстраняване на чужди тела от устната кухина и фаринкс с местна анестезия</td><td>35.00 лв.</td></tr>
                                            <tr><td>Инцизия на перитонзиларен абсцес</td><td>40.00 лв.</td></tr>
                                            <tr><td>Постинцизионна ревизия на перитонзиларен абсцес</td><td>20.00 лв.</td></tr>
                                            <tr><td>Отоневрологично изледване</td><td>30.00 лв.</td></tr>
                                            <tr><td>Ушна промивка Жанет</td><td>20.00 лв.</td></tr>
                                            <tr><td>Отстраняване на шевове</td><td>25.00 лв.</td></tr>
                                            <tr><td>Инцизия на фурукул на ухото с местна анестезия</td><td>30.00 лв.</td></tr>
                                            <tr><td>Продухване по Полицер</td><td>20.00 лв.</td></tr>
                                            <tr><td>Инцизия на отематома с местна анестезия</td><td>70.00 лв.</td></tr>
                                            <tr><td>Пробиване на уши с местна анестезия</td><td>25.00 лв.</td></tr>
                                            <tr><td>Репозиция на септум с местна анестезия - мануална</td><td>50.00 лв.</td></tr>
                                            <tr><td>Отстраняване на тампонада след епистаксис</td><td>25.00 лв.</td></tr>
                                            <tr><td>Диагностициране на аденоидна вегетация</td><td>25.00 лв.</td></tr>
                                            <tr><td>Изследване на гласни връзки с идиректна ларингскопия</td><td>25.00 лв.</td></tr>
                                            <tr><td>Микробиологично изследване на фарингиален секрет</td><td>30.00 лв.</td></tr>
                                            <tr><td>Микробиологично изследване на назален  секрет</td><td>30.00 лв.</td></tr>
                                            <tr><td>Микробиологично изследване на  ушен секрет</td><td>30.00 лв.</td></tr>
                                            <tr><td>Екстракция на чуждо тяло от ухо</td><td>30.00 лв.</td></tr>
                                            <tr><td>Екстракция на чуждо тяло от нос</td><td>30.00 лв.</td></tr>
                                            <tr><td>Коагулация на кръвоносни съдове</td><td>25.00 лв.</td></tr>
                                            <tr><td>Поставяна на лекарствени вещества в носа при предна риноскопия</td><td>15.00 лв.</td></tr>
                                            <tr><td>Поставяне на медикаменти във външен слухов проход</td><td>15.00 лв.</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="headingCollapse17" class="card-header">
                            <a data-toggle="collapse" href="#collapse17" aria-expanded="false" aria-controls="collapse17" class="card-title lead">Обща манипулационна</a>
                        </div>
                        <div id="collapse17" role="tabpanel" aria-labelledby="headingCollapse17" class="collapse" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <table class="table table-striped price-table">
                                        <tbody>
                                            <tr><td>ЕКГ с разчитане</td><td>10.00 лв.</td></tr>
                                            <tr><td>ЕКГ без разчитане</td><td>5.00 лв.</td></tr>
                                            <tr><td>Мускулна инжекция</td><td>10.00 лв.</td></tr>
                                            <tr><td>Подкожна инжекция</td><td>10.00 лв.</td></tr>
                                            <tr><td>Венозна инжекция</td><td>20.00 лв.</td></tr>
                                            <tr><td>Вземане на венозна кръв</td><td>6.00 лв.</td></tr>
                                            <tr><td>Вземане на гърлен секрет</td><td>15.00 лв.</td></tr>
                                            <tr><td>Катетеризация</td><td>25.00 лв.</td></tr>
                                            <tr><td>Венозна инфузия – 30 мин.</td><td>25.00 лв.</td></tr>
                                            <tr><td>Венозна инфузия – 60 мин.</td><td>30.00 лв.</td></tr>
                                            <tr><td>Венозна инфузия над 1 час</td><td>40.00 лв.</td></tr>
                                            <tr><td>Венозна инфузия над 2 часа</td><td>50.00 лв.</td></tr>
                                            <tr><td>Измерване на кръвно налягане</td><td>5.00 лв.</td></tr>
                                            <tr><td>КЗП - еднократно измерване</td><td>5.00 лв.</td></tr>
                                            <tr><td>Епикутанни /скарификационни/ проби цена на брой</td><td>5.00 лв.</td></tr>
                                            <tr><td>Работа с канюла за венозно приложение /ЦВП, port-a-cath/ /</td><td>25.00 лв.</td></tr>
                                            <tr><td>Осигуряване на венозен източник с абокат</td><td>20.00 лв.</td></tr>
                                            <tr><td>Клизма - очистителна и лечебна</td><td>30.00 лв.</td></tr>
                                            <tr><td>Сваляне на уретрален катетър</td><td>15.00 лв.</td></tr>
                                            <tr><td>Промивка на уретрален катетър</td><td>10.00 лв.</td></tr>
                                            <tr><td>Хранене чрез сонда</td><td>15.00 лв.</td></tr>
                                            <tr><td>Хранене чрез гастрома</td><td>15.00 лв.</td></tr>
                                            <tr><td>Смяна на торбичка на анус претер или илеустома</td><td>25.00 лв.</td></tr>
                                            <tr><td>Сваляне на конци/конец</td><td>10.00 лв.</td></tr>
                                            <tr><td>Превръзка-септична или асептична</td><td>30.00 лв.</td></tr>
                                            <tr><td>Обработка и лекуване на декубитални рани</td><td>35.00 лв.</td></tr>
                                            <tr><td>Измерване на артериално налягане</td><td>5.00 лв.</td></tr>
                                            <tr><td>Домашно посещение</td><td>30.00 лв.</td></tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="headingCollapse18" class="card-header">
                            <a data-toggle="collapse" href="#collapse18" aria-expanded="false" aria-controls="collapse18" class="card-title lead">Отделение по образна диагностика</a>
                        </div>
                        <div id="collapse18" role="tabpanel" aria-labelledby="headingCollapse18" class="collapse" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <table class="table table-striped price-table">
                                        <tbody>
                                            <tr><td>Рентгенография на челюсти в специални проекции</td><td>30.00 лв.</td></tr>
                                            <tr><td>Рентгенография на лицеви кости</td><td>30.00 лв.</td></tr>
                                            <tr><td>Назални кости</td><td>30.00 лв.</td></tr>
                                            <tr><td>Специални центражи на черепа</td><td>45.00 лв.</td></tr>
                                            <tr><td>Синуси</td><td>30.00 лв.</td></tr>
                                            <tr><td>Епифаринкс нативна</td><td>25.00 лв.</td></tr>
                                            <tr><td>Рентгенография на стернум</td><td>30.00 лв.</td></tr>
                                            <tr><td>Рентгенография на ребра / лява или дясна</td><td>30.00 лв.</td></tr>
                                            <tr><td>Рентгенография на горни крайници</td><td>15.00 лв.</td></tr>
                                            <tr><td>Рентгенография на раменна става</td><td>30.00 лв.</td></tr>
                                            <tr><td>Рентгенография на хумерус</td><td>40.00 лв.</td></tr>
                                            <tr><td>Рентгенография на лакетна става</td><td>40.00 лв.</td></tr>
                                            <tr><td>Рентгенография на антебрахиум</td><td>40.00 лв.</td></tr>
                                            <tr><td>Рентгенография на гривнена става- една проекция</td><td>25.00 лв.</td></tr>
                                            <tr><td>Рентгенография на гривнена става- две  проекц.</td><td>40.00 лв.</td></tr>
                                            <tr><td>Рентгенография на длан и пръсти- две проекции</td><td>40.00 лв.</td></tr>
                                            <tr><td>Рентгенография на стерноклавикуларна става-един. пр.</td><td>25.00 лв.</td></tr>
                                            <tr><td>Рентгенография на стерноклавикуларна става-две пр.</td><td>40.00 лв.</td></tr>
                                            <tr><td>Рентгенография на сакроилиачна става</td><td>50.00 лв.</td></tr>
                                            <tr><td>Рентгенография на тазобедрена става-ед.проек.</td><td>30.00 лв.</td></tr>
                                            <tr><td>Рентгенография на тазобедрена става-две  проек.</td><td>45.00 лв.</td></tr>
                                            <tr><td>Рентгенография на бедрена кост-един. проекц.</td><td>25.00 лв.</td></tr>
                                            <tr><td>Рентгенография на бедрена кост- две проекц.</td><td>40.00 лв.</td></tr>
                                            <tr><td>Рентгенография на колянна става-ед. проекц.</td><td>30.00 лв.</td></tr>
                                            <tr><td>Рентгенография на колянна става-две проекц.</td><td>40.00 лв.</td></tr>
                                            <tr><td>Рентгенография на колянна става с натоварване</td><td>45.00 лв.</td></tr>
                                            <tr><td>Рентгенография на подбедрица ед. проекц.</td><td>25.00 лв.</td></tr>
                                            <tr><td>Рентгенография на подбедрица две проекц.</td><td>45.00 лв.</td></tr>
                                            <tr><td>Рентгенография на глезенна става- един. проекц</td><td>30.00 лв.</td></tr>
                                            <tr><td>Рентгенография на глезенна става - две проекц.</td><td>45.00 лв.</td></tr>
                                            <tr><td>Рентгенография на стъпало и пръсти-ед. проекция</td><td>30.00 лв.</td></tr>
                                            <tr><td>Рентгенография на стъпало и пръсти-две проекц.</td><td>40.00 лв.</td></tr>
                                            <tr><td>Рентгенография на стъпало и пръсти с натоварване</td><td>35.00 лв.</td></tr>
                                            <tr><td>Рентгенография на клавикула</td><td>40.00 лв.</td></tr>
                                            <tr><td>Рентгенография на акромиоклавикуларна</td><td>30.00 лв.</td></tr>
                                            <tr><td>Рентгенография на скапула</td><td>30.00 лв.</td></tr>
                                            <tr><td>Рентгенография на череп - една проекция</td><td>30.00 лв.</td></tr>
                                            <tr><td>Рентгенография на череп- две проекц.</td><td>50.00 лв.</td></tr>
                                            <tr><td>Рентгенография на гръбначни прешлени- една проекц.</td><td>35.00 лв.</td></tr>
                                            <tr><td>Рентгенография на гръбначни прешлени- две проекц.</td><td>55.00 лв.</td></tr>
                                            <tr><td>Рентгенография на гръден кош и бял дроб- една проекц.</td><td>40.00 лв.</td></tr>
                                            <tr><td>Рентгенография на гръден кош и бял дроб- две проекц.</td><td>50.00 лв.</td></tr>
                                            <tr><td>Обзорна рентгенография на сърце и медиастинум</td><td>40.00 лв.</td></tr>
                                            <tr><td>Сакрум и опашна кост - ед. проекция</td><td>30.00 лв.</td></tr>
                                            <tr><td>Сакрум и опашна кост - две проекц.</td><td>50.00 лв.</td></tr>
        
                                            <tr><td>Обзорна рентгенография на корем за нива</td><td>35.00 лв.</td></tr>
                                            <tr><td>Обзорна рентгенография на корем за БУМ</td><td>40.00 лв.</td></tr>
                                            <tr><td>Рентгенография на таз</td><td>35.00 лв.</td></tr>
                                            <tr><td>Ехографска диагностика на коремни органи</td><td>50.00 лв.</td></tr>
                                            <tr><td>Ехографска диагностика на щитовидна жлеза</td><td>40.00 лв.</td></tr>
                                            <tr><td>Ехографска диагностика на млечна жлеза</td><td>50.00 лв.</td></tr>
                                            <tr><td>Зъбни снимки</td><td>10.00 лв.</td></tr>
                                            <tr><td>Мамография</td><td>60.00 лв.</td></tr>
                                            <!-- <tr><td>Изследване на млечни жлези с апарат ,,Braster-Pro“</td><td>49.00 лв.</td></tr> -->
                                            <tr><td>Разчитане на снимка </td><td>20.00 лв.</td></tr>
                                            <tr><td>Копие на снимка</td><td>20.00 лв.</td></tr>
                                            <tr><td>Запис CD - копие</td><td>15.00 лв.</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- <div id="headingCollapse19" class="card-header">
                            <a data-toggle="collapse" href="#collapse19" aria-expanded="false" aria-controls="collapse19" class="card-title lead">Преглед при проф. Петранка Троянова, дерматолог-онколог</a>
                        </div>
                        <div id="collapse19" role="tabpanel" aria-labelledby="headingCollapse19" class="collapse" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <table class="table table-striped price-table">
                                        <tbody>
                                            <tr><td>Амбулаторен първичен преглед</td><td>100.00 лв.</td></tr>
                                            <tr><td>Амбулаторен вторичен преглед</td><td>70.00 лв.</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> -->

                        <!-- <div id="headingCollapse20" class="card-header">
                            <a data-toggle="collapse" href="#collapse20" aria-expanded="false" aria-controls="collapse20" class="card-title lead">Преглед при д-р Росен Икономов, отоневролог</a>
                        </div> -->
                        <div id="collapse20" role="tabpanel" aria-labelledby="headingCollapse20" class="collapse" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <table class="table table-striped price-table">
                                        <tbody>
                                            <tr><td>Амбулаторен първичен преглед</td><td>65.00 лв.</td></tr>
                                            <tr><td>Амбулаторен вторичен преглед</td><td>40.00 лв.</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="headingCollapse21" class="card-header">
                            <a data-toggle="collapse" href="#collapse21" aria-expanded="false" aria-controls="collapse21" class="card-title lead">Физиотерапия и рехабилитация</a>
                        </div>
                        <div id="collapse21" role="tabpanel" aria-labelledby="headingCollapse21" class="collapse" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <table class="table table-striped price-table">
                                        <tbody>
                                            <tr><td>Първичен преглед при лекар</td><td>48.00 лв.</td></tr>
                                            <tr><td>Вторичен преглед при лекар</td><td>35.00 лв.</td></tr>
                                            <tr><td>Функционална диагностика на опорно-двигателен апарат, ММТ, Сантиметрия, Ъглометрия</td><td>20.00 лв.</td></tr>
                                            <tr><td>Специализирана кинезитерапевтична методика (30мин)</td><td>30.00 лв.</td></tr>
                                            <tr><td>Електростимулация</td><td>15.00 лв.</td></tr>
                                            <tr><td>Постизометрична релаксация (ПИР) - 1 процедура</td><td>15.00 лв.</td></tr>
                                            <tr><td>Лечение с нискочестотен ток</td><td>10.00 лв.</td></tr>
                                            <tr><td>Лечение с нискочестотен ток - 5 бр</td><td>48.00 лв.</td></tr>
                                            <tr><td>Лечение със средночестотен ток</td><td>10.00 лв.</td></tr>
                                            <tr><td>Лечение със средночестотен ток - 5 бр.</td><td>48.00 лв.</td></tr>
                                            <tr><td>Лечение с високочестотен ток</td><td>10.00 лв.</td></tr>
                                            <tr><td>TECAR терапия - малка става</td><td>25.00 лв.</td></tr>
                                            <tr><td>TECAR терапия - голяма става, гръб</td><td>25.00 лв.</td></tr>
                                            <tr><td>Криотерапия</td><td>10.00 лв.</td></tr>
                                            <tr><td>Магнитотерапия</td><td>10.00 лв.</td></tr>
                                            <tr><td>Ултразвукова терапия - 1 поле</td><td>10.00 лв.</td></tr>
                                            <tr><td>Ултразвукова терапия - 2 полета</td><td>15.00 лв.</td></tr>
                                            <tr><td>Светлолечение</td><td>8.00 лв.</td></tr>
                                            <tr><td>Лазартерапия</td><td>20.00 лв.</td></tr>
                                            <tr><td>Лазартерапия - второ поле</td><td>20.00 лв.</td></tr>
                                            <tr><td>Лазартерапия - роботизиран лазер 5 броя(24лв броя)</td><td>120.00 лв.</td></tr>
                                            <tr><td>Лечебна физкултура - 15мин</td><td>15.00 лв.</td></tr>
                                            <tr><td>Лечебна физкултура - 30мин</td><td>20.00 лв.</td></tr>
                                            <tr><td>Лечебен масаж яка - 20мин</td><td>19.00 лв.</td></tr>
                                            <tr><td>Лечебен масаж гръб - 30мин</td><td>29.00 лв.</td></tr>
                                            <tr><td>Лечебен масаж на зона</td><td>19.00 лв.</td></tr>
                                            <tr><td>Лечебен масаж долни крайници - 30мин</td><td>29.00 лв.</td></tr>
                                            <tr><td>Лимфен дренаж - 1 брой</td><td>20.00 лв.</td></tr>
                                            <tr><td>Лимфен дренаж - 5 броя(17лв/бр)</td><td>85.00 лв.</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="headingCollapse22" class="card-header">
                            <a data-toggle="collapse" href="#collapse22" aria-expanded="false" aria-controls="collapse22" class="card-title lead">ПАКЕТНИ УСЛУГИ</a>
                        </div>
                        <div id="collapse22" role="tabpanel" aria-labelledby="headingCollapse22" class="collapse" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <table class="table table-striped price-table">
                                        <tbody>
                                            <tr><td>ОСНОВЕН ПАКЕТ:Консултация със специалист по Пулмология или Кардиология(електрокардиограма, пулс и оксиметрия, ПКК с диф. броене, тест за антитела COVID-19-IgG)</td><td>70.00 лв.</td></tr>
                                            <tr><td>РАЗШИРЕН ПАКЕТ:Консултация със специалист по Пулмология или Кардиология(електрокардиограма, пулс и оксиметрия, ПКК с диф. броене, тест за антитела COVID-19-IgG, маркер на възпалението-CRP,креатинин, калий, натрий, D-димер, глюкоза) </td><td>100.00 лв.</td></tr>
                                            <tr><td>ВИП ПАКЕТ:Кл. преглед от специалист по преценка (Кардиолог, Пулмолог, Невролог), измерване на артериално налягане и кислородна сатурация, ехография на плеври и бял дроб/ехография на сърце, доплер каротиди, електрокардиограма</td><td>120.00 лв.</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                <div class="col-md-4">
                    <div class="price-list-files-container">
                        <div class="list-group">
                            <a href="{{ config('app.url') }}/documents/price-lists/tsenorazpis-dkc-11-sofia-11-02-2020.pdf"
                                class="list-group-item"
                                download="tsenorazpis-dkc-11-sofia-11-02-2020.pdf"
                                title="Изтегли документ" >
                                <div class="media">
                                    <div class="media-left pr-1">
                                        <span class=""><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="media-body w-100">
                                        <h6 class="media-heading mb-0">Ценоразпис</h6>
                                        <p class="font-small-2 mb-0 text-muted">Специализирани кабинети</p>
                                    </div>
                                </div>
                            </a>

                            <a href="{{ config('app.url') }}/documents/price-lists/tsenorazpis-klinichna-laboratoriya-dkc-11-sofia-2018-06-20.pdf"
                                class="list-group-item"
                                download="tsenorazpis-klinichna-laboratoriya-dkc-11-sofia-2018-06-20.pdf"
                                title="Изтегли документ" >
                                <div class="media">
                                    <div class="media-left pr-1">
                                        <span class=""><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="media-body w-100">
                                        <h6 class="media-heading mb-0">Ценоразпис</h6>
                                        <p class="font-small-2 mb-0 text-muted">Клинична лаборатория</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
