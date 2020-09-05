<!DOCTYPE html>
<html lang="us">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        
        body {
            color: #67AD65;
        }

        #logo {
            text-align: center;
        }

        img {
            width: 157px;
            margin-top: 184px;
        }

        #loginfo {
            text-align: center;

        }

        .usr {
            width: 213px;
            display: inline-block;
            text-align: left;
            margin: 20px auto;
        }

        a {
            margin-top: 10px;
            margin-bottom: 20px;
            display: inline-block;
            width: 213px;
            font-size: 12px;
            text-align: right;
            text-decoration: none;
            color: #797979;

        }

        input {
            width: 213px;
            font-size: 16px;
            box-sizing: border-box;
            border: none;
            border-bottom: 2px solid #67AD65;
        }

        textarea:focus,
        input:focus {
            outline: none;
        }

        button {
            width: 213px;
            border-radius: 3px;
            border-style: none;
            text-align: center;
            color: #67AD65;
            padding: 8px;
        }

        @media (min-width: 450px) {

            html,
            body {
                margin: 0;
                width: 100%;
                height: 100%;
            }

            #logo {
                float: left;
                width: 50%;
                background: rgba(102, 99, 99, 0.86);
                height: 100%;
            }

            img {
                width: 250px;
                margin-top: 40%;
            }

            #loginfo {
                width: 50%;
                float: left;
                height: 100%;
            }

            form {
                margin-top: 40%;
            }
        }

    </style>
    <title>Prepr</title>
</head>

<body>
    <div id="logo">
        <img src=./img/Prepr-Logo.png alt="prepr_logo"></div>
    <div id="loginfo">
        <form method="post">
            <label class="usr">USERNAME</label> <br />
            <input type="email"><br />
            <label class="usr">PASSWORD</label><br />
            <input type="password"><br />
            <a href="#">FORGET PASSWORD?</a><br />
            <button>SIGN IN</button>
        </form>
    </div>
</body>

</html>
