const txtElement = ['Nikmati Hidangan Del Cafe-in'];
let count = 0;
let txtIndex = 0;
let currentTxt = '';
let words = '';

(function ngetik(){
    if(count == txtElement.length){
        count = 0;
    }

    currentTxt = txtElement[count];
    words = currentTxt.slice(0, ++txtIndex);
    document.querySelector('.mengetik').textContent = words;

    if(words.length == currentTxt.length){
        count++;
        txtIndex = 0;
    }
    setTimeout(ngetik, 250);
})();
