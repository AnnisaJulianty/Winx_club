<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event - BDC</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .event-card-new {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .event-card-new:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        .event-card-new img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        .event-info-new {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .event-info-new h3 {
            font-size: 1.5rem;
            color: var(--pastel-purple);
            margin-bottom: 10px;
        }
        .event-info-new .date {
            font-size: 0.9rem;
            color: #777;
            margin-bottom: 15px;
        }
        .event-info-new p {
            flex-grow: 1;
            margin-bottom: 20px;
        }
        .join-btn-new {
            display: inline-block;
            background-color: var(--pastel-purple);
            color: var(--white);
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s;
            align-self: flex-start;
        }
        .join-btn-new:hover {
            background-color: #b39ddb;
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<main>
    <section class="page-section" style="padding-top: 100px;">
        <div class="container">
            <h2 class="reveal">Event</h2>
            <div class="gallery-grid" style="margin-top: 3rem;">

                <div class="reveal">
                    <div class="event-card-new">
                        <img src="img/event1.jpeg" alt="Workshop" onerror="this.src='https://via.placeholder.com/400x250?text=Event+Image'">
                        <div class="event-info-new">
                            <h3>Bakuhatsu Event</h3>
                            <p class="date">📅 30 Desember 2026</p>
                            <a href="pendaftaran.php" class="join-btn-new">Join Now</a>
                        </div>
                    </div>
                </div>

                <div class="reveal">
                    <div class="event-card-new">
                        <img src="img/event2.jpeg" alt="Showcase" onerror="this.src='https://via.placeholder.com/400x250?text=Event+Image'">
                        <div class="event-info-new">
                            <h3>Event akhir tahun di Depopelita</h3>
                            <p class="date">📅 15 des 2024</p>
                            <a href="pendaftaran.php" class="join-btn-new">Join Now</a> 
                        </div>
                    </div>
                </div>
    </section>
</main>

<footer style="padding: 2rem 0; text-align: center; background-color: var(--pastel-purple); color: var(--white); margin-top: 4rem;">
    <p>&copy; 2026 Beyond Dance Crew</p>
</footer>

<script src="script.js"></script>

</body>
</html>
