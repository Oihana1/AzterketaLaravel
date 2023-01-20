<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table-fixed w-full collapse" >
        <thead>
          <tr class="bg-indigo-500 text-white">
            <th class="w-20 py-4 ...">ID</th>
            <th class="w-1/2 py-4 ...">IRTEERA</th>
            <th class="w-1/16 py-4 ...">HELMUGA</th>
            <th class="w-1/16 py-4 ...">IRTEERA ORDUA/HELMUGA</th>
            <th class="w-1/16 py-4 ...">IRAUPENA</th>
          </tr>
        </thead>
        <tbody>
              @foreach ($hegaldiak as $hegaldi)
                  <tr>
                  <td class="py-3 px-10">{{$hegaldi->id}}</td>
                  <td class="p-3 px-25  text-center">{{$hegaldi->irteera}}</td>
                  <td class="p-3 px-20 ">{{$hegaldi->helmuga}}</td>
                  <td class="p-3 px-20 ">{{$hegaldi->irteeraEgunaOrdua}}</td>
                  <td class="p-3 px-15 tex-center ">{{$hegaldi->iraupena}}</td>
                  <td class="p-3 px-15 tex-center "><form action="{{route('hegaldiak.edit',['hegaldia'=>$hegaldi])}}" method="GET"><button>ALDATU</button></form></td>
                </tr>
                  @endforeach
        </tbody>
    </table>
</body>
</html>