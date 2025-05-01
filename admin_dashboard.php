<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Burger Hut</title>
    <link rel="stylesheet" href="dash.css">
    <style>
        /* General Body Styling */
        body {
           margin-top: 0;
           margin-top: 0 ;
            font-family: Arial, sans-serif;
            display: flex;
            background-color: #2c3e50;
            color: #ecf0f1;
        }

        .sidebar {
            width: 250px;
            margin: 0;
            background-color: rgb(8, 9, 11);
            color: white;
            height: 100vh;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column; /* Stack items vertically */
            align-items: center; /* Center everything horizontally */
            justify-content: flex-start; /* Align items to the top */
            animation: fadeInSidebar 1.5s ease-in-out; /* Animation for fading the sidebar */
        }

        .admin-profile {
            text-align: center;
            margin-bottom: 30px;
            animation: fadeIn 1.5s ease-in-out;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .temp-logo {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: rgb(199, 192, 182);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            color: white;
            margin-bottom: 15px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .temp-logo:hover {
            transform: scale(1.1); /* Hover effect to enlarge the logo */
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3); /* Enhanced shadow on hover */
        }

        .admin-profile h3 {
            margin: 0;
            font-size: 20px;
            color: white;
        }

      
/* Hover effect for the logo and text */
.logo:hover {
    transform: scale(1.1); /* Slightly enlarge on hover */
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2); /* Add a shadow on hover */
}

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin-top: 20px;
            animation: showLinks 1s ease-in-out;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar ul li a:hover {
            background-color: #34495e;
        }

        /* Animation for showing the sidebar links */
        @keyframes showLinks {
            0% {
                opacity: 0;
                transform: translateX(-20px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }



/* Logo container styling */
.logo {
    text-align: center;
    font-size: 28px;
    font-weight: bold;
    color: #f1c40f; /* Bright yellow for emphasis */
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: fadeIn 1.5s ease-in-out; /* Animation for fade-in */
    transition: transform 0.3s ease; /* Smooth hover effect */
}

/* Primary logo text styling */
.logo-primary {
    color: #f39c12; /* A darker yellow for the text */
    font-size: 24px;
    margin-left: 10px; /* Add a little space between the emoji and text */
}

/* Animation for the logo text */
@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(-20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Hover effect for the logo */
.logo:hover {
    transform: scale(1.1); /* Slightly enlarge the logo */
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2); /* Add a subtle shadow */
}

/* Floating effect for the burger emoji */
@keyframes float {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
    100% {
        transform: translateY(0);
    }
}

/* Apply floating effect to the burger emoji */
.logo .emoji {
    animation: float 2s ease-in-out infinite;
}

/* Optional: Add hover effect on the burger emoji too */
.logo span:hover {
    transform: scale(1.2); /* Enlarge the emoji when hovered */
}



/* Basic styling for the theme toggle button */
.theme-toggle-btn {
    background-color: #000; /* Black background for dark mode */
    color: #ecf0f1; /* Light color for dark mode */
    border: 2px solid #ecf0f1;
    padding: 10px 15px;
    font-size: 24px;
    cursor: pointer;
    border-radius: 50%; /* Circular shape for a more modern look */
    transition: background-color 0.3s, color 0.3s, transform 0.3s; /* Smooth transitions */
    margin-top: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Hover effect for the theme toggle button */
.theme-toggle-btn:hover {
    background-color: #f39c12; /* Highlight color for hover */
    color: #fff; /* Change the text color to white when hovered */
    transform: scale(1.1); /* Slightly enlarge the button on hover */
}

/* Light Mode Button Styling */
.theme-toggle-btn.light-mode {
    background-color: #fff; /* White background in light mode */
    color: #000; /* Dark text color for light mode */
    border-color: #000; /* Darker border for light mode */
}

/* Body and Sidebar Styling for Light Mode */
body.light-mode {
    background-color: #ecf0f1; /* Light background for light mode */
    color: #2c3e50; /* Dark text color for light mode */
    transition: background-color 0.5s ease, color 0.5s ease; /* Smooth transition */
}

/* Sidebar styling for light mode */
.sidebar.light-mode {
    background-color: lightslategray; /* Lighter color for sidebar in light mode */
    color: #2c3e50; /* Dark text color for sidebar in light mode */
    transition: background-color 0.5s ease; /* Smooth transition */
}

/* Smooth fade-in effect for the button */
@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: scale(0.8);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
}

/* Apply the fade-in effect when button is shown */
.theme-toggle-btn {
    animation: fadeIn 1s ease-in-out;
}



    </style>
</head>
<body>
    <?php include 'Db_connect.php'; ?>
    
    <div class="sidebar">
        <div class="admin-profile">
            <div class="temp-logo">&#128104;</div> <!-- Man Emoji -->
            <h3>Omkar</h3>
        </div>
        <div class="logo logo-primary">
    <span class="emoji">🍔</span> Burger Hut Admin
</div>


        <ul>
            <li><a href="admin_welcome.php">Dashboard</a></li>
            <li><a href="manage_menu.php">Manage Menu</a></li>
            <li><a href="manage_order.php">Orders</a></li>
            <li><a href="user_account.php">Users Account</a></li>
            <li><a href="user_messages.php">Messages</a></li>
            <li><a href="logout.php">Logout</a></li>
            <!-- <li><a href="settings.php">Settings</a></li> -->
        </ul>
        <button class="theme-toggle-btn" onclick="toggleTheme()">Theme</button>
    </div>

    <script>
function toggleTheme() {
    // Toggle between light and dark mode
    document.body.classList.toggle('light-mode');
    document.querySelector('.sidebar').classList.toggle('light-mode');
    
    const toggleButton = document.querySelector('.theme-toggle-btn');
    
    // Change the button's icon based on the theme
    if (document.body.classList.contains('light-mode')) {
        toggleButton.innerHTML = '&#9728;'; // Sun Icon for Light Mode
    } else {
        toggleButton.innerHTML = '&#127769;'; // Moon Icon for Dark Mode
    }
}


    </script>
</body>
</html>
