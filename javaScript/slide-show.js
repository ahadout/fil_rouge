let slide1 = document.getElementById('slide_1');
let slide2 = document.getElementById('slide_2');
let slide3 = document.getElementById('slide_3');
let counter = 1;

setInterval(function(){
    if(counter < 3){
        document.getElementById('slide_' + counter).classList.remove('state_1');
        document.getElementById('slide_' + counter).classList.add('state_3');
        document.getElementById('slide_' + counter).style.animationName = 'from-zero-to-minis';
        document.getElementById('slide_' + counter).style.animationDuration = '800ms';

        document.getElementById('slide_' + (counter + 1)).classList.remove('state_2');
        document.getElementById('slide_' + (counter + 1)).classList.remove('state_3');
        document.getElementById('slide_' + (counter + 1)).classList.add('state_1');
        document.getElementById('slide_' + (counter + 1)).style.animationName = 'from-100-to-zero';
        document.getElementById('slide_' + (counter + 1)).style.animationDuration = '800ms';

        counter++;
    }
    else{
        document.getElementById('slide_3').classList.remove('state_1');
        document.getElementById('slide_3').classList.add('state_2');
        document.getElementById('slide_3').style.animationName = 'from-zero-to-100';
        document.getElementById('slide_3').style.animationDuration = '800ms';

        document.getElementById('slide_2').classList.remove('state_3');
        document.getElementById('slide_2').classList.remove('state_2');
        document.getElementById('slide_2').classList.add('state_2');
        document.getElementById('slide_2').style.animationName = 'from-minis-to-100';
        document.getElementById('slide_2').style.animationDuration = '800ms';

        document.getElementById('slide_1').classList.remove('state_3');
        document.getElementById('slide_1').classList.remove('state_2');
        document.getElementById('slide_1').classList.add('state_1');
        document.getElementById('slide_1').style.animationName = 'from-minis-to-zero';
        document.getElementById('slide_1').style.animationDuration = '800ms';

        counter = 1;
    }
},8000)

function slide_left(){
    if(counter <3){
        document.getElementById('slide_' + counter).classList.remove('state_1');
        document.getElementById('slide_' + counter).classList.add('state_3');
        document.getElementById('slide_' + counter).style.animationName = 'from-zero-to-minis';
        document.getElementById('slide_' + counter).style.animationDuration = '800ms';

        document.getElementById('slide_' + (counter+1)).classList.remove('state_2');
        document.getElementById('slide_' + (counter+1)).classList.remove('state_3');
        document.getElementById('slide_' + (counter+1)).classList.add('state_1');
        document.getElementById('slide_' + (counter+1)).style.animationName = 'from-100-to-zero';
        document.getElementById('slide_' + (counter+1)).style.animationDuration = '800ms';

        counter++;
    }
    else{
        document.getElementById('slide_' + counter).classList.remove('state_1');
        document.getElementById('slide_' + counter).classList.add('state_2');
        document.getElementById('slide_' + counter).style.animationName = 'from-zero-to-minis';
        document.getElementById('slide_' + counter).style.animationDuration = '800ms';

        document.getElementById('slide_' + (counter-2)).classList.remove('state_3');
        document.getElementById('slide_' + (counter-2)).classList.remove('state_2');
        document.getElementById('slide_' + (counter-2)).classList.add('state_1');
        document.getElementById('slide_' + (counter-2)).style.animationName = 'from-100-to-zero';
        document.getElementById('slide_' + (counter-2)).style.animationDuration = '800ms';

        counter = 1;
    }
}

function slide_right(){
    if(counter == 1){
        document.getElementById('slide_' + counter).classList.remove('state_1');
        document.getElementById('slide_' + counter).classList.add('state_2');
        document.getElementById('slide_' + counter).style.animationName = 'from-zero-to-100';
        document.getElementById('slide_' + counter).style.animationDuration = '800ms';

        document.getElementById('slide_' + (counter + 2)).classList.remove('state_3');
        document.getElementById('slide_' + (counter + 2)).classList.remove('state_2');
        document.getElementById('slide_' + (counter + 2)).classList.add('state_1');
        document.getElementById('slide_' + (counter + 2)).style.animationName = 'from-minis-to-zero';
        document.getElementById('slide_' + (counter + 2)).style.animationDuration = '800ms';

        counter = 3;
    }
    else if((counter > 1) && (counter <= 3)){
        document.getElementById('slide_' + counter).classList.remove('state_1');
        document.getElementById('slide_' + counter).classList.add('state_2');
        document.getElementById('slide_' + counter).style.animationName = 'from-zero-to-100';
        document.getElementById('slide_' + counter).style.animationDuration = '800ms';

        document.getElementById('slide_' + (counter - 1)).classList.remove('state_3');
        document.getElementById('slide_' + (counter - 1)).classList.remove('state_2');
        document.getElementById('slide_' + (counter - 1)).classList.add('state_1');
        document.getElementById('slide_' + (counter - 1)).style.animationName = 'from-minis-to-zero';
        document.getElementById('slide_' + (counter - 1)).style.animationDuration = '800ms';

        counter--;
    }
}