<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }



        tr.alert-success {
            background-color: #abddb6 !important;
        }

        tr.alert-warning {
            background-color: #879451 !important;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
</head>

<body>

    <h2>HTML Table</h2>

    <table id="users-table" class="display" style="width:100%">

    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "/user-data", // 👈 calls your Laravel route
                order: [
                    [0, 'desc']
                ],
                // stripeClasses: [],
                 
                // searching: false,
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'id',
                        title: '#',
                        orderaable: true
                    },
                    {
                        data: 'name',
                        name: 'name',
                        title: 'Name'
                    },
                    {
                        data: 'city',
                        name: 'useDetail.city',
                        title: 'City'
                    },
                    {
                        data: 'use_detail.mobile',
                        name: 'useDetail.mobile',
                        title: 'Mobile'
                    },
                    {
                        data: 'email',
                        name: 'email',
                        title: 'Email'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        title: 'Date'
                    }
                ]
            });
        });
    </script>


</body>

</html>
