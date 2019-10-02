<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <title>Document</title>

    <style>


span {
    
  padding: 20px;
  text-align: center;
  font-size: 25px;
  color: white;
  font-family: Times New Roman;
  margin: 0;

}

form{

    margin-top: 100px;
}

body{
    background-image: linear-gradient(to right, #1ecee1,#256eda );
    height: 800px;
}
label{
    background-color: #3ec184;
}

</style>

</head>


<body>
    <div class="container">
   <center> <span>Hello World</span> </center>
    @yield("content")
    </div>
</body>

</html>