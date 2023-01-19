<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <button onclick="location.href='test.php'" type="submit"
        class="mt-6 text-white bg-primary-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-full text-md px-10 py-2.5 sm:text-center "
        style="margin-left: 0rem; background-color:#ADDDD0; height: 3rem; width: 20rem;">Add Tenants</button>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        First Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Last Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Type of Tenant
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Address
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Mobile Number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * from `users`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $fname = $row['fname'];
                        $lname = $row['lname'];
                        $email = $row['email'];
                        $status = $row['status'];
                        $type = $row['type'];
                        $address = $row['address'];
                        $mobile = $row['mobile'];
                        echo '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">
                       ' . $id . '
                    </td>
                    <td class="px-6 py-4">
                    ' . $fname . '
                    </td>
                    <td class="px-6 py-4">
                    ' . $lname . '
                    </td>
                    <td class="px-6 py-4">
                        ' . $email . '
                    </td>
                    <td class="px-6 py-4">
                        ' . $status . '
                    </td>
                    <td class="px-6 py-4">
                    ' . $type . '
                    </td>
                    <td class="px-6 py-4">
                    ' . $address . '
                    </td>
                    <td class="px-6 py-4">
                    ' . $mobile . '
                    </td>
                    <td class="px-6 py-4">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"><a href="update.php?updateid=' . $id . '">Update</a></button>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"><a href="delete.php?deleteid=' . $id . '">Delete</a></button>
                    </td>
                </tr>';
                    }
                    ;

                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>