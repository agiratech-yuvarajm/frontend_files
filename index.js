getAjax('https://jsonplaceholder.typicode.com/posts', function(data){
    var json = JSON.parse(data);
    console.log(json);
});
