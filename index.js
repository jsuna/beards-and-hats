var express = require('express');
var serveStatic  = require('serve-static');

//Constants
var PORT = 8080;

//App

var app = express();

app.use(serveStatic('app/public', {'index': ['index.html', 'index.htm']}));
app.listen(PORT);
console.log('Running on http://localhost:'+PORT);
