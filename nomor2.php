<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="container">
    <table x-data="{ users: [] }" x-init="fetch('https://jsonplaceholder.typicode.com/users')
              .then(response => response.json())
              .then(data => users = data)" class="table is-bordered bg-primary is-centered mt-6 mx-auto">
        <thead>
            <tr>
                <th class="has-background-link-light has-text-link">ID</th>
                <th class="has-background-link-light has-text-link">Name</th>
                <th class="has-background-link-light has-text-link">Username</th>
                <th class="has-background-link-light has-text-link">Email</th>
                <th class="has-background-link-light has-text-link">Street</th>
                <th class="has-background-link-light has-text-link">Suite</th>
                <th class="has-background-link-light has-text-link">City</th>
                <th class="has-background-link-light has-text-link">Zipcode</th>
                <th class="has-background-link-light has-text-link">Lat</th>
                <th class="has-background-link-light has-text-link">Lang</th>
                <th class="has-background-link-light has-text-link">Phone</th>
                <th class="has-background-link-light has-text-link">Website</th>
                <th class="has-background-link-light has-text-link">Company Name</th>
                <th class="has-background-link-light has-text-link">Company CatchPhrase</th>
                <th class="has-background-link-light has-text-link">Company Bs</th>
            </tr>
        </thead>
        <tbody>
            <template x-for="user in users" :key="user.id">
                <tr>
                    <td x-text="user.id" class="has-text-link-dark"></td>
                    <td x-text="user.name"></td>
                    <td x-text="user.username"></td>
                    <td x-text="user.email"></td>
                    <td x-text="user.address.street"></td>
                    <td x-text="user.address.suite"></td>
                    <td x-text="user.address.city"></td>
                    <td x-text="user.address.zipcode"></td>
                    <td x-text="user.address.geo.lat"></td>
                    <td x-text="user.address.geo.lng"></td>
                    <td x-text="user.phone"></td>
                    <td x-text="user.website"></td>
                    <td x-text="user.company.name"></td>
                    <td x-text="user.company.catchPhrase"></td>
                    <td x-text="user.company.bs"></td>
                </tr>
            </template>
        </tbody>
    </table>
</body>

</html>