﻿<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Практика</title>
    <link rel="stylesheet" href="practice.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>

<body id='sss'>
    <div class="midBlock">
        <div class="header">
            <div class="button" id="button1">
                <div class="headerButton"><a href="/theory">Теория</a>
                    <div class="borderButton">
                        <div class="borderLine" id="line1"></div>
                    </div>
                </div>
            </div>
            <div class="button" id="button2">
                <div class="headerButton"><a href="/practice">Практика</a>
                    <div class="borderButton">
                        <div class="borderLine" id="line2"></div>
                    </div>
                </div>
            </div>
            <div class="button" id="button3">
                <div class="headerButton"><a href="/pmaster">Онлайн-пианино</a>
                    <div class="borderButton">
                        <div class="borderLine" id="line3"></div>
                    </div>
                </div>
            </div>
            <a class="logo" href="/"></a>
        </div>

        <div class="container" id="container1">
            <div class="block" id="first">
                <p class="title"> Угадывание ноты </p>
                <div class="fulldesc">В этом режиме вы можете попрактиковаться в определении отдельных нот на слух. Вы услышите одну из нот первой октавы, затем нужно будет выбрать правильный ответ.</div>
                <p class="downline"> Нажмите для раскрытия меню </p>
                <div class="overlay" id="overlay1">
                    <div class="classic">
                        <p class="tit2" align="center">Классический режим.</p>
                        <ul>
                            <li>Бесконечное количество попыток</li>
                            <li>Бесконечное количество нот</li>
                        </ul>
                        <div class="startButton" id="notaclassic"> <span>Начать</span></div>
                    </div>
                    <div class="user">
                        <p class="tit2" align="center">Пользовательский режим</p>
                        <ul>
                            <li>Количество попыток</li>
                            <li>Количество нот</li>

                        </ul>
                        <div class="form">
                            <div class="asd">
                                <select id="amtr">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="asd">
                                <select id="amge">
                                    <option>5</option>
                                    <option>10</option>
                                    <option>15</option>
                                    <option>20</option>
                                    <option>30</option>
                                </select>

                            </div>
                        </div>

                        <div class="startButton" id="nota"> <span>Начать</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="container2">
            <div class="block" id="second">
                <p class="title">Интервалы</p>
                <div class="fulldesc" id="full2">В этом режиме вы можете попрактиковаться в определении интервалов на слух. Вы услышите один из всех возможных интервалов в пределах октавы, затем нужно будет выбрать правильный ответ.</div>
                <p class="downline" id="down2"> Нажмите для раскрытия меню </p>
                <div class="overlay" id="overlay2">
                    <div class="classic">
                        <p class="tit2" align="center">Классический режим.</p>
                        <ul>
                            <li>Бесконечное количество попыток</li>
                            <li>Бесконечное количество интервалов</li>
                            <li>Выбрать правильный ответ из предложенных</li>
                        </ul>
                        <div class="startButton" id="intclassic"> <span>Начать</span></div>
                    </div>
                    <div class="user">
                        <p class="tit2" align="center">Пользовательский режим.</p>
                        <ul>
                            <li>Количество попыток</li>
                            <li>Количество интервалов</li>

                        </ul>
                        <div class="form">
                            <div class="asd">
                                <select id="amtr1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                            <div class="asd">
                                <select id="amge1">
                                    <option>5</option>
                                    <option>10</option>
                                    <option>15</option>
                                    <option>20</option>
                                    <option>30</option>
                                </select>
                            </div>
                        </div>
                        <div class="startButton" id="int"> <span>Начать</span> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="container3">
            <div class="block" id="third">
                <p class="title">Аккорды</p>
                <div class="fulldesc">В этом режиме вы сможете попрактиковаться в определении аккордов на слух. Вы услышите один из основных аккордов тонанольности, затем нужно будет выбрать правильный ответ.</div>
                <p class="downline" id="down3"> Нажмите для раскрытия меню </p>
                <div class="overlay" id="overlay3">
                    <div class="classic">
                        <p class="tit2" align="center">Классический режим.</p>
                        <ul>
                            <li>Бесконечное количество попыток</li>
                            <li>Бесконечное количество аккордов</li>
                            <li>Случайный аккорд из всех возможных</li>
                            <li>Выбрать правильный ответ из предложенных</li>
                        </ul>
                        <div class="startButton" id="chordclassic"> <span>Начать</span></div>
                    </div>
                    <div class="user">
                        <p class="tit2" align="center">Пользовательский режим.</p>
                        <ul>
                            <li>Количество попыток</li>
                            <li>Количесвто аккордов</li>

                            <li>Тонические трезвучия</li>
                            <li>Увел., уменьш. трезвучия</li>
                            <li>Обращения тонический трезвучий</li>
                            <li>Доминантсептаккорд и обращения</li>
                        </ul>
                        <div class="form">
                            <div class="asd">
                                <select id="amtr2">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                            <div class="asd" id="amge2">
                                <select>
                                    <option>5</option>
                                    <option>10</option>
                                    <option>15</option>
                                    <option>20</option>
                                    <option>30</option>
                                </select>
                            </div>
                            <div class="asd1"><input type="checkbox" name="type3" value="1" checked="checked"> </div>
                            <div class="asd1"><input type="checkbox" name="type3" value="2"> </div>
                            <div class="qwe"><input type="checkbox" name="type3" value="3"> </div>
                            <div class="qwe"><input type="checkbox" name="type3" value="4"> </div>
                        </div>
                        <div class="startButton" id="chord"> <span>Начать</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="container4">
            <div class="block" id="fourth">
                <p class="title"> Тестирование </p>
                <div class="fulldesc">В этом режиме вы можете пройти заранее созданные тесты как по теории, так и по определению на слух, а также создать свой тест.</div>
                <p class="downline"> Нажмите для раскрытия меню </p>
                <div class="overlay" id="overlay4">
                    <div class="classic">
                        <p class="tit2" align="center">Пройти тест.</p>
                        <a href="theotest1.html">
                            <div class="theoryTest">Тест "Основы"</div>
                        </a>
                        <a href="theotest2.html">
                            <div class="theoryTest">Тест "Интервалы"</div>
                        </a>
                        <a href="theotest3.html">
                            <div class="theoryTest" style="border: none;">Тест "Аккорды"</div>
                        </a>
                    </div>
                    <div class="user">
                        <p class="tit2" align="center">Создать тест.</p>
                        <ul>
                            <li>Количество попыток</li>
                            <li>Ноты</li>
                            <li>Интервалы</li>
                            <li>Аккорды</li>
                        </ul>
                        <div class="form">
                            <div class="asd">
                                <select id="amtr3">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="asd">
                                <select id="amn">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>5</option>
                                    <option>10</option>
                                </select>
                                <select id="amint">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>5</option>
                                    <option>10</option>
                                </select>
                                <select id="amch">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>5</option>
                                    <option>10</option>
                                </select>
                            </div>
                        </div>

                        <div class="startButton" id="test"> <span>Начать</span></div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $('#notaclassic').click(function() {
                window.location = 'pPiano.php?type=notaclassic'
            });

            $('#intclassic').click(function() {
                window.location = 'pTest.php?type=intclassic'
            });

            $('#chordclassic').click(function() {
                window.location = 'pChord.php?type=chordclassic'
            });

            $('#nota').click(function() {
                var a = $('#amtr  option:selected').text();
                var b = $('#amge  option:selected').text();
                window.location = "pPiano.php?type=nota&amtr=" + a + "&amge=" + b;
            });

            $('#int').click(function() {
                var a = $('#amtr1  option:selected').text();
                var b = $('#amge1  option:selected').text();
                var c = "0";
                var radios = $("input[name='ch']");
                for (var i = 0; i < radios.length; i++) {
                    if (radios[i].checked) {
                        c = i;
                        break;
                    }
                }
                window.location = "pTest.php?type=int&amtr=" + a + "&amge=" + b;
            });

            $('#chord').click(function() {
                var a = $('#amtr2  option:selected').text();
                var b = $('#amge2  option:selected').text();
                var arr = [];
                $('input[name="type3"]:checked').each(function() {
                    arr.push(this.value);
                });
                window.location = "pChord.php?type=chord&amtr=" + a + "&amge=" + b + "&chords=" + arr;

            });
            $('#test').click(function() {
                var a = $('#amtr3  option:selected').text();
                var b = $('#amn  option:selected').text();
                var c = $('#amint  option:selected').text();
                var d = $('#amch  option:selected').text();
                window.location = "test.php?&amtr=" + a + "&amn=" + b + "&amint=" + c + "&amch=" + d;
            })

            $('#container1').click(function() {
                var b = $('#overlay1').css('height');
                $('#overlay1').css('bottom', '0');
                $('#overlay1').css('height', '100%');
                if ($('#overlay2').css('height') != '0px') {
                    $('#overlay2').css('bottom', '100%');
                    $('#overlay2').css('height', '0');
                }
                if ($('#overlay3').css('height') != '0px') {
                    $('#overlay3').css('bottom', '100%');
                    $('#overlay3').css('height', '0');
                }
            });

            $(window).click(function(x) {
                var id = x.target.id;
                var a = $('#overlay1').css('height');
                var b = $('#overlay2').css('height');
                var c = $('#overlay3').css('height');
                var d = $('#overlay4').css('height');
                if (id == 'sss' && a != '0px') {
                    $('#overlay1').css('bottom', '100%');
                    $('#overlay1').css('height', '0');
                }
                if (id == 'sss' && b != '0px') {
                    $('#overlay2').css('bottom', '100%');
                    $('#overlay2').css('height', '0');
                }
                if (id == 'sss' && c != '0px') {
                    $('#overlay3').css('bottom', '100%');
                    $('#overlay3').css('height', '0');
                }
                if (id == 'sss' && d != '0px') {
                    $('#overlay4').css('bottom', '100%');
                    $('#overlay4').css('height', '0');
                }
            });

            $('#container2').click(function() {
                var b = $('#overlay2').css('height');
                $('#overlay2').css('bottom', '0');
                $('#overlay2').css('height', '100%');
                if ($('#overlay3').css('height') != '0px') {
                    $('#overlay3').css('bottom', '100%');
                    $('#overlay3').css('height', '0');
                }
                if ($('#overlay1').css('height') != '0px') {
                    $('#overlay1').css('bottom', '100%');
                    $('#overlay1').css('height', '0');
                }
                if ($('#overlay4').css('height') != '0px') {
                    $('#overlay4').css('bottom', '100%');
                    $('#overlay4').css('height', '0');
                }
            });
            $('#container3').click(function() {
                var b = $('#overlay3').css('height');
                $('#overlay3').css('bottom', '0');
                $('#overlay3').css('height', '100%');
                if ($('#overlay2').css('height') != '0px') {
                    $('#overlay2').css('bottom', '100%');
                    $('#overlay2').css('height', '0');
                }
                if ($('#overlay1').css('height') != '0px') {
                    $('#overlay1').css('bottom', '100%');
                    $('#overlay1').css('height', '0');
                }
                if ($('#overlay4').css('height') != '0px') {
                    $('#overlay4').css('bottom', '100%');
                    $('#overlay4').css('height', '0');
                }
            });
            $('#container4').click(function() {
                var b = $('#overlay4').css('height');
                $('#overlay4').css('bottom', '0');
                $('#overlay4').css('height', '100%');
                if ($('#overlay2').css('height') != '0px') {
                    $('#overlay2').css('bottom', '100%');
                    $('#overlay2').css('height', '0');
                }
                if ($('#overlay1').css('height') != '0px') {
                    $('#overlay1').css('bottom', '100%');
                    $('#overlay1').css('height', '0');
                }
                if ($('#overlay3').css('height') != '0px') {
                    $('#overlay3').css('bottom', '100%');
                    $('#overlay3').css('height', '0');
                }
            });


            $('#button1').mouseover(function() {
                $('#line1').css('width', '100%');
            });
            $('#button1').mouseout(function() {
                $('#line1').css('width', '0%');
            });
            $('#button2').mouseover(function() {
                $('#line2').css('width', '100%');
            });
            $('#button2').mouseout(function() {
                $('#line2').css('width', '0%');
            });
            $('#button3').mouseover(function() {
                $('#line3').css('width', '100%');
            });
            $('#button3').mouseout(function() {
                $('#line3').css('width', '0%');
            });
            $('#button4').mouseover(function() {
                $('#line4').css('width', '100%');
            });
            $('#button4').mouseout(function() {
                $('#line4').css('width', '0%');
            });
        </script>
    </div>
</body>

</html>