<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  />
    <title>Document</title>
</head>
<body>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Protest+Strike&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: 'poppins',sans-serif;
            overflow: hidden;
        }
        .table{
            width: 100%;
        }
        .tableheader{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: rgb(240, 240, 240);
        }
        button{
            border: none;
            outline: none;
            border-radius: 6px;
            cursor: pointer;
            padding: 10px;
            color: #ffff;
        }
        td button:nth-child(2){
            background-color: #f7bf05;
        }
        td button:nth-child(1){
            background-color: #0298cf;
        }
        td button:nth-child(3){
            background-color: #f80000;
        }
        .addbtn{
            padding: 10px 20px;
            color: #fff;
            background-color: #0298cf;
        }
        input{
            padding: 10px 20px;
            margin: 0 10px;
            outline: none;
            border: 1px solid #0298cf;
            border-radius: 6px;
            color: black;
        }
        .table_section{
            height: 500px;
            overflow: auto;
        }
        table{
            width: 100%;
            table-layout: fixed;
            min-width: 1000px;
            border-collapse: collapse;
        }
        thead th{
            position: sticky;
            top: 0;
            background-color: #f6f9fc;
            color: #8493a5;
            font-size: 15px;
        }
        th,td{
            border-bottom: 2px solid #dddddd;
            padding: 10px 20px;
            word-break: break-all;
            text-align: center;
        }
        tr:hover td{
            color: #0298cf;
            cursor: pointer;
            background-color: #f6f9fc;
        }
        ::-webkit-scrollbar{
            height: 5px;
            width: 5px;
        }
        ::-webkit-scrollbar-track{
            box-shadow: inset 0 0 6px rgba(0,0,0,0.3);

        }
        ::-webkit-scrollbar-thumb{
            box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        }


    </style>
    <div class="table">
        <div class="tableheader">
            <h2>Applicant list</h2>
            <div>
                <input type="search" placeholder="search student">
                <button class="addbtn">+ Add New</button>
            </div>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Reg.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database ="view_student";
                    
                    
                    ?>
                    
                    <tr>
                        <td>1</td>
                        <td>21CMS20</td>
                        <td>Sriram</td>
                        <td>abc@gmail.com</td>
                        <td>
                            <button><i class="fa-solid fa-eye"></i></button>
                            <button><i class="fa-regular fa-pen-to-square"></i></button>
                            <button><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>21CMS20</td>
                        <td>Sriram</td>
                        <td>abc@gmail.com</td>
                        <td>
                            <button><i class="fa-solid fa-eye"></i></button>
                            <button><i class="fa-regular fa-pen-to-square"></i></button>
                            <button><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>21CMS20</td>
                        <td>Sriram</td>
                        <td>abc@gmail.com</td>
                        <td>
                            <button><i class="fa-solid fa-eye"></i></button>
                            <button><i class="fa-regular fa-pen-to-square"></i></button>
                            <button><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>21CMS20</td>
                        <td>Sriram</td>
                        <td>abc@gmail.com</td>
                        <td>
                            <button><i class="fa-solid fa-eye"></i></button>
                            <button><i class="fa-regular fa-pen-to-square"></i></button>
                            <button><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>21CMS20</td>
                        <td>Sriram</td>
                        <td>abc@gmail.com</td>
                        <td>
                            <button><i class="fa-solid fa-eye"></i></button>
                            <button><i class="fa-regular fa-pen-to-square"></i></button>
                            <button><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>21CMS20</td>
                        <td>Sriram</td>
                        <td>abc@gmail.com</td>
                        <td>
                            <button><i class="fa-solid fa-eye"></i></button>
                            <button><i class="fa-regular fa-pen-to-square"></i></button>
                            <button><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>