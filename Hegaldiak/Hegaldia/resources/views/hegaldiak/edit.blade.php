<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('hegaldiak.update',['hegaldia'=>$hegaldia])}}" method="POST">
        @csrf
        @method('put')
        <div>
            <label>Irteera</label>
            <input type="text" name="irteera" value={{$hegaldia->irteera}}/>
        </div>
        <div>
            <label>Helmuga</label>
            <input type="text" name="helmuga" value={{$hegaldia->helmuga}} />
        </div>
        <div>
            <label>Irteera eguna/ordua</label>
            <input type="text" name="irteeraEgunaOrdua" value={{$hegaldia->irteeraEgunaOrdua}} />
        </div>
        <div>
            <label>iraupena</label>
            <input type="text" name="iraupena" value={{$hegaldia->iraupena}} />
        </div>
       
        <button>Aldatu</button>
    </form>
</body>
</html>