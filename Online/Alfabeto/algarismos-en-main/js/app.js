document.onkeypress = function(event){
    const randColor = () =>  {
        return "#" + Math.floor(Math.random()*16777215).toString(16).padStart(6, '0').toUpperCase();
        // https://www.educative.io/answers/how-to-generate-a-random-color-in-javascript
    }
    let letra = event.key
    
    if(letra < '0' || letra > '9') {
        document.getElementById("letter").innerHTML = '';
    }else{         
        document.getElementById("letter").style.color = randColor();
        document.getElementById("letter").innerHTML = letra.toUpperCase();
    }
}

document.addEventListener('keydown', function(e) {
    if(e.keyCode >= 33 && e.keyCode <= 45 || e.keyCode == 12) alert ('Parece que o NumLock está desligado. Ligue-o')
    
    if(e.keyCode == 48 || e.keyCode == 96) document.getElementById('0').play();
    if(e.keyCode == 49 || e.keyCode == 97) document.getElementById('1').play();
    if(e.keyCode == 50 || e.keyCode == 98) document.getElementById('2').play();
    if(e.keyCode == 51 || e.keyCode == 99) document.getElementById('3').play();
    if(e.keyCode == 52 || e.keyCode == 100) document.getElementById('4').play();
    if(e.keyCode == 53 || e.keyCode == 101) document.getElementById('5').play();
    if(e.keyCode == 54 || e.keyCode == 102) document.getElementById('6').play();
    if(e.keyCode == 55 || e.keyCode == 103) document.getElementById('7').play();
    if(e.keyCode == 56 || e.keyCode == 104) document.getElementById('8').play();
    if(e.keyCode == 57 || e.keyCode == 105) document.getElementById('9').play();
    
    if(e.keyCode < 48 || e.keyCode > 105 ) document.getElementById('erro').play();
    if(e.keyCode >= 65 || e.keyCode >= 95 ) document.getElementById('erro').play();
    if(e.keyCode < 33 || (e.keyCode > 45 && e.keyCode < 48)) document.getElementById('erro').play();
});

