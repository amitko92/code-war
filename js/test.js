
exports.testing = function (numberOfTest, input1, input2) {
    console.log("test: " + numberOfTest);
    if(input1 === input2)
        console.log("test pass");
    else{
        console.log("test fail");
        console.log(input1);
    }
}
