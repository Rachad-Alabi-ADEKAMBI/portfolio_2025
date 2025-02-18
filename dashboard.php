<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Appointment Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        :root {
            --primary-color: #14a800;
            --secondary-color: #ffee66;
            --accent-color: #ffee66;
            --text-color: #333;
            --bg-color: #ffffff;
            --hero-text-color: #f0f0f0;
            --freelance-bg-color: #e6f7ff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: var(--freelance-bg-color);
            color: var(--text-color);
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: var(--bg-color);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: var(--primary-color);
            color: var(--hero-text-color);
        }

        tr:nth-child(even) {
            background-color: var(--freelance-bg-color);
        }

        .btn {
            display: inline-block;
            background-color: var(--accent-color);
            color: var(--text-color);
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #e5d55e;
        }

        @media (max-width: 600px) {

            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            tr {
                margin-bottom: 15px;
            }

            td {
                border: none;
                position: relative;
                padding-left: 50%;
            }

            td:before {
                position: absolute;
                top: 6px;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                content: attr(data-label);
                font-weight: bold;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Admin Appointment Dashboard</h1>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Date">16/02</td>
                    <td data-label="Time">4:30 PM</td>
                    <td data-label="Name">John Doe</td>
                    <td data-label="Email">john@example.com</td>
                    <td data-label="Actions"><button onclick="showDetails(0)" class="btn">View Details</button></td>
                </tr>
                <tr>
                    <td data-label="Date">17/02</td>
                    <td data-label="Time">3:30 PM</td>
                    <td data-label="Name">Jane Smith</td>
                    <td data-label="Email">jane@example.com</td>
                    <td data-label="Actions"><button onclick="showDetails(1)" class="btn">View Details</button></td>
                </tr>
                <tr>
                    <td data-label="Date">18/02</td>
                    <td data-label="Time">3:00 PM</td>
                    <td data-label="Name">Bob Johnson</td>
                    <td data-label="Email">bob@example.com</td>
                    <td data-label="Actions"><button onclick="showDetails(2)" class="btn">View Details</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        const appointments = [{
                name: "John Doe",
                email: "john@example.com",
                date: "16/02",
                time: "4:30 PM",
                projectDetails: "Need a new e-commerce website"
            },
            {
                name: "Jane Smith",
                email: "jane@example.com",
                date: "17/02",
                time: "3:30 PM",
                projectDetails: "Looking for a blog redesign"
            },
            {
                name: "Bob Johnson",
                email: "bob@example.com",
                date: "18/02",
                time: "3:00 PM",
                projectDetails: "Require a mobile app development"
            }
        ];

        function showDetails(index) {
            const appointment = appointments[index];
            Swal.fire({
                title: 'Appointment Details',
                html: `
                    <p><strong>Name:</strong> ${appointment.name}</p>
                    <p><strong>Email:</strong> ${appointment.email}</p>
                    <p><strong>Date:</strong> ${appointment.date}</p>
                    <p><strong>Time:</strong> ${appointment.time}</p>
                    <p><strong>Project Details:</strong> ${appointment.projectDetails}</p>
                `,
                confirmButtonColor: '#14a800',
                confirmButtonText: 'Close'
            });
        }
    </script>
</body>

</html>