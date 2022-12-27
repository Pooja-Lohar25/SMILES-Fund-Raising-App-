var scr=0;

function checkAns()
{
    var ans1 = document.getElementById('ans1').checked;
    // var ans2 = document.getElementById('ans2').checked;
    // var ans3 = document.getElementById('ans3').checked;
    // var ans4 = document.getElementById('ans4').checked;
    // var ans5 = document.getElementById('ans5').checked;
    // var ans6 = document.getElementById('ans6').checked;
    // var ans7 = document.getElementById('ans7').checked;
    // var ans8 = document.getElementById('ans8').checked;
    // var ans9 = document.getElementById('ans9').checked;
    // var ans10 = document.getElementById('ans10').checked;
    if(ans1)
    {
        scr++;
    }
    // if(ans2)
    // {
    //     scr++;
    // }
    // if(ans3)
    // {
    //     scr++;
    // }
    // if(ans4)
    // {
    //     scr++;
    // }
    // if(ans5)
    // {
    //     scr++;
    // }
    // if(ans6)
    // {
    //     scr++;
    // }
    // if(ans7)
    // {
    //     scr++;
    // }
    // if(ans8)
    // {
    //     scr++;
    // }
    // if(ans9)
    // {
    //     scr++;
    // }
    // if(ans10)
    // {
    //     scr++;
    // }
    document.getElementById('score').value = scr;
    document.getElementById('score').innerHTML = scr;
}

