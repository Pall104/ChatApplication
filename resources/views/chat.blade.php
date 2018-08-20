<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
     .list-group{
         overflow-y:scroll;
         height: 200px;
     }
    </style>
    
</head>
<body>
    <div class="container">
    <div class="row" id="app">
    <div class="offset-4 col-4 col-sm-10 offset-sm-1">
    <div class="badge badge-pill badge-primary">@{{ typing }}</div>
    <li class="list-group-item active">Chat Room<span class="badge badge-pill badge-success">@{{ noOfUsers }}</span></li>
    <ul class="list-group" v-chat-scroll>
  <message
  v-for="value,index in chat.message"
  :key=value.index
  color='warning'
  :user=chat.user[index]
  :color=chat.color[index]
  :time=chat.time[index]
  >
  @{{ value }}
  </message>
  </ul>
  <input type="text" class="form-control" placeholder="Type your message here.." v-model="message" @keyup.enter='send'>
  <br>
  <a href="" class="btn btn-warning btn-m" @click.prevent='deleteSession'>Clear chat</a>
    </div>
    
    </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>