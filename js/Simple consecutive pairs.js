/*
https://www.codewars.com/kata/5a3e1319b6486ac96f000049/train/javascript
*/

const Test = require('./test.js');


function pairs(ar){
    let count = 0;
    let i = 0;
    while(i + 1 < ar.length){
        if(ar[i] - ar[i + 1] === 1 || ar[i] - ar[i + 1] === -1)
            count++;
        i += 2;
    }
    return count;
};


console.log(Test.assertEquals(pairs([1,2,5,8,-4,-3,7,6,5]),3));
console.log(Test.assertEquals(pairs([21, 20, 22, 40, 39, -56, 30, -55, 95, 94]),2));
console.log(Test.assertEquals(pairs([81, 44, 80, 26, 12, 27, -34, 37, -35]),0));
console.log(Test.assertEquals(pairs([-55, -56, -7, -6, 56, 55, 63, 62]),4));
console.log(Test.assertEquals(pairs([73, 72, 8, 9, 73, 72]),3));
