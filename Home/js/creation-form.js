let mcqBtn = document.querySelector('#mcq');
let mcqFields = document.querySelectorAll('.quest-mcq input');
let tfqBtn = document.querySelector('#tf');
let tfqFields = document.querySelectorAll('.quest-tf input');

function mcquestion(){
    if(mcqBtn.checked ==true)
    {
        for(let i=0;i<mcqFields.length;i++){
        mcqFields[i].disabled = false;
    }
    }
    else{
        for(let i=0;i<mcqFields.length;i++){
            mcqFields[i].disabled = true;
        }
    }
}


function tfquestion(){
    if(tfqBtn.checked ==true)
    {
        for(let i=0;i<tfqFields.length;i++){
        tfqFields[i].disabled = false;
    }
    }
    else{
        for(let i=0;i<tfqFields.length;i++){
            tfqFields[i].disabled = true;
        }
    }
}







