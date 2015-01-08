/**
 * Created by kausar on 11/23/14.
 */
var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var request = require('request');

var API_HOST = 'http://localhost/live-chat/web/app_dev.php/';

app.get('/', function(req, res){
    request( API_HOST + 'message-box', function (error, response, body) {
        if (!error && response.statusCode == 200) {
            res.send(body);
        }
    });
});

io.on('connection', function(socket){
    socket.on('chat message', function(msg){
        io.emit('chat message', msg);
    });
});

http.listen(3031, function(){
    console.log('listening on *:3030');
});
