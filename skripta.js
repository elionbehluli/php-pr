var emriRegex = /^[A-Z]\w+[._-]?\w+/;
var passwordiRegex = /^[A-Z]\w+[._-]\w+[0-9]+/;
var form = document.getElementById('form');
var errorEmri = document.getElementById('errorEmri');
var errorPass = document.getElementById('errorPasswordi');
var errorMosha = document.getElementById('errorMosha');

var errorKarta = document.getElementById('errorKarta');

form.addEventListener('submit', (e) => {
    var emri = document.getElementById('emri');
    var passwordi = document.getElementById('passwordi');
    var mosha = document.getElementById('mosha');
    var karta = document.getElementById('karta');

    if(emri.value == '' || emri.value == null){
        errorEmri.innerHTML="Kerkohet emri!"
        e.preventDefault();
    }else{
        if(emriRegex.test(emri)){
            errorEmri.innerText=""
        }else{
            errorEmri.innerText="Emri duhet te filloj me shkronje te madhe!"
        }
    }

    if(passwordi.value.length < 8){
        errorPass.innerText="Passwordi duhet te kete mminimum 8 karaktere, te filloj me shkronje te madhe, te permbaje se paku njerin nga karakteret(. _ -) dhe te permbajn numra!"
        e.preventDefault();
    }else{
        if(passwordiRegex.test(passwordi)){
            errorPass.innerText="";
            
        }else{
            errorPass.innerText="Passwordi duhet te filloj me shkronje te madhe dhe duhet te permbaje njerin nga karakteret: ., _ ose - !"
            e.preventDefault();
        }
    }

    if(mosha.value < 18){
        errorMosha.innerText="Mosha duhet te jete mbi 18 vjet!"
        e.preventDefault();
    }

    if(karta.length != 12){
        errorKarta.innerText = "Karta duhet te kete 12 shifra!";
        e.preventDefault();
    }
})


