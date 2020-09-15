""
https://www.codewars.com/kata/598d91785d4ce3ec4f000018/javascript
""


function wordValue(a) {
    let solution = [];
    let count = 1;
    a.forEach(word => {
        let sum = 0;
        let arr = word.split(" ");
        arr.forEach(word => {
            let val = calcValue(word);
            sum += val*count;
        });
        count++;
        solution.push(sum);
    });
    return solution;
}

function calcValue(word){
    let sum = 0;
    for(let i = 0; i < word.length; i++){
        sum += word[i].charCodeAt() - 96;
    }
    return sum;
}

let words = ["codewars","abc","xyz"];
let solution = [88,12,225];

console.log(wordValue(words));
