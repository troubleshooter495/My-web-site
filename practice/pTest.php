﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Практика</title>
    <link rel="stylesheet" href="pTest.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>

<body>
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
        <div class="message">

        </div>
        <div class="testBlock">
            <div class="test">
                <div class="ans" id="m2">♪ Малая секунда</div>
                <div class="ans" id="b2">♪ Большая секунда</div>
                <div class="ans" id="m3">♪ Малая терция</div>
                <div class="ans" id="b3">♪ Большая терция</div>
                <div class="ans" id="c4">♪ Чистая кварта</div>
                <div class="ans" id="c5">♪ Чистая квинта</div>
                <div class="ans" id="m6">♪ Малая секста</div>
                <div class="ans" id="b6">♪ Большая секста</div>
                <div class="ans" id="m7">♪ Малая септима</div>
                <div class="ans" id="b7">♪ Большая септима</div>
                <div class="ans" style="border: none;" id="c8">♪ Чистая октава</div>
            </div>
            <div class="replayButton">
                <p id="opa">проиграть</p>
            </div>
        </div>
        <div class="confirmButton">выйти</div>
    </div>


    <script>
        outwrite('Нажмите на кнопку, чтобы услышать звук');
        $('.message').text('Нажмите на кнопку, чтобы услышать звук');
        <?php 
$type = $_GET['type'];
	$amge = $_GET['amge'];
	$amtr = $_GET['amtr'];
if ($type=="intclassic"){
echo("ways = {1:'do1.mp3',13:'do2.mp3', 2:'dod1.mp3', 14:'dod2.mp3', 6:'fa1.mp3', 18:'fa2.mp3', 7:'fad1.mp3', 19:'fad2.mp3', 10:'la1.mp3',22:'la2.mp3',11:'lad1.mp3', 23:'lad2.mp3', 5:'mi1.mp3', 17:'mi2.mp3', 3:'re1.mp3', 15:'re2.mp3', 4:'red1.mp3', 16:'red2.mp3', 12:'si1.mp3', 24:'si2.mp3', 8:'so1.mp3', 20:'so2.mp3', 9:'sod1.mp3', 21:'sod2.mp3'};

	 ints = {1:'m2',2:'b2',3:'m3',4:'b3',5:'c4',7:'c5',8:'m6',9:'b6',10:'m7',11:'b7',12:'c8'};
	 flag = 1

	 $('.replayButton').click(function(){
	 	r_int = getrandomint();
	 	r_note = Math.floor(Math.random() * 24) + 1;
	 	if(flag==1){
			if(r_note + r_int <= 24){
	 			a1 = new Audio()
	 			a2 = new Audio()
	 			a1.src = 'mus/' + ways[r_note];
	 			a2.src = 'mus/' + ways[r_note + r_int];
	 			a1.play();
	 			a2.play();
	 			
	 		} else {
	 			a1 = new Audio()
	 			a2 = new Audio()
	 			a1.src = 'mus/' + ways[r_note - r_int];
	 			a2.src = 'mus/' + ways[r_note];
	 			a1.play();
	 			a2.play();
	 			
	 			
	 	}
			 flag=0;
			 anspressed = false;
	 }
	 else {
	 a1.play(); a2.play();
	 }
	 });
	 anspressed = false;
	 $('.ans').click(function(){
	 	id = $(this).attr('id');
		if(!anspressed){
	 	if(ints[r_int]==id && flag==0){
	 		outwrite('Верно, правильный ответ - ' + normalized(ints[r_int]) + '. Нажмите кнопку, чтобы услышать следующий звук');
	 	}
	 	else {
	 		outwrite('Неверно, правильный ответ - ' + normalized(ints[r_int]) + '. Нажмите кнопку, чтобы услышать следующий звук');
	 	}
	 	flag=1;
		anspressed = true;
		}
	 });");
}
if($type=='int'){
	echo("
	amge =".$amge.";
	amtr =".$amtr.";
	 ways = {1:'do1.mp3',13:'do2.mp3', 2:'dod1.mp3', 14:'dod2.mp3', 6:'fa1.mp3', 18:'fa2.mp3', 7:'fad1.mp3', 19:'fad2.mp3', 10:'la1.mp3',22:'la2.mp3',11:'lad1.mp3', 23:'lad2.mp3', 5:'mi1.mp3', 17:'mi2.mp3', 3:'re1.mp3', 15:'re2.mp3', 4:'red1.mp3', 16:'red2.mp3', 12:'si1.mp3', 24:'si2.mp3', 8:'so1.mp3', 20:'so2.mp3', 9:'sod1.mp3', 21:'sod2.mp3'};
	 ints = {1:'m2',2:'b2',3:'m3',4:'b3',5:'c4',7:'c5',8:'m6',9:'b6',10:'m7',11:'b7',12:'c8'};
	 sounds = [amge];
	 for(var i =0; i< amge; ++i){
	 	sounds[i] = getrandomint();
	 }
	 j=0;
	 flag = 1;
	 correctans =0;
	 $('.replayButton').click(function(){

	 	if(j<amge){
	 		r_int = sounds[j];
		 	r_note = Math.floor(Math.random() * 24) + 1;
			if(flag==1)
				{
					if(r_note + r_int < 24){
						a1 = new Audio()
						a2 = new Audio()
						a1.src = 'mus/' + ways[r_note];
						a2.src = 'mus/' + ways[r_note + r_int];
						a1.play();
						a2.play();
						//alert(ways[r_note] + ' ' + ways[r_note + r_int] + ' ' + ints[r_int]);
				} else {
					a1 = new Audio()
					a2 = new Audio()
					a1.src = 'mus/' + ways[r_note - r_int];
					a2.src = 'mus/' + ways[r_note];
					a1.play();
					a2.play();
					//alert(ways[r_note] + ' ' + ways[r_note - r_int] + ' ' + ints[r_int]);
			}
			flag=0;
			}
		} else {
			outwrite('Практика завершена! Вы набрали ' + correctans + ' из ' + amge + ' правильных ответов.');
		}
	});


	 tr = 1; //current try
	 $('.ans').click(function(){
		id = $(this).attr('id');
		if(flag == 0){
			if(ints[r_int]==id){
							outwrite('Верно, правильный ответ - ' + normalized(ints[r_int]) + '. Нажмите кнопку, чтобы услышать следующий звук');
							tr = 1;
							j++;
							flag=1;
							correctans += 1;
						}
						else {
							if(tr < amtr){
								outwrite('Неверно, попробуйте еще раз');
								a1.play();
								a2.play();
								tr++;
							}
							else if(tr == amtr){
								outwrite('Неверно, правильный ответ - ' + normalized(ints[r_int]) + '. Нажмите кнопку, чтобы услышать следующий звук');
								outwrite('Неверно, правильный ответ - ' + normalized(ints[r_int]) + '. Нажмите кнопку, чтобы услышать следующий звук');
								tr=1;
								j++;
								flag=1;
							}
						}
				}		
	});");
}
?>
        //{1:'m2',2:'b2',3:'m3',4:'b3',5:'c4',7:'c5',8:'m6',9:'b6',10:'m7',11:'b7',12:'c8'}
        function normalized(nota) {
            opa = {
                'm2': 'Малая секунда',
                'b2': 'Большая секунда',
                'm3': 'Малая терция',
                'b3': 'Большая терция',
                'c4': 'Чистая кварта',
                'c5': 'Чистая квинта',
                'm6': 'Малая секста',
                'b6': 'Большая секста',
                'm7': 'Малая септима',
                'b7': 'Большая септима',
                'c8': 'Октава'
            };
            return opa[nota];
        }

        var curfunid = 0;

        function outwrite(b) {
            curfunid += 1;
            var tt = curfunid;
            var temp = '';
            var len = b.length;
            $('.message').text('');
            var j = 0;
            setInterval(function() {
                if (j < len && curfunid == tt) {
                    temp += b[j];
                    $('.message').text(temp);
                    j += 1;
                } else if (curfunid != tt) {
                    return;
                }
            }, 20);

        }

        function getrandomint() {
            var t = Math.floor(Math.random() * 11) + 1;
            if (t == 6)
                return getrandomint();
            else
                return t;
        }

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
        $('.confirmButton').click(function() {
            location.href = '/practice';
        });
    </script>
</body>

</html>