<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial PDF</title>
</head>
<style>
    th{
        background-color: grey;
        color: white;
    }
    th,
    td{
        border: 1px solid black;
        border-collapse: collapse;
        padding:15px;
        text-align: left;
    }
    table{
        width: 100%;
        background-color: #f1f1c1;
    }
</style>
<body>
    <table>
        <thead>
            <tr>
                <th>S.Number</th>
                <th>Name</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            {{-- @if ($loop->last==false) --}}
                <tr>
                    <td>1</td>
                    <td>Patatas</td> 
                    <td>imagen1</td>
                </tr>  
            {{-- @endif             --}}                      
        </tbody>
    </table>
</body>
</html>