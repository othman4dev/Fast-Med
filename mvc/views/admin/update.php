<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .input-field {
            display: block;
            margin-top: 13px;
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .input-field:focus {
            border-color: #6e81e2;
            outline: none;
        }

        .label {
            font-weight: bold;
        }

        .submit-btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #6e81e2;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-btn:hover {
            background-color: #5266c9;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>update job</h2>
        <form action="update" method="POST" id="form">
            <label for="username" class="label">user name</label>
            <input type="text" name="user_name" id="user_name" class="input-field" value="<?php echo  $result[0]['username'] ?>">
            <input type="hidden" name="id" value="<?php echo $result[0]['user_id']; ?>">

            <label for="email" class="label">email</label>
            <input type="text" name="email" id="" class="input-field" value="<?php echo  $result[0]['email'] ?>">

            <label for="role" class="label">role</label>
            <select name="role" id="status" class="input-field" value="<?php echo  $result[0]['role'] ?>">


                <option value="admin">admin</option>
                <option value="patient_en_lign">patient_en_ling</option>
                <option value="patient_en_magasin">patient_en_magasin</option>


            </select>

            <button type="submit" name="update" class="submit-btn">submit</button>
        </form>
    </div>
</body>

</html>