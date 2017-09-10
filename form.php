<html>
<head>
    <link rel="stylesheet" href="form.css" type="text/css">
    <style>
        body{
            margin: 0px;
            padding: 0px;
        }
        #main{
            height: auto;
            width: auto;
        }
        #myform{
            height: auto;
            padding-bottom: 30px;
            width: 400px;
            position: absolute;
            top: 200px;
            left: 50%;
            margin-left: -220px;
            background-color: white;
            box-shadow: 0px 0px 4px 0px;
        }
        #head{
            align-content: center;
            font-size: 30px;
            font-family: sans-serif;
            margin-left: 0px;
            margin-top: 0px;
            background-color:  #33ccff;
            text-align: center;
            height: 35px;
            padding: 15px;
            color: white;
        }
        #fname,#lname,#emailid,#contactno,#age{
            align-content: center;
            height: 50px;
            width: 350px;
            margin-left: 25px;
            margin-top: 10px;
            border: solid 1px;
            border-top: 0px;
            border-left:0px;
            border-right: 0px;
            outline: none;
            font-size: 17px;
            padding-top: 10px;
        }
        #submit{
             align-content: center;
            height: 40px;
            width: 150px;
            margin-left: 120px;
            margin-top: 30px;
            background-color:  #33ccff;
            font-size: 20px;
            cursor: pointer;
            color: white;
        }
        #fname:focus,#lname:focus,#emailid:focus,#contactno:focus,#age:focus{
            border-bottom-color: #33ccff;
        }

    </style>

    <script>
        function data()
        {
            var fname=document.myform.fname.value;
            var lname=document.myform.lname.value;
            var email=document.myform.emailid.value;
            var contactno=document.myform.contactno.value;
            var age=document.myform.age.value;

            location.href="http://localhost:8000?fname="+fname+"&lname="+lname+"&email="+email+"&contactno="+contactno+"&age="+age;
        }

    </script>
</head>
<body>

    <div id="main">
    <form id="myform" name="myform" method="post">

                <div id="head">Registration Form</div>

                <input type="text" id="fname" placeholder="First Name" name="fname" maxlength="50">

                <input type="text" id="lname" placeholder="Last Name" name="lname" maxlength="50">

                <input type="email" id="emailid" placeholder="Email Id" name="emailid">

                <input type="text" id="contactno" placeholder="Contact Number" name="contactno" maxlength="10">

                <input type="text" id="age" placeholder="Age" name="age">

                <input type="button" id="submit" value="Submit" name="submit" onclick="data()">

    </form>
    </div>

</body>
</html>
