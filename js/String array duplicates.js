function dup(s) {
    let arr = []
    s.forEach(word => {
        let filteredWord = '';
        for(let i = 0; i < word.length; i++){
            if(filteredWord[filteredWord.length - 1] != word[i])
                filteredWord += word[i];
        }

        arr.push(filteredWord);
    });
    return arr;
};

let words = ['aamit', 'aaa'];

let newWords = dup(words);

console.log(newWords);
