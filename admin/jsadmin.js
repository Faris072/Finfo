// function sidebar() {
//     let x = document.getElementsByClassName('col-md-3')[0];
//     let y = document.getElementsByClassName('col-md-9')[0];
//     if (x.classList.item(0) != 'col-md-0') {//untuk mengetahui nama class
//         x.classList.replace('col-md-3','col-md-0');untuk mengganti dari col-md-3 ke col-md-0
//         y.classList.replace('col-md-9','col-md-12');
//     } else {
//         x.classList.replace('col-md-0','col-md-3');
//         y.classList.replace('col-md-12','col-md-9');
//     }
// }

function sidebar() {
    let x = document.getElementsByClassName('sidebar')[0];
    let y = document.getElementsByClassName('content')[0];
    if (x.style.width != '0%') {
        x.style.width = '0%';
        y.style.width = '100%';
    } else {
        x.style.width = '20%';
        y.style.width = '80%';
    }
}

function mode(){
    let x= document.querySelector('.container-fluid-xl .sidebar');//select satu element dengan cara seperti css
    let y= document.querySelectorAll('.container-fluid-xl .content')[0];//select 1 atau lebih element dengan cara seperti css dengan syarat pakai indeks
    let z=document.getElementById('mode');
    let navbar=document.getElementsByClassName('navbar')[0];
    let dir=document.querySelector('.content .container-fluid-xl');
    if(y.style.backgroundColor != 'black'){
        navbar.classList.replace('bg-primary','bg-dark');//mengganti class dari bg-primary ke bg-dark
        navbar.classList.replace('navbar-light','navbar-dark');
        y.style.backgroundColor='black';
        x.classList.add('bg-dark');
        z.style.backgroundColor='rgb(56, 208, 255)';
        y.style.color='white';
        z.innerHTML='<i class="fas fa-sun fa-2x" style="color:yellow;"></i>';
        dir.classList.remove('bg-light');
        dir.style.backgroundColor='grey';
    }
    else{
        navbar.classList.replace('bg-dark','bg-primary');
        navbar.classList.replace('navbar-dark','navbar-light');
        y.style.backgroundColor='white';
        x.classList.remove('bg-dark');
        y.style.color='black';
        z.style.backgroundColor='black';
        z.innerHTML='<i class="fas fa-moon fa-2x" style="color:white;"></i>';
        dir.classList.replace('bg-dark','bg-light');
        dir.style.backgroundColor='';
    }
}

function edit(){
    let x=document.querySelector('.container .edit');
    let y= document.querySelector('.container .konten');
    if(x.style.display=='none'){
        x.style.display='block';
        y.style.display='none';
    }
    else{
        x.style.display='none';
        y.style.display='block';
    }
}

