<?php 
// Assuming you have a database connection established already
include 'admin_dashboard.php';
include 'Db_connect.php';  // include your database connection file

// Check if database connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Fetch recent activities from the database
$sql = "SELECT * FROM recent_activities ORDER BY timestamp DESC LIMIT 5"; // Show the last 5 activities
$result = $conn->query($sql);

// Check if there are any activities
if ($result->num_rows > 0) {
    $activities = [];
    while($row = $result->fetch_assoc()) {
        $activities[] = $row;
    }
} else {
    echo "No activities found in the database.";
    $activities = []; // No activities found
}
?>
<style>
    /* General styling for the page */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f9f9f9;
    }

    .main-content {
        padding: 30px;
        margin-left: 250px; /* Adjust for sidebar */
        transition: margin-left 0.3s ease-in-out; /* Smooth transition for sidebar */
    }

    h1 {
        font-size: 32px;
        color: #2c3e50;
        margin-bottom: 20px;
        animation: fadeIn 1s ease-in-out;
    }

    h2 {
        font-size: 28px;
        color: #2c3e50;
        margin-bottom: 20px;
        animation: fadeIn 1s ease-in-out;
    }

    /* Styling for the cards */
    .cards {
        display: flex;
        gap: 20px;
        margin-bottom: 40px;
    }

    .card {
        background-color: #34495e;
        color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        flex: 1;
        text-align: center;
        font-size: 20px;
        transition: transform 0.3s ease-in-out, background-color 0.3s;
        animation: cardAnimation 1s ease-in-out;
    }

    .card:hover {
        transform: translateY(-10px);
        background-color: #2c3e50; /* Darker shade on hover */
    }

    .card-status {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .status-bar {
        width: 100px;
        height: 8px;
        background-color: #2ecc71; /* Green for active */
        border-radius: 5px;
        margin-top: 10px;
        transition: background-color 0.3s ease;
    }

    .card-status .status-bar.pending {
        background-color: #e67e22; /* Orange for pending */
    }

    .card-status .status-bar.completed {
        background-color: #3498db; /* Blue for completed */
    }

    /* Recent Activities Section */
    .recent-activities {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .recent-activities ul {
        list-style-type: none;
        padding: 0;
    }

    .recent-activities ul li {
        padding: 10px;
        border-bottom: 1px solid #ccc;
        font-size: 16px;
        color: #34495e;
        transition: background-color 0.3s;
    }

    .recent-activities ul li:last-child {
        border-bottom: none;
    }

    .recent-activities ul li:hover {
        background-color: #ecf0f1;
        cursor: pointer;
    }

    /* Card animation */
    @keyframes cardAnimation {
        0% {
            opacity: 0;
            transform: scale(0.9);
        }
        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    /* Fade-in animation */
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

    /* Responsive Design */
    @media (max-width: 768px) {
        .main-content {
            margin-left: 0;
        }

        .cards {
            flex-direction: column;
        }

        .card {
            width: 100%;
        }
    }

</style>

<div class="main-content">
    <h1>Welcome, Omkar!</h1>
    <div class="cards">
        <div class="card">
            <div>Total Orders: 150</div>
            <div class="card-status">
                <div class="status-bar completed"></div>
            </div>
        </div>
        <div class="card">
            <div>Total Users: 500</div>
            <div class="card-status">
                <div class="status-bar pending"></div>
            </div>
        </div>
        <div class="card">
            <div>Pending Orders: 10</div>
            <div class="card-status">
                <div class="status-bar pending"></div>
            </div>
        </div>
    </div>

    <div class="recent-activities">
        <h2>Recent Activities</h2>
        <ul>
            <?php if (!empty($activities)): ?>
                <?php foreach ($activities as $activity): ?>
                    <li>
                        <strong><?php echo $activity['activity_type']; ?>:</strong>
                        <?php echo $activity['description']; ?> 
                        <span style="font-size: 12px; color: #ccc;">(<?php echo date('Y-m-d H:i:s', strtotime($activity['timestamp'])); ?>)</span>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>No recent activities found.</li>
            <?php endif; ?>
        </ul>
    </div>
</div>

<script>
    // JavaScript to handle activity clicks (example for future extension)
    const activities = document.querySelectorAll('.recent-activities ul li');
    activities.forEach(activity => {
        activity.addEventListener('click', () => {
            alert('More details for activity: ' + activity.textContent);
        });
    });
</script>