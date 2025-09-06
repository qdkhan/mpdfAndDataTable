<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .page {
            position: relative;
            width: 100%;
            height: 297mm; /* A4 height */
            /* page-break-after: always; */
        }
        .page:last-child {
            /* page-break-after: auto; */
        }
        .table-overlay{
            width: 92%;
            margin-left: 4%;
            padding-top: 300px;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            background-color: yellow;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    @foreach($images as $key => $image)
        <div class="page" style="position: relative;
            width: 100%;
            left: 0;
            background: url({{ $image }}) no-repeat scroll left top;
            background-size: cover;
            top: 0;">
            @if($loop->index == 1)
                <div class="table-overlay">
                    <table>
                        <tr>
                            <th>Company</th>
                            <th>Contact</th>
                            <th>Country</th>
                        </tr>
                        <tr>
                            <td>{{ $name ?? 'Zainab Khan' }}</td>
                            <td>Maria Anders</td>
                            <td>Germany</td>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>Maria Anders</td>
                            <td>Germany</td>
                        </tr>
                        <tr>
                            <td>Centro comercial Moctezuma</td>
                            <td>Francisco Chang</td>
                            <td>Mexico</td>
                        </tr>
                        <tr>
                            <td>Ernst Handel</td>
                            <td>Roland Mendel</td>
                            <td>Austria</td>
                        </tr>
                    </table>
                </div>
            @endif
        </div>
    @endforeach
</body>
</html>