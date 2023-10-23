const promise = new Promise((resolve, reject) => {
    const api_consult = function () {
        setTimeout(() => {
            resolve("success");
            console.log("timeout");
        }, 0);
    }

    api_consult();
});

console.log("before");
console.log(promise); // Promise { <pending> }
promise.then((value) => {
    console.log(value);
});
console.log("after");
