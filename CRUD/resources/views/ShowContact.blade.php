<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Contact</title>
    <style>
        table{
            border:2px solid black;
            border-collapse:collapse;
        }
        tr,td,th{
            border:2px solid black;
            padding:10px;
        }
        body{
            margin-left:20%;
            margin-top:10%;
        }
        h3{
            margin-left:300px;
        }
        .btn{
            color:white;
            background-color:#0c4196;
            border-radius:10px;
        }
        .btns{
            color:white;
            margin-top:20px;
            background-color:#0c4196;
            border-radius:10px;
        }
    </style>
</head>
<body>
    <h3>Person Contacts</h3>
    <table>
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Operations</th>
        </thead>
        @foreach($info as $datas)
        <tbody>
            <tr>
                 <td>{{$datas->id}}</td>
                <td>{{$datas->Name}}</td>
                <td>{{$datas->Phone}}</td>
                <td>{{$datas->Email}}</td>
                <td>{{$datas->Address}}</td>
                <td>
                    <a href="InsertForm"><button class="btn">Add</button></a>
                    <a href="updates/{{$datas->id}}"><button class="btn">update</button></a>
                    <a href="deletes/{{$datas->id}}"><button class="btn">delete</button></a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <a href="InsertForm"><button class="btns">Add</button></a> Your Contact Details
</body>
</html>